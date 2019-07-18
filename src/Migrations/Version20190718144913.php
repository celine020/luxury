<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190718144913 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, jobCategory VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_5A8A6C8D12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D12469DE2 FOREIGN KEY (category_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE client DROP company_name, DROP company_type, DROP contact_name, DROP contact_job, DROP contact_email, DROP contact_phone_number, DROP note, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE job_offer CHANGE client_id client_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE candidature CHANGE user_id user_id INT DEFAULT NULL, CHANGE job_offer_id job_offer_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D12469DE2');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE post');
        $this->addSql('ALTER TABLE candidature CHANGE job_offer_id job_offer_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD company_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD company_type VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD contact_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD contact_job VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD contact_email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, ADD contact_phone_number INT DEFAULT NULL, ADD note LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD created_at DATETIME DEFAULT \'NULL\', ADD updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE job_offer CHANGE client_id client_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }
}
