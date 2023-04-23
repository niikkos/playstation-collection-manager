<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230423163949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add new table play_station_game';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE play_station_game (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, platform VARCHAR(255) NOT NULL, platinum_trophy_obtained TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE play_station_game');
    }
}
