<?php 
class Calc{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator,int $num1,int $num2){
        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
public function calculator() 
{
 switch($this->operator){
    case 'add':
            $result = $this->num1 + $this->num2;
            return $result;
            break;
    case 'subtract':
            $result = $this->num1 - $this->num2;
            return $result;
            break;
    case 'multiply':
            $result = $this->num1 * $this->num2;
            return $result;
            break;
    case 'divide':
            $result = $this->num1 / $this->num2;
            return $result;
            break;
    default:
    echo "Invalid operator!";
    break;
   }   
 
}
}
// scope resolution operator
class FirstCLass{
     
    const EXAMPLE = "You cant change this data! "; //constant or property that cant be changed
    // 

    public static function test()
    {
        $testing = "this is a test";
        return $testing;
    }
}

class SecondCLass extends FirstCLass{
    public static $staticPorperty=" A static property";



    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo "nigga";
        echo self::$staticPorperty;

}
}
?>