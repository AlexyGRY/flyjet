<?php

declare(strict_types=1);


class aeroport
{

    /** @var string */
    private string $aeroportDepart;

    /** @var string */
    private string $aeroportArrive;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }


    /**
     * Get the value of aeroportDepart
     */ 
    public function getAeroportDepart()
    {
        return $this->aeroportDepart;
    }

    /**
     * Set the value of aeroportDepart
     *
     * @return  self
     */ 
    public function setAeroportDepart($aeroportDepart)
    {
        $this->aeroportDepart = $aeroportDepart;

        return $this;
    }

    /**
     * Get the value of aeroportArrive
     */ 
    public function getAeroportArrive()
    {
        return $this->aeroportArrive;
    }

    /**
     * Set the value of aeroportArrive
     *
     * @return  self
     */ 
    public function setAeroportArrive($aeroportArrive)
    {
        $this->aeroportArrive = $aeroportArrive;

        return $this;
    }
}
