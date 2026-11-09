<?php
session_start();


if(isset($_POST["button"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
}


if(isset($_POST["submit"])) {
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["city"] = $_POST["city"];

    $_SESSION["saved"] = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href="detail.css">
</head>
<body>
    <h1 style="color:rgb(216, 183, 121)">
<?php

echo "Welcome ". $_SESSION["name"]; 
?>
</h1><br> <br>
<h2 style="color:rgb(216, 183, 121)"> Enter Additional Details: </h2>
    <form action="details.php" method="post">
     <label style="color:rgb(232, 224, 208)">Age</label>
      <input type="text" name="age" id="age"> <br> <br>
       <label style="color:rgb(232, 224, 208)"> City </label>
      <input type="text" name="city" id="city"> <br> <br>
 <label style="color:rgb(232, 224, 208)"> Pin-code </label>
      <input type="text" name="pin" required id="pin"> <br> <br>
<input type="submit" value="Save Details" name="submit" id="but" style="color:rgb(195, 177, 138)"><br> <br>
</form>
 <?php
 if(isset($_SESSION["saved"])) {

    echo "<h2 style='color:red'>Details saved successfully!</h2>";

    echo "<h2 style='color:rgb(216, 183, 121)'>Saved Details</h2>";

    echo "<table border='1' cellpadding='12'>";

    echo "<tr>
            <th style='color:white'>Name</th>
            <th style='color:white'>Email</th>
            <th style='color:white'>Age</th>
            <th style='color:white'>City</th>
          </tr>";

    echo "<tr>
            <td style='color:white'>" . $_SESSION["name"] . "</td>
            <td style='color:white'>" . $_SESSION["email"] . "</td>
            <td style='color:white'>" . $_SESSION["age"] . "</td>
            <td style='color:white'>" . $_SESSION["city"] . "</td>
          </tr>";

    echo "</table>";
}



?> 

</body>
</html>



