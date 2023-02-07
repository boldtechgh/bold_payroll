@unless(count($attendance) ==0)

@foreach($attendance as $attendanc)
<h2>{{$attendanc['attendance']}}</h2>
@endforeach
@else
<p>No Attendance</p>
@endunless
