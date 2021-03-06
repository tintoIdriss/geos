<?php
namespace Geos\SanteBundle\Entity;

use Geos\GeoEntityBundle\Entity\Poi,
	Geos\GeoEntityBundle\Entity\Zoi,
	Doctrine\ORM\Mapping as ORM,
	Geos\GeoEntityBundle\Lib\Point;

/**
 * @author SAM Patindsaongo Robert
 * @ORM\Entity
 */

class CentreSante extends Poi {
	
	/**
	 * @var integer id
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\generatedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @var string nom
	 * @ORM\Column(type="string")
	 */
	protected $nom;
	
	/**
	 * @var string categorie
	 * @ORM\Column(type="string")
	 */
	protected $categorie;
	
	/**
	 * @var string propriete
	 * @ORM\Column(type="string")
	 */
	protected $propriete;
	
	/**
	 * @var date creation
	 * @ORM\Column(type="date")
	 */
	protected $creation;
	
	/**
	 * @var 
	 * @ORM\OneToMany(targetEntity="Agent", mappedBy="centreSante")
	 */
	protected $agents;

    /**
     * @var string $status
     */
    protected $status;

    /**
     * @var geometry $geometrie
     */
    protected $geometrie;

    /**
     * @var Geos\GeoEntityBundle\Entity\Zoi
     */
    protected $zoi;

    public function __construct()
    {
        $this->agents = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set propriete
     *
     * @param string $propriete
     */
    public function setPropriete($propriete)
    {
        $this->propriete = $propriete;
    }

    /**
     * Get propriete
     *
     * @return string 
     */
    public function getPropriete()
    {
        return $this->propriete;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Add agents
     *
     * @param Geos\SanteBundle\Entity\Agent $agents
     */
    public function addAgent(\Geos\SanteBundle\Entity\Agent $agents)
    {
        $this->agents[] = $agents;
    }

    /**
     * Get agents
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAgents()
    {
        return $this->agents;
    }

    /**
     * Set zoi
     *
     * @param Geos\GeoEntityBundle\Entity\Zoi $zoi
     */
    public function setZoi(\Geos\GeoEntityBundle\Entity\Zoi $zoi)
    {
        $this->zoi = $zoi;
    }

    /**
     * Get zoi
     *
     * @return Geos\SanteBundle\Entity\Zoi 
     */
    public function getZoi()
    {
        return $this->zoi;
    }
    
    public function __toString(){
    	return $this->nom;
    }

    /**
     * Set creation
     *
     * @param date $creation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    }

    /**
     * Get creation
     *
     * @return date 
     */
    public function getCreation()
    {
        return $this->creation;
    }
}