# questsArray
<?php

$moviesIndiana = [ 
    'Indiana Jones et la dernière croisade '=> ['Harrison Ford', 'Karen Alen', 'Paul Freeman'],
    'Indiana Jones et le Temple maudit' => ['Harrison Ford', 'Kate cabshaw', 'Ke Huy Quan'],
    "Les Aventuriers de l'arche perdue" => ['Harrison Ford', 'Sean Connery', 'Alison Doody'],
    ];
    

    foreach ($moviesIndiana as $movie =>list($firstActor, $secondActor, $thirdActor )) {
        
        echo "Dans le film". " " . $movie . ", les principaux acteurs sont : \n". " $firstActor\n $secondActor\n $thirdActor\n";
    
    }
    

?>
