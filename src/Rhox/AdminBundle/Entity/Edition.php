<?php

namespace Rhox\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Rhox\AdminBundle\Entity\Card;

/**
 * Edition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rhox\AdminBundle\Entity\EditionRepository")
 */
class Edition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="code_magiccards", type="string", length=255)
     */
    private $codeMagiccards;

    /**
     * @var string
     *
     * @ORM\Column(name="code_mtgnet", type="string", length=255)
     */
    private $codeMtgnet;

    /**
     * @var string
     *
     * @ORM\Column(name="code_gatherer", type="string", length=255)
     */
    private $codeGatherer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_promo", type="boolean")
     */
    private $isPromo;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     * 
     * @ORM\OneToMany(targetEntity="Rhox\AdminBundle\Entity\Card", mappedBy="edition")
     */
    private $cards;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Edition
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Edition
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set codeMagiccards
     *
     * @param string $codeMagiccards
     * @return Edition
     */
    public function setCodeMagiccards($codeMagiccards)
    {
        $this->codeMagiccards = $codeMagiccards;
    
        return $this;
    }

    /**
     * Get codeMagiccards
     *
     * @return string 
     */
    public function getCodeMagiccards()
    {
        return $this->codeMagiccards;
    }

    /**
     * Set codeMtgnet
     *
     * @param string $codeMtgnet
     * @return Edition
     */
    public function setCodeMtgnet($codeMtgnet)
    {
        $this->codeMtgnet = $codeMtgnet;
    
        return $this;
    }

    /**
     * Get codeMtgnet
     *
     * @return string 
     */
    public function getCodeMtgnet()
    {
        return $this->codeMtgnet;
    }

    /**
     * Set codeGatherer
     *
     * @param string $codeGatherer
     * @return Edition
     */
    public function setCodeGatherer($codeGatherer)
    {
        $this->codeGatherer = $codeGatherer;
    
        return $this;
    }

    /**
     * Get codeGatherer
     *
     * @return string 
     */
    public function getCodeGatherer()
    {
        return $this->codeGatherer;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Edition
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set isPromo
     *
     * @param boolean $isPromo
     * @return Edition
     */
    public function setIsPromo($isPromo)
    {
        $this->isPromo = $isPromo;
    
        return $this;
    }

    /**
     * Get isPromo
     *
     * @return boolean 
     */
    public function getIsPromo()
    {
        return $this->isPromo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cards = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add cards
     *
     * @param \Rhox\AdminBundle\Entity\Card $cards
     * @return Edition
     */
    public function addCard(\Rhox\AdminBundle\Entity\Card $cards)
    {
        $this->cards[] = $cards;
    
        return $this;
    }

    /**
     * Remove cards
     *
     * @param \Rhox\AdminBundle\Entity\Card $cards
     */
    public function removeCard(\Rhox\AdminBundle\Entity\Card $cards)
    {
        $this->cards->removeElement($cards);
    }

    /**
     * Get cards
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCards()
    {
        return $this->cards;
    }
}