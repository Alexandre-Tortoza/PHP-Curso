<?php
$contaCorrente = [
    
    13209148961 => [
            'titular' => 'Alex',
            'Saldo' => 1800

    ],
    
    14208147951 => [
        'titular' => 'Maria',
        'Saldo' =>2000
    ],

   123464838754 => [
       'titular' => 'EEduardo',
       'saldo' => 5000
   ]

];

foreach ($contaCorrente as $cpf => $conta){
    echo $cpf . PHP_EOL;

};
