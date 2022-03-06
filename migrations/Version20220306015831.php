<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306015831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14F7384557');
        $this->addSql('DROP INDEX fk_cfbdfa14f7384557 ON note');
        $this->addSql('CREATE INDEX fk_note ON note (id_produit)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14F7384557 FOREIGN KEY (id_produit) REFERENCES produit (id_produit)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14F7384557');
        $this->addSql('ALTER TABLE note CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('DROP INDEX fk_note ON note');
        $this->addSql('CREATE INDEX FK_CFBDFA14F7384557 ON note (id_produit)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14F7384557 FOREIGN KEY (id_produit) REFERENCES produit (id_produit)');
    }
}
