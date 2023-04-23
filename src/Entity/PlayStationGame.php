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
    private ?string $genre = null;

    #[ORM\Column(length: 255)]
    private ?string $platform = null;

    #[ORM\Column(length: 255)]
    private ?string $ageRating = null;

    #[ORM\Column(length: 255)]
    private ?string $language = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $releaseDate = null;

    #[ORM\Column(length: 255)]
    private ?string $developer = null;

    #[ORM\Column]
    private ?bool $physical = null;

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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

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

    public function getAgeRating(): ?string
    {
        return $this->ageRating;
    }

    public function setAgeRating(string $ageRating): self
    {
        $this->ageRating = $ageRating;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeImmutable
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeImmutable $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getDeveloper(): ?string
    {
        return $this->developer;
    }

    public function setDeveloper(string $developer): self
    {
        $this->developer = $developer;

        return $this;
    }

    public function isPhysical(): ?bool
    {
        return $this->physical;
    }

    public function setPhysical(bool $physical): self
    {
        $this->physical = $physical;

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
