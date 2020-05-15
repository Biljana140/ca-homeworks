<?php
 echo "Exercise 1<br>";
 $a = array( 0, 1, 2, 3, 4 );
 echo $a [3]."<br>";

 echo "<br>";

 echo "Exercise 2<br>";
 $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
 echo $a ['three']."<br>";

 echo "<br>";

  echo "<br>Exercise 3<br>";
$array = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
echo $array[1][1][0] ."<br>";

echo "<br>";

echo "Exercise 4 <br>";
  $a = array("a"=>array( "b"=>0,"c"=>1),"b"=>array("e"=>2,"o"=>array("b"=>3 )));

  echo $a ['b']['o']['b']."<br>";


  echo "Exercise 5 <br>";

  $a = ('a,b,c,d,e,f');

  var_dump(explode (',', $a, 7));


  echo "Exercise 6 <br>";

  $a = array("a"=>"a", "b"=> "b", "c"=> "c", "d"=>"d","e"=> "e", "f"=> "f");

  foreach ($a as $key=> $value){
      echo $key.' '.$value. "<br";
  }
  var_dump($a)."<br>";

  echo "<br>";
  echo "<br>";

  echo "Exercise 7 <br>";
  $keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);
foreach ( $keysAndValues as $keys=>$values){
    echo $keys.' '.$values. "<br>";
}
var_dump ($keysAndValues);


echo "<br>";
echo "<br>";

echo "Exercise 8 <br>";

$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

for($i=0; $i<count($transactions); $i++){

    $amount=abs($transactions[$i]['debit']-$transactions[$i]['credit']);

    $transactions[$i]["amount"] = $amount;

}
var_dump($transactions);


echo "Exercise 9 <br>";

$a = array( 0, 1, 2, 3, 4, 5, 6 );
$arraySum = array_sum($a);
echo $arraySum;
