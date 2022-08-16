<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>POPULAR CARS</title>
        <link rel="icon" href="./pics/Logo.png">
        <link rel="stylesheet" href="./css/popular.css">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
        <!-- slidercss -->
        <link rel="stylesheet" href="./css/lightslider.css">
        <!-- JQuery -->
        <script type="text/javascript" src="./js/JQuery3.3.1.js"></script>
        <script type="text/javascript" src="./js/lightslider.js"></script>
    </head>
    <body>
        <div class="container">
            <!-- slider -->
            <ul id="autoWidth" class="cs-hidden">
                <li class="item-a">
                     <!-- Slider box -->
                    <div class="box">
                        <p class="bmw">BMW</p>
                        <!-- model -->
                        <img src="./pics/bmw_x1_1001.jpg" class="model">
                        <!-- details -->
                        <div class="details">
                            <p>Car: BMW-X1&nbsp;&nbsp;Model: 2020<br>
                            Rent Per Day: Rs 8000/-&nbsp;&nbsp;<br>
                            Car ID: 1001&nbsp;&nbsp;Plate No: 2324</p>
                        </div>
                        <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                    </div>
                </li>
                <li class="item-b">
                    <!-- Slider box -->
                   <div class="box">
                       <p class="bmw">AUDI</p>
                           <!-- model -->
                           <img src="./pics/audi_a5_1003.jpg" class="model">
                           <!-- details -->
                           <div class="details">
                               <p>Car: Audi-A5&nbsp;&nbsp;Model: 2017<br>
                               Rent Per Day: Rs 10000/-&nbsp;&nbsp;<br>
                               Car ID: 1003&nbsp;&nbsp;Plate No: 9876</p>
                           </div>
                           <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                   </div>
               </li>
               <li class="item-c">
                <!-- Slider box -->
                    <div class="box">
                        <p class="bmw">HONDA</p>
                            <!-- model -->
                            <img src="./pics/honda_city_white.jpg" class="model">
                            <!-- details -->
                        <div class="details">
                            <p>Car: Honda-City&nbsp;&nbsp;Model: 2019<br>
                            Rent Per Day: Rs 5500/-&nbsp;&nbsp;<br>
                            Car ID: 1005&nbsp;&nbsp;Plate No: 1234</p>
                      </div>
                      <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                    </div>
              </li>
              <li class="item-d">
                <!-- Slider box -->
                    <div class="box">
                        <p class="bmw">TOYOTA</p>
                            <!-- model -->
                            <img src="./pics/toyota_corolla_black.jpg" class="model">
                            <!-- details -->
                        <div class="details">
                            <p>Car: Toyota-Corolla&nbsp;&nbsp;Model: 2020<br>
                            Rent Per Day: Rs 6000/-&nbsp;&nbsp;<br>
                            Car ID: 1006&nbsp;&nbsp;Plate No: 4495</p>
                      </div>
                      <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                    </div>
              </li>
              <li class="item-e">
                <!-- Slider box -->
                    <div class="box">
                        <p class="bmw">HONDA</p>
                            <!-- model -->
                            <img src="./pics/2017_Honda_BR-V.jpg" class="model">
                            <!-- details -->
                        <div class="details">
                            <p>Car: Honda-BR-V&nbsp;&nbsp;Model: 2020<br>
                            Rent Per Day: Rs 7500/-&nbsp;&nbsp;<br>
                            Car ID: 1009&nbsp;&nbsp;Plate No: 3487</p>
                      </div>
                      <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                    </div>
              </li>
              <li class="item-f">
                <!-- Slider box -->
                    <div class="box">
                        <p class="bmw">SUZUKI</p>
                            <!-- model -->
                            <img src="./pics/wagonr.jpg" class="model">
                            <!-- details -->
                        <div class="details">
                            <p>Car: Suzuki-Wagon-R&nbsp;&nbsp;Model: 2021<br>
                            Rent Per Day: Rs 3000/-&nbsp;&nbsp;<br>
                            Car ID: 1010&nbsp;&nbsp;Plate No: 3349</p>
                      </div>
                      <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                    </div>
              </li>
              <li class="item-g">
                <!-- Slider box -->
                    <div class="box">
                        <p class="bmw">MERCEDES</p>
                            <!-- model -->
                            <img src="./pics/mercedes_E250.jpg" class="model">
                            <!-- details -->
                        <div class="details">
                            <p>Car: Mercedes-E250&nbsp;&nbsp;Model: 2019<br>
                            Rent Per Day: Rs 12000/-&nbsp;&nbsp;<br>
                            Car ID: 1011&nbsp;&nbsp;Plate No: 22</p>
                      </div>
                      <form action="Booking.php" method="POST">
                            <input type="submit" class="btn" name="sub1" value="Book Now!">
                        </form>
                    </div>
              </li>
            </ul>
        </div>
        <script src="./js/script.js" type="text/javascript"></script>
    </body>
</html>