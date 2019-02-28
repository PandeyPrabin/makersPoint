<!DOCTYPE html>
<html lang = "en">
<html>
<head>
    <meta charset= "UTF-8">
    <meta name ="viewport" content = "width-device-width, initial-scale-1.0">
    <meta http-eqvic = "X-UA-Compatible" content =" ie-edge">
                  </head>
                 
<title>MAKERSPOINT</title>
<body>
<!--    <form action ="makerspoint.php" method ="post"></form>-->
<a href="https://makerspoint.fi/">This is a link to makerspoint website</a>

<link rel="stylesheet" href="style.css">

<h1>MAKERSPOINT</h1>
  <div class="navbar">
  <a href="#Frontpage">Home</a>
  <a href="#Machine Time">Machine Time</a>
  <a href="#Make Work Order">Make Work Order</a>
  <a href="#Work Orders">Work Orders</a>
  <a href="#Early Warnings">Early Warnings</a>
  <a href="#Reports">Reports</a>
  <a href="#Control">Control</a>
</div> 
    <form action ="makerspoint.php" method ="post">
    <div id ="container">
       {{csrf_field()}}
        <form id = "myform" method ="post" action = "message.html" onsubmit="return validateForm()">
        <label for ="fullname">Full Name </label>
        <input type ="text" id ="fullname"placeholder="Full Name" required>
        <br>
            
        <label for ="username">User Name </label>
        <input type ="text" id ="username"placeholder="User Name" required><br>
    
        <label for ="email">Email </label>
        <input type ="email" id ="email"placeholder="Email"required>
        <br>
    
        <label for ="password">Password </label>
        <input type ="password" id ="password"placeholder="Password" required>
        <br>
        <input type = "submit" vlaue="Submit">
            </form>
        
        </form>
    </div>
<script src ="makerspoint.js"></script>
</body>
    </html>