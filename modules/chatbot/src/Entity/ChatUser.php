<?php

namespace App\Entity;

use App\Repository\ChatUserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatUserRepository::class)
 * @ORM\Table(name="ps_chat_user")
 */

class ChatUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_chat_employee", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="id_guest", type="integer", nullable=true)
     */
    private $guest;

    /**
     * @ORM\Column(name="id_customer", type="integer", nullable=true)
     */
    private $costumer;

    /**
     * @ORM\Column(name="id_avatar", type="integer")
     */
    private $avatar;

    /**
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="email", nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_blocked", type="boolean")
     */
    private $isBlocked;

    /**
     * @ORM\Column(name="ip_address", type="string", length=255)
     */
    private $ipAddress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGuest(): ?int
    {
        return $this->guest;
    }

    public function setGuest(?int $guest): self
    {
        $this->guest = $guest;

        return $this;
    }

    public function getCostumer(): ?int
    {
        return $this->costumer;
    }

    public function setCostumer(?int $costumer): self
    {
        $this->costumer = $costumer;

        return $this;
    }

    public function getAvatar(): ?int
    {
        return $this->avatar;
    }

    public function setAvatar(int $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }

    /**
     * @param mixed $isBlocked
     */
    public function setIsBlocked($isBlocked): void
    {
        $this->isBlocked = $isBlocked;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }


}
