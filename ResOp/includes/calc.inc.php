<?php declare(strict_types=1);
include 'class-autoload.php';

$oper=$_POST['oper'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];	//

$calc = new Calc($oper,(int)$num1,(int)$num2);

$firstclass = new FirstCLass;
echo "This is first '" . $firstclass::EXAMPLE."'<br>";
echo "function accessed 1stclass -'".$firstclass->test()."'<br>";

$secondclass = new SecondClass;
echo "This is 2ndclass '". $secondclass::EXAMPLE."'<br>";

echo "<br>function accessed 2ndclass -<br>'". $secondclass->anotherTest()."'<br>";//THis is calling the function first ?
//advised to return the function first instead of echoing out here 
try{
    echo "<br> Calculation result is =' ".$calc->calculator()."'<br>";
}
catch(TypeError $e){
    echo "Error: Invalid input type. Please enter only numbers.".$e->getMessage();
}
?>