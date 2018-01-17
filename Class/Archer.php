<?php

namespace Tutoriel;

/**
 * Class Archer
 */
class Archer extends Personnage{

    /**
     * @var int
     */
    protected $vie = 40;

    /**
     * Archer constructor.
     * @param $nom
     */
    public function __construct($nom)
    {
        $this->vie = $this->vie / 2;

        parent::__construct($nom);
    }

    /**
     * @param $cible
     */
    public function attaque($cible){

        $cible->vie -= $this->atk;

        parent::attaque($cible);

    }
}