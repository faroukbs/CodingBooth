<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221223827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE typeproduit');
        $this->addSql('ALTER TABLE produit ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC2712469DE2 ON produit (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2712469DE2');
        $this->addSql('CREATE TABLE typeproduit (idtype INT AUTO_INCREMENT NOT NULL, id_produit INT DEFAULT NULL, nomtype INT NOT NULL, INDEX fk14 (id_produit), PRIMARY KEY(idtype)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE typeproduit ADD CONSTRAINT fk14 FOREIGN KEY (id_produit) REFERENCES produit (id_produit)');
        $this->addSql('DROP TABLE category');
        $this->addSql('ALTER TABLE commande CHANGE nom_client nom_client VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE code_promo code_promo VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE etat_commande etat_commande VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE mode_paiment mode_paiment VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE cours CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categoriecours categoriecours VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE message CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE contenu contenu VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('DROP INDEX IDX_29A5EC2712469DE2 ON produit');
        $this->addSql('ALTER TABLE produit DROP category_id, CHANGE nonprod nonprod VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE salle CHANGE nomsalle nomsalle VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE materiel materiel VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categorie categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE ticket CHANGE typeticket typeticket VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE role role LONGTEXT NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
