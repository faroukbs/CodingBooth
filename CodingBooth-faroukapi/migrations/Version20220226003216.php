<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220226003216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE nom_client nom_client VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE code_promo code_promo VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE etat_commande etat_commande VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE mode_paiment mode_paiment VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE cours CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categoriecours categoriecours VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE message CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE contenu contenu VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nonprod nonprod VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE salle CHANGE nomsalle nomsalle VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE materiel materiel VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categorie categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE ticket CHANGE typeticket typeticket VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE role role LONGTEXT NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
