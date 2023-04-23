<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230423123711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE play_station_game (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, platform VARCHAR(255) NOT NULL, age_rating VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, release_date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', developer VARCHAR(255) NOT NULL, physical TINYINT(1) NOT NULL, platinum_trophy_obtained TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE play_station_game');
    }
}
