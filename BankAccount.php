<?php 

//toujours nommer le fichier exactement comme la classe
//UpperCamelCase

class BankAccount
{
    public $id; //numéro de compte
    private $balance = 0; //solde avec valeur par défaut 0
    public $overdraft = -50; //possibilité de découvert avec valeur par défaut
    public $lastUpdatedAt; //dernière date de mise à jour du compte

    //contient un tableau !
    public $owners = []; //ou array()

    //méthode = fonction à l'intérieur d'une classe
    public function debit($amount)
    {
        if(!is_numeric($amount)){
            die("Oops! amount should be numeric!");
        }

        //$this fait référence à l'instance actuelle dans laquelle on se trouve
        $this->balance = $this->balance - $amount;

        //on met à jour la date de mise à jour
        $this->lastUpdatedAt = date("Y-m-d");
    }

    //cette méthode ne sert qu'à lire le solde ! puisqu'on n'y a plus accès !
    //cette méthode s'appelle un getter - accesseur
    public function getBalance()
    {
        return $this->balance;
    }

    //permet d'ajouter du blé sur le compte
    public function credit($amount)
    {
        if(!is_numeric($amount)){
            die("Oops! amount should be numeric!");
        }
        $this->balance += $amount;
    }

    //setter ou mutateur 
    //permet de modifier une propriété private
    /*
    public function setBalance($amount)
    {
        $this->balance = $amount;
    }
    */
}