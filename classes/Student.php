<?php

class Student {

    protected $vorname;
    protected $nachname;
    protected $fach;
    protected $semester;
    protected $matrikelnr;

    function __construct(array $daten = [])
    {
        /*
        // Aufruf der Setter von Hand
        if(is_array($daten)) {
            $this->setVorname($daten['vorname']);
            // etc
        }
        */

        if($daten) {
            foreach($daten as $key => $val) {
                $setter = 'set'.ucfirst($key); // setvorname wird zu setVorname
                if(method_exists($this, $setter)) {
                    $this->$setter($val);
                }
            }
        }
    }

    /**
     * Get the value of vorname
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Set the value of vorname
     */
    public function setVorname($vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get the value of nachname
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set the value of nachname
     */
    public function setNachname($nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    /**
     * Get the value of fach
     */
    public function getFach()
    {
        return $this->fach;
    }

    /**
     * Set the value of fach
     */
    public function setFach($fach): self
    {
        $this->fach = $fach;

        return $this;
    }

    /**
     * Get the value of semester
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set the value of semester
     */
    public function setSemester($semester): self
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get the value of matrikelnr
     */
    public function getMatrikelnr()
    {
        return $this->matrikelnr;
    }

    /**
     * Set the value of matrikelnr
     */
    public function setMatrikelnr($matrikelnr): self
    {
        $this->matrikelnr = $matrikelnr;

        return $this;
    }
}
