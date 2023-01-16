<?php

include('database_connection.php');

session_start();

if(!isset($SESSION['user_id']))
{
    header("location:login.php");
}
?>

<html>
<head>
    <title>Document</title>
</head>
<body>
   <div class="container">
    <br/>
    <h3 align="center"> Ajax Query></h3>
    <br/>

    <div class="table-"></div>
   </div> 
</body>
</html>