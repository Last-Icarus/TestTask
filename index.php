<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./free-icon-php-919830.png">
    <title>Nikitin / Varva PHP Task</title>

    <link href="styles.css" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
    <script src="scripts.js" ></script>
</head>



<body>
    <h1>Оформление заказа</h1>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <form id='target' method="POST">
                    <div class="row">
                        <div class="col-50">
                            <h3>Платежный адрес</h3>
                            <label for="fname"><i class="fa fa-user"></i> ФИО</label>
                            <input type="text" id="Name" name="Name" placeholder="Иванов Иван Иванович" required>
                            <label for="city"><i class="fa fa-institution"></i> Телефон</label>
                            <input type="text" id="Phone" name="Phone" placeholder="+7-XXX-XXX-XX-XX" required>
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="Mail" name="Mail" placeholder="example@gmail.com" required>
                            <label for="adr"><i class="fa fa-address-card-o"></i> Адрес</label>
                            <input type="text" id="address" name="address" placeholder="ул. Московская д. 1 кв. 1" required>
                        </div>

                        <div class="col-50">
                            <h3>Оплата</h3>
                            <label for="cname">Имя на карте</label>
                            <input type="text" id="cname" name="cardname" placeholder="Иванов Иван Иванович" required>
                            <label for="ccnum">Номер карты</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Окончание обслуживания</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="12/12" required>
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="123" required>
                                </div>
                                <div class="col-50">
                                    <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" required/> Юр.лицо
                                    <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" required/> Физ.лицо
                                    <div id="ifYes" style="display:none">
                                        <input type="text" id="number" name="number" placeholder="Номер договора" style='margin-top: 9px; margin-bottom: 0;'>
                                    </div>
                                    <div id="ifNo" style="display:none">
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Оформить заказ" class="btn">
                    
                </form>
            </div>

        </div>
        <div class="col-25">
            <div class="container">
                <?php
                    $conn = mysqli_connect("localhost","root","","Orders");
                    if ($conn->connect_error) {
                        die("Connection failed:".$conn->connect_error);
                    }

                    $sql = "SELECT `Наименование`,`Стоимость` FROM Products";
                    $result = $conn->query($sql);                
                    $quantity = 0;
                    $summ = 0;
                    $tabe = '';
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $quantity = $quantity + 1;
                            $table = $table."<p><a>".$row["Наименование"]."</a>"."<span class='price'>".$row["Стоимость"]."$<input type='checkbox' id='selector' name='checkbox' style = 'margin-left: 15px; class = 'checkbox' value ='".$row["Наименование"]."' '></span></p>";
                            $summ = $summ + $row["Стоимость"];
                            
                        }
                    echo "<h4>В каталоге $quantity товаров <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i> <b></b></span></h4>";
                    echo $table;
                    }
                    else {
                        echo "В базе данных нет ни одного продукта :c";
                    }
                    echo "<hr><p>Всего <span class='price' style='color:black'><b>".$summ."$</b></span></p>";
                    
                    $conn->close();
                ?>
                
                </div>
                <div class = 'content' id='content'>
                Заказ оформлен
    </div>
            </div>
            
        </div>

    </div>


    
</body>

</html>