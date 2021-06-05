<?php
$connection = mysqli_connect("localhost", "root", "","db_internship2");

if($_POST)
{
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $email = $_POST['txt3'];
    $mobile = $_POST['txt4'];
    $address = $_POST['txt5'];
    $password = $_POST['txt6'];
    $city = $_POST['txt7']; 
    $bloodgroup = $_POST['txt8'];
    $dateofbirth = $_POST['txt9'];
    
    $q= mysqli_query($connection, "insert into tbl_student(st_name,st_gender,st_email,st_mobile,st_address,st_password,st_city,st_bloodgroup,st_dob) values('{$name}','{$gender}','{$email}','{$mobile}','{$address}','{$password}','{$city}','{$bloodgroup}','{$dateofbirth}')") or die(mysqli_error($connection));
   
    if($q){
        echo "<script>alert('record added');</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1"/><br>
            email : <input type="text" name="txt3"/><br>
            password : <input type="text" name="txt6"/><br>
            Mobile : <input type="number" name="txt4"/><br>
            Gender : <select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select><br>
            City : <select name="txt7">
                <option>Gandhinagar</option>
                <option>Ahmedabad</option> 
                <option>Surat</option>
                <option>Baroda</option>
            </select><br>
            address : <input type="text" name="txt5"/><br>
            dateofdirth : <input type="date" name="txt9"><br>
            bloodgroup : <select name="txt8">
                <option>a+</option>
                <option>a-</option> 
                <option>b+</option>
                <option>b-</option>
                <option>ab</option>
                <option>o+</option>
                <option>o-</option>
            </select><br>
            <input type="submit"/><br>
        </form>
    </body>
</html>

