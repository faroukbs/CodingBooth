<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220306013620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id_commande INT AUTO_INCREMENT NOT NULL, id_client INT DEFAULT NULL, id_produit INT DEFAULT NULL, nom_client VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, numero_client INT NOT NULL, code_promo VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, date_commande DATE NOT NULL, etat_commande VARCHAR(255) NOT NULL, mode_paiment VARCHAR(255) NOT NULL, INDEX fk19 (id_produit), INDEX fk18 (id_client), PRIMARY KEY(id_commande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (idcours INT AUTO_INCREMENT NOT NULL, nomcours INT NOT NULL, description VARCHAR(255) NOT NULL, categoriecours VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(idcours)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emploi (idemploi INT AUTO_INCREMENT NOT NULL, idsalle INT DEFAULT NULL, id_coach INT DEFAULT NULL, idcours INT DEFAULT NULL, date DATE NOT NULL, heure TIME NOT NULL, INDEX fk21 (idcours), INDEX fk22 (id_coach), INDEX fk20 (idsalle), PRIMARY KEY(idemploi)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eventl (idevent INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, datedebut DATE NOT NULL, nombreparticipants INT NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(idevent)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lignecommande (id_lcommande INT AUTO_INCREMENT NOT NULL, id_produit INT DEFAULT NULL, id_commande INT DEFAULT NULL, quantite INT NOT NULL, INDEX fk25 (id_commande), INDEX fk24 (id_produit), PRIMARY KEY(id_lcommande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (idmessage INT AUTO_INCREMENT NOT NULL, idutilisateur INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, date DATE NOT NULL, INDEX fk13 (idutilisateur), PRIMARY KEY(idmessage)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participation (idparticipation INT AUTO_INCREMENT NOT NULL, iduser INT DEFAULT NULL, idevent INT DEFAULT NULL, dateparticipation DATETIME NOT NULL, INDEX fk2 (idevent), INDEX fk1 (iduser), PRIMARY KEY(idparticipation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id_produit INT AUTO_INCREMENT NOT NULL, categoryprod_id INT NOT NULL, nonprod VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantity INT NOT NULL, INDEX IDX_29A5EC27F713128D (categoryprod_id), PRIMARY KEY(id_produit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id_rec INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, nom INT NOT NULL, prenom INT NOT NULL, email INT NOT NULL, PRIMARY KEY(id_rec)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id_rep INT AUTO_INCREMENT NOT NULL, id_rec INT DEFAULT NULL, idutilisateur INT DEFAULT NULL, INDEX fk17 (idutilisateur), INDEX fk16 (id_rec), PRIMARY KEY(id_rep)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationticket (idreservation INT AUTO_INCREMENT NOT NULL, idticket INT DEFAULT NULL, iduser INT DEFAULT NULL, quatite INT NOT NULL, montant DOUBLE PRECISION NOT NULL, INDEX fk12 (iduser), INDEX fk11 (idticket), PRIMARY KEY(idreservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id_salle INT AUTO_INCREMENT NOT NULL, nomsalle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, materiel VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id_salle)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (idticket INT AUTO_INCREMENT NOT NULL, idevent INT DEFAULT NULL, typeticket VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, INDEX fk10 (idevent), PRIMARY KEY(idticket)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (iduser INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) NOT NULL, adresse VARCHAR(20) NOT NULL, PRIMARY KEY(iduser)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (idutilisateur INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, datenaissance DATE NOT NULL, adresse VARCHAR(255) NOT NULL, motdepasse INT NOT NULL, num_tel VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role LONGTEXT NOT NULL, PRIMARY KEY(idutilisateur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DE173B1B8 FOREIGN KEY (id_client) REFERENCES utilisateur (idutilisateur)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DF7384557 FOREIGN KEY (id_produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE emploi ADD CONSTRAINT FK_74A0B0FA98921245 FOREIGN KEY (idsalle) REFERENCES salle (id_salle)');
        $this->addSql('ALTER TABLE emploi ADD CONSTRAINT FK_74A0B0FAD1DC2CFC FOREIGN KEY (id_coach) REFERENCES utilisateur (idutilisateur)');
        $this->addSql('ALTER TABLE emploi ADD CONSTRAINT FK_74A0B0FA2BCFE085 FOREIGN KEY (idcours) REFERENCES cours (idcours)');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT FK_853B7939F7384557 FOREIGN KEY (id_produit) REFERENCES produit (id_produit)');
        $this->addSql('ALTER TABLE lignecommande ADD CONSTRAINT FK_853B79393E314AE8 FOREIGN KEY (id_commande) REFERENCES commande (id_commande)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FDBDD131C FOREIGN KEY (idutilisateur) REFERENCES utilisateur (idutilisateur)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F5E5C27E9 FOREIGN KEY (iduser) REFERENCES user (iduser)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FEDAB66BE FOREIGN KEY (idevent) REFERENCES eventl (idevent)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27F713128D FOREIGN KEY (categoryprod_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7FAA12276 FOREIGN KEY (id_rec) REFERENCES reclamation (id_rec)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7DBDD131C FOREIGN KEY (idutilisateur) REFERENCES utilisateur (idutilisateur)');
        $this->addSql('ALTER TABLE reservationticket ADD CONSTRAINT FK_5EE79198F31D000F FOREIGN KEY (idticket) REFERENCES ticket (idticket)');
        $this->addSql('ALTER TABLE reservationticket ADD CONSTRAINT FK_5EE791985E5C27E9 FOREIGN KEY (iduser) REFERENCES utilisateur (idutilisateur)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3EDAB66BE FOREIGN KEY (idevent) REFERENCES eventl (idevent)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27F713128D');
        $this->addSql('ALTER TABLE lignecommande DROP FOREIGN KEY FK_853B79393E314AE8');
        $this->addSql('ALTER TABLE emploi DROP FOREIGN KEY FK_74A0B0FA2BCFE085');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FEDAB66BE');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3EDAB66BE');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DF7384557');
        $this->addSql('ALTER TABLE lignecommande DROP FOREIGN KEY FK_853B7939F7384557');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7FAA12276');
        $this->addSql('ALTER TABLE emploi DROP FOREIGN KEY FK_74A0B0FA98921245');
        $this->addSql('ALTER TABLE reservationticket DROP FOREIGN KEY FK_5EE79198F31D000F');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F5E5C27E9');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DE173B1B8');
        $this->addSql('ALTER TABLE emploi DROP FOREIGN KEY FK_74A0B0FAD1DC2CFC');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FDBDD131C');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7DBDD131C');
        $this->addSql('ALTER TABLE reservationticket DROP FOREIGN KEY FK_5EE791985E5C27E9');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE emploi');
        $this->addSql('DROP TABLE eventl');
        $this->addSql('DROP TABLE lignecommande');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reservationticket');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE utilisateur');
    }
}
