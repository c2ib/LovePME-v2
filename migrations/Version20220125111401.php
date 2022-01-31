<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125111401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reponses_questionnaire_general (id INT AUTO_INCREMENT NOT NULL, question1 INT DEFAULT NULL, question2 TINYINT(1) DEFAULT NULL, question3 TINYINT(1) DEFAULT NULL, question4 LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', question5 TINYINT(1) DEFAULT NULL, question6 TINYINT(1) DEFAULT NULL, question7 TINYINT(1) DEFAULT NULL, question8 TINYINT(1) DEFAULT NULL, question9 LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reponses_questionnaire_general');
    }
}
