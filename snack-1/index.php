<?php
    $campionato = [
            [
                'sq_casa' => 'Chicago Bulls',
                'sq_ospite' => 'Lakers',
                'pt_casa' => 28,
                'pt_ospite' => 22
            ],

            [
                'sq_casa' => 'Boston Celtics',
                'sq_ospite' => 'Clippers',
                'pt_casa' => 45,
                'pt_ospite' => 53
            ],
            [
                'sq_casa' => 'Brooklin Nets',
                'sq_ospite' => 'Cleveland Cavaliers',
                'pt_casa' => 32,
                'pt_ospite' => 29
            ]
        ];



        for ($i=0; $i < count($campionato); $i++) { ?>

           <span> <?= ($campionato[$i]['sq_casa'] . ' - ' . $campionato[$i]['sq_ospite'] . ' | ' .  $campionato[$i]['pt_casa'] . ' - ' . $campionato[$i]['pt_ospite'] . '<br>');?> </span> 
           <?php
        }


?>