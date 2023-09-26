<?php

namespace App\DataFixtures;

use App\Repository\LocationRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture implements DependentFixtureInterface
{
    protected UserPasswordHasherInterface $hasher;
    protected LocationRepository $location;

    public function __construct(
        UserPasswordHasherInterface $hasher,
        LocationRepository $location
    ) {
        $this->hasher = $hasher;
        $this->location = $location;
    }

    public function load(ObjectManager $manager): void
    {
        $locations = $this->location->findAll();
        $usersData = [
            [
                'email' => 'user1@example.com',
                'password' => '1234',
                'roles' => ['ROLE_USER'],
            ],
            [
                'email' => 'user2@example.com',
                'password' => '5678',
                'roles' => ['ROLE_ADMIN'],
            ],
            // Ajoutez autant d'utilisateurs que nécessaire
        ];

        foreach ($usersData as $key => $userData) {
            $user = new User();
            $user->setEmail($userData['email']);
            $user->setRoles($userData['roles']);

            $hashedPassword = $this->hasher->hashPassword($user, $userData['password']);
            $user->setPassword($hashedPassword);
            $user->setLocation($locations[$key]);

            $manager->persist($user);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            LocationFixtures::class,
        ];
    }
}