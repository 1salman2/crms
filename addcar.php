<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Add Car</title>
    <link rel="icon" href="./pics/Logo.png">
    <link rel="stylesheet" href="./css/addcar.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <br> 
    <h1>Add Car!</h1>
    <br>
    <div class="container" style="opacity: 70%;">
        <div class="myform">
            <form action="checkaddcar.php" method="POST">
                <div class="row">
                    <div class="form-group col-6">
                        <label >Car ID</label>
                        <input type="number" name="car_id" class="form-control" placeholder="Car ID" required>
                    </div>
                    <div class="form-group col-6">
                      <label >Car Name</label>
                      <input type="text" name="car_name" class="form-control" placeholder="Brand-Model" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label >Car Model Year</label>
                      <input type="number" name="car_model_year" class="form-control" placeholder="Year" required>
                  </div>
                  <div class="form-group col-6">
                    <label >Car Brand</label>
                    <input type="text" name="car_brand" class="form-control" placeholder="Brand Name" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label >Plate Number</label>
                      <input class="form-control" type="text" name="plate_number" placeholder="Car Plate No.">
                  </div>
                  <div class="form-group col-6">
                    <label >Rent</label>
                      <input type="number" name="rent" class="form-control" placeholder="Car Rent" minlength="4" maxlength="4" required>
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