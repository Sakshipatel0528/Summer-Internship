
<html>
<head>
<tittle>
</tittle>
</head>
<body>
<form action="result.php" method= "POST">
<center>
<h1>MARKSHEET</h1>
<table>
<pre>
     <tr> <td> NAME:    <input type="text" name="name"  required></td> </tr><br>
   <tr> <td> GENDER:   <input type="radio" name="gen" required>male
                       <input type="radio" name="gen" required>female</td></tr><br>
       <tr><td> DOB:   <input type="date" name="dob" required></td></tr><br>
  <tr> <td> MOBILE:   <input type="number" name="mobile" max='9999999999' required></td></tr><br>
 
  <tr><td> PHYSICS:    <input type="Number" name="num1" min="1" max='100' required></td></tr><br>
  <tr><td> MATHS:    <input type="Number" name="num2" min="1" max='100' required></td></tr><br>
  <tr><td> CHEMISTRY:    <input type="Number" name="num3" min="1" max='100' required></td></tr><br>
  <tr><td> BIOLOGY:   <input type="Number" name="num4" min="1" max='100' required></td></tr><br>
  <tr><td> ENGLISH:   <input type="Number" name="num5" min="1" max='100' required></td></tr><br>
                   <tr><td>    <input type="submit" name="submit" value="Submit"></td></tr>
</pre>
</table>
</center>
</form>
</body>
</html>