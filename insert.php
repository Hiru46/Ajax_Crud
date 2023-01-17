<?php

include("database.php");
include("function.php");
if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {
        $image = '';
        if($_FILEST["user_image"]["name"] != '')
        {
            $image = upload_image();
        }
    }
}
?>