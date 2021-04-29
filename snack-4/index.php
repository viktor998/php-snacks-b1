<?php 

$students = [

    'Studente 1' =>[
        
        'nome' => 'Michaelo Viktor',
        'cognome' => 'Casubolo',
        'voti' => [
            'matematica' => 8,
            'informatica' => 7,
            'fisica' => 8
        ]
        
        
    ],
    'Studente 2' =>[
        
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'voti' => [
            'matematica' => 7,
            'informatica' => 7,
            'fisica' =>6
        ]
        
    ],
    'Studente 3' =>[
        
        'nome' => 'John',
        'cognome' => 'Doe',
        'voti' => [
            'matematica' => 8,
            'informatica' => 7,
            'fisica' => 7
        ]
        
        
    ],
];

$key = array_keys($students);


    for ($i=0; $i < count($students); $i++) { $somma = 0; ?>
        
        <div style='padding-top: 15px'>
            <?= $key[$i] . '<br>' ?>
            
            <span> Nome: <?= $students[$key[$i]]['nome'] . '<br>'?></span>
            <span> Cognome: <?= $students[$key[$i]]['cognome'] . '<br>'?></span>
          
            <?php 
            for ($j=0; $j < count($students[$key[$i]]['voti']); $j++) {  ?>
                
                <?php $key_voti = array_keys($students[$key[$i]]['voti']) ?>
                
                <span><?= $key_voti[$j] . ' : ' . $students[$key[$i]]['voti'][$key_voti[$j]] . '<br>'?>  </span>

                <?php 
                    $somma += $students[$key[$i]]['voti'][$key_voti[$j]];
                ?>
                <?php
            }

            $media = $somma / count($students[$key[$i]]['voti']);
            ?>
            <span> La media dei voti è:  <?= $media ?> </span>
            
        </div>
        <?php
    }

?>