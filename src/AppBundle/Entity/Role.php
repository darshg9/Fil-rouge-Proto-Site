<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
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
     * @ORM\ManyToOne(targetEntity="Acteur", inversedBy="roles")
     */
    private $acteur;

    /**
     * @ORM\ManyToOne(targetEntity="Serie", inversedBy="roles")
     */
    private $serie;

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
     * @return Role
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

    public function getActeur() {

        return $this->acteur;

    }

    public function setActeur($acteur) {

        $his->acteur = $acteur;
        $acteur->addRole($this);
        return $this;

    }

    public function getSerie() {

        return $this->serie;

    }

    public function setSerie($serie) {

        $his->serie = $serie;
        $serie->addRole($this);
        return $this;

    }

}
