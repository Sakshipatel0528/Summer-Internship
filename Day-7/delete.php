<?php
$connection = mysqli_connect("localhost","root","","db_internship1");

$id = $_GET['deleteid'];

$q = mysqli_query($connection,  "update tb_user set is_delete = 1 where user_id='{$id}'") or die(mysqli_error($connection));

if($q)
{
    echo "<script>alert('record deleted'); window.location='3-table.php;'</script>";
}

