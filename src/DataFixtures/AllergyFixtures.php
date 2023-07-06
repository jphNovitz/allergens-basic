<?php

namespace App\DataFixtures;

use App\Entity\Allergy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AllergyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $allergies = array(
            array("Arachides", "Peanuts"),
            array("Fruits à coque", "Tree nuts"),
            array("Lait", "Milk"),
            array("Œufs", "Eggs"),
            array("Poissons", "Fish"),
            array("Crustacés", "Shellfish"),
            array("Soja", "Soy"),
            array("Blé", "Wheat"),
            array("Sésame", "Sesame"),
            array("Moutarde", "Mustard"),
            array("Sulfites", "Sulfites"),
            array("Lupin", "Lupin"),
            array("Mollusques", "Mollusks"),
            array("Céleri", "Celery"),
            array("Gluten", "Gluten")
        );
        foreach ($allergies as $allergy) {
            $newAllergy = new Allergy();
            $newAllergy ->setNameFr($allergy[0]);
            $newAllergy ->setNameEn($allergy[1]);
            $manager->persist($newAllergy);
        }

        $manager->flush();
    }
}
