<?php
    if(isset($_POST['enviar'])){
        function operaciones($x,$y,$ope){
            if($ope=='S'){
                $re= "la suma es ".($x+$y);
            }if($ope=='R'){
                $re= "la resta es de ".($x - $y);
            }if ($ope=='M'){
                $re ="la multiplicacion es de ".($x*$y);
            }elseif ($ope =='D') {
                $re= "la division es de ".($x/$y);
        }
        echo '<p>'.$re.'</p>';   
        }
        operaciones($_POST['n1'], $_POST['n2'],$_POST['op']);
        
    }
?>

