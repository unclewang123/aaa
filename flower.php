<?php
    new flower;
    class flower{
       public function __construct()
       {
           $res = $this->rand(100,999);
           var_dump($res);
       }
       protected function rand($start='',$end='')
       {
           for($i=$start;$i<=$end;$i++)
           {
               $res = $this->index($i);
               if(!empty($res))$arr[] = $res;
           }
           return $arr;
       }
        protected function index($i)
       {
           $unit = ($i%10)*($i%10)*($i%10);
           $tens = floor(($i%100)/10)*floor(($i%100)/10)*floor(($i%100)/10);
           $hund = (floor($i/100))*(floor($i/100))*(floor($i/100));
           $sum = $unit+$tens+$hund;
           if($sum == $i) {
               return $i;
           }
       }
    }
?>