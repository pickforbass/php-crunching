<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\r\n", $string);

//print_r($dico);
echo "Ce dictionnaire compte " . count($dico) . "mots. <br>";


function check_char($nb){
    global $dico;
    $x=0;
    foreach($dico as $k=>$v){
        $q = strlen($dico[$k]);
        if ($q == $nb){
            $x++;
        }
    }
    echo "il y a $x mots de $nb caractères et plus. <br>";
}

check_char(15);

function checkcontentletter ($content){
    global $dico;
    $x = 0;
    foreach ($dico as $k=>$v){
        $value = strchr($dico[$k], "$content");
        if ($value){
            $x++;
        }
    }
    echo "Il y a $x mots qui contiennent la lettre $content. <br>";
}
checkcontentletter('w');

function finishletter ($endletter){
    global $dico;
    $x = 0;
    foreach ($dico as $k=>$v){
        $lastletter = substr($dico[$k], -1, 1);
        if ($lastletter == $endletter) {
            $x++;
        }
    }
    echo "Il y a $x mots finissant par $endletter. <br>";
}

finishletter('q');

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films


$nbfilms = count($top);

echo " il y a $nbfilms films dans le tableau.";

print_r($top);
//$top10 = array_multisort($top, SORT_DESC,);

