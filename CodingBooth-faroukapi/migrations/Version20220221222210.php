<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221222210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE id_client id_client INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emploi CHANGE idsalle idsalle INT DEFAULT NULL, CHANGE idcours idcours INT DEFAULT NULL, CHANGE id_coach id_coach INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lignecommande CHANGE id_commande id_commande INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message CHANGE idutilisateur idutilisateur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participation CHANGE idevent idevent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD quantity INT NOT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE idutilisateur idutilisateur INT DEFAULT NULL, CHANGE id_rec id_rec INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservationticket CHANGE idreservation idreservation INT AUTO_INCREMENT NOT NULL, CHANGE iduser iduser INT DEFAULT NULL, CHANGE idticket idticket INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket CHANGE idevent idevent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE typeproduit CHANGE id_produit id_produit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE role role LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande CHANGE id_client id_client INT NOT NULL, CHANGE id_produit id_produit INT NOT NULL, CHANGE nom_client nom_client VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE code_promo code_promo VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE etat_commande etat_commande VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE mode_paiment mode_paiment VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE cours CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categoriecours categoriecours VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE emploi CHANGE idsalle idsalle INT NOT NULL, CHANGE id_coach id_coach INT NOT NULL, CHANGE idcours idcours INT NOT NULL');
        $this->addSql('ALTER TABLE lignecommande CHANGE id_produit id_produit INT NOT NULL, CHANGE id_commande id_commande INT NOT NULL');
        $this->addSql('ALTER TABLE message CHANGE idutilisateur idutilisateur INT NOT NULL, CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE contenu contenu VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE participation CHANGE idevent idevent INT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP quantity, CHANGE nonprod nonprod VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE reponse CHANGE id_rec id_rec INT NOT NULL, CHANGE idutilisateur idutilisateur INT NOT NULL');
        $this->addSql('ALTER TABLE reservationticket CHANGE idreservation idreservation INT NOT NULL, CHANGE idticket idticket INT NOT NULL, CHANGE iduser iduser INT NOT NULL');
        $this->addSql('ALTER TABLE salle CHANGE nomsalle nomsalle VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE materiel materiel VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE categorie categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE ticket CHANGE idevent idevent INT NOT NULL, CHANGE typeticket typeticket VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE typeproduit CHANGE id_produit id_produit INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE role role LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
