<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919065705 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO `matiere` (`id`, `libellé`) VALUES
        (1, 'DEV'), (2, 'MATH'), (3, 'SVT'), (4, 'Anglais'), (5, 'Base de données'), (6, 'CEJM')");

        $this->addSql("INSERT INTO `user` (`id`, `username`, `roles`, `password`, `surname`, `mail`, `pseudo`) VALUES
        (1, 'julien', '[\"ROLE_ADMIN\"]', '\$2y\$13\$yQsaBLZ/uMhxdZ4LNMFofOhIOYdSdkY.KHaA8sY6ELjbsE5v.oV3q', 'perez', 'admin@gmail.com', ''),
        (2, 'patrick', '[\"ROLE_ADMIN\"]', '\$2y\$13\$t6X74m9xmMZV3ZODf0EnRuxZb2LD/vbOnXghNfV6SBq12hOtUwRn.', 'patrick', 'patrick@gmail.com', ''),
        (3, 'michel', '[]', '\$2y\$13\$XyD73Eq6lxzgNbYF.pKEPeT/02Cp5NcmGmiNi2PXZmOcuRN.T3fYq', 'dupont', 'michel@gmail.com', ''),
        (4, 'Xavier', '[]', '\$2y\$13\$HH..7/gZMtEe..JQgfB9H.pnsGvGQ4PhABCW9GVWhz363dIk7OtTe', 'plaitil', 'xavier.plaitil@gmail.com', ''),
        (5, 'Albert', '[]', '\$2y\$13\$EUP8JCX0jh4H1K4X0WujPuRLI9QgTlmvdo/J22pMbRwYrWujlIzrO', 'Simon', 'Albert.Simon@gmail.com', ''),
        (6, 'Vigile', '[]', '\$2y\$13\$d36LXahJsQeOiCLDzMULuefHjYYjHgoMFWdTNkzy6u.m86ZVfEWGq', 'class', 'vigile.class@gmail.com', ''),
        (7, 'Flick', '[]', '\$2y\$13\$F8.a9HOeEkwym18m.Oo2ducENoQfz3svRN6VQ8wmUKujdEhlxUJsO', 'Rl', 'flick.RL@gmail.com', ''),
        (8, 'oui', '[]', '\$2y\$13\$Sp4e/Hyq0nd/haa2Lz5JkeadJWeA2fEkzdav5msLCjnAAKi5iryQi', 'non', 'michel2@gmail.com', ''),
        (9, 'Lizard', '[]', '\$2y\$13\$ibdWua5TRbnC3taeIucp6OUIMZjxG6xVvfqCEzhhqnUW6Jm9Q1gke', 'Fly', 'michel34@gmail.com', ''),
        (13, 'Lizard2', '[]', '\$2y\$13\$1iw5OcahdY0n0ihccPjRhuNxzYaWo6chjMn9EZ79siDG6Nf6y.lTW', 'gggg', 'michel88@gmail.com', 'lllll'),
        (14, 'oui4', '[]', '\$2y\$13\$89zVkNEvmdCx0R1MGgkLbu87Q//dxduCZHYkPjJH4L2kGzuZVrhya', 'hgdfhd', 'michel89@gmail.com', 'dfgdgffdh')");
        $this->addSql("INSERT INTO `note_controle` (`id`, `note`, `coefficient`, `user_id`, `matiere_id`) VALUES
        (1, 14, 2, 7, 6),
        (2, 17, 1, 5, 2),
        (3, 13, 1, 9, 5),
        (4, 19, 2, 4, 1),
        (5, 14, 3, 6, 2),
        (24, 12, 2, 5, 3)");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
    }
}
