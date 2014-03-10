<?php
//session_start();
if(isset($_SESSION['username']))
{
    $name=$_SESSION['username'];
	  $userid=$_SESSION['userid'];
    $connect=mysql_connect("localhost","root","");
     mysql_select_db("airlines");
     $check=mysql_query("SELECT * from account WHERE userid='$userid'");



/////////////////////////////////////////////////////////////////////////////////////////////

     $check=mysql_query("SELECT * from confirm WHERE userid='$userid'");
	    $check2=mysql_query("SELECT * from waiting WHERE userid='$userid'");
}
?>
<form action="" method="POST">
<?php
if(isset($_SESSION['username']))
{
echo "<table id='customers'>
<tr>
  
  <th>name</th>
  <th>ticketid</th>
  <th>pnr</th>
  <th>seatno</th>
  <th>Flightno</th>
  <th>Date</th>
  <th>Fare</th>
<th>Cancel</th>
</tr>";
$k=0;
$i=0;
while($row=mysql_fetch_assoc($check)){
$i++;
$name='name'.$i;
if($k==0)
{
echo "<tr>


<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['seatno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
<td><input type='checkbox' name='$name' value='cancel' /></td>
</tr>";

$k=1;
}
else if($k==1){
echo "<tr class='alt'>

<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['seatno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
<td><input type='checkbox' name='$name' value='cancel' /></td>
</tr>";
$k=0;
}
$arr[$i]=$row['ticketid'];
}
while($row=mysql_fetch_assoc($check2)){

if($k==0)
{
echo "<tr>
<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['waitno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
<td><input type='checkbox' name='$name' value='cancel' /></td>
</tr>";
$k=1;
}
else if($k==1){
echo "<tr class='alt'>

<td>".$row['name']."</td>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['waitno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['fare']."</td>
<td><input type='checkbox' name='$name' value='cancel' /></td>
</tr>";
$k=0;
}
$arr[$i]=$row['ticketid'];
}
echo "</table>";
echo '<input type="submit" value="cancel selected" name="submit"></form>';


?>
<?php
if(isset($_POST['submit']))
{
   echo '<h3 style="color:red;">your selected tickets has been cancelled</h3>';
for($j=1;$j<=$i;$j++)
 {if(isset($_POST['name'.$j])){
 if($_POST['name'.$j]=='cancel'){
 mysql_query("DELETE FROM `airlines`.`confirm` WHERE `confirm`.`ticketid` = '$arr[$j]' ");
echo "TICKET ID: $arr[$j]<br/>";}
}

}
}
}
else
echo "----------PLEASE LOGIN first for cancellation------------";

?>
