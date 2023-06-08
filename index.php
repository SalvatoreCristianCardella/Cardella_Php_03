<?php
/*Compilare feedback settimanale
Rivedere la lezione
Recap
Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
Automobile
SUV
Utilitaria
Sportiva

Tenere il conto degli oggetti creati per ogni classe*/
class Cars{
    public $marchio;
    public $modello;
    public $nporte;
    public $prezzo;
    public $colore;
    public static $counter=0;
    public function __construct($marchio,$modello,$nporte,$prezzo,$colore){
        $this->marchio=$marchio;
        $this->modello=$modello;
        $this->nporte=$nporte;
        $this->prezzo=$prezzo;
        $this->colore=$colore;
        self::$counter++;
    }

}
class Suv extends Cars{
    public $altezza;
    public $rmotrici;
    public static $counter=0;
    public function __construct($marchio,$modello,$nporte,$prezzo,$colore,$altezza,$rmotrici){
        self::$counter++;
        $this->altezza=$altezza;
        $this->rmotrici=$rmotrici;
        parent::__construct($marchio,$modello,$nporte,$prezzo,$colore);

    }
}
//$suv= new Suv("jeep","renegade",3,23500,"rosso","2m",4);
//print_r($suv);

class Utilitaria extends Cars{
    public $posti;
    public $lunghezza;
    public static $counter=0;
    public function __construct($marchio,$modello,$nporte,$prezzo,$colore,$posti,$lunghezza){
        self::$counter++;
        $this->posti=$posti;
        $this->lunghezza=$lunghezza;
        parent::__construct($marchio,$modello,$nporte,$prezzo,$colore);

    }
}
//$utilitaria= new Utilitaria("subaru","impreza",3,50000,"blu",4,"3m");
//print_r($utilitaria);

class Sportiva extends Cars{
    public $motore;
    public $potenza;
    public $velocità;
    public static $counter=0;
    public function __construct($marchio,$modello,$nporte,$prezzo,$colore,$motore,$potenza,$velocità){
        self::$counter++;
        $this->motore=$motore;
        $this->potenza=$potenza;
        $this->velocità=$velocità;
        parent::__construct($marchio,$modello,$nporte,$prezzo,$colore);

    }
}
$sportiva= new Sportiva("Nissan","Skyline R34",3,500000,"blu","rb 26","900cv","300km/h");
print_r($sportiva);




?>