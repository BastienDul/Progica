<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231204103244 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipements (id INT AUTO_INCREMENT NOT NULL, gites_id INT NOT NULL, lave_vaiselle TINYINT(1) NOT NULL, lave_linge TINYINT(1) NOT NULL, climatisation TINYINT(1) NOT NULL, television TINYINT(1) NOT NULL, terrasse TINYINT(1) NOT NULL, bbq TINYINT(1) NOT NULL, piscine_privee TINYINT(1) NOT NULL, piscine_public TINYINT(1) NOT NULL, tennis TINYINT(1) NOT NULL, ping_pong TINYINT(1) NOT NULL, INDEX IDX_3F02D86B80C9DB47 (gites_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipements ADD CONSTRAINT FK_3F02D86B80C9DB47 FOREIGN KEY (gites_id) REFERENCES gites (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipements DROP FOREIGN KEY FK_3F02D86B80C9DB47');
        $this->addSql('DROP TABLE equipements');
    }
}
