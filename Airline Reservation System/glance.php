<table id='customers'>
<caption><b>List of all flights running in India</b></caption>
<tr>
  <th>Flight no.</th>
  <th>Source</th>
  <th>Destination</th>
  <th>max.seats</th>
  <th>Departure</th>
  <th>Arrival</th>
  <th>Fare</th>
</tr>
 <?php
 $connect=mysql_connect("localhost","root","");
            mysql_select_db("airlines");
            $check=mysql_query("SELECT * FROM flightdetails");
			$k=0;
			while($row=mysql_fetch_assoc($check))
		{
		if($k==0){
        echo "<tr>
<td>".$row['flightno']."</td>
<td>".$row['source']."</td>
<td>".$row['destination']."</td>
<td>".$row['maxseats']."</td>
<td>".$row['departure']."</td>
<td>".$row['arrival']."</td>
<td>".$row['fare']."</td>
</tr>";
$k=1;
}
else if($k==1){
echo "<tr class='alt'>
<td>".$row['flightno']."</td>
<td>".$row['source']."</td>
<td>".$row['destination']."</td>
<td>".$row['maxseats']."</td>
<td>".$row['departure']."</td>
<td>".$row['arrival']."</td>
<td>".$row['fare']."</td>
</tr>";
$k=0;
}

		}
?>
</table>