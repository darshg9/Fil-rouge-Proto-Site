<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
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
     * @ORM\Column(name="Pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="Facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="Avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="Signature", type="string", length=255, nullable=true)
     */
    private $signature;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Acteur", mappedBy="auteurProposition")
     */
    private $propositionsActeurs;

    /**
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="auteurProposition")
     */
    private $propositionsEpisodes;

    /**
     * @ORM\OneToMany(targetEntity="Serie", mappedBy="auteurProposition")
     */
    private $propositionsSeries;

    /**
     * @ORM\OneToMany(targetEntity="Critique", mappedBy="auteur")
     */
    private $critiques;

    /**
     * @ORM\ManyToMany(targetEntity="Serie", inversedBy="abonnes")
     */
    private $abonnements;

    /**
     * @ORM\ManyToMany(targetEntity="Episode", inversedBy="viewers")
     */
    private $episodesVisionnes;

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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Utilisateur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

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
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

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

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Utilisateur
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

    /**
     * Set ville
     *
     * @param string $ville
     * @return Utilisateur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Utilisateur
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Utilisateur
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Utilisateur
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set signature
     *
     * @param string $signature
     * @return Utilisateur
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Utilisateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getPropositionsActeurs() {

        return $this->propositionsActeurs;

    }

    public function addPropositionsActeurs($propositionsActeurs) {

        $this->propositionsActeurs = $propositionsActeurs;
        return $this;

    }

    public function getPropositionsEpisodes() {

        return $this->propositionsEpisodes;

    }

    public function addPropositionsEpisodes($propositionsEpisodes) {

        $this->propositionsEpisodes[] = $propositionsEpisodes;
        return $this;

    }

    public function getPropositionsSeries() {

        return $this->propositionsSeries;

    }

    public function addPropositionsSeries($propositionsSeries) {

        $this->propositionsSeries[] = $propositionsSeries;
        return $this;

    }

    public function getAbonnements() {

        return $this->abonnements;

    }

    public function addAbonnements($abonnements) {

        $this->abonnements[] = $abonnements;
        return $this;

    }

    public function getEpisodesVisionnes() {

        return $this->episodesVisionnes;

    }

    public function addEpisodesVisionnes($episodesVisionnes) {

        $this->episodesVisionnes[] = $episodesVisionnes;
        return $this;

    }

    public function getCritiques() {

        return $this->critiques;

    }

    public function addCritiques($critiques) {

        $this->critiques[] = $critiques;
        return $this;

    }

}
