<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220930113836 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE note_controle (id INT AUTO_INCREMENT NOT NULL, nom_eleve VARCHAR(50) DEFAULT NULL, prenom_eleve VARCHAR(50) DEFAULT NULL, nom_matiere VARCHAR(50) DEFAULT NULL, note DOUBLE PRECISION DEFAULT NULL, coefficient INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE test CHANGE nom_mati?ere nom_mati√ere VARCHAR(40) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE note_controle');
        $this->addSql('ALTER TABLE test CHANGE nom_mati√ere nom_mati?ere VARCHAR(40) NOT NULL');
    }
}
