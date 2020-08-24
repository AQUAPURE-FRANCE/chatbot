<?php

namespace App\Entity;

use App\Repository\ChatBlacklistRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatBlacklistRepository::class)
 * @ORM\Table(name="ps_blacklist")
 */
class ChatBlacklist
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_blacklist", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="text", type="text")
     */
    private $text;

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
}
