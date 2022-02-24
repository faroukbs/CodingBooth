<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214150922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation CHANGE iduser iduser INT NOT NULL');
        $this->addSql('ALTER TABLE participation RENAME INDEX fk1 TO aszdzd');
        $this->addSql('ALTER TABLE participation RENAME INDEX fk2 TO ploikfdxzs');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eventl CHANGE titre titre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE participation CHANGE iduser iduser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participation RENAME INDEX aszdzd TO fk1');
        $this->addSql('ALTER TABLE participation RENAME INDEX ploikfdxzs TO fk2');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE adresse adresse VARCHAR(20) NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
