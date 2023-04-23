<?php

namespace App\Entity;

use App\Repository\PlayStationGameRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayStationGameRepository::class)]
class PlayStationGame
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $platform = null;

    #[ORM\Column]
    private ?bool $platinumTrophyObtained = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(string $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    public function isPlatinumTrophyObtained(): ?bool
    {
        return $this->platinumTrophyObtained;
    }

    public function setPlatinumTrophyObtained(bool $platinumTrophyObtained): self
    {
        $this->platinumTrophyObtained = $platinumTrophyObtained;

        return $this;
    }
}
