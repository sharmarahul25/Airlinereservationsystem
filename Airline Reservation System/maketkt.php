<?php
if(isset($_GET['flight'])){
$flight=$_GET['flight'];
$source=$_GET['source'];
$dest=$_GET['dest'];
$date=$_GET['date'];
echo "<h3>you are booking your ticket from $source to $dest of airline--$flight Dated:$date</h3>";
}
?>
<form action="?page=booktkt&source=<?php echo $source ?>&destination=<?php echo $dest ?>&flightno=<?php echo $flight ?>&date=<?php echo $date ?>" method="post">
<table style="padding:40px;margin-bottom:20px;">
<tr>
<td>
<h3>no. of tickets: </h3></td><td><input type="text" name="no" style="width:25px;"/>
</td>
<tr>
<td>
<h3>serial no.</h3>
</td>
<td>
<h3>name:</h3>
</td>
<td>
<h3>sex: </h3>
</td>
<td>
<h3>age: </h3>
</td>
</tr>
<tr>
<td>
<p>1.</p>
</td>
<td>
<input type="text" name="name1"/>
</td>
<td>
<select name="sex"><option value="male">male</option><option value="female">female</option></select>
</td>
<td>
<input type="text" name="age" style="width:25px;"/>
</td>
</tr>
<tr>
<td>
<p>2.</p>
</td>
<td>
<input type="text" name="name2"/>
</td>
<td>
<select name="sex"><option value="male">male</option><option value="female">female</option></select>
</td>
<td>
<input type="text" name="age" style="width:25px;"/>
</td>
</tr>
<tr>
<td>
<p>3.</p>
</td>
<td>
<input type="text" name="name3"/>
</td>
<td>
<select name="sex"><option value="male">male</option><option value="female">female</option></select>
</td>
<td>
<input type="text" name="age" style="width:25px;"/>
</td>
</tr>
<tr>
<td>
<input type="submit" name="book" value="submit"/>
</td>
</tr>
</table>
</form>