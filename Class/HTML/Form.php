<?php


namespace Tutoriel\HTML;
/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{

    /**
     * @var array Données utilisées par le formulaire
     */
    private $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * Form constructor.
     * @param array $data
     */
    public function __construct($data = array()){

        $this->data = $data;
    }

    /**
     * @param $html code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param $index string index de la valeur à récuperer
     * @return string
     */
    protected function getValue($index){

        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name){
        
        return $this->surround(
            '<input type"text" name="' .$name .'" value="' .$this->getValue($name) . '">'
        );
    }

    /**
     * @return string
     */
    public function submit(){
        
        return $this->surround('<button type"submit">envoyé</button>');
    }
}