<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>

<form action="store" method="POST">
    <label for="">Name</label>
    <input type="text" name="name" id="name"><br><br>
    Gender<input type="radio" name="gender" value="male">Male<br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female">Female<br><br>
    
    City &nbsp;&nbsp;<select name="City" id="City">
        <option value="Turku">Turku</option>
        <option value="Tampere">Tampere</option>
        <option value="Helsinki">Helsinki</option>
        <option value="Vasaa">Vasaa</option>
    </select>
    
    <label for="">Email</label>
    <input type="text" name="email" id="email"><br><br>
    <label for="">Password</label>
    <input type="text" name="password" id="password"><br><br>
    <label for="">Mobile</label>
    <input type="tel" name="mobile" id="mobile"><br><br>
    <input type="file" name="image" id="Image"><br><br>
    
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" id="submit">
    <br>
</form>

</body>
</html>