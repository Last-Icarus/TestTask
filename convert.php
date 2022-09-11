<?php

$name = $_POST['Name'];
$phone = $_POST['Phone'];
$mail = $_POST['Mail'];
$products = $_POST['productlist'];
$number = intval($_POST['number']);
$address = $_POST['address'];

if ($number == 0) {
    $number = NULL;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Orders";


try {

$conn = new PDO("mysql:host=localhost;dbname=Orders;charset=utf8","root","");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


try {

$query = "INSERT INTO `Orders` (`ID заказа`, `ФИО`, `Моб. телефон`, `Электронная почта`,`Адрес`,`Наименования товаров`, `Номер договора`) VALUES (?, ?, ?, ?,?, ?,?)";

$stmt = $conn->prepare($query);

$stmt->execute(array(NULL, $name, $phone, $mail, $address, $products , $number));

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo 'Complited successfully';
?> 

