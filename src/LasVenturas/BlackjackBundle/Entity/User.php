<?php

namespace LasVenturas\BlackjackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LasVenturas\BlackjackBundle\Entity\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $wallet;

    /**
     * @ORM\ManyToOne(targetEntity="Games", inversedBy="games")
     * @ORM\JoinColumn(name="games_id", referencedColumnName="id")
     */
    protected $games;


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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set wallet
     *
     * @param string $wallet
     * @return User
     */
    public function setWallet($wallet)
    {
        $this->wallet = $wallet;

        return $this;
    }

    /**
     * Get wallet
     *
     * @return string 
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * Set games
     *
     * @param \LasVenturas\BlackjackBundle\Entity\Games $games
     * @return User
     */
    public function setGames(\LasVenturas\BlackjackBundle\Entity\Games $games = null)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * Get games
     *
     * @return \LasVenturas\BlackjackBundle\Entity\Games 
     */
    public function getGames()
    {
        return $this->games;
    }
}
