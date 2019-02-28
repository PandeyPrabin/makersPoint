<!DOCTYPE html>
<html>
<head>
    <title>Insert Form</title>
</head>
<body>
<center>
    
    <form action="/insert" method="post">
      <div>  
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
        </div>
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type = "submit" vlaue="Submit">
    </form>
</center>

</body>
</html>