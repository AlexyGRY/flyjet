<?php

declare(strict_types=1);


class vols
{

    /** @var string */
    private string $nom;

    /** @var string */
    private string $destination;

    /** @var string */
    private string $aeroportDepart;

    /** @var string */
    private string $aeroportArrive;

    /** @var date */
    private DateTime $dateDepart;

    /** @var date */
    private DateTime $dateArrive;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * @return bool
     */
    public function reservationOuverte(): bool
    {
        // TODO implement here
        return false;
    }

    /**
     * @return bool
     */
    public function confirme(): bool
    {
        // TODO implement here
        return false;
    }

    /**
     * @return bool
     */
    public function annule(): bool
    {
        // TODO implement here
        return false;
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of destination
     */ 
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set the value of destination
     *
     * @return  self
     */ 
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
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

    /**
     * Get the value of dateDepart
     */ 
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set the value of dateDepart
     *
     * @return  self
     */ 
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get the value of dateArrive
     */ 
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set the value of dateArrive
     *
     * @return  self
     */ 
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }
}
