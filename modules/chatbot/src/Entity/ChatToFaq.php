<?php

namespace App\Entity;

use App\Repository\ChatToFaqRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatToFaqRepository::class)
 * @ORM\Table(name="ps_chat_to_faq")
 */

class ChatToFaq
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_chat_to_faq", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="id_chat", type="integer")
     */
    private $chat;

    /**
     * @ORM\Column(name="is_relevant", type="boolean")
     */
    private $isRelevant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChat(): ?int
    {
        return $this->chat;
    }

    public function setChat(int $chat): self
    {
        $this->chat = $chat;

        return $this;
    }

    public function getIsRelevant(): ?bool
    {
        return $this->isRelevant;
    }

    public function setIsRelevant(bool $isRelevant): self
    {
        $this->isRelevant = $isRelevant;

        return $this;
    }
}
