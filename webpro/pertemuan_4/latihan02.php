<?php
    $usr = "";
    $ps = "";
    $eusr = "";
    $eps = "";
    if(isset($_POST["txUSER"])){
    $usr = $_POST["txUSER"];
    $ps = $_POST["txPASKY"];

    if($usr==""){
    $eusr = "<div style= 'color:red;font-size: 10px'>Please Fill Out This Field</div>";
    }
    if($ps==""){
    $eps = "<div style= 'color:red;font-size: 10px'>Please Fill Out This Field</div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="latihan02.php">

    <div>
        user name
        <input type="text" name="txUSER">
        <?=$eusr?>
    </div>

    <div>
        password
        <input type="text" name="txPASKY">
        <?=$eps?>
    </div>

    <div>
        <button>LOGIN</button>
    </div>
</form>

<div>
    isi dari form : <br>
        1. user name: <?=$usr?><br>
        2. password: <?=$ps?>
</div>

</body>
</html>