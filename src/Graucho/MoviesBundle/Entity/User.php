<?php
namespace Graucho\MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

 
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * 
 */
class User extends BaseUser
{
    /**
    * @ORM\OneToMany(targetEntity="Order", mappedBy="fos_user")
    */
    protected $orders;

    public function _construct(){
		parent::_construct();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addOrders(\Graucho\MoviesBundle\Entity\Order $orders){
        $this->orders[] = $orders;
    }

    public function removeOrders(\Graucho\MoviesBundle\Entity\Order $orders){
        $this->orders->removeElement($orders);
    }

    public function getId(){
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPlainPassword(){
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function getOrders(){
        return $this->orders;
    }
}
