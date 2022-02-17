<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217000449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE estpay estpayã© TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE liste_de_commande CHANGE quantit quantitã© INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE numTel num_tel BIGINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE estpayã© estpay TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE liste_de_commande CHANGE quantitã© quantit INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE num_tel numTel BIGINT NOT NULL');
    }
}
