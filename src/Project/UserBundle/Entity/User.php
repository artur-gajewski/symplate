<?php

namespace Poject\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Project\UserBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your real name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *  min="5",
     *  max="255",
     *  minMessage="The name is too short.",
     *  maxMessage="The name is too long.",
     *  groups={"Registration", "Profile"}
     * )
     */
    protected $name;

    /**
     * @ORM\Column(name="email_visible", type="boolean", nullable=false)
     *
     * @Assert\Type(type="bool", groups={"Profile"})
     */
    protected $emailVisible = false;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmailVisible()
    {
        return $this->emailVisible;
    }

    public function setEmailVisible($visible)
    {
        $this->emailVisible = $visible;
    }

    public function __toString()
    {
        return $this->id;
    }
}