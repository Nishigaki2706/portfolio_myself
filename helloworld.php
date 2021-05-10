<?php
    echo 'Hello World !' . PHP_EOL;
    $a1=array(1,2,3,5);
    $a2=array(4.6,9,12);
    $a= array($a1,$a2);
    unset($a1[1]);
    print $a1[2] . PHP_EOL;
    $fruit=array(5,4,3,2);
    $veg=array(5,4,3);
    $alone=array_diff($fruit,$veg);
    print $alone[3] . PHP_EOL;
    
    
    $z=55657+68799;
    print "55657+68799は $z<br>¥n" . PHP_EOL;//足し算//
?>
<?php
   echo'hello world2' . PHP_EOL;
   $j=100;
    
    print"あなたの得点は${j}点です。". PHP_EOL;
    
    if($j<80){     
        print"合格点まであと". (80 - $j) . "点です。" . PHP_EOL;
        print"どんまい！" . PHP_EOL;
    }else{
         print"さすがです。" . PHP_EOL;
    }
?>


<?php
   $s = 25;
   print "あなたは${s}歳です。" . PHP_EOL;
 ?>
 
 
 <?php
    $a = 3;
    $b = 4;
    function addnum($a,$b)
    {
        $x=$a+$b;
        return $x;
    }
  ?>
  <?php
    $a = 2;
    print $a . PHP_EOL;
    ?>
    
    <?php
// 「Notice: Undefined variable:」の問題を解決
// 20時以降は「こんばんは」
if (date("H") >= 20) {
    $a = "こんばんは";
} else { // 20時より前は「こんにちは」
    $a = "こんにちは";
}
echo $a . PHP_EOL;
?>


<?php  //コンストラクタ　プロパティをインスタンス化と同時に代入

   class Student4 {
      
      public $name;
      
      public function __costruct($name){
         $this->name =$name;
      }
   
      function avg($math2,$english2){
         echo (($math2+$english2) /2). PHP_EOL;
      }
   }
   
   $a0013 =new Student4("sato");
   echo $a0013->name. PHP_EOL;
   
   $a0023 =new Student4("tanaka");
   echo $a0023->name. PHP_EOL;
   
?>


<?php
class Student {

  public $name;

  function avg($math, $english) {
    echo (($math + $english) / 2)."\n";
  }
}

$a001 = new Student();
$a001->name = "sato";
$a001->avg(80, 70);
echo $a001->name."\n";

$a002 = new Student();
echo $a002->name = "nishi"."\n";

?>


<?php
class Student5 {

  public $name;

  public function __construct($name) {
    $this->name = $name;
  }
  function avg($math, $english) {
    echo (($math + $english) / 2)."\n";
  }
}

$a001 = new Student5("sato");
echo $a001->name."\n";

$a002 = new Student5("tanaka");
echo $a002->name."\n";

?>