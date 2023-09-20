<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Matter;

class MatterFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $materialsData = [
            'Coton',
            'Laine',
            'Nylon',
        ];

        foreach ($materialsData as $key => $materialName) {
            $material = new Matter();
            $material->setName($materialName);
            $manager->persist($material);
        
            $this->addReference('matter_' . ($key + 1), $material); // Utilisez 'matter_' au lieu de 'size_'
        
        }
        $manager->flush();
    }
}
