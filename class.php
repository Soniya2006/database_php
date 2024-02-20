<?php
$conn=mysqli_connect("localhost","root","","web");
if($conn){
    echo "connected successfully";
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
    $sql ="SELECT * FROM Student";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        echo '<table class="table">';
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Roll</th>";
        echo "<th>Address</th>";
        echo "</tr>";
        echo "<tbody>";
        while($rows = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>" . $rows["id"] . "</td>";
          echo "<td>" . $rows["Name"] . "</td>";
          echo "<td>" . $rows["Roll"] . "</td>";
          echo "<td>" . $rows["Address"] . "</td>";
        }
        echo "</tbody>";
        echo "</thead>";
        echo '</table>';
    }
    ?>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>
  
  </body>
</html>
