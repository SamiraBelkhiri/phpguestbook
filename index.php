<?php

require 'Model/User.php'

?>

<html>
<title>Guestbook</title>
<body>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
        <td><strong>Sign Our Guestbook </strong></td>
    </tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
        <form action="process.php" method="POST">
            First name:<br>
            <input type="text" name="firstName">
            <br><br/>
            Last name:<br>
            <input type="text" name="lastName">
            <br><br>

            Email:<br>
            <input type="text" name="email">
            <br><br>

            Mobile:<br>
            <input type="text" name="mobile">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
        <td><strong><a href="View/viewguestbook.php">View Guestbook</a> </strong></td>
    </tr>
</table>
</body>
</html>


<?php

$allData = [];

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$user = new Post();
array_push($allData, $email);
echo ("Thank you for your feedback");
$user->getName();

