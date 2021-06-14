<?php

// Creo la Classe "Movie" 
class Movie {

    // Creo delle variabili d'istanza
    public $nome;
    public $cognome;
    public $eta;
    public $email;

    // Creo Constructo
    function __construct($nome , $cognome , $eta , $email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
        $this->email = $email;
    }
}

$paperino = new Movie("Alessandro", "Sestili", 24, "sestilialessandro@gmail.com");
$topolino = new Movie("Simone", "Casetti", 56, "asd@gmail.com");


echo $paperino->nome;
echo $paperino->cognome;
echo $paperino->eta;
echo $paperino->email;

echo $topolino->nome;
echo $topolino->cognome;
echo $topolino->eta;
echo $topolino->email;





