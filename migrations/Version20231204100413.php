<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231204100413 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gites DROP FOREIGN KEY FK_29609B21DF72B2D2');
        $this->addSql('DROP INDEX IDX_29609B21DF72B2D2 ON gites');
        $this->addSql('ALTER TABLE gites CHANGE proprietaires_id_id proprietaires_id INT NOT NULL');
        $this->addSql('ALTER TABLE gites ADD CONSTRAINT FK_29609B21710ED0A5 FOREIGN KEY (proprietaires_id) REFERENCES proprietaires (id)');
        $this->addSql('CREATE INDEX IDX_29609B21710ED0A5 ON gites (proprietaires_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gites DROP FOREIGN KEY FK_29609B21710ED0A5');
        $this->addSql('DROP INDEX IDX_29609B21710ED0A5 ON gites');
        $this->addSql('ALTER TABLE gites CHANGE proprietaires_id proprietaires_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE gites ADD CONSTRAINT FK_29609B21DF72B2D2 FOREIGN KEY (proprietaires_id_id) REFERENCES proprietaires (id)');
        $this->addSql('CREATE INDEX IDX_29609B21DF72B2D2 ON gites (proprietaires_id_id)');
    }
}
