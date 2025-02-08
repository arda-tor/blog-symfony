<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('ator@cdv.pl');
        $user->setPassword('$2a$12$QMDXp6gB.kCuhEFYud06ourXmgOPqCi8v6ggQVLbAycMEG953NZQO');

        $manager->persist($user);
        $manager->flush();
    }
}
