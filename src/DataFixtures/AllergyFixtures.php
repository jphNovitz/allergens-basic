<?php

namespace App\DataFixtures;

use App\Entity\Allergy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AllergyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $allergies = [
            ["arachides", "peanuts"],
            ["fruits à coque", "tree nuts"],
            ["lait", "milk"],
            ["œufs", "eggs"],
            ["poissons", "fish"],
            ["crustacés", "shellfish"],
            ["soja", "soy"],
            ["blé", "wheat"],
            ["sésame", "sesame"],
            ["moutarde", "mustard"],
            ["sulfites", "sulfites"],
            ["lupin", "lupin"],
            ["mollusques", "mollusks"],
            ["céleri", "celery"],
            ["gluten", "gluten"]
        ];

        foreach ($allergies as $allergy) {
            $newAllergy = new Allergy();
            $newAllergy->setNameFr($allergy[0]);
            $newAllergy->setNameEn($allergy[1]);
            $manager->persist($newAllergy);
        }

        $manager->flush();
    }
}
