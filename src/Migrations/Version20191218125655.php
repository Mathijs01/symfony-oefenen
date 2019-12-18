<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191218125655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE gedragsregels (id INT AUTO_INCREMENT NOT NULL, regels VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE training CHANGE costs costs NUMERIC(10, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE lesson CHANGE instructor_id_id instructor_id_id INT DEFAULT NULL, CHANGE training_id_id training_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE person CHANGE hiring_date hiring_date VARCHAR(255) DEFAULT NULL, CHANGE salary salary NUMERIC(10, 2) DEFAULT NULL, CHANGE street street VARCHAR(255) DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(255) DEFAULT NULL, CHANGE place place VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE registration CHANGE lesson_id_id lesson_id_id INT DEFAULT NULL, CHANGE person_id_id person_id_id INT DEFAULT NULL, CHANGE payment payment SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE gedragsregels');
        $this->addSql('ALTER TABLE lesson CHANGE instructor_id_id instructor_id_id INT DEFAULT NULL, CHANGE training_id_id training_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE person CHANGE hiring_date hiring_date VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE salary salary NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE street street VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE postal_code postal_code VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE place place VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE registration CHANGE lesson_id_id lesson_id_id INT DEFAULT NULL, CHANGE person_id_id person_id_id INT DEFAULT NULL, CHANGE payment payment SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE training CHANGE costs costs NUMERIC(10, 2) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
