<?php

namespace Rhox\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Rhox\AdminBundle\Entity\Edition;

/**
 * Card
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Rhox\AdminBundle\Entity\CardRepository")
 */
class Card
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
     * @ORM\Column(name="multiverse_id", type="string", length=255)
     */
    private $multiverseId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var Edition
     *
     * @ORM\ManyToOne(targetEntity="Rhox\AdminBundle\Entity\Edition", inversedBy="cards")
     * @ORM\JoinColumn(name="edition_id", referencedColumnName="id")
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="rarity", type="string", length=255)
     */
    private $rarity;

    /**
     * @var string
     *
     * @ORM\Column(name="mana_cost", type="string", length=255)
     */
    private $manaCost;

    /**
     * @var string
     *
     * @ORM\Column(name="converted_mana", type="string", length=255)
     */
    private $convertedMana;

    /**
     * @var string
     *
     * @ORM\Column(name="power", type="string", length=255)
     */
    private $power;

    /**
     * @var string
     *
     * @ORM\Column(name="toughness", type="string", length=255)
     */
    private $toughness;

    /**
     * @var string
     *
     * @ORM\Column(name="loyalty", type="string", length=255)
     */
    private $loyalty;

    /**
     * @var string
     *
     * @ORM\Column(name="ability", type="text")
     */
    private $ability;

    /**
     * @var string
     *
     * @ORM\Column(name="flavor", type="text")
     */
    private $flavor;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=255)
     */
    private $artist;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var float
     *
     * @ORM\Column(name="rating", type="float")
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="price_mtgnet", type="decimal", precision=10, scale=2)
     */
    private $priceMtgnet;

    /**
     * @var float
     *
     * @ORM\Column(name="price_planeswalker", type="decimal", precision=10, scale=2)
     */
    private $pricePlaneswalker;

    /**
     * @var float
     *
     * @ORM\Column(name="price_flamberg", type="decimal", precision=10, scale=2)
     */
    private $priceFlamberg;

    /**
     * @var float
     *
     * @ORM\Column(name="price_dwarf", type="decimal", precision=10, scale=2)
     */
    private $priceDwarf;

    /**
     * @var float
     *
     * @ORM\Column(name="price_min", type="decimal", precision=10, scale=2)
     */
    private $priceMin;

    /**
     * @var float
     *
     * @ORM\Column(name="price_max", type="decimal", precision=10, scale=2)
     */
    private $priceMax;

    /**
     * @var float
     *
     * @ORM\Column(name="price_avg", type="decimal", precision=10, scale=2)
     */
    private $priceAvg;


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
     * Set multiverseId
     *
     * @param string $multiverseId
     * @return Card
     */
    public function setMultiverseId($multiverseId)
    {
        $this->multiverseId = $multiverseId;
    
        return $this;
    }

    /**
     * Get multiverseId
     *
     * @return string 
     */
    public function getMultiverseId()
    {
        return $this->multiverseId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Card
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
     * Set edition
     *
     * @param Edition $edition
     * @return Card
     */
    public function setEdition(Edition $edition)
    {
        $this->edition = $edition;
    
        return $this;
    }

    /**
     * Get edition
     *
     * @return Edition 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Card
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rarity
     *
     * @param string $rarity
     * @return Card
     */
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;
    
        return $this;
    }

    /**
     * Get rarity
     *
     * @return string 
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set manaCost
     *
     * @param string $manaCost
     * @return Card
     */
    public function setManaCost($manaCost)
    {
        $this->manaCost = $manaCost;
    
        return $this;
    }

    /**
     * Get manaCost
     *
     * @return string 
     */
    public function getManaCost()
    {
        return $this->manaCost;
    }

    /**
     * Set convertedMana
     *
     * @param string $convertedMana
     * @return Card
     */
    public function setConvertedMana($convertedMana)
    {
        $this->convertedMana = $convertedMana;
    
        return $this;
    }

    /**
     * Get convertedMana
     *
     * @return string 
     */
    public function getConvertedMana()
    {
        return $this->convertedMana;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return Card
     */
    public function setPower($power)
    {
        $this->power = $power;
    
        return $this;
    }

    /**
     * Get power
     *
     * @return string 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set toughness
     *
     * @param string $toughness
     * @return Card
     */
    public function setToughness($toughness)
    {
        $this->toughness = $toughness;
    
        return $this;
    }

    /**
     * Get toughness
     *
     * @return string 
     */
    public function getToughness()
    {
        return $this->toughness;
    }

    /**
     * Set loyalty
     *
     * @param string $loyalty
     * @return Card
     */
    public function setLoyalty($loyalty)
    {
        $this->loyalty = $loyalty;
    
        return $this;
    }

    /**
     * Get loyalty
     *
     * @return string 
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Set ability
     *
     * @param string $ability
     * @return Card
     */
    public function setAbility($ability)
    {
        $this->ability = $ability;
    
        return $this;
    }

    /**
     * Get ability
     *
     * @return string 
     */
    public function getAbility()
    {
        return $this->ability;
    }

    /**
     * Set flavor
     *
     * @param string $flavor
     * @return Card
     */
    public function setFlavor($flavor)
    {
        $this->flavor = $flavor;
    
        return $this;
    }

    /**
     * Get flavor
     *
     * @return string 
     */
    public function getFlavor()
    {
        return $this->flavor;
    }

    /**
     * Set artist
     *
     * @param string $artist
     * @return Card
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    
        return $this;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set rating
     *
     * @param float $rating
     * @return Card
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return float 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Card
     */
    public function setColor($color)
    {
        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Card
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceMtgnet
     *
     * @param float $priceMtgnet
     * @return Card
     */
    public function setPriceMtgnet($priceMtgnet)
    {
        $this->priceMtgnet = $priceMtgnet;
    
        return $this;
    }

    /**
     * Get priceMtgnet
     *
     * @return float 
     */
    public function getPriceMtgnet()
    {
        return $this->priceMtgnet;
    }

    /**
     * Set pricePlaneswalker
     *
     * @param float $pricePlaneswalker
     * @return Card
     */
    public function setPricePlaneswalker($pricePlaneswalker)
    {
        $this->pricePlaneswalker = $pricePlaneswalker;
    
        return $this;
    }

    /**
     * Get pricePlaneswalker
     *
     * @return float 
     */
    public function getPricePlaneswalker()
    {
        return $this->pricePlaneswalker;
    }

    /**
     * Set priceFlamberg
     *
     * @param float $priceFlamberg
     * @return Card
     */
    public function setPriceFlamberg($priceFlamberg)
    {
        $this->priceFlamberg = $priceFlamberg;
    
        return $this;
    }

    /**
     * Get priceFlamberg
     *
     * @return float 
     */
    public function getPriceFlamberg()
    {
        return $this->priceFlamberg;
    }

    /**
     * Set priceDwarf
     *
     * @param float $priceDwarf
     * @return Card
     */
    public function setPriceDwarf($priceDwarf)
    {
        $this->priceDwarf = $priceDwarf;
    
        return $this;
    }

    /**
     * Get priceDwarf
     *
     * @return float 
     */
    public function getPriceDwarf()
    {
        return $this->priceDwarf;
    }

    /**
     * Set priceMin
     *
     * @param float $priceMin
     * @return Card
     */
    public function setPriceMin($priceMin)
    {
        $this->priceMin = $priceMin;
    
        return $this;
    }

    /**
     * Get priceMin
     *
     * @return float 
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * Set priceMax
     *
     * @param float $priceMax
     * @return Card
     */
    public function setPriceMax($priceMax)
    {
        $this->priceMax = $priceMax;
    
        return $this;
    }

    /**
     * Get priceMax
     *
     * @return float 
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }

    /**
     * Set priceAvg
     *
     * @param float $priceAvg
     * @return Card
     */
    public function setPriceAvg($priceAvg)
    {
        $this->priceAvg = $priceAvg;
    
        return $this;
    }

    /**
     * Get priceAvg
     *
     * @return float 
     */
    public function getPriceAvg()
    {
        return $this->priceAvg;
    }
}