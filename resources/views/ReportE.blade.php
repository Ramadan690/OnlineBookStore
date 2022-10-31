

<style type="text/css">
	table,tr,th,td{
		border:1px black solid
	}
</style>



<CENTER><h2> <u><b>EVENTS REPORT</b></u></h2></CENTER> 


<h4>Total Events : <b>{{$member}}</b><br></h4> 


<span style="float:right">Date to print : <b><?php      date_default_timezone_set("Asia/Kuala_Lumpur");echo date('d-m-Y H:i:s'); //Returns IST?></b></span>
<button onclick="window.print()">Print this page</button>
<hr>

<table style="width:100%;">
        <thead>
            <tr>
                <th>Reference</th>
                <th>Title</th>
                <th>About</th>
                <th>date</th>
                <th>duration</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
@foreach ($users as $user)
<tr>
<td>{{ $user->Reference }}</td>
<td>{{ $user->E_title }}</td>
<td>{{ $user->about }}</td>
<td>{{ $user->date }}</td>
<td>{{ $user->duration }} hours</td>
<td>{{ $user->Location }}</td>

</tr>
@endforeach
        </tbody>
     
    </table>



