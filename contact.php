<!DOCTYPE html>
<html lang="en">
<head>
     
    <title>CONTACT US!</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="./pics/Logo.png">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
</head>
<body >
    <div class="contact_us">
        <h1>CONTACT US</h1>
        <div class="form">
             <label><b>FULL NAME :</b></label>
             <input type="text" placeholder="Enter your name"><br>
        </div>
        <div class="form">
             <label><b> Email :</b></label>
             <input type="text" placeholder="Enter your email"><br>
        </div>
        <div class="form">
             <label><b>NUMBER :</b></label>
             <input type="text" placeholder="Enter your number"><br>
        </div>
        <div class="form">
             <label><b>MESSAGE :</b></label>
             <TEXTarea></TEXTarea>
        </div>
         <div class="btn">
             <a id="button" onclick="saved()">SEND</a>
         </div>
    </div>
     <script>
         function saved()
         {
              var target=document.getElementById("button");
              var newelement="<h3 style='margin-top:0px;color: royalblue;'>THANKS YOU</h3>";
              target.insertAdjacentHTML("afterend",newelement);
         }
    </script>
</body>
</html>