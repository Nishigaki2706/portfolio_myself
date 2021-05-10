<?php
   
   function cal($a,$b,$c) {
       return ($a+$b+$c)/3;
   };
   
   $result = cal(9,4,2);
   echo $result . "\n";
   
?>

<?php
  
   function calc ($num1,$num2){
      
      $total=$num1+$num2;
      
      return $total;
   }
   
  $result2 = calc(44,22);
  echo $result2 . PHP_EOL;
?>

<?php

   function getmenu($a='Drink'){
      echo $a . PHP_EOL;
   }
   
   getmenu('Tea') . PHP_EOL;
   getmenu() . PHP_EOL;
   getmenu('Icetea') . PHP_EOL;
   
   function getmenu2($c='Drink',$d='Food'){
      echo $c . PHP_EOL;
      echo $d . PHP_EOL;
   }
   
   getmenu2('Icetea','Apple'); //戻り値なし


?>


<?php

   class Student{      //クラス名は大文字に
      
      function avg(){             //引数がある場合は（）内に引数を書く
         echo ((80+70)/2). PHP_EOL;  //メゾットで実行する処理
      }
   }
   
   $a001 = new Student();       //クラスを使えるようにした状態をインスタンス化という
   $a001->avg();                //
   
?>

<?php
  
   class Student2{
      
      public $name;  //プロパティ名
   
      function avg($math,$english){    //引数を渡すことにより生徒が変わっても計算しやすくなる（クラスを使いまわせる）
         echo(($math+$english)/2). PHP_EOL;
      }
   }
   
   $a001_2 =new Student2();
   $a001_2->avg(80,70);
   $a001_2->name ="sato";//プロパティに値を代入
   echo $a001_2->name. PHP_EOL;
   
?>

<?php   //コンストラクタについて

  class Student3{
      
      public $name;  //プロパティ名
      
      public function __construct(){
         $this->name ="tanaka";    //$thisにインスタンスが代入される
      }
   
      function avg($math,$english){    //引数を渡すことにより生徒が変わっても計算しやすくなる（クラスを使いまわせる）
         echo(($math+$english)/2). PHP_EOL;
      }
   }
   
   $a001_3 =new Student3();
   $a001_3->avg(80,70);
   $a001_3->name ="sato";//プロパティに値を代入
   echo $a001_3->name. PHP_EOL;
   
   $a002_3 =new Student3();
   echo $a002_3->name. PHP_EOL;
?>

<?php  //コンストラクタ　プロパティをインスタンス化と同時に代入

   class Student4 {
      
      public $name;
      
      public function __costruct($name){
         $this->name =$name;
      }
   
      function avg($math2,$english2){
         echo (($math2+$english2)/2). PHP_EOL;
      }
   }
   
   $a001_4 =new Student4("sato");
   echo $a001_4->name. PHP_EOL;
   
   $a002_4 =new Student4("tanaka");
   echo $a002_4->name. PHP_EOL;
   
?>

<?php

  class menber{
     
     public $number;
     public $name;
     
     
     public function __construct($number,$name){
        
        $this->number =$number;            //クラスごとに表示を変えることができる。
        $this->name =$name;
     }
     
     
     public function hello(){
        
        return"こんにちは,".$this->name. "!!! あなたのナンバーは".$this->number. "ですか？あっていればyesを間違っていればていればnoをお願いします。";
     }
     
  }
  
  $menber1 = new menber(32,"nishi");        //ここでインスタンス化
  $menber2 = new menber(107,"le nu nhu tu");
  
  echo $menber1->hello(). PHP_EOL;          //ここでインスタンス化したものを参照
  echo $menber2->hello(). PHP_EOL;
  
  ?>
  
  
  
<?php
    $str = "文字列です。"; // $strはstring（文字列）型
    $int_number = 4; // $int_numberはinteger（整数）型
    $arr = array(1,2,3,4); // $arrはarray（配列）型

    echo gettype($str) . PHP_EOL;
    echo gettype($int_number) . PHP_EOL;
    echo gettype($arr) . PHP_EOL;
?>