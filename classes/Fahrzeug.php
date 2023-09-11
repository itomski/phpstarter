<?php

class Fahrzeug {

    protected $kennzeichen;

    protected $marke;

    protected $typ;

    protected $baujahr;

    protected $status;

    /**
     * Get the value of kennzeichen
     */
    public function getKennzeichen()
    {
        return $this->kennzeichen;
    }

    /**
     * Set the value of kennzeichen
     */
    public function setKennzeichen($kennzeichen): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get the value of marke
     */
    public function getMarke()
    {
        return $this->marke;
    }

    /**
     * Set the value of marke
     */
    public function setMarke($marke): self
    {
        $this->marke = $marke;

        return $this;
    }

    /**
     * Get the value of typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set the value of typ
     */
    public function setTyp($typ): self
    {
        $this->typ = $typ;

        return $this;
    }

    /**
     * Get the value of baujahr
     */
    public function getBaujahr()
    {
        return $this->baujahr;
    }

    /**
     * Set the value of baujahr
     */
    public function setBaujahr($baujahr): self
    {
        $this->baujahr = $baujahr;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }
}