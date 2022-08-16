<?php
  require_once("fetchCars.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Booking</title>
    <link rel="icon" href="./pics/Logo.png">
    <link rel="stylesheet" href="./css/booking.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
  </head>
   
  <body>
    <br> 
    <h1>Book Now!</h1>
    <br>
    <div class="container" style="opacity: 70%;">
        <div class="myform">
            <form id="" action="Payment.php" class="" name="" method="POST">
                <div class="row">
                    <div class="form-group col-6">
                        <label >Full Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group col-6">
                      <label >Address</label>
                      <input type="text" name="address" class="form-control" placeholder="Address" maxlength="100" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label >CNIC</label>
                      <input type="text" name="cnic" class="form-control" placeholder="XXXXX-XXXXXXX-X" required minlength="15" maxlength="15">
                  </div>
                  <div class="form-group col-6">
                    <label >Gender</label>
                      <select class="form-control" name="gender">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label >Booking Days</label>
                      <input class="form-control" type="number" name="Ndays" placeholder="No. of Days">
                  </div>
                  <div class="form-group col-6">
                    <label >Telephone</label>
                      <input type="number" name="phone" class="form-control" placeholder="Phone No." minlength="11" maxlength="11" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label >City</label>
                      <input type="text" name="city" class="form-control" placeholder="City" required>
                  </div>
                  <div class="form-group col-6">
                    <label >Pin</label>
                      <select require name="pin" class="form-control" required>
                        <option value="">Select Car</option>
                        <?php foreach ($cars as $key => $car) { ?>
                          <option value="<?php echo $car["car_id"] ?>"><?php echo $car["car_name"] ?></option>
                        <?php } ?>
                        <?php
                          if(count($cars) < 1){
                            ?>
                              <option disabled value="">No car available yet!</option>
                            <?php
                          }
                        ?>
                      </select>
                      <!-- <input type="number" name="pin" class="form-control" placeholder="Car Pin" minlength="4" maxlength="4" required> -->
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6" style="padding-top:15px;">
                    <input type="submit" name='submit' class="btn" value="Submit">
                  </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>