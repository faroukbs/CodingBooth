<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309005110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6AAB677BE6');
        $this->addSql('DROP TABLE boutique');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE ligne_commande');
        $this->addSql('ALTER TABLE commande ADD produit VARCHAR(255) NOT NULL, DROP latitude, DROP date_commande, DROP longitude');
        $this->addSql('ALTER TABLE reclamation ADD commande_id INT DEFAULT NULL, DROP id_commande');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640482EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_CE60640482EA2E54 ON reclamation (commande_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE boutique (id INT AUTO_INCREMENT NOT NULL, commercant_id INT DEFAULT NULL, nom_boutique VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, desc_boutique VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, adresse_boutique VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_A1223C5483FA6DD0 (commercant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, boutique_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_E01FBE6AAB677BE6 (boutique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ligne_commande (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_3170B74B82EA2E54 (commande_id), INDEX IDX_3170B74BF347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE boutique ADD CONSTRAINT FK_A1223C5483FA6DD0 FOREIGN KEY (commercant_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6AAB677BE6 FOREIGN KEY (boutique_id) REFERENCES boutique (id)');
        $this->addSql('ALTER TABLE commande ADD date_commande DATE NOT NULL, ADD longitude VARCHAR(255) NOT NULL, CHANGE produit latitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640482EA2E54');
        $this->addSql('DROP INDEX IDX_CE60640482EA2E54 ON reclamation');
        $this->addSql('ALTER TABLE reclamation ADD id_commande VARCHAR(255) NOT NULL, DROP commande_id');
    }
}
