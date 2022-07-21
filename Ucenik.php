<?php

class Ucenik
{
    public $ime;
    public $prezime;
    public $prosjek;
    public $lista = array();
    
    
    function setIme($i)
    {
        $this->ime = $i;
    }
    function setPrezime($p)
    {
        $this->prezime = $p;
    }
    function setProsjek($po)
    {
        $this->prosjek = $po;
    }
    function getIme()
    {
        return $this->ime;
    }
    function getPrezime()
    {
        return $this->prezime;
    }
    function getProsjek()
    {
        return $this->prosjek;
    }
    function Ispis()
    {
        foreach ($this->lista as $key => $val)
        {
            if($val->getProsjek()>4.5)
            {
              echo $val->getIme() . " " . $val->getPrezime() . " - " . $val->getProsjek() . "\n";  
            }
        }
    }
}
?>