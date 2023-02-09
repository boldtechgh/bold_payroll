@if(session()->has('message'))
   <div class="  bg-success text-white ">
    <p>
        {{session('message')}}
    </p>
   </div>
@endif