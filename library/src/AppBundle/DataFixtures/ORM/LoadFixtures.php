<?php
namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFixtures implements ORMFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories = [
            'Science fiction',
            'Satire',
            'Drama',
            'Action and Adventure',
            'Romance',
            'Mystery',
            'Horror',
            'Self help',
            'Health',
            'Guide',
            'Travel',
            'Religion, Spirituality & New Age',
            'Science',
            'History',
            'Math',
            'Anthology',
            'Poetry',
            'Encyclopedias',
            'Dictionaries',
            'Comics',
            'Art',
            'Cookbooks',
            'Diaries',
            'Journals',
            'Prayer books',
            'Series',
            'Trilogy',
            'Biographies',
            'Autobiographies',
            'Fantasy'
        ];

        for ($i = 0; $i < count($categories); $i++) {
            $product = new Category();
            $product->setCategory($categories[$i]);
            $manager->persist($product);
        }
        $manager->flush();
    }
}