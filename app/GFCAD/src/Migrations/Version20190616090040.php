<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190616090040 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dossier (id INT AUTO_INCREMENT NOT NULL, requerant_id INT NOT NULL, matricule VARCHAR(4) NOT NULL, date_create DATE NOT NULL, date_maj DATE NOT NULL, INDEX IDX_3D48E0374A93DAA5 (requerant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fichier (id INT AUTO_INCREMENT NOT NULL, dossier_id INT NOT NULL, type_fichier_id INT NOT NULL, description VARCHAR(255) DEFAULT NULL, image_name VARCHAR(255) NOT NULL, image_size INT NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_9B76551F611C0C56 (dossier_id), INDEX IDX_9B76551F12928ADB (type_fichier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcelle (id INT AUTO_INCREMENT NOT NULL, dossier_id INT NOT NULL, numero INT DEFAULT NULL, section VARCHAR(10) DEFAULT NULL, UNIQUE INDEX UNIQ_C56E2CF6611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piece_identification (id INT AUTO_INCREMENT NOT NULL, requerant_id INT NOT NULL, type_piece_id INT NOT NULL, image_name VARCHAR(255) NOT NULL, image_size INT NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_57C31E9D4A93DAA5 (requerant_id), INDEX IDX_57C31E9D9F0E854 (type_piece_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requerant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(100) DEFAULT NULL, nationalite VARCHAR(45) NOT NULL, tel VARCHAR(8) DEFAULT NULL, date_enreg DATE NOT NULL, date_maj DATE NOT NULL, adresse VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_fichier (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_piece (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(100) NOT NULL, pwd VARCHAR(255) NOT NULL, date_create DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E0374A93DAA5 FOREIGN KEY (requerant_id) REFERENCES requerant (id)');
        $this->addSql('ALTER TABLE fichier ADD CONSTRAINT FK_9B76551F611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
        $this->addSql('ALTER TABLE fichier ADD CONSTRAINT FK_9B76551F12928ADB FOREIGN KEY (type_fichier_id) REFERENCES type_fichier (id)');
        $this->addSql('ALTER TABLE parcelle ADD CONSTRAINT FK_C56E2CF6611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
        $this->addSql('ALTER TABLE piece_identification ADD CONSTRAINT FK_57C31E9D4A93DAA5 FOREIGN KEY (requerant_id) REFERENCES requerant (id)');
        $this->addSql('ALTER TABLE piece_identification ADD CONSTRAINT FK_57C31E9D9F0E854 FOREIGN KEY (type_piece_id) REFERENCES type_piece (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fichier DROP FOREIGN KEY FK_9B76551F611C0C56');
        $this->addSql('ALTER TABLE parcelle DROP FOREIGN KEY FK_C56E2CF6611C0C56');
        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E0374A93DAA5');
        $this->addSql('ALTER TABLE piece_identification DROP FOREIGN KEY FK_57C31E9D4A93DAA5');
        $this->addSql('ALTER TABLE fichier DROP FOREIGN KEY FK_9B76551F12928ADB');
        $this->addSql('ALTER TABLE piece_identification DROP FOREIGN KEY FK_57C31E9D9F0E854');
        $this->addSql('DROP TABLE dossier');
        $this->addSql('DROP TABLE fichier');
        $this->addSql('DROP TABLE parcelle');
        $this->addSql('DROP TABLE piece_identification');
        $this->addSql('DROP TABLE requerant');
        $this->addSql('DROP TABLE type_fichier');
        $this->addSql('DROP TABLE type_piece');
        $this->addSql('DROP TABLE user');
    }
}
