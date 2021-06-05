<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship1";
//Connection function
$connection= mysqli_connect($host, $username, $passwd, $dbname);

$q =  mysqli_query($connection,
        "insert into tb_user(user_name,user_gender,user_mobile) values('sakshi p','female','6354196641')") 
        or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record added');</script>";
}
