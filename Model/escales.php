<?php

declare(strict_types=1);


class escales
{

    /** @var date */
    private DateTime $heureAtterissage;

    /** @var date */
    private DateTime $heureRedecollage;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }


    /**
     * Get the value of heureAtterissage
     */ 
    public function getHeureAtterissage()
    {
        return $this->heureAtterissage;
    }

    /**
     * Set the value of heureAtterissage
     *
     * @return  self
     */ 
    public function setHeureAtterissage($heureAtterissage)
    {
        $this->heureAtterissage = $heureAtterissage;

        return $this;
    }

    /**
     * Get the value of heureRedecollage
     */ 
    public function getHeureRedecollage()
    {
        return $this->heureRedecollage;
    }

    /**
     * Set the value of heureRedecollage
     *
     * @return  self
     */ 
    public function setHeureRedecollage($heureRedecollage)
    {
        $this->heureRedecollage = $heureRedecollage;

        return $this;
    }
}
