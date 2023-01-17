<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>User Reg</title>
</head>
<body>
    <h2>Register User</h2>
    <form id="reg_form" autocomplete="off" method="post" action="">
        <label for="">Name</label> <br>
            <input type="text" name="name" id="name" value=""> <br><br>
        <label for="">Email</label> <br>
            <input type="email" name="email" id="email" value=""> <br><br>
        <label for="">NIC</label> <br>
            <input type="integer" name="nic" id="nic" value=""> <br><br>
        <label for="">Gender</label> <br>
            <select name="" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br><br>
        <label for="">Birthday</label> <br>
            <input type="date" name="bday" id="bday" value=""> <br><br>
        <label for="">Address</label> <br>
            <input type="text" name="address" id="address"> <br><br>
        <button type="button" onclick="submitData('insert');">Register</button>
    </form>
    <a href="index.php"> Index</a>
</body>
</html>