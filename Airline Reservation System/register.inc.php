<form action="" method="post" name="form">
<table>
<tr>
<td>username: </td><td> <input type="text" id="username_input" name="username"/> </td>
</tr>
<tr><td><div id="feedback"></div></tr>
<tr>
<td>enter your desired password: </td><td> <input type="password" name="password" /></td>
</tr>
<tr>
<td>repeat password: </td><td> <input type="password" name="repeatpassword" /></td>
</tr>
<tr>
<td>
select your gender: </td>
<td><input type="radio" name="sex" value="m">male</input></td>
<td><input type="radio" name="sex" value="f">female</input></td>
<tr>
<td>
what's your first teachers' name: </td>
<td><input type="text" name="security"/></td></tr> <br/>
<tr><td><input type="submit" name="submit" value="proceed>>"/>
</table>
</form>
 <?php
if(isset($_POST['submit']))
{
$submit=$_POST['submit'];
$username=strip_tags($_POST['username']);
$password=strip_tags($_POST['password']);
$repeatpassword=strip_tags($_POST['repeatpassword']);
$gender=$_REQUEST['sex'];
$security=$_REQUEST['security'];
if(isset($submit))
{
    if($username && $password && $repeatpassword )
    {

        if($password==$repeatpassword)
        {

            if(strlen($username)>25)
            {
                    echo "please enter username/password under 25 character!";
            }

            else
            {
            //register
         //$password=md5("$password");
        //$repeatpassword=md5("$repeatpassword");
            $connect=mysql_connect("localhost","root","");
            mysql_select_db("airlines");
            $check=mysql_query("SELECT username FROM login WHERE username='$username'");
            $check_num_rows=mysql_num_rows($check);
            if($check_num_rows==0)
            {
            $queryreg=mysql_query("
            INSERT INTO login VALUES('','$username','$password','$gender','$security')
            ");
            echo("you have been successfully registered <a href='?page=home'>click here</a> to go to login page!!") ;
            mysql_close($connect);
            }
            else
                echo("there is a user already registered with this username!");
            }
        }
        else
          echo "your passwords do not match!";

    }
    else
    {
      echo  "please <b>fill</b> all entries!";
    }
}
}
?>

