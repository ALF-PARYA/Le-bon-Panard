<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Size;

class SizeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sizesData = [
            'S',
            'M',
            'L',
            'XL',
            'XXL',
        ];

        foreach ($sizesData as $key => $sizeName) {
            $size = new Size();
            $size->setName($sizeName);
            $manager->persist($size);

            $this->addReference('size_' . ($key + 1), $size);


        }

        $manager->flush();
    }
}