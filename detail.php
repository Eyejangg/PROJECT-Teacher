<?php
require('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/styledetail.css">
</head>
<body>

<div class="container">
    <?php
    $p_id = $_GET["p_id"];
    $sql = "SELECT * FROM person WHERE p_id = '$p_id'";
    $result = mysqli_query($con, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <div class="header">
        <div class="img-area">

        <?= isset($row['p_surname']) ? $row['p_surname'] : '' ?>

    </div>
        <h1><?= isset($row['p_prefix']) ? $row['p_prefix'] : '' ?><br><br><h1>
        <h3><?= isset($row['p_name']) ? $row['p_name'] : '' ?><br><br>
        <?= isset($row['p_surname']) ? $row['p_surname'] : '' ?>
    </div>

        <div class="main">
        <div class="left">
            <h2><?= isset($row['p_information']) ? $row['p_information'] : 'N/A' ?><br><br><h2>
            <p><strong>Name Name</storng> JASON holder</p>
            <p><strong>age</storng> 32</p>
            <p><strong>email</storng> JASON holder</p>
            <p><strong>phone</storng> JASON holder</p>
            <h2>Skills</h2>

            </ul>
        </div>

    </div>
    </div>
    <?php
    } else {
        echo "ผิดพลาด.";
    }
    ?>
</div>

</body>
</html>
