<?php

   
   $conta1 = [ 
        'titular' => 'Alex',
        'saldo ' => 1800
   ];
     

   $conta2 = [
       'titular' => 'Eduardo',
       'saldo' => 2000

   ];

   $conta3 = [
       'titular' => 'Maria',
       'saldo' => 5000
   ];


   $contaCorrente = [$conta1, $conta2, $conta3];

/*
for($i = 0; $i < count($contaCorrente);$i++){
    echo $contaCorrente[$i] ['titular']. PHP_EOL;
}
*/

foreach ($contaCorrente as $conta){
    echo $conta ['titular']. PHP_EOL;
}

