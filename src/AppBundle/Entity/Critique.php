<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \DateTime;

/**
 * Critique
 *
 * @ORM\Table(name="critique")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CritiqueRepository")
 */
class Critique
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
     * @ORM\Column(name="Contenu", type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="Serie", inversedBy="critiques")
     */
    private $serie;

    /**
     * @ORM\ManytoOne(targetEntity="Utilisateur", inversedBy="critiques")
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_critique", type="datetime")
     */
    private $dateCritique;

    /**
     * @var int
     *
     * @ORM\Column(name="Note", type="integer")
     */
    private $note;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Signale", type="boolean")
     */
    private $signale;

    public function __construct()
    {

        $this->dateCritique = new DateTime();
        $this->note = 0;
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
     * Set contenu
     *
     * @param string $contenu
     * @return Critique
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCritique
     *
     * @param \DateTime $dateCritique
     * @return Critique
     */
    public function setDateCritique($dateCritique)
    {
        $this->dateCritique = $dateCritique;

        return $this;
    }

    /**
     * Get dateCritique
     *
     * @return \DateTime
     */
    public function getDateCritique()
    {
        return $this->dateCritique;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Critique
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    public function getSerie()
    {

        return $this->serie;
    }

    public function setSerie($serie)
    {

        $this->serie = $serie;
        $serie->addCritique($this);
        return $this;
    }

    public function getAuteur()
    {

        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        $auteur->addCritique($this)->addActivite(["type" => "critique", "cible" => $this]);
        return $this;
    }

    public function getSignale()
    {

        return $this->signale;
    }

    public function setSignale($signale)
    {

        $this->signale = $signale;
        return $this;
    }

}
