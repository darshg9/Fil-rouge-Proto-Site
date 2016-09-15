<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SaisonRepository")
 */
class Saison
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
     * @ORM\Column(name="Denomination", type="string", length=255)
     */
    private $denomination;

    /**
     * @ORM\ManyToOne(targetEntity="Serie", inversedBy="saisons")
     */
    private $serie;

    /**
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="saison")
     */
    private $episodes;

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
     * Set denomination
     *
     * @param string $denomination
     * @return Saison
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    public function getSerie() {

        return $this->serie;

    }

    public function setSerie($serie) {

        $this->serie = $serie;
        $serie->addSaison($this);
        return $this;

    }

    public function getEpisodes() {

        return $this->episodes;

    }

    public function addEpisode($episodes) {

        $this->episodes[] = $episodes;
        return $this;

    }

}
