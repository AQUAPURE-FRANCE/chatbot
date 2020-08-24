<?php

namespace App\Entity;

use App\Repository\ChatEmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChatEmployeeRepository::class)
 * @ORM\Table(name="ps_chat_emplyee")
 */
class ChatEmployee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_chat_employee", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="employee_id", type="integer")
     */
    private $employee;

    /**
     * @ORM\Column(name="avatar_id", type="integer")
     */
    private $avatar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployee(): ?int
    {
        return $this->employee;
    }

    public function setEmployee(int $employee): self
    {
        $this->employee = $employee;

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
}
