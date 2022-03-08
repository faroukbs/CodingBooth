<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220231131 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(25) NOT NULL, date_naissance DATE NOT NULL, num_tel BIGINT NOT NULL, image VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE lignecommande');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lignecommande (idlignecommande INT AUTO_INCREMENT NOT NULL, idcommande INT NOT NULL, idproduit INT NOT NULL, quantite INT NOT NULL, INDEX fk13 (idproduit), INDEX fk12 (idcommande), PRIMARY KEY(idlignecommande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT fk13 FOREIGN KEY (idproduit) REFERENCES product (idproduit)');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT fk12 FOREIGN KEY (idcommande) REFERENCES commande (idcommande)');
        $this->addSql('DROP TABLE utilisateur');
    }
}
