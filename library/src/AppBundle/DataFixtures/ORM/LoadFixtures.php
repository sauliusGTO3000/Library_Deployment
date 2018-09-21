<?php
namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Author;
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
        $authors = [
            'Saulius Usonis',
            'William Shakespeare',
            'Barbara Cartland',
            'Danielle Steel',
            'Harold Robbins',
            'Georges Simenon',
            'Enid Blyton',
            'Sidney Sheldon',
            'J. K. Rowling',
            'Gilbert Patten',
            'Dr. Seuss',
            'Eiichiro Oda',
            'Leo Tolstoy',
            'Corín Tellado',
            'Jackie Collins',
            'Horatio Alger',
            'R. L. Stine',
            'Dean Koontz',
            'Nora Roberts',
            'Akira Toriyama',
            'Alexander Pushkin',
            'Stephen King',
            'Paulo Coelho',
            'René Goscinny',
            'Erle Stanley Gardner',
            'Edgar Wallace',
            'Jin Yong',
            'Jirō Akagawa',
            'Janet Dailey',
            'Robert Ludlum',
            'Osamu Tezuka',
            'James Patterson',
            'Frédéric Dard',
            'Jeffrey Archer',
            'Stan and Jan Berenstain',
            'Roald Dahl',
            'John Grisham',
            'Zane Grey',
            'Irving Wallace',
            'J. R. R. Tolkien',
            'Masashi Kishimoto',
            'Karl May',
            'Mickey Spillane',
            'C. S. Lewis',
            'Kyotaro Nishimura',
            'Mitsuru Adachi',
            'Rumiko Takahashi',
            'Gosho Aoyama',
            'Dan Brown',
            'Ann M. Martin',
            'Ryōtarō Shiba',
            'Arthur Hailey',
            'Gérard de Villiers',
            'Beatrix Potter',
            'Michael Crichton',
            'Richard Scarry',
            'Clive Cussler',
            'Alistair MacLean',
            'Ken Follett',
            'Astrid Lindgren',
            'Debbie Macomber',
            'EL James',
            'Tite Kubo',
            'Eiji Yoshikawa',
            'Catherine Cookson',
            'Stephenie Meyer',
            'Norman Bridwell',
            'David Baldacci',
            'Nicholas Sparks',
            'Hirohiko Araki',
            'Evan Hunter',
            'Andrew Neiderman',
            'Roger Hargreaves',
            'Anne Rice',
            'Robin Cook',
            'Wilbur Smith',
            'Erskine Caldwell',
            'Judith Krantz',
            'Eleanor Hibbert',
            'Lewis Carroll',
            'Denise Robins',
            'Cao Xueqin',
            'Ian Fleming',
            'Hermann Hesse',
            'Rex Stout',
        ];

        for ($i = 0; $i < count($categories); $i++) {
            $category = new Category();
            $category->setCategory($categories[$i]);
            $manager->persist($category);
        }

        for ($i = 0; $i < count($authors); $i++) {
            $author = new Author();
            $author-> setFullName($authors[$i]);
            $manager->persist($author);
        }

        $manager->flush();
    }
}