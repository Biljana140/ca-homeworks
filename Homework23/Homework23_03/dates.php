<?php echo "Exercice 1<br>"?>
&copy; <?php echo date("Y"). " PHP Exercises - CodeAcademy<br>" ?>

<?php echo "<br>Exercise 2<br>";


$myBirthday = mktime(0, 0, 0, 06, 14, 2020);
$timeNow= time();
$daysTillBirthday = ($myBirthday-$timeNow)/60 /60/ 24;
echo "I have ".floor($daysTillBirthday). " days till my birthday!<br>";?>


<?php echo "<br>Exercise 3 <br>";

$date = date_create( "2020/09/01");
$date_format1 = date_format($date, "Y/m/d");
$date_format2 = date_format($date, "y.m.d");
$date_format3 = date_format($date, "d-m-y");
echo $date_format1. "<br>";
echo $date_format2. "<br>";
echo $date_format3. "<br>";?>

<?php echo "<br>Exercise 4 <br>";

$date1 = date_create("1981-11-04");
$date2 = date_create ("2013-10-11");
$diff= date_diff($date2,$date1);

echo "The difference is " .$diff->y. " years, " .$diff->m. " months and ".$diff->d. " days <br>";?>

<?php echo "<br>Exercise 5 <br>";

$sampleDate = "2020-09-12";
$resultDate = date("d-m-Y", strtotime($sampleDate) );
echo "Result date is : " . $resultDate . "<br>";

echo "<br>Exercise 6<br>";

    $timeNow=time();
    $someDate=strtotime("15 November 2003");

    $dayDifference=floor(($timeNow-$someDate)/60/60/24);

    echo  $dayDifference ."<br>";

    echo "<br>Exercise 7<br>";
    $dateString = '2020-05-15';
    $firstDateOfMonth = date("1-m-Y", strtotime($dateString));
    $lastDateOfMonth = date("t-m-Y", strtotime($dateString));

    echo "The first day is: " .$firstDateOfMonth ." and the last day is : " .$lastDateOfMonth . "<br>";

    echo "<br>Exercise 8<br>";
    $dateString = '2020-05-09';
    $name_Day=date("l",strtotime($dateString));
    $day_of_month=date("j",strtotime($dateString));
    echo $name_Day ." the " .$day_of_month."th<br>";

    echo "<br>Exercise 9<br>";

    $givenDate="2020-09-07 10:30:00";
    $datestr=strtotime($givenDate);
    $hour=date("g:ia",$datestr);
    $day=date("j",$datestr);
    $month=date("F",$datestr);
    echo $hour ." ".$day."th of ".$month;

    echo "<p>Exercise 10<p>";

function convertTime($date1, $mer){
    $date = $date1 . "" . $mer;

     var_dump($date);
    
    if ($mer === "AM") {
        echo date("Y-m-d h:i", strtotime($date)) . "<br>";               
    } else {
        echo date("Y-m-d H:i", strtotime($date)) . "<br>";               
    }
}
convertTime("2020-05-19 09:00:00", "AM");
convertTime("2020-05-19 12:00:00", "PM");


?>