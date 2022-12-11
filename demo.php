<?php

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'AAST'],
];
echo "<table>";
echo "<th>Name</th>","<th>Email</th>","<th>Status</th>";
foreach($students as $key) { 
    if($key['status']=='Science'){
        echo "<tr style = 'color:red;'>";
    }else{
        echo "<tr>";
    }
        echo "<td>".$key['name'] ."<br>"."</td>";
        echo "<td >".$key['email'] ."<br>"."</td>";
        echo "<td >".$key['status'] ."<br>"."</td>";
        echo "</tr>";
          
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Application Name: PHP Class Registration</h1>
</body>
</html>