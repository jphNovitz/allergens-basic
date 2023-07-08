<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230707205034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ingredient_allergy (ingredient_id INT NOT NULL, allergy_id INT NOT NULL, INDEX IDX_CA864973933FE08C (ingredient_id), INDEX IDX_CA864973DBFD579D (allergy_id), PRIMARY KEY(ingredient_id, allergy_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ingredient_allergy ADD CONSTRAINT FK_CA864973933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ingredient_allergy ADD CONSTRAINT FK_CA864973DBFD579D FOREIGN KEY (allergy_id) REFERENCES allergy (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient_allergy DROP FOREIGN KEY FK_CA864973933FE08C');
        $this->addSql('ALTER TABLE ingredient_allergy DROP FOREIGN KEY FK_CA864973DBFD579D');
        $this->addSql('DROP TABLE ingredient_allergy');
    }
}
