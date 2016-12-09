<?php

$host = 'localhost';
$user = 'root';
$pass = '@JACQUELINE2';

mysql_connect($host, $user, $pass);

mysql_select_db('blog');


if(isset($_POST['user_email']))
{
 $emailId=$_POST['user_email'];

 $checkdata=" SELECT Email FROM blog WHERE Email='$emailId' ";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>