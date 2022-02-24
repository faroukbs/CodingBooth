<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223220926 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (idcategory INT AUTO_INCREMENT NOT NULL, nomcategory VARCHAR(255) NOT NULL, PRIMARY KEY(idcategory)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (idcours INT AUTO_INCREMENT NOT NULL, idcategory INT NOT NULL, nomcours VARCHAR(255) NOT NULL, descriptioncours VARCHAR(255) NOT NULL, imagecours VARCHAR(255) NOT NULL, dateheure DATETIME NOT NULL, INDEX IDX_FDCA8C9CAC9951CC (idcategory), PRIMARY KEY(idcours)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (id INT AUTO_INCREMENT NOT NULL, nomsalle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, categorie ENUM(\'k\', \'l\'), materiel VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CAC9951CC FOREIGN KEY (idcategory) REFERENCES category (idcategory)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CAC9951CC');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE salle');
    }
}
