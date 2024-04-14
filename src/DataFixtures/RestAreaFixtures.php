<?php

namespace App\DataFixtures;

use App\Entity\RestArea;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RestAreaFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $restArea = new RestArea();
        $restArea->setName('Area 1');
        $restArea->setDescription('lorem ipsum');
        $manager->persist($restArea);

        $restArea = new RestArea();
        $restArea->setName('Area du bois joli');
        $restArea->setDescription('lorem ipsum');
        $manager->persist($restArea);

        $manager->flush();
    }
}
