<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @var \DateTime
     *
     * @ORM\Column(name="Duree", type="time", nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="Resume", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var array
     *
     * @ORM\Column(name="Diffusions_futures", type="array", nullable=true)
     */
    private $diffusionsFutures;

    /**
     * @ORM\ManyToOne(targetEntity="Saison", inversedBy="episodes")
     */
    private $saison;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="propositionsEpisodes")
     */
    private $auteurProposition;

    /**
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="episodesVisionnes")
     */
    private $viewers;

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
     * Set titre
     *
     * @param string $titre
     * @return Episode
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
     * Set duree
     *
     * @param \DateTime $duree
     * @return Episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Episode
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set diffusionsFutures
     *
     * @param array $diffusionsFutures
     * @return Episode
     */
    public function setDiffusionsFutures($diffusionsFutures)
    {
        $this->diffusionsFutures = $diffusionsFutures;

        return $this;
    }

    /**
     * Get diffusionsFutures
     *
     * @return array
     */
    public function getDiffusionsFutures()
    {
        return $this->diffusionsFutures;
    }

    public function setSaison($saison) {

        $this->saison = $saison;
        $saison->addEpisode($this);
        return $this;

    }

    public function getSaison() {

        return $this->saison;

    }

    public function setAuteurProposition($auteurProposition) {

        $this->auteurProposition = $auteurProposition;
        $auteurProposition->addPropositionsEpisodes($this);
        return $this;

    }

    public function getAuteurProposition() {

        return $this->auteurProposition;

    }

    public function addViewer($viewer) {

        $this->viewers[] = $viewer;
        $viewer->addEpisodesVisionnes($this);
        return $this;

    }

    public function getViewers() {

        return $this->viewers;

    }

    public function getValide() {

        return $this->valide;

    }

    public function setValide() {

        if(!$this->valide) {

            $this->valide = true;

        }

    }

}
