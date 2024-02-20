<?php
$conn=mysqli_connect("localhost","root","","web");
if($conn){
    echo "connected successfully";
}
$sql ="SELECT * FROM Student";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
while($row = mysqli_fetch_assoc($result)){
    echo "ID:".$row['id']."Name:".$row["Name"]."Roll:" . $row["Roll"]."Address:" . $row["Address"].;
    echo "<br>";
}

?>