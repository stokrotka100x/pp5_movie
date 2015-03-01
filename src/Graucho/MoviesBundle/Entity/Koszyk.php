<?php
namespace Graucho\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="koszyk")
 * @ORM\Entity
 */
class Koszyk
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="tytul", type="string", length=255)
     */
    private $tytul;
    /**
     * @ORM\Column(name="cena", type="integer")
     */
    private $cena;
    /**
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;
    /**
     * @ORM\Column(name="data_utworzenia", type="datetime")
     */
    private $dataUtworzenia;
    /**
     * @ORM\Column(name="movie_id", type="integer")
     */
    private $movie;
    /**
     * @ORM\Column(name="done", type="integer")
     */
	private $isDone;
	
    public function getId()
    {
        return $this->id;
    }
    public function setTytul($tytul)
    {
        $this->tytul = $tytul;

        return $this;
    }
    public function getTytul()
    {
        return $this->tytul;
    }
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }
    public function getCena()
    {
        return $this->cena;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setDataUtworzenia($dataUtworzenia)
    {
        $this->dataUtworzenia = $dataUtworzenia;

        return $this;
    }
    public function getDataUtworzenia()
    {
        return $this->dataUtworzenia;
    }
    public function setMovie($movie)
    {
        $this->movie = $movie;
    }
    public function getMovie()
    {
        return $this->movie;
    }
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
    }
    public function getIsDone()
    {
        return $this->isDone;
    }
	
    public function __toString() {
        return $this->tytul;
    }
}
