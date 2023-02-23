<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function login(){
            return view('users.login');           
    }

    // Authenticate User 
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message','Login Successful!');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
    public function create(){
        return view('users.register');
    }
    public function index(){
        return view('users.index',['users' => User::latest()->get()]);
    }

    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'contact' => 'required',
            'username' => 'required',
            'email' => ['required','email',Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6',
            'user_type' => 'required',
        ]);

        //Hash pass
        $formFields['password'] = bcrypt($formFields['password']);

        //create user 
        $user = User::create($formFields);
        //login
        auth()->login($user);

        return redirect('/')->with('message','User Created and logged in  Successfully');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message','Logout Success!');
    }

      // Show single user
      public function edit(User $user){
        return view('users.edit',['user' => $user]);
    }

      // Update user data
      public function update(Request $request, $id){
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'contact' => 'required',
            'username' => 'required',
            'email' => ['required','email'],
            'password' => 'required|confirmed|min:6',
            'user_type' => 'required',
        ]);

        // if($request->hasFile('employee_profile')){
        //     $formFields['employee_profile'] = $request->file('employee_profile')->store('employee_profiles', 'public');
        // }

        $user = User::find($id);

        // Getting values from the blade template form
        $user->username =  $request->get('username');
        $user->name =  $request->get('name');
        $user->email =  $request->get('email');
        $user->contact =  $request->get('email');
        $user->user_type =  $request->get('user_type');
        $user->user_type =  $request->get('password');

        $user->update($formFields);
        

        return back()->with('message','User Updated Sucessfully!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
 
        return redirect('/users')->with('message', 'User removed.');
    } 

}
