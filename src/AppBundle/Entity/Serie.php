<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var int
     *
     * @ORM\Column(name="Annee_debut", type="integer", nullable=true)
     */
    private $anneeDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="Note", type="float", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="Synopsis", type="text")
     */
    private $synopsis;

    /**
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="abonnements")
     */
    private $abonnes;
    
    /**
     * @ORM\OneToMany(targetEntity="Role", mappedBy="serie")
     */
    private $roles;

    /**
     * @ORM\ManyToOne(targetEntity="Realisateur", inversedBy="series")
     */
    private $realisateur;

    /**
     * @ORM\OneToMany(targetEntity="Saison", mappedBy="serie")
     */
    private $saisons;

    /**
     * @ORM\OneToMany(targetEntity="Critique", mappedBy="serie")
     */
    private $critiques;

    /*
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="propositionsSeries")
     */
    private $auteurProposition;

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
     * Set titre
     *
     * @param string $titre
     * @return Serie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Serie
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set anneeDebut
     *
     * @param integer $anneeDebut
     * @return Serie
     */
    public function setAnneeDebut($anneeDebut)
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    /**
     * Get anneeDebut
     *
     * @return integer
     */
    public function getAnneeDebut()
    {
        return $this->anneeDebut;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Serie
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
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
     * Set note
     *
     * @param float $note
     * @return Serie
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     * @return Serie
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function addAbonne($abonne) {

        $this->abonnes[] = $abonne;
        return $this;

    }

    public function getAbonnes() {

        return $this->abonnes;

    }

    public function getRoles() {

        return $this->roles;

    }

    public function addRole($role) {

        $this->roles[] = $role;
        return $this;

    }

    public function getRealisateur() {

        return $this->realisateur;

    }

    public function setRealisateur($realisateur) {

        $this->realisateur = $realisateur;
        return $this;

    }

    public function getSaisons() {

        return $this->saisons;

    }

    public function addSaison($saison) {

        $this->saisons[] = $saison;
        return $this;

    }

    public function getCritiques() {

        return $this->critiques;

    }

    public function addCritique($critique) {

        $this->critiques[] = $critique;
        return $this;

    }

    public function getAuteurProposition() {

        return $this->auteurProposition;

    }

    public function setAuteurProposition($auteur) {

        $this->auteurProposition = $auteur;
        return $this;

    }

}
