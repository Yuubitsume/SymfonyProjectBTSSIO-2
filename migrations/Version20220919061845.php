<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919061845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
	$this->addSql('CREATE TABLE `user` (`id` int NOT NULL,`username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,`roles` json NOT NULL,`password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,`surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,`mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,`pseudo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
	$this->addSql('CREATE TABLE `matiere` (`id` int NOT NULL, `libellé` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
    $this->addSql('CREATE TABLE `note_controle` (`id` int NOT NULL,`note` double DEFAULT NULL,`coefficient` int NOT NULL,`user_id` int DEFAULT NULL,`matiere_id` int DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
    $this->addSql('ALTER TABLE `matiere` ADD PRIMARY KEY (`id`)');
    $this->addSql('ALTER TABLE `note_controle` ADD PRIMARY KEY (`id`), ADD KEY `IDX_1E62E5F0A76ED395` (`user_id`), ADD KEY `IDX_1E62E5F0F46CD258` (`matiere_id`)');
    $this->addSql('ALTER TABLE `user` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)');
    $this->addSql('ALTER TABLE `matiere` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7');
    $this->addSql('ALTER TABLE `note_controle` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26');
    $this->addSql('ALTER TABLE `user` MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15');
    $this->addSql('ALTER TABLE `note_controle` ADD CONSTRAINT `FK_1E62E5F0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`), ADD CONSTRAINT `FK_1E62E5F0F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`);');
}

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    $this->addSql('DROP TABLE user');
	$this->addSql('DROP TABLE matiere');
	$this->addSql('DROP TABLE note_controle');
    }
}

    