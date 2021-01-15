<?php
$connection = require_once './CLASSESS/Connection.php';
require_once './CLASSESS/Data.php';


$data = $connection->getData();

//create values for presenting data - summary of all costs
$totalHealth = Data::totalHealthy($data);
$totalUnhealth = Data::totalUnhealthy($data);
$totalFarmacy = Data::totalFarmacy($data);
$totalHousehold = Data::totalHousehold($data);
$totalClothing = Data::totalClothing($data);
$totalTotal = Data::totalTotal([$totalHealth, $totalUnhealth, $totalFarmacy, $totalHousehold, $totalClothing]);

//create a %share of each value
$shareHealth =  number_format($totalHealth *100 /$totalTotal, 2, '.', '');
$shareUnhealth =  number_format($totalUnhealth *100 /$totalTotal, 2, '.', '');
$shareFarmacy =  number_format($totalFarmacy *100 /$totalTotal, 2, '.', '');
$shareHousehold =  number_format($totalHousehold *100 /$totalTotal, 2, '.', '');
$shareClothing =  number_format($totalClothing *100 /$totalTotal, 2, '.', '');

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

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type of cost</th>
      <th scope="col">Value</th>
      <th scope="col">Share in total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Food</td>
      <td><?php echo $totalHealth ?></td>
      <td><?php echo  $shareHealth?>%</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Unhealthy food</td>
      <td><?php echo $totalUnhealth ?></td>
      <td><?php echo $shareUnhealth ?>%</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Farmacy</td>
      <td><?php echo $totalFarmacy ?></td>
      <td><?php echo $shareFarmacy?>%</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Household</td>
      <td><?php echo $totalHousehold ?></td>
      <td><?php echo $shareHousehold ?>%</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Clothes</td>
      <td><?php echo $totalClothing ?></td>
      <td><?php echo $shareClothing?>%</td>
    </tr>
    <tr>
      <th scope="row">-</th>
      <td>TOTAL:</td>
      <td><?php echo $totalTotal ?></td>
      <td>---</td>
    </tr>
    
  </tbody>
</table>

</div>
</div>
</body>
</html>