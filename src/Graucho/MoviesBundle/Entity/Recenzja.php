<?php
namespace Graucho\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="recenzja")
 * @ORM\Entity
 */
class Recenzja
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
     * @var string
     *
     * @ORM\Column(name="tresc", type="string", length=255)
     */
    private $tresc;
    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_utworzenia", type="datetime")
     */
    private $dataUtworzenia;
//    **
//     *
//     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="recenzja")
//     * @JoinColumn(name="movie_id", referencedColumnName="id")
//     */
	/**
	@ORM\Column(name="movie", type="integer")
	*/
    private $movie;
	
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
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }
    public function getTresc()
    {
        return $this->tresc;
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
}
