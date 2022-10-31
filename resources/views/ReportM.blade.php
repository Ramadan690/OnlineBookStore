

<style type="text/css">
	table,tr,th,td{
		border:1px black solid
	}
</style>



<CENTER><h2> <u><b>MEMBER REPORT</b></u></h2></CENTER> 


<h4>Total Members : <b>{{$member}}</b><br></h4> 


<span style="float:right">Date to print : <b><?php      date_default_timezone_set("Asia/Kuala_Lumpur");echo date('d-m-Y H:i:s'); //Returns IST?></b></span>
<button onclick="window.print()">Print this page</button>
<hr>

<table style="width:100%;">
        <thead>
            <tr>
                <th>Matric</th>
                <th>Name</th>
                <th>Email</th>
                <th>Passport</th>
                <th>Programme</th>
                <th>Graduation Year</th>
                <th>Privilege</th>
            </tr>
        </thead>
        <tbody>
@foreach ($users as $user)
<tr>
<td>{{ $user->Matric }}</td>
<td>{{ $user->Name }}</td>
<td>{{ $user->Email }}</td>
<td>{{ $user->Passport }}</td>
<td>{{ $user->Programme }}</td>
<td>{{ $user->GraduationYear }}</td>
<td>{{ $user->Role }}</td>

</tr>
@endforeach
        </tbody>
     
    </table>



