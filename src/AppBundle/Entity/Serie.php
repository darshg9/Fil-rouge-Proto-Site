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
     * @var \DateTime
     *
     * @ORM\Column(name="Annee_debut", type="datetime", nullable=true)
     */
    private $anneeDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(name="Notes", type="array", nullable=true)
     */
    private $notes;

    /**
     * @ORM\Column(name="Note_serie", type="integer", nullable=true)
     */
    private $noteSerie;

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

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="propositionsSeries")
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

    public function __construct() {

        $this->notes = [];
        $this->noteSerie = 0;

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

    public function addAbonne($abonne)
    {

        $this->abonnes[] = $abonne;
        $abonne->addAbonnements($this)->addActivite(["type" => "abonnement", "cible" => $this]);
        return $this;
    }

    public function removeAbonne($abonne)
    {
        $arrayAbonnement = $abonne->getAbonnements();
        $abonne->addActivite(["type" => "desabonnement", "cible" => $this]);

        foreach ($arrayAbonnement as $key => $abonnement)
        {
            if ($abonnement === $this)
            {
                unset($arrayAbonnement[$key]);
                unset($this->abonnes[$key]);
            }
        }
        return $this;
    }

    public function getAbonnes()
    {

        return $this->abonnes;
    }

    public function getRoles()
    {

        return $this->roles;
    }

    public function addRole($role)
    {

        $this->roles[] = $role;
        return $this;
    }

    public function getRealisateur()
    {

        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {

        $this->realisateur = $realisateur;
        $realisateur->addSeries($this);
        return $this;
    }

    public function getSaisons()
    {

        return $this->saisons;
    }

    public function addSaison($saison)
    {

        $this->saisons[] = $saison;
        return $this;
    }

    public function getCritiques()
    {

        return $this->critiques;
    }

    public function addCritique($critique)
    {

        $this->critiques[] = $critique;
        return $this;
    }

    public function getAuteurProposition()
    {

        return $this->auteurProposition;
    }

    public function setAuteurProposition($auteur)
    {

        $this->auteurProposition = $auteur;
        $auteur->addPropositionsSeries($this)->addActivite(["type" => "serie", "cible" => $this]);
        return $this;
    }

    public function getUrl()
    {

        return $this->url;
    }

    public function setUrl($url)
    {

        $this->url = $url;
        return $this;
    }

    public function getValide()
    {

        return $this->valide;
    }

    public function setValide($valide)
    {

        $this->valide = $valide;
        return $this;
    }

    public function getNotes() {

        return $this->notes;

    }

    public function getNoteSerie() {

        return $this->noteSerie;

    }

    public function addNote($note) {

        $this->notes[] = $note;
        $noteSerie = 0;
        if (!empty($this->notes)) {
            foreach ($this->notes as $note) {

                $noteSerie = $noteSerie + $note;

            }
            $noteSerie = floor($noteSerie / sizeof($this->notes));

        }
        $this->setNoteSerie($noteSerie);

    }

    public function setNoteSerie($noteSerie) {

        $this->noteSerie = $noteSerie;
        return $this;

    }

}
