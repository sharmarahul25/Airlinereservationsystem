<form action="" method="post">
<table>
<tr>
<td>Flight No. : </td><td> <input type="text" name="flightno" /></td>
</tr>
<tr>
<td>Date of reservation: </td><td><input type="text" style="width:60px;" name="date"/>(YYYY-MM-DD)</td></tr>
<tr><td><input type="submit" name="submit" value="next"/></tr></td>
</table>
</form>
<?php
if(isset($_POST['submit'])){
$flightno=$_POST['flightno'];
$date=$_POST['date'];
$connect=mysql_connect("localhost","root","");
     mysql_select_db("airlines");
     $check=mysql_query("SELECT * from confirm WHERE flightno='$flightno' AND date='$date'");
	 $flightdet=mysql_query("SELECT maxseats,source,destination,fare from flightdetails WHERE flightno='$flightno' ");
	 $maxseats=mysql_query("SELECT maxseats from flightdetails WHERE flightno='$flightno' ");
	  
	 $no=mysql_num_rows($check);
	 $r=0;
	if($no>=$maxseats)
	{
	    $check=mysql_query("SELECT * from waiting WHERE flightno='$flightno' AND date='$date'");
		$no=mysql_num_rows($check);
		$r=1;
	}
echo "<table id='customers'>
<tr>
  <th>Flightno</th>
  <th>Date</th>
  <th>Available Seats/Waiting</th>
  <th>Source</th>
  <th>Destination</th>
  <th>Fare</th>
</tr>";
$k=0;
$f=0;
$row=mysql_fetch_assoc($check);
$row2=mysql_fetch_assoc($flightdet);
if($r==1)
$x="W/$no";
else
$x=$row2['maxseats']-$no;
if($row['flightno']==NULL)
$flight=$flightno;
else
$flight=$row['flightno'];
if($row['date']==NULL)
$dat=$date;
else
$dat=$row['date'];
if($k==0)
{
echo "<tr>
<td>".$flight."</td>
<td>".$dat."</td>
<td>".$x."</td>
<td>".$row2['source']."</td>
<td>".$row2['destination']."</td>
<td>".$row2['fare']."</td>
</tr>";
}
echo "</table>";
}
?>