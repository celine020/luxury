<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190712115253 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE candidats');
        $this->addSql('DROP TABLE candidatures');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE jobs');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidats (id INT AUTO_INCREMENT NOT NULL, genre TEXT NOT NULL COLLATE latin1_swedish_ci, first name INT NOT NULL, last name INT NOT NULL, adress INT NOT NULL, country INT NOT NULL, nationnality INT NOT NULL, passport VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, cv VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, date_of_birth DATE NOT NULL, email VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, password VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, experience TEXT NOT NULL COLLATE latin1_swedish_ci, short-description INT NOT NULL, admid_id VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, category_id VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, INDEX admid_id (admid_id, category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE candidatures (id INT AUTO_INCREMENT NOT NULL, job_id INT NOT NULL, candidats_id INT NOT NULL, created_at INT NOT NULL, INDEX id_job (job_id, candidats_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, titre_job INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, nom_de_la_societe TEXT NOT NULL COLLATE latin1_swedish_ci, type_de_société TEXT NOT NULL COLLATE latin1_swedish_ci, nom_de_contact TEXT NOT NULL COLLATE latin1_swedish_ci, telephone INT NOT NULL, activité TEXT NOT NULL COLLATE latin1_swedish_ci, poste_du_contrat TEXT NOT NULL COLLATE latin1_swedish_ci, notes TEXT NOT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE jobs (id INT AUTO_INCREMENT NOT NULL, location TEXT NOT NULL COLLATE latin1_swedish_ci, category_id INT NOT NULL, closing_date INT NOT NULL, salary INT NOT NULL, date_de_creation DATETIME NOT NULL, client_id INT NOT NULL, titre_job LONGTEXT NOT NULL COLLATE latin1_swedish_ci COMMENT \'(DC2Type:simple_array)\', INDEX category_id (category_id, client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE user');
    }
}
