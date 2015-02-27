<?php
namespace Graucho\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validation\Constraints AS Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="movie")
 */
class Movie{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    /**
     * @ORM\Column(type="integer")
     */
    protected $value;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $img;
    /**
     * @ORM\Column(name="gerne" type="integer")
     */
    protected $gerne;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $source;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $opis;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $aktorzy;
    /**
     * @ORM\Column(type="date")
     */
    protected $data;
    public function __construct()
    {
        $this->recenzje = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getValue(){
        return $this->value;
    }
    public function setValue($value){
        $this->value = $value;
    }
    public function getImg(){
        return $this->img;
    }
    public function setImg($img){
        $this->img = $img;
    }
    public function getGerne(){
        return $this->gerne;
    }
    public function setGerne($gerne){
        $this->gerne = $gerne;
    }
    public function getSource(){
        return $this->source;
    }
    public function setSource($source){
        $this->source = $source;
    }
    public function getOpis(){
        return $this->opis;
    }
    public function setOpis($opis){
        $this->opis = $opis;
    }
    public function getAktorzy(){
        return $this->aktorzy;
    }
    public function setAktorzy($aktorzy){
        $this->aktorzy = $aktorzy;
    }
    public function getData(){
        return $this->data;
    }
    public function setData($data){
        $this->data = $data;
    }
}

