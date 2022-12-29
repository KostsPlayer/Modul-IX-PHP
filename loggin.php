<?php
    session_start();

    if(isset($HTTPS_POST_VARS["insert"]))
    {
        if(($HTTPS_POST_VARS["user"]!="")&&($HTTPS_POST_VARS["password"]!=""))
        {
            session_register("session_status");
            session_register("session_user");
            session_register("session_password");
            $session_status= "login";
            $session_user= $HTTPS_POST_VARS["user"];
            $session_password= $HTTPS_POST_VARS["password"];
            header("Location: proses_loggin.php");
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Session</title>
</head>
<body>
    
</body>
</html>   