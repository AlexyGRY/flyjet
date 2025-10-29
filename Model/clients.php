<?php

declare(strict_types=1);


class clients
{

    /** @var string */
    private string $nom;

    /** @var string */
    private string $prenom;

    /** @var int */
    private int $nbPassager;

    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nbPassager
     */ 
    public function getNbPassager()
    {
        return $this->nbPassager;
    }

    /**
     * Set the value of nbPassager
     *
     * @return  self
     */ 
    public function setNbPassager($nbPassager)
    {
        $this->nbPassager = $nbPassager;

        return $this;
    }
}
