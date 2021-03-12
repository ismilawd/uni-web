<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cms_db";
$port=3306;

$conn=mysqli_connect($servername,$username,$password,$dbname,$port);

if(!$conn)
{
    die("error :". mysqli_connect_error());
}

mysqli_set_charset($conn,"utf8");

// $sql="SELECT * FROM users";
// $result=mysqli_query($conn,$sql);
// echo "<table border='1'>";
// echo 
// "<thead>
//     <tr>
//         <th>Id</th>
//         <th>Name</th>
//         <th>Username</th>
//         <th>Password</th>
//     </tr>
// </thead>";
// echo "<tbody>";
// while($row=mysqli_fetch_assoc($result)){
//     echo "<tr>".
//     "<td>".$row['id']."</td>".
//     "<td>".$row['name']."</td>".
//     "<td>".$row['username']."</td>".
//     "<td>".$row['password']."</td>"
//     ."<tr>";
// }
// echo "</tbody>";
// echo "</table>";
?>