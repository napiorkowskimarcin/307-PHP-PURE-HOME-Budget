<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a receipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="index.php">Home</a>
    <a class="nav-item nav-link active" href="addshopping.php">Add a new one</a>
    </div>
</div>
</nav>
<div class="container">
<div class="d-flex justify-content-center">

    <form action="create_receipt.php" method="post">
    <div class="form-group">
        <label for="healthyFood">Healthy Food :</label>
        <input type="number" name="healthyFood" placeholder="" autocomplete="off" step="0.01">
    </div>
    <div class="form-group">
        <label for="unhealthyFood">Unealthy Food :</label>
        <input type="number" name="unhealthyFood" placeholder="" autocomplete="off" step="0.01">
    </div>
    <div class="form-group">
        <label for="farmacy">Farmacy, personal care :</label>
        <input type="number" name="farmacy" placeholder="" autocomplete="off" step="0.01">
    </div>
    <div class="form-group">
        <label for="farmacy">Household : </label>
        <input type="number" name="household" placeholder="Household products" autocomplete="off" step="0.01">
    </div>
    <div class="form-group">
        <label for="clothing">Clothes :</label>
        <input type="number" name="clothing" placeholder="Clothes" autocomplete="off" step="0.01">
        <button>Add !</button>
    </form>
</div>
</div>
</body>
</html>