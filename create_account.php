<!DOCTYPE html>
<html lang="en">
<head>
     
    <title>LOGIN</title>
    <link rel="stylesheet" href="./css/create_acount.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="./pics/Logo.png">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>
<body >
    <div class="contact_us">
        <h1>Create Account</h1>
     <form action="registration.php" method="POST">
         <div class="form1">
            <label for="username">Enter Username</label>
            <input type="text" name="username" placeholder="Enter Username" required>
        </div>
        <div class="form1">
            <label for="pass">Enter Password</label>
            <input type="password" name="pass" placeholder="Enter Password" required>
        </div>
        <div class="form1">
            <label for="email">Enter Email</label>
            <input type="email" name="email" placeholder="Enter Email" required>
        </div>
        <div class="btn">
              <input type="submit" name="submit1" style="margin-top: 2px;
                        background-color: black;
                        color: white;
                        font-size: 16px;
                        border-radius: 5px;
                        border: none;
                        width: 100%;
                        height: 40px;
                        cursor: pointer; margin-top: 10px">
         </div>
     </form>
</div>
</body>
</html>