<?php
class myLibClass{
    
    public static function findReplacementStr($i){
        
        $label=$i;
        if(is_int($i)){
            switch($i){

                case ($i%3 == 0 && $i%5 ==0):            
                    $label = 'Linianos';
                    break;
                case ($i%3 == 0 ):
                    $label = 'Linio';
                    break;        
                case ($i%5 == 0 ):
                    $label = 'IT';
                    break;  
                default:
                    $label=$i;
                    break;            
            }
        }
        
        return $label;
    }
}

function printNumbers(){
        
        for($i=1;$i<=100;$i++){
            
               $disp = myLibClass::findReplacementStr($i);
               echo "$i  ==>  $disp <br>";
        }
 }
 
echo "<b>Print numbers from 1 - 100 ..... </b>\n<br>";
printNumbers();

?>
