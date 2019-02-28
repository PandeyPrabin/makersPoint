<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>View All Customers</title>
    <style>
        table, th, tr, td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
    <table>
       <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>City</th>
            <th>Mobile</th>
            <th>Password</th>
            <th>Image</th>
        </tr>
        <tbody>
    @foreach($user as $users)
        <tr>
            <td>{{$users->name}}</td>
            <td>{{$users->gender}}</td>
            <td>{{$users->city}}</td>
            <td>{{$users->mobile}}</td>
            <td>{{$users->password}}</td>
            <td>{{$users->image}}</td>
        </tr>
   
    @endforeach
    
    </tbody>
    </table>

</body>
</html>