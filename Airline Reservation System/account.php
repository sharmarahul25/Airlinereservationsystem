<?php

if(isset($_SESSION['username']))
{
    $name=$_SESSION['username'];
	  $userid=$_SESSION['userid'];
    $connect=mysql_connect("localhost","root","");
     mysql_select_db("airlines");
     $check=mysql_query("SELECT * from account WHERE userid='$userid'");
echo "<table id='customers'>
<tr>
  <th>Userid</th>
  <th>Username</th>
  <th>Balance</th>
</tr>";

$k=0;
$row=mysql_fetch_assoc($check);
echo "<tr>
<td>".$row['userid']."</td>
<td>".$name."</td>
<td>".$row['balance']."</td>
</tr>";
echo "</table>";


/////////////////////////////////////////////////////////////////////////////////////////////

     $check=mysql_query("SELECT * from confirm WHERE userid='$userid'");
	    $check2=mysql_query("SELECT * from waiting WHERE userid='$userid'");
echo "<table id='customers'>
<tr>
  <th>userid</th>'
  <th>name</th>
  <th>ticketid</th>
  <th>pnr</th>
  <th>seatno</th>
  <th>Flightno</th>
  <th>Date</th>
  <th>Fare</th>
</tr>";
$k=0;
while($row=mysql_fetch_assoc($check)){
if($k==0)
{
echo "<tr>
<td>".$row['userid']."</td>
<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['seatno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
</tr>";
$k=1;
}
else if($k==1){
echo "<tr class='alt'>
<td>".$row['userid']."</td>
<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['seatno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
</tr>";
$k=0;
}
}
while($row=mysql_fetch_assoc($check2)){
if($k==0)
{
echo "<tr>
<td>".$row['userid']."</td>
<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['waitno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
</tr>";
$k=1;
}
else if($k==1){
echo "<tr class='alt'>
<td>".$row['userid']."</td>
<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['waitno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
</tr>";
$k=0;
}
}
echo "</table>";
}

else
echo "----------------PLEASE LOGIN---------------------";

?>