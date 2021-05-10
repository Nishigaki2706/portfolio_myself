<?php
   
   $s=0;
    
    echo "あなたの得点は ${s}点です。". PHP_EOL;
    
    if($s<80){     
        print"合格点まであと". (80 - $s) . "点です。" . PHP_EOL;
        print"どんまい！" . PHP_EOL;
    }else{
         print"さすがです。" . PHP_EOL;
    }
?>
<?php
   for($i=1;$i<7;$i++){
       print "こんにちは".$i.  PHP_EOL;
   }
 ?>


<?php     
    for($j = 1; $j <= 9; $j++){
        for($i = 1; $i <=9; $i++){
            print "$j × $i= " . ($j * $i) .  PHP_EOL;//($j * $i)と.の間が全角になってて「Parse error: syntax error...」がでてきた。
        }
    }
?>
    