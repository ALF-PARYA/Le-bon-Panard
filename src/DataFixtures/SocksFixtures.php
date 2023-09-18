<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Socks;

class SocksFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $socksData = [
            [
                'description' => 'Chaussettes en coton, taille M',
                'name' => 'Chaussettes 1',
                'price' => '9.99',
                'size_id' => 1, // Remplacez par l'ID de la taille souhaitée
                'matter_id' => 1, // Remplacez par l'ID de la matière souhaitée
            ],
            [
                'description' => 'Chaussettes en laine, taille L',
                'name' => 'Chaussettes 2',
                'price' => '14.99',
                'size_id' => 2, // Remplacez par l'ID de la taille souhaitée
                'matter_id' => 2, // Remplacez par l'ID de la matière souhaitée
            ],
            // Ajoutez autant de paires de chaussettes que nécessaire
        ];

        foreach ($socksData as $socksDatum) {
            $socks = new Socks();
            $socks->setDescription($socksDatum['description']);
            $socks->setName($socksDatum['name']);
            $socks->setPrice($socksDatum['price']);
            
            // Utilisez les IDs des tailles et des matières pour les relations
            $size = $this->getReference('size_' . $socksDatum['size_id']);
            $matter = $this->getReference('matter_' . $socksDatum['matter_id']);
    
            $socks->addSocksSize($size);
            $socks->addMatter($matter);
    
            $manager->persist($socks);
        }
    

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            SizeFixtures::class,
            MatterFixtures::class,
        ];
    }
}
