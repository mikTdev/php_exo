<?php
// I
echo"<br>"."Exercice I"."<br>";
$nba = 35;
$nbb = 29;
$sum = $nba + $nbb;
echo "l’addition du nombre 1 et du nombre 2 est égale à :".$sum."." ;
// II
echo"<br>"."Exercice II"."<br>";
$string = "chaine de caractère";
$int = $sum;
$float = 3.14;
$bool = true;
$array = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
class Montre{
    public $mecanisme = "quartz";
    public $reserveheure = 70;
    public $dimensionboitier = 38.5;
    public $prixeuros = 2499.00;
};
$object = new Montre();
$tableau = array("Rolex","Jaeger Lecoultre","Swatch","Lip");
$nul = null;
// manque type ressource

$arrayAllTypes = array($string,$int,$float,$bool,$array,$object,$tableau,$nul);
foreach ($arrayAllTypes as $values){var_dump($values);};

// III
echo"<br>"."Exercice III"."<br>";
$isActive = false;
$genre = 'Troll';
echo $compte = ($isActive && ($genre == "Troll")) ? "Le compte du personnage troll est actif." : "Le compte du personnage troll est inactif.";

// IV
echo"<br>"."Exercice IV"."<br>";
$nombrePairOrImpair = 11;
echo $isPair = ( ($nombrePairOrImpair % 2) == 0) ? "Le nombre est pair." : "Le nombre est impair.";

// V
echo"<br>"."Exercice V"."<br>";
$nombreMultipleDe = 15;
echo $isMultipleDe = (( ($nombreMultipleDe % 3) == 0 ) || (($nombreMultipleDe % 5) == 0 )) ? "Le nombre est un multiple de 3 et de 5." : "Le nombre n'est pas un multiple de 3 et de 5.";

// VI 
echo"<br>"."Exercice VI"."<br>";
$nbc = -34;

echo"<br>".(abs($nbc))."<br>";

// VII
echo"<br>"."Exercice VII"."<br>";
echo(idate("w"));

// VIII
echo"<br>"."Exercice VIII"."<br>";
$nbf = -84;
$nbg = -48;

function myNotFunnyFunction($numA,$numB){  
    $numMax = max($numA,$numB);
    $numMin = min($numA,$numB);
    while ($numMax > ($numMin + 1)) {
        $numMax--;
        echo"$numMax"."  ";      
    }; 
};   
    
myNotFunnyFunction($nbf,$nbg);    

// IX
echo"<br>"."Exercice IX"."<br>";
function myAnotherNotFunnyFonction($numA,$numB,$numC,$numD){
    if (($numA+ $numB) == ($numC*$numD)) {
    echo "la somme de $numA et $numB est égale à la multiplication de $numC et $numD";
    } 
    elseif (($numA+ $numB) > ($numC*$numD))
    {echo "la somme de $numA et $numB est supérieure à la multiplication de $numC et $numD";
    }
    else{echo "la somme de $numA et $numB est inférieure à la multiplication de $numC et $numD";
    }
};

myAnotherNotFunnyFonction(3,3,2,3);

// X
echo"<br>"."Exercice X"."<br>";
function myParFunction($num){
    $numPa = array();
    $numImpa = array();
    foreach($num as $values){
    if (($values % 2) == 0) {
    array_push($numPa, $values); print_r($numPa);
    } 
    elseif (($values % 2) <> 0)
    {
    array_push($numImpa, $values); print_r($numImpa);
    } 
    else{}
    };       
};

$numTo = array(2,7,9,10,12,14);
myParFunction($numTo);

// XI
echo"<br>"."Exercice XI"."<br>";
function myFunctionThree($num){
    $numDivByThree = array();
    foreach($num as $values){
        if (($values % 3) == 0) {
        array_push($numDivByThree, $values); print_r($numDivByThree);
        } 
        else {}
    };
    };
    $numFreeOrThree = array(2,7,9,10,12,14);
    myFunctionThree($numFreeOrThree);


// XII
echo"<br>"."Exercice XII"."<br>";
function mySummerSum($num){
    $sumNum = 0;
    foreach($num as $values){
        $sumNum += $values; 
        return $sumNum;
    }
};

$numList = array(56,98,54,4,235);
echo "Sum of my number is ".mySummerSum($numList);

// XIII
echo"<br>"."Exercice XIII"."<br>";
function myAverageSum($num){
    $sumNum = 0;
    foreach($num as $values){
        $sumNum += $values; 
        return $sumNum/count($num);
    }
};

$numList = array(56,98,54,4,235);
echo "Average is ".mySummerSum($numList);
 
?>
