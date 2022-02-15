<!-- 
Snack A:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60-->

<?php 
    $matchesArr = [
        [
            'home' =>'Castelbuono',
            'challenger' => 'Montacatini Terme',
            'homePoints' => '3',
            'challengerPoints' => '0',
        ],
        [
            'home' => 'Otranto',
            'challenger' => 'Casteldaccia',
            'homePoints' => '1',
            'challengerPoints' => '0',
        ],
        [
            'home' => 'Cesenatico',
            'challenger' => 'Aci Trezza',
            'homePoints' => '0',
            'challengerPoints' => '2',
        ],
        [
            'home' => 'Albinoleffe',
            'challenger' => 'Crotone',
            'homePoints' => '152',
            'challengerPoints' => '251',
        ],
    ];
    //  var_dump($matchesArr)
    for($i = 0; $i < sizeof($matchesArr); $i++){ //Ciclo il mio array col solito ciclo for
        $homeTeam = $matchesArr[$i]["home"]; //creo variabile di appoggio all'interno dell'array, attribuendo il valore di home
        $challengerTeam = $matchesArr[$i]["challenger"]; //creo variabile di appoggio all'interno dell'array, attribuendo il valore di challenger
        $homePoints = $matchesArr[$i]["homePoints"]; //creo variabile di appoggio all'interno dell'array, attribuendo il valore di homePoints
        $challengerPoints = $matchesArr[$i]["challengerPoints"]; //creo variabile di appoggio all'interno dell'array, attribuendo il valore di challengerPoints
        echo "$homeTeam vs $challengerTeam | $homePoints - $challengerPoints <br>"; //stampo le squadre e i rispettivi punteggi
    }
     
    

?>
