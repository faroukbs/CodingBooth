<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222013146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2712469DE2');
        $this->addSql('DROP INDEX IDX_29A5EC2712469DE2 ON produit');
        $this->addSql('ALTER TABLE produit CHANGE category_id categoryprod_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27F713128D FOREIGN KEY (categoryprod_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC27F713128D ON produit (categoryprod_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE nom_client nom_client VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE code_promo code_promo VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE etat_commande etat_commande VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE mode_paiment mode_paiment VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE cours CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categoriecours categoriecours VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE message CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE contenu contenu VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27F713128D');
        $this->addSql('DROP INDEX IDX_29A5EC27F713128D ON produit');
        $this->addSql('ALTER TABLE produit CHANGE nonprod nonprod VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categoryprod_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC2712469DE2 ON produit (category_id)');
        $this->addSql('ALTER TABLE reclamation CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE salle CHANGE nomsalle nomsalle VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE materiel materiel VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categorie categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE ticket CHANGE typeticket typeticket VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE role role LONGTEXT NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
