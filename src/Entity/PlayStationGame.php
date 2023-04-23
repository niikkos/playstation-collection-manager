<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\PlayStationGameRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: PlayStationGameRepository::class)]
#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'playstation-game:item']),
        new GetCollection(normalizationContext: ['groups' => 'playstation-game:list'])
    ],
    order: ['title' => 'ASC'],
    paginationEnabled: false,
)]
class PlayStationGame
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['playstation-game:list', 'playstation-game:item'])]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Groups(['playstation-game:list', 'playstation-game:item'])]
    private ?string $platform = null;

    #[ORM\Column]
    #[Groups(['playstation-game:list', 'playstation-game:item'])]
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
