<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715054622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD ppackage_active_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649EAB1E5B4 FOREIGN KEY (ppackage_active_id) REFERENCES package (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649EAB1E5B4 ON user (ppackage_active_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649EAB1E5B4');
        $this->addSql('DROP INDEX IDX_8D93D649EAB1E5B4 ON user');
        $this->addSql('ALTER TABLE user DROP ppackage_active_id');
    }
}
