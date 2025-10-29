<?php

declare(strict_types=1);


class métroples
{

    /** @var string */
    private string $nom;

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
}
