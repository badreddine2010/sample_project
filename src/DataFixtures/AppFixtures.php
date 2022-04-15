<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();

        // $product = new Product();
        // $manager->persist($product);
        // create 5 categories! Bam!
        for ($cat = 0; $cat <3; $cat++) {
            $category = new Category();
            $category->setName($faker->word());
            $manager->persist($category);
        
        // create 20 products! Bam!
        for ($i = 1; $i <3; $i++) {
            $product = new Product();
            $product->setName($faker->word());
            $product->setImage('livre'.$i.'.jpg');
            $product->setCategory($category);
           
            // $product->setPrice(mt_rand(10, 100));
            $manager->persist($product);
        }
    }


        $manager->flush();
    }
}
