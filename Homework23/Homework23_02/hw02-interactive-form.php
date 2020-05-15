
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Interactive Form</title>
</head>
<body>
 
   <?php


 if   (isset ($_POST["city"])){
    echo "<h2>Favorite City</h2>";
    echo "Your favorite city is " .($_POST["city"]). "<br>";
 }elseif (empty ($_POST["city"])) {
     echo "Please enter city";
 } else{
 ?> 
<!-- <h1> Favorite City</h1> -->
    <form action =" "  method  = "POST">
    <div>
    <h3>Please enter your favorite city:</h3>
    <input type = "text" name = "city" value="">
    </div>
   <br>
    
    <button name = "submit" value = "submit">Go</button>

</form>


  <?php }  ?>
</body>
</html>

