<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250115174949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE about_me ALTER user_id DROP DEFAULT');
        $this->addSql('ALTER TABLE invoice ADD user_id_id INT NOT NULL DEFAULT 8');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517449D86650F FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_906517449D86650F ON invoice (user_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE about_me ALTER user_id SET DEFAULT 0');
        $this->addSql('ALTER TABLE invoice DROP CONSTRAINT FK_906517449D86650F');
        $this->addSql('DROP INDEX IDX_906517449D86650F');
        $this->addSql('ALTER TABLE invoice DROP user_id_id');
    }
}
