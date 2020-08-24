<?php

namespace App\Entity;

use App\Repository\ChatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatRepository::class)
 * @ORM\Table(name="ps_chat")
 */
class Chat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_chat", type="integer")
     *
     */
    private $id;

    /**
     * @ORM\Column(name="id_chat_user", type="integer")
     */
    private $chatUser;

    /**
     * @ORM\Column(name="id_chat_employee", type="integer")
     */
    private $chatEmployee;

    /**
     * @ORM\Column(name="id_chat_message", type="integer")
     */
    private $chatMessage;

    /**
     * @ORM\Column(name="is_user_sender", type="boolean")
     */
    private $isUserSender;

    /**
     * @ORM\Column(name="has_response", type="boolean")
     */
    private $hasResponse;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChatUser(): ?int
    { 
        return $this->chatUser;
    }

    public function setChatUser(int $chatUser): self
    {
        $this->chatUser = $chatUser;

        return $this;
    }

    public function getChatEmployee(): ?int
    {
        return $this->chatEmployee;
    }

    public function setChatEmployee(int $chatEmployee): self
    {
        $this->chatEmployee = $chatEmployee;

        return $this;
    }

    public function getChatMessage(): ?int
    {
        return $this->chatMessage;
    }

    public function setChatMessage(int $chatMessage): self
    {
        $this->chatMessage = $chatMessage;

        return $this;
    }

    public function getIsUserSender(): ?bool
    {
        return $this->isUserSender;
    }

    public function setIsUserSender(bool $isUserSender): self
    {
        $this->isUserSender = $isUserSender;

        return $this;
    }

    public function getHasResponse(): ?bool
    {
        return $this->hasResponse;
    }

    public function setHasResponse(bool $hasResponse): self
    {
        $this->hasResponse = $hasResponse;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
