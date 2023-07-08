<?php

namespace App\DataFixtures;

use App\Entity\Allergy;
use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class IngredientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ingredients = array(
            array("Pain", "Bread"),
            array("Salade", "Lettuce"),
            array("Tomate", "Tomato"),
            array("Fromage", "Cheese"),
            array("Poulet", "Chicken"),
            array("Mayonnaise", "Mayonnaise"),
            array("Jambon", "Ham"),
            array("Oignon", "Onion"),
            array("Ketchup", "Ketchup"),
            array("Bacon", "Bacon"),
            array("Cornichons", "Pickles"),
            array("Moutarde", "Mustard"),
            array("Boeuf haché", "Ground beef"),
            array("Laitue", "Lettuce"),
            array("Sauce barbecue", "Barbecue sauce"),
            array("Crudités", "Raw vegetables"),
            array("Thon", "Tuna"),
            array("Saucisse", "Sausage"),
            array("Avocat", "Avocado"),
            array("Oeuf", "Egg"),
            array("Poivron", "Bell pepper"),
            array("Poisson", "Fish"),
            array("Saumon fumé", "Smoked salmon"),
            array("Crevettes", "Shrimp"),
            array("Crème fraîche", "Sour cream"),
            array("Câpres", "Capers"),
            array("Olives", "Olives"),
            array("Houmous", "Hummus"),
            array("Poivre", "Pepper"),
            array("Sel", "Salt"),
            array("Miel", "Honey"),
            array("Pousses d'alfalfa", "Alfalfa sprouts"),
            array("Pousses de soja", "Bean sprouts"),
            array("Pesto", "Pesto"),
            array("Huile d'olive", "Olive oil"),
            array("Vinaigre balsamique", "Balsamic vinegar"),
            array("Tabasco", "Tabasco"),
            array("Pain pita", "Pita bread"),
            array("Roquette", "Arugula"),
            array("Anchois", "Anchovies"),
            array("Guacamole", "Guacamole"),
            array("Salsa", "Salsa"),
            array("Sésame", "Sesame"),
            array("Cheddar", "Cheddar"),
            array("Champignons", "Mushrooms"),
            array("Feta", "Feta cheese"),
            array("Ciboulette", "Chives"),
            array("Carottes", "Carrots"),
            array("Céleri", "Celery"),
            array("Cumin", "Cumin"),
            array("Riz", "Rice"),
            array("Haricots noirs", "Black beans"),
            array("Pois chiches", "Chickpeas"),
            array("Maïs", "Corn"),
            array("Chou", "Cabbage"),
            array("Thym", "Thyme"),
            array("Basilic", "Basil"),
            array("Romaine", "Romaine lettuce"),
            array("Noix", "Nuts"),
            array("Graines de tournesol", "Sunflower seeds"),
            array("Noix de cajou", "Cashews"),
            array("Ail", "Garlic"),
            array("Persil", "Parsley"),
            array("Sauce aïoli", "Aioli sauce"),
            array("Sauce ranch", "Ranch sauce"),
            array("Sauce tartare", "Tartar sauce"),
            array("Sauce teriyaki", "Teriyaki sauce"),
            array("Sésame", "Sesame"),
            array("Sushi", "Sushi"),
            array("Wasabi", "Wasabi"),
            array("Sauce soja", "Soy sauce"),
            array("Mirin", "Mirin"),
            array("Crevettes tempura", "Tempura shrimp"),
            array("Sushis rolls", "Sushi rolls"),
            array("Riz vinaigré", "Vinegared rice"),
            array("Nori", "Seaweed"),
            array("Edamame", "Edamame"),
            array("Nouilles", "Noodles"),
            array("Poulet frit", "Fried chicken"),
            array("Sauce piquante", "Hot sauce"),
            array("Pois verts", "Green peas"),
            array("Radis", "Radish"),
            array("Sauce pimentée", "Spicy sauce"),
            array("Pâte à pizza", "Pizza dough"),
            array("Mozzarella", "Mozzarella"),
            array("Saucisse italienne", "Italian sausage"),
            array("Champignons sautés", "Sautéed mushrooms"),
            array("Poivrons grillés", "Grilled peppers"),
            array("Basilic frais", "Fresh basil"),
            array("Parmesan", "Parmesan"),
            array("Ail grillé", "Roasted garlic"),
            array("Sauce tomate", "Tomato sauce"),
            array("Pâte feuilletée", "Puff pastry"),
            array("Oignons caramélisés", "Caramelized onions"),
            array("Épinards", "Spinach"),
            array("Fromage de chèvre", "Goat cheese"),
            array("Bacon croustillant", "Crispy bacon"),
            array("Sauge", "Sage"),
            array("Sauce Alfredo", "Alfredo sauce"),
            array("Pancetta", "Pancetta")
        );

        foreach ($ingredients as $ingredient) {
            $newIngredient = new Ingredient();
            $newIngredient->setNameFr($ingredient[0]);
            $newIngredient->setNameEn($ingredient[1]);
            $manager->persist($newIngredient);
        }

        $manager->flush();


        $ingredientsAllergies = array(
            array("Fromage", "Lait"),
            array("Mayonnaise", "Oeufs"),
            array("Moutarde", "Moutarde"),
            array("Oeuf", "Oeufs"),
            array("Poisson", "Poissons"),
            array("Saumon fumé", "Poissons"),
            array("Crevettes", "Crustacés"),
            array("Crème fraîche", "Lait"),
            array("Miel", "Pollen"),
            array("Pousses de soja", "Soja"),
            array("Pesto", "Fruits à coque"),
            array("Pain pita", "Gluten"),
            array("Anchois", "Poissons"),
            array("Sésame", "Sésame"),
            array("Cheddar", "Lait"),
            array("Feta", "Lait"),
            array("Céleri", "Céleri"),
            array("Noix", "Fruits à coque"),
            array("Noix de cajou", "Fruits à coque"),
            array("Sauce aïoli", "Ail"),
            array("Sauce ranch", "Produits laitiers"),
            array("Sauce tartare", "Oeufs"),
            array("Sushi", "Poissons"),
            array("Sauce soja", "Soja"),
            array("Crevettes tempura", "Crustacés"),
            array("Sushis rolls", "Poissons"),
            array("Edamame", "Soja"),
            array("Pâte à pizza", "Gluten"),
            array("Mozzarella", "Lait"),
            array("Parmesan", "Lait"),
            array("Pâte feuilletée", "Gluten"),
            array("Fromage de chèvre", "Lait"),
            array("Sauce Alfredo", "Lait"),
        );

        $i = 0 ;

        foreach ($ingredientsAllergies as $ingredient) {
            dump($ingredient);
            echo "-----------------\n";
            if (!empty($ingredient[1])) {
                $ingredientToUpdate[$i] = $manager
                    ->getRepository(Ingredient::class)
                    ->findOneBy(['name_fr' => $ingredient[0]]);

                $allergy = $manager->getRepository(Allergy::class)
                    ->findOneBy(["name_fr" => $ingredient[1]]);

                if ($allergy !== null)
                $ingredientToUpdate[$i]->addAllergy($allergy);
            }
            $i++;
        }
        $manager->flush();


    }
}
