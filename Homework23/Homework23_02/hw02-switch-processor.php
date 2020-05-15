<?php

if (isset ($_POST ['days'])){
switch ($_POST['days']) {
    case 'monday':
       echo  "Laugh on Monday, laugh for danger.";
    break;
    case 'tuesday':
        echo "Laugh on Tuesday, kiss a stranger.";
    break;
     case 'wednesday':
        echo "Laugh on Wednesday, laugh for a letter.";
    break;
     case 'thursday':
        echo "Laugh on Thursday, something better.";
    break;
     case 'friday':
        echo "Laugh on Friday, laugh for sorrow.";
    break;
     case 'saturday':
        echo "Laugh on Saturday, joy tomorrow.";
    break;

    default:
    echo "Enter valid day!";
    break;

}           
}
echo "<br>";
echo "<br>";

echo "<form action='hw02-switch-statement.php 'method='POST'><button>Back</button></form>";



    ?>
