<?php

namespace App\Entity;

use App\Repository\ChatMessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatMessageRepository::class)
 * @ORM\Table(name="ps_chat_message")
 */
class ChatMessage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_chat_message", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @ORM\Column(name="id_chat_subject", type="string", length=255)
     */
    private $subject;

    /**
     * @ORM\Column(name="is_blacklisted", type="boolean")
     */
    private $isBlacklisted;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsBlacklisted()
    {
        return $this->isBlacklisted;
    }

    /**
     * @param mixed $isBlacklisted
     */
    public function setIsBlacklisted($isBlacklisted): void
    {
        $this->isBlacklisted = $isBlacklisted;
    }

}
