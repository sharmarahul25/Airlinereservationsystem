<form action="" method="post">
<table>
<tr>
<td>Enter PNR No. : </td><td> <input type="text" name="pnr" /></td>
</tr>
<tr>
<tr><td><input type="submit" name="submit" value="check"/>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$flag=0;
     $pnr=$_POST['pnr'];
     $connect=mysql_connect("localhost","root","");
     mysql_select_db("airlines");
     $check=mysql_query("SELECT * from confirm WHERE pnr='$pnr'");
	 $no=mysql_num_rows($check);
	 echo "<table id='customers'>
<tr>
  <th>ticketid</th>
  <th>PNR</th>
  <th>seatno</th>
  <th>flightno</th>
  <th>date</th>
  <th>name</th>
</tr>";
$k=0;
$f=0;
while($row=mysql_fetch_assoc($check))
{
if($k==0)
{
echo "<tr>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['seatno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['name']."</td>
</tr>";
$k=1;
}
else if($k==1){
echo "<tr class='alt'>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['seatno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['name']."</td>
</tr>";
$k=0;
}
$f=1;
}

	     $check=mysql_query("SELECT * from waiting WHERE pnr='$pnr'");
		  $no=mysql_num_rows($check);
		 if($no==0)
		 {
		 echo "</table>";
		 }
		 else
		 {
		     while($row=mysql_fetch_assoc($check))
{
if($k==0)
{
echo "<tr>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['waitno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['name']."</td>
</tr>";
$k=1;
}
else if($k==1){
echo "<tr class='alt'>
<td>".$row['ticketid']."</td>
<td>".$row['pnr']."</td>
<td>".$row['waitno']."</td>
<td>".$row['flightno']."</td>
<td>".$row['date']."</td>
<td>".$row['name']."</td>
</tr>";
$k=0;
}
$f=1;
}
			echo "</table>";

}
if($f!=1)
echo "there is no PNR entry!!!!!!";
}


?>
