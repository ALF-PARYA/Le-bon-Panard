<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230914150643 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, socks_image_id INT DEFAULT NULL, path VARCHAR(255) NOT NULL, INDEX IDX_C53D045FAA1D058E (socks_image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(255) NOT NULL, town VARCHAR(255) NOT NULL, departement_number INT NOT NULL, postal_code VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matter (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matter_socks (matter_id INT NOT NULL, socks_id INT NOT NULL, INDEX IDX_C8181A6CD614E59F (matter_id), INDEX IDX_C8181A6CBA0B5DEE (socks_id), PRIMARY KEY(matter_id, socks_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE size (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE socks (id INT AUTO_INCREMENT NOT NULL, user_socks_id INT DEFAULT NULL, description VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, INDEX IDX_1E816DC45A86B9EE (user_socks_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE socks_size (socks_id INT NOT NULL, size_id INT NOT NULL, INDEX IDX_4B8A7BDCBA0B5DEE (socks_id), INDEX IDX_4B8A7BDC498DA827 (size_id), PRIMARY KEY(socks_id, size_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D64964D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FAA1D058E FOREIGN KEY (socks_image_id) REFERENCES socks (id)');
        $this->addSql('ALTER TABLE matter_socks ADD CONSTRAINT FK_C8181A6CD614E59F FOREIGN KEY (matter_id) REFERENCES matter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE matter_socks ADD CONSTRAINT FK_C8181A6CBA0B5DEE FOREIGN KEY (socks_id) REFERENCES socks (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE socks ADD CONSTRAINT FK_1E816DC45A86B9EE FOREIGN KEY (user_socks_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE socks_size ADD CONSTRAINT FK_4B8A7BDCBA0B5DEE FOREIGN KEY (socks_id) REFERENCES socks (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE socks_size ADD CONSTRAINT FK_4B8A7BDC498DA827 FOREIGN KEY (size_id) REFERENCES size (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64964D218E FOREIGN KEY (location_id) REFERENCES location (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FAA1D058E');
        $this->addSql('ALTER TABLE matter_socks DROP FOREIGN KEY FK_C8181A6CD614E59F');
        $this->addSql('ALTER TABLE matter_socks DROP FOREIGN KEY FK_C8181A6CBA0B5DEE');
        $this->addSql('ALTER TABLE socks DROP FOREIGN KEY FK_1E816DC45A86B9EE');
        $this->addSql('ALTER TABLE socks_size DROP FOREIGN KEY FK_4B8A7BDCBA0B5DEE');
        $this->addSql('ALTER TABLE socks_size DROP FOREIGN KEY FK_4B8A7BDC498DA827');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64964D218E');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE matter');
        $this->addSql('DROP TABLE matter_socks');
        $this->addSql('DROP TABLE size');
        $this->addSql('DROP TABLE socks');
        $this->addSql('DROP TABLE socks_size');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
