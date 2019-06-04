<?php 

echo "<pre>";

//crée une constante, mieux que les variables globales
//sa valeur ne peut pas changer
define("USERNAME", "bla");

echo USERNAME;
echo "<br>";

$guillaume = [
    "firstName" => "Guillaume",
    "lastName" => "Sylvestre",
    "birthDate" => "1981-11-11",
    "weight" => 120,
];

echo $guillaume['firstName'];

$guillaume['firstName'] .= "-Paul";

$guillaume['weight'] += 10;

print_r($guillaume);

function presentation($personne)
{
    //mauvaise pratique
    //global $guillaume; 

    $pif = "paf";

    echo "Bonjour, je m'appelle " . $personne['firstName'];
}

presentation($guillaume);

//include("yo.php");

//- ------- - -- - - - /
//ne pas oublier d'inclure la définition de la classe avant de l'utiliser
require("BankAccount.php");

//créer une nouvelle variable qui contient une instance de la classe BankAccount
//instanciation de classe
$accountA = new BankAccount();

//hydrate l'instance
//affecte une valeur à la propriété id de mon instance
$accountA->id = "39203929320932";
$accountA->credit(3000);
$accountA->overdraft = -300;
$accountA->lastUpdatedAt = date("Y-m-d");

$accountB = new BankAccount();
$accountB->id = "fd9090239r90203";
$accountB->credit(0.15);
//pour tester la valeur défaut définie dans la classe
//$accountB->overdraft = 0;
$accountB->lastUpdatedAt = "2019-02-02";

//on appelle la méthode qui est définie dans la classe
$accountA->debit(15);

echo $accountA->getBalance();

//
//$accountA->balance = 1000;

echo "<br>";
var_dump($accountA);
var_dump($accountB);