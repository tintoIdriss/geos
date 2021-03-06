<?php
namespace Geos\GeoEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @author Patindsaongo SAM
 * @ORM\Entity
 */

class Lot extends Zoi {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\generatedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @var string nom
	 * @ORM\Column(type="string", length="30")
	 */
	protected $numero;
	
	/**
	 * @var Section section
	 * @ORM\ManyToOne(targetEntity="Section", inversedBy ="lots")
	 * @ORM\JoinColumn(name="section_id", referencedColumnName="id")
	 */
	protected $section;
	
	/**
	 * @var Section sections
	 * @ORM\OneToMany(targetEntity="Parcelle", mappedBy="lot")
	 */
	protected $parcelles;
    /**
     * @var geometry $geometrie
     */
    protected $geometrie;

    /**
     * @var Geos\GeoEntityBundle\Entity\Poi
     */
    protected $pois;

    public function __construct()
    {
        $this->parcelles = new \Doctrine\Common\Collections\ArrayCollection();
    	$this->pois = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set numero
     *
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set geometrie
     *
     * @param geometry $geometrie
     */
    public function setGeometrie($geometrie)
    {
        $this->geometrie = $geometrie;
    }

    /**
     * Get geometrie
     *
     * @return geometry 
     */
    public function getGeometrie()
    {
        return $this->geometrie;
    }

    /**
     * Set section
     *
     * @param Geos\GeoEntityBundle\Entity\Section $section
     */
    public function setSection(\Geos\GeoEntityBundle\Entity\Section $section)
    {
        $this->section = $section;
    }

    /**
     * Get section
     *
     * @return Geos\GeoEntityBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Add parcelles
     *
     * @param Geos\GeoEntityBundle\Entity\Parcelle $parcelles
     */
    public function addParcelle(\Geos\GeoEntityBundle\Entity\Parcelle $parcelles)
    {
        $this->parcelles[] = $parcelles;
    }

    /**
     * Get parcelles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getParcelles()
    {
        return $this->parcelles;
    }

    /**
     * Add pois
     *
     * @param Geos\GeoEntityBundle\Entity\Poi $pois
     */
    public function addPoi(\Geos\GeoEntityBundle\Entity\Poi $pois)
    {
        $this->pois[] = $pois;
    }

    /**
     * Get pois
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPois()
    {
        return $this->pois;
    }
    
    public function __toString(){
    	 
    	return "".$this->numero;
    }
}