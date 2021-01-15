<?php

class Connection 
{
    public PDO $pdo;
    
    public function __construct()
    {
    $this->pdo = new PDO('mysql:server=eu-cdbr-west-03.cleardb.net;dbname=budget', 'bdafaeae536a26', 'b59c304b');
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public function getData(){
    $statement = $this->pdo->prepare("SELECT * FROM budget ORDER BY create_date DESC ");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addReceipt($receipt){
    $statement = $this->pdo->prepare("INSERT INTO budget (healthyFood, unhealthyFood,farmacy,household,  clothing, create_date ) VALUES(:healthyFood, :unhealthyFood, :farmacy, :household,  :clothing, :date)");  
    
    $statement->bindValue('healthyFood', $receipt['healthyFood']);
    $statement->bindValue('unhealthyFood', $receipt['unhealthyFood']);
    $statement->bindValue('farmacy', $receipt['farmacy']);
    $statement->bindValue('household', $receipt['household']);
    $statement->bindValue('clothing', $receipt['clothing']);
    $statement->bindValue('date',  date('Y-m-d'));
    return $statement->execute();
}
    
}
return new Connection();
?>