<?php
$username=mysql_real_escape_string($_POST['username']);
mysql_connect("localhost","root","");
mysql_select_db("phplogin");
$check=mysql_query("SELECT username FROM users WHERE username='$username'");
$check_num_rows=mysql_num_rows($check);
if($username==NULL)
    echo "enter a username of your choice";
else if(strlen($username)<=3)
    echo "TOO SHORT!!";
else
{
    if($check_num_rows==0)
        echo "<p>Available";
    else if($check_num_rows==1)
        echo "<b>Not Available!";
}
?>