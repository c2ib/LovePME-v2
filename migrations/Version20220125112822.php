<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220125112822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponses_questionnaire_general ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponses_questionnaire_general ADD CONSTRAINT FK_438811E9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_438811E9A76ED395 ON reponses_questionnaire_general (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponses_questionnaire_general DROP FOREIGN KEY FK_438811E9A76ED395');
        $this->addSql('DROP INDEX UNIQ_438811E9A76ED395 ON reponses_questionnaire_general');
        $this->addSql('ALTER TABLE reponses_questionnaire_general DROP user_id');
    }
}
