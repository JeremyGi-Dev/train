<?php

namespace Tutoriel;

/**
 * Class Personnage
 */
class Personnage {

    protected static $max_vie = 120;

    /**
     * @var int
     */
    protected $vie = 80;

    /**
     * @var int
     */
    protected $atk = 20;

    /**
     * @var
     */
    protected $nom;

    /**
     * Personnage constructor.
     * @param $nom
     */
    public function __construct($nom){
        $this->nom = $nom;
    }

    /**
     * @param $nom
     */
    public function setNom($nom){
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getAtk(){
        return $this->atk;
    }

    /**
     * @return int
     */
    public function getVie(){
        return $this->vie;
    }

    /**
     * @param null $vie
     */
    public function regenerer($vie = null){

        if(is_null($vie)) {
            $this->vie = self::$max_vie;
        } else {
            $this->vie += $vie;
        }
    }

    /**
     * @return bool
     */
    public function mort(){
        return $this->vie <= 0;
    }

    /**
     *
     */
    protected function preventNegative(){
        if( $this->vie < 0){
            $this->vie = 0;
        }
    }

    /**
     * @param $cible
     */
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->preventNegative();
    }

}