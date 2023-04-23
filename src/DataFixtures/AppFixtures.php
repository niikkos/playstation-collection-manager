<?php

namespace App\DataFixtures;

use App\Entity\PlayStationGame;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $playStationGames = [
            [
                "title" => "Aeterna Noctis",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Blazing Beaks",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Cult Of The Lamb",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Crossing Souls",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Dogurai",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Dragon Ball Z : Kakarot",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Elden Ring",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Final Vendetta",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Gran Turismo 7",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Gran Theft Auto The Trilogy - The Definitive Edition",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Gran Theft Auto V",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Marvel Guardians Of The Galaxy",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Heidelberg 1693",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Hogwarts Legacy",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Horizon Zero Dawn",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Horizon Forbidden West",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Hotwheels Unleashed",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Hotline Miami Collection",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Immortals Fenyx Rising",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Kena Bridge Of Spirits",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Harry Potter Lego Collection",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Megaman 11",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Mortal Shell",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Mother Russia Bleeds",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Okinawa Rush",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Ratchet & Clank Rift Apart",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Resident Evil 4",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Resident Evil Village",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Returnal",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "River City Girls 1 & 2",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Spider-Man Miles Morales",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Recompile",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Sayonara Wild Hearts",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Steelrising",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Stray",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Sturmfront - The Mutant War : Übel Edition",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => false,
            ],
            [
                "title" => "Streets Of Rage 4",
                "platform" => "PlayStation 4",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Teenage Mutant Ninja Turtles : Shredder's Revenge",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
            [
                "title" => "Terminator Resistance",
                "platform" => "PlayStation 5",
                "platinum_trophy_obtained" => true,
            ],
        ];

        foreach($playStationGames as $playStationGame) {
            $manager->persist($this->createPlayStationGame($playStationGame));
        }

        $manager->flush();
    }

    public function createPlayStationGame(array $playStationGames): PlayStationGame
    {
        return (new PlayStationGame())
            ->setTitle($playStationGames['title'])
            ->setPlatform($playStationGames['platform'])
            ->setPlatinumTrophyObtained($playStationGames['platinum_trophy_obtained']);
    }
}
