<?php
$connection = require_once './CLASSESS/Connection.php';
$connection = require_once './CLASSESS/Data.php';


$data = $connection->getData();


$totalHealth = Data::totalHealthy($data);
$totalUnhealth = Data::totalUnhealthy($data);
$totalFarmacy = Data::totalFarmacy($data);
$totalHousehold = Data::totalHousehold($data);
$totalClothing = Data::totalClothing($data);
$totalTotal = Data::totalTotal([$totalHealth, $totalUnhealth, $totalFarmacy, $totalHousehold, $totalClothing]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home app budget helper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
<div class="collapse navbar-collapse mb-3" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="index.php">Home</a>
    <a class="nav-item nav-link active" href="addshopping.php">Add a new one</a>
    </div>
</div>
</nav>
<div class="container">
<div class="d-flex justify-content-center">
Total cost of: 
Food : <?php echo $totalHealth ?> <br>
Unhealthy food: <?php echo $totalUnhealth ?><br>
Farmacy: <?php echo $totalFarmacy ?><br>
Household: <?php echo $totalHousehold ?><br>
Clothes: <?php echo $totalHealth ?><br>
Total spend in shops:  <?php echo $totalTotal ?><br>
</div>
</div>
</body>
</html>