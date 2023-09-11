<?php

class Adresse {

    protected $name;
    protected $strasse;
    protected $nr;
    protected $plz;
    protected $ort;

    function __construct($name, $strasse, $nr, $plz, $ort)
    {
        $this->name = $name;
        $this->strasse = $strasse;
        $this->nr = $nr;
        $this->plz = $plz;
        $this->ort = $ort;
    }
    
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of strasse
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Set the value of strasse
     */
    public function setStrasse($strasse): self
    {
        $this->strasse = $strasse;

        return $this;
    }

    /**
     * Get the value of nr
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set the value of nr
     */
    public function setNr($nr): self
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get the value of plz
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Set the value of plz
     */
    public function setPlz($plz): self
    {
        $this->plz = $plz;

        return $this;
    }

    /**
     * Get the value of ort
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Set the value of ort
     */
    public function setOrt($ort): self
    {
        $this->ort = $ort;

        return $this;
    }
}