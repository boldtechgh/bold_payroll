@unless(count($department) ==0)

@foreach($department as $depart)
<h2>{{$depart['deparment']}}</h2>
@endforeach
@else
<p>No Departments</p>
@endunless
