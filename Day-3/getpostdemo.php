
 <!-- 
 method:
 Get: Get is Default method to pass data in formtag.
      Datawill be visible in URL.
      It is not secure method to pass sensitive data like username and password.
      it is useful for sorting and searching record.
 Post: Post is secure method to pass sensitive data.
      data will be hidden. 
 Action: you can specify page name where data will submit.
 --> 
<html>
<body>
    <h1>Form Demo</h1>
    <form action="process.php" method="post" >
    <table>
        <tr>
            <td> name  </td>
            <td><input type="text" name="txt1" required /><br></td>
        </tr>
        <tr>
            <td> age  </td>
            <td> <input type="number" name="txt2" min="1" max="100" required /> </td>
        </tr>
        <tr>
            <td> Email </td>
            <td> <input type="email" name="txt3" required /> </td>
        </tr>
        <tr>
            <td><input type="submit"/> </td>
            <td> <input type="reset"/> </td>
        </tr>
    </table>
</form>
</body>
</html>

