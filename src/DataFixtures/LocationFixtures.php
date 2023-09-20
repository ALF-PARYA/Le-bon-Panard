<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Location;

class LocationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $locationsData = [
            [
                'adresse' => '123 Rue de la Rue',
                'town' => 'Ville',
                'departement_number' => '75',
                'postal_code' => '75000',
            ],
            [
                'adresse' => '456 Avenue de l\'Avenue',
                'town' => 'Autre Ville',
                'departement_number' => '92',
                'postal_code' => '92000',
            ],
        ];

        foreach ($locationsData as $key => $data ) {
            $location = new Location();
            $location->setAdresse($data['adresse']);
            $location->setTown($data['town']);
            $location->setDepartementNumber($data['departement_number']);
            $location->setPostalCode($data['postal_code']);
            $manager->persist($location);
        }

        $manager->flush();
    }
}
