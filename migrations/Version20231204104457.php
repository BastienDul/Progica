<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231204104457 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tarif_animaux (id INT AUTO_INCREMENT NOT NULL, gites_id INT NOT NULL, tarif DOUBLE PRECISION NOT NULL, INDEX IDX_E9DF6B0880C9DB47 (gites_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif_location (id INT AUTO_INCREMENT NOT NULL, gites_id INT NOT NULL, periode_debut DATE NOT NULL, periode_fin DATE NOT NULL, tarif_hebdomadaire DOUBLE PRECISION NOT NULL, INDEX IDX_585B5DA680C9DB47 (gites_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tarif_animaux ADD CONSTRAINT FK_E9DF6B0880C9DB47 FOREIGN KEY (gites_id) REFERENCES gites (id)');
        $this->addSql('ALTER TABLE tarif_location ADD CONSTRAINT FK_585B5DA680C9DB47 FOREIGN KEY (gites_id) REFERENCES gites (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tarif_animaux DROP FOREIGN KEY FK_E9DF6B0880C9DB47');
        $this->addSql('ALTER TABLE tarif_location DROP FOREIGN KEY FK_585B5DA680C9DB47');
        $this->addSql('DROP TABLE tarif_animaux');
        $this->addSql('DROP TABLE tarif_location');
    }
}
