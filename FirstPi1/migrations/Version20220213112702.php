<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213112702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classeenseignantmatiere DROP FOREIGN KEY FNBVCBV');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY sqdsssss');
        $this->addSql('ALTER TABLE classeenseignantmatiere DROP FOREIGN KEY CXCCCCCCCCCCCC');
        $this->addSql('ALTER TABLE classeenseignantmatiere DROP FOREIGN KEY sfdsqdqsdqsdXWXW');
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY id_matierss');
        $this->addSql('ALTER TABLE enseigner DROP FOREIGN KEY AAAAAAAAAAAA');
        $this->addSql('ALTER TABLE absence DROP FOREIGN KEY id_userss');
        $this->addSql('ALTER TABLE enseigner DROP FOREIGN KEY QQQQQQQQQQQQQQQQQQ');
        $this->addSql('CREATE TABLE participation (id INT AUTO_INCREMENT NOT NULL, idevent_id INT DEFAULT NULL, iduser_id INT DEFAULT NULL, INDEX IDX_AB55E24FDB22A086 (idevent_id), INDEX IDX_AB55E24F786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FDB22A086 FOREIGN KEY (idevent_id) REFERENCES eventl (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('DROP TABLE absence');
        $this->addSql('DROP TABLE calendarannuel');
        $this->addSql('DROP TABLE chapitre');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE classeenseignantmatiere');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE demandecreationclub');
        $this->addSql('DROP TABLE demandeevenement');
        $this->addSql('DROP TABLE emplois');
        $this->addSql('DROP TABLE enseigner');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE matier');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE questionquizz');
        $this->addSql('DROP TABLE quizz');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE resultat');
        $this->addSql('DROP TABLE sondage');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE users');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F786A81FB');
        $this->addSql('CREATE TABLE absence (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_matiere INT NOT NULL, Date DATE NOT NULL, TimeDeb TIME NOT NULL, TimeFin TIME NOT NULL, INDEX id_user (id_user), INDEX id_matier (id_matiere), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE calendarannuel (id INT AUTO_INCREMENT NOT NULL, subject VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, term VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, DateC DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE chapitre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, file VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, matier INT NOT NULL, INDEX matier (matier), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE classe (Id INT AUTO_INCREMENT NOT NULL, Name VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Niveau VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Spec VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Nbr_Etudiant INT NOT NULL, Description VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, UNIQUE INDEX Name (Name), PRIMARY KEY(Id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE classeenseignantmatiere (id_class INT NOT NULL, id_user INT NOT NULL, id_matiere INT NOT NULL, INDEX FK_Matiere (id_matiere), INDEX FK_classqqs (id_class), INDEX FK_USER (id_user)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE club (idClub INT AUTO_INCREMENT NOT NULL, nomClub VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, idResponsable INT NOT NULL, domaine VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idClub)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demandecreationclub (idDemandeClub INT AUTO_INCREMENT NOT NULL, IDEtudiant INT NOT NULL, nomClub VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, domaine VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Description TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idDemandeClub)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demandeevenement (idDemandeEvenement INT AUTO_INCREMENT NOT NULL, Description TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, DateDebut DATE NOT NULL, DateFin DATE NOT NULL, Etat VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, idClub INT NOT NULL, Budget DOUBLE PRECISION NOT NULL, image VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idDemandeEvenement)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE emplois (IdEmplois INT AUTO_INCREMENT NOT NULL, Date DATE NOT NULL, Heure TIME NOT NULL, Source VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(IdEmplois)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE enseigner (idEnseignant INT NOT NULL, idMatiere INT NOT NULL, INDEX AAAAAAAAAAAA (idMatiere), INDEX IDX_663E85CD353314B (idEnseignant), PRIMARY KEY(idEnseignant, idMatiere)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE evenement (idEvenement INT AUTO_INCREMENT NOT NULL, dateDebut DATE NOT NULL, dateFin DATE NOT NULL, idClub INT NOT NULL, image TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(idEvenement)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE matier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, coef DOUBLE PRECISION NOT NULL, responsable INT DEFAULT NULL, INDEX responsable (responsable), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE note (idEtudiant INT NOT NULL, idMatiere VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, idEnseignant INT DEFAULT NULL, dateNote DATE NOT NULL, noteCC DOUBLE PRECISION DEFAULT \'NULL\', noteDS DOUBLE PRECISION DEFAULT \'NULL\', noteExam DOUBLE PRECISION DEFAULT \'NULL\', Moyenne DOUBLE PRECISION DEFAULT \'NULL\', INDEX idEnseignant (idEnseignant), PRIMARY KEY(idMatiere, idEtudiant, dateNote)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE question (id_question INT AUTO_INCREMENT NOT NULL, body VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, vote_question INT DEFAULT NULL, id_tag INT DEFAULT NULL, id_personne INT DEFAULT NULL, title VARCHAR(200) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, tag_name VARCHAR(200) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX id_tag (id_tag), INDEX id_personne (id_personne), PRIMARY KEY(id_question)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE questionquizz (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, rep1 VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, rep2 VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, rep3 VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, rep VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, quiz INT DEFAULT NULL, INDEX quiz (quiz), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE quizz (id INT AUTO_INCREMENT NOT NULL, chapitre INT NOT NULL, INDEX chapitre (chapitre), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rating (idrating INT AUTO_INCREMENT NOT NULL, iduser INT NOT NULL, idClub INT NOT NULL, rating DOUBLE PRECISION NOT NULL, PRIMARY KEY(idrating)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reclamation (idReclamation INT AUTO_INCREMENT NOT NULL, sujetReclamation VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, descriptionReclamation VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, statutReclamation VARCHAR(11) CHARACTER SET latin1 DEFAULT \'\'\'Non Traité\'\'\' NOT NULL COLLATE `latin1_swedish_ci`, dateCreation DATE NOT NULL, IdEtd INT DEFAULT NULL, INDEX FK_reclamation (IdEtd), PRIMARY KEY(idReclamation)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reponse (id_reponse INT AUTO_INCREMENT NOT NULL, body VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, vote_reponse INT DEFAULT NULL, id_question INT NOT NULL, INDEX id_question (id_question), PRIMARY KEY(id_reponse)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE resultat (idEtudiant INT NOT NULL, dateResultat DATE NOT NULL, resultat DOUBLE PRECISION DEFAULT \'NULL\', PRIMARY KEY(idEtudiant, dateResultat)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sondage (id_sondage INT AUTO_INCREMENT NOT NULL, id_club INT NOT NULL, titre VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, description TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, reponse TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_sondage)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tag (id_tag INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, description VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_tag)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (idUser INT AUTO_INCREMENT NOT NULL, cinUser INT NOT NULL, nomUser VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, prenomUser VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, DateNaissanceUser DATE DEFAULT \'NULL\', sexeUser VARCHAR(10) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, emailUser VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, adresseUser VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, numTelUser INT DEFAULT NULL, roleUser VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, dateEmbaucheUser DATE DEFAULT \'NULL\', motDePasseUser VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, classeEtd VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, inscriptionEtd DATE DEFAULT \'NULL\', nomResponsableEtd VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, specialiteEtd VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, statutUser VARCHAR(50) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, salaireUser DOUBLE PRECISION DEFAULT \'NULL\', domaineUser VARCHAR(100) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, idParent VARCHAR(30) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, picUser VARCHAR(255) CHARACTER SET latin1 DEFAULT \'NULL\' COLLATE `latin1_swedish_ci`, INDEX idParent (idParent), INDEX sqdsssss (classeEtd), UNIQUE INDEX cinUser (cinUser), PRIMARY KEY(idUser)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT id_matierss FOREIGN KEY (id_matiere) REFERENCES matier (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE absence ADD CONSTRAINT id_userss FOREIGN KEY (id_user) REFERENCES users (idUser) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE classeenseignantmatiere ADD CONSTRAINT FNBVCBV FOREIGN KEY (id_class) REFERENCES classe (Id)');
        $this->addSql('ALTER TABLE classeenseignantmatiere ADD CONSTRAINT CXCCCCCCCCCCCC FOREIGN KEY (id_matiere) REFERENCES enseigner (idMatiere)');
        $this->addSql('ALTER TABLE classeenseignantmatiere ADD CONSTRAINT sfdsqdqsdqsdXWXW FOREIGN KEY (id_user) REFERENCES enseigner (idEnseignant)');
        $this->addSql('ALTER TABLE enseigner ADD CONSTRAINT QQQQQQQQQQQQQQQQQQ FOREIGN KEY (idEnseignant) REFERENCES users (idUser)');
        $this->addSql('ALTER TABLE enseigner ADD CONSTRAINT AAAAAAAAAAAA FOREIGN KEY (idMatiere) REFERENCES matier (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT sqdsssss FOREIGN KEY (classeEtd) REFERENCES classe (Name) ON UPDATE SET NULL ON DELETE SET NULL');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE eventl CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
