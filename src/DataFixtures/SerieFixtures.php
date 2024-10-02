<?php

namespace App\DataFixtures;

use App\Entity\Serie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SerieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $serie = new Serie();
            $serie->setTitle($faker->sentence(3));
            $serie->setReleaseDate($faker->dateTimeBetween('-10 years', 'now'));
            $serie->setCoverImage($faker->imageUrl(640, 480));
            $serie->setShortDescription($faker->paragraph(3));
            $serie->setLongDescription($faker->paragraph(10));
            $serie->setCasting($faker->words(10, true));
            $serie->setStaff($faker->words(10, true));
            $manager->persist($serie);
        }

        $manager->flush();
    }
}
