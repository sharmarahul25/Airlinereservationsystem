
<h4>security question: </h4>
<form action="?page=forgot" method="post">
<p>enter your username: </p>
<input type="text" name="user_name"/>
<p>your first teacher name is: </p>
<input type="text" name="forgot"/>
<input type="submit" value="Get password"/>
</form>

<?php
if(isset($_POST['user_name']))
{
$user=$_POST['user_name'];
$forgot_ques=$_POST['forgot'];
$connect=mysql_connect("localhost","root","");
mysql_select_db("airlines");
$query=mysql_query("
SELECT * FROM login WHERE username='$user'");
$num_rows=mysql_num_rows($query);
if($num_rows!=0)
{
  while($row=mysql_fetch_assoc($query))
  {
        $dbusername=$row['username'];
        $dbsecurity=$row['securityquestion'];
        $password=$row['password'];
        if($dbsecurity==$forgot_ques)
        echo '<h3 style="color:green;">your password is :'.$password.'</h3>';
        else
        echo '<h3 style="color:orange;">incorrect details given by you....</h3>';
  }
}
else
echo '<h3 style="color:red;">there is no username like this....</h3>';
}
?>

