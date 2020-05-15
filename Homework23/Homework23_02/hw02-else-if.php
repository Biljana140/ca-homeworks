<?php



if(strtolower(trim($_POST['days']))==="monday"){
    

   echo "Laugh on Monday, laugh for danger.";
   
}elseif (strtolower(trim($_POST['days']))==="tuesday"){
    echo "Laugh on Tuesday, kiss a stranger.";

}elseif  (strtolower(trim($_POST['days']))==="wednesday"){
    echo "Laugh on Wednesday, laugh for a letter.";

}elseif (strtolower(trim($_POST['days']))==="thursday"){
    echo "Laugh on Thursday, something better.";

}elseif  (strtolower(trim($_POST['days']))==="friday"){
    echo "Laugh on Friday, laugh for sorrow.";

}elseif  (strtolower(trim($_POST['days']))==="saturday"){
    echo "Laugh on Saturday, joy tomorrow.";
 } else {


   ?> 


   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Else-If </title>
</head>
<body>
 
<h1> Days of the Week</h1>
<h3>Please enter a day of the week:</h3>
    <form action =" "  method  = "POST">
    <input type = "text" name = "days">
    <button name = "submit" value = "submit">Go</button>

</form>
 <?php } ?>
</body>
</html>

