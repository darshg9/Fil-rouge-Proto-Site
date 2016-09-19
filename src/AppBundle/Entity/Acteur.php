<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acteur
 *
 * @ORM\Table(name="acteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ActeurRepository")
 */
class Acteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity="Role", mappedBy="acteur")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite", type="string", length=255)
     */
    private $nationalite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="propositionsActeurs")
     */
    private $auteurProposition;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", nullable=true)
     */
    private $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean", nullable=false)
     */
    private $valide;

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
     * @return Acteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        $this->nomComplet = $this->nom." ".$this->prenom;

        return $this;
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
     * Set prenom
     *
     * @param string $prenom
     * @return Acteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        $this->nomComplet = $this->nom." ".$this->prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function addRoles($roles) {

        $this->roles[] = $roles;
        return $this;

    }

    public function getRoles() {

        return $this->roles;

    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Acteur
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Acteur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function getAuteurProposition() {

        return $this->auteurProposition;

    }

    public function setAuteurProposition($auteurProposition) {

        $this->auteurProposition = $auteurProposition;
        $auteurProposition->addPropositionsActeurs($this)->addActivite(["type" => "acteur", "cible" => $this]);
        return $this;

    }

    public function getUrl() {

        return $this->url;

    }

    public function setUrl($url) {

        $this->url = $url;
        return $this;

    }

    public function getValide() {

        return $this->valide;

    }

    public function setValide($valide) {

        $this->valide = $valide;
        return $this;

    }

    public function getNomComplet(){

        $nomComplet = $this->prenom." ".$this->nom;
        return $nomComplet;

    }


}
