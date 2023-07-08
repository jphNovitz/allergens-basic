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
        $ingredients = [
            "ail" => "garlic",
            "anchois" => "anchovies",
            "aneth" => "dill",
            "avocat" => "avocado",
            "bacon" => "bacon",
            "banane" => "banana",
            "basilic" => "basil",
            "beurre" => "butter",
            "boeuf" => "beef",
            "brocoli" => "broccoli",
            "câpres" => "capers",
            "carotte" => "carrot",
            "cheddar" => "cheddar",
            "cheddar fondu" => "melted cheddar",
            "chèvre" => "goat cheese",
            "chips" => "chips",
            "chorizo" => "chorizo",
            "concombre" => "cucumber",
            "coriandre" => "coriander",
            "cornichons" => "pickles",
            "crevettes" => "shrimp",
            "curry" => "curry",
            "dinde" => "turkey",
            "épinards" => "spinach",
            "fromage" => "cheese",
            "fromage bleu" => "blue cheese",
            "fromage de chèvre" => "goat cheese",
            "fromage fondu" => "melted cheese",
            "fromage suisse" => "swiss cheese",
            "frites" => "french fries",
            "galette de pomme de terre" => "potato pancake",
            "hachis" => "minced meat",
            "haricots verts" => "green beans",
            "jambon" => "ham",
            "jambon de dinde" => "turkey ham",
            "ketchup" => "ketchup",
            "laitue" => "lettuce",
            "maïs" => "corn",
            "mayonnaise" => "mayonnaise",
            "moutarde" => "mustard",
            "oignons" => "onions",
            "oeuf" => "egg",
            "olives" => "olives",
            "parmesan" => "parmesan",
            "pâté" => "pâté",
            "piment" => "chili pepper",
            "poisson" => "fish",
            "poivrons" => "bell peppers",
            "poulet" => "chicken",
            "roquette" => "rocket",
            "saucisse" => "sausage",
            "saumon" => "salmon",
            "sauce aigre-douce" => "sweet and sour sauce",
            "sauce barbecue" => "barbecue sauce",
            "sauce chili" => "chili sauce",
            "sauce ranch" => "ranch dressing",
            "sauce soja" => "soy sauce",
            "saucisse de porc" => "pork sausage",
            "sel" => "salt",
            "tomate" => "tomato",
            "thon" => "tuna",
            "vinaigre" => "vinegar",
            "yaourt" => "yogurt",
            "zeste de citron" => "lemon zest",
            "zeste d'orange" => "orange zest",
            "bifteck" => "steak",
            "cacao" => "cocoa",
            "cannelle" => "cinnamon",
            "champignons" => "mushrooms",
            "chocolat" => "chocolate",
            "citron" => "lemon",
            "citron vert" => "lime",
            "confiture" => "jam",
            "croissant" => "croissant",
            "fromage à la crème" => "cream cheese",
            "gingembre" => "ginger",
            "glace" => "ice cream",
            "haricots rouges" => "red beans",
            "huile d'olive" => "olive oil",
            "jus d'orange" => "orange juice",
            "miel" => "honey",
            "moutarde de Dijon" => "Dijon mustard",
            "mûres" => "blackberries",
            "noisettes" => "hazelnuts",
            "noix" => "nuts",
            "noix de coco" => "coconut",
            "nutella" => "Nutella",
            "pain" => "bread",
            "pâte à tartiner" => "spread",
            "pâtes" => "pasta",
            "pêches" => "peaches",
            "poire" => "pear",
            "poivre" => "pepper",
            "raisins" => "grapes",
            "riz" => "rice",
            "sirop d'érable" => "maple syrup",
            "sucre" => "sugar",
            "sucre glace" => "powdered sugar",
            "thé" => "tea",
            "vanille" => "vanilla",
            "yaourt grec" => "Greek yogurt",
            "yaourt nature" => "plain yogurt",
            "amandes" => "almonds",
            "aubergine" => "eggplant",
            "baies de genièvre" => "juniper berries",
            "beurre de cacahuète" => "peanut butter",
            "carvi" => "caraway",
            "cerises" => "cherries",
            "chocolat blanc" => "white chocolate",
            "ciboulette" => "chives",
            "citronnelle" => "lemongrass",
            "compote de pommes" => "applesauce",
            "cranberries" => "cranberries",
            "crème" => "cream",
            "crème aigre" => "sour cream",
            "crème fouettée" => "whipped cream",
            "croûtons" => "croutons",
            "cumin" => "cumin",
            "datte" => "date",
            "farine" => "flour",
            "feuilles de laurier" => "bay leaves",
            "figue" => "fig",
            "flocons de piment" => "chili flakes",
            "flocons d'avoine" => "oatmeal",
            "foie gras" => "foie gras",
            "framboises" => "raspberries",
            "fruits de la passion" => "passion fruit",
            "garam masala" => "garam masala",
            "gingembre confit" => "candied ginger",
            "graines de lin" => "flaxseeds",
            "graines de sésame" => "sesame seeds",
            "grenade" => "pomegranate",
            "guacamole" => "guacamole",
            "harissa" => "harissa",
            "houmous" => "hummus",
            "lait d'amande" => "almond milk",
            "lait de coco" => "coconut milk",
            "lait de soja" => "soy milk",
            "menthe" => "mint",
            "mures" => "blackberries",
            "noix de cajou" => "cashews",
            "noix de pécan" => "pecans",
            "noix de pin" => "pine nuts",
            "noix de muscade" => "nutmeg",
            "oignons caramélisés" => "caramelized onions",
            "origan" => "oregano",
            "paprika" => "paprika",
            "pâte feuilletée" => "puff pastry",
            "pâte phyllo" => "phyllo dough",
            "pépites de chocolat" => "chocolate chips",
            "pesto" => "pesto",
            "pignons de pin" => "pine nuts",
            "pistaches" => "pistachios",
            "poivre noir" => "black pepper",
            "poivron rouge" => "red bell pepper",
            "pomme" => "apple",
            "poudre à pâte" => "baking powder",
            "pruneaux" => "prunes",
            "raisins secs" => "raisins",
            "romarin" => "rosemary",
            "sauce au caramel" => "caramel sauce",
            "sauce béchamel" => "béchamel sauce",
            "sauce tomate" => "tomato sauce",
            "sirop de grenadine" => "grenadine syrup",
            "sirop de maïs" => "corn syrup",
            "sirop de menthe" => "mint syrup",
            "sirop de vanille" => "vanilla syrup",
            "tabasco" => "tabasco",
            "thym" => "thyme",
            "tofu" => "tofu",
            "vermicelles" => "vermicelli",
            "vinaigre balsamique" => "balsamic vinegar",
            "yaourt à la vanille" => "vanilla yogurt",
            "yaourt aux fruits" => "fruit yogurt"
        ];


        foreach ($ingredients as $ingredient_fr => $ingredient_en) {
            $newIngredient = new Ingredient();
            $newIngredient->setNameFr($ingredient_fr);
            $newIngredient->setNameEn($ingredient_en);
            $manager->persist($newIngredient);
        }

        $manager->flush();

        $ingredientAllergies = [
            "anchois" => ["poissons"],
            "beurre" => ["lait"],
            "cheddar" => ["lait"],
            "cheddar fondu" => ["lait"],
            "chèvre" => ["lait"],
            "crevettes" => ["crustacés"],
            "galette de pomme de terre" => ["oeufs", "blé"],
            "mayonnaise" => ["oeufs"],
            "moutarde" => ["moutarde"],
            "oeuf" => ["oeufs"],
            "parmesan" => ["lait"],
            "saumon" => ["poissons"],
            "sauce ranch" => ["oeufs", "lait"],
            "sauce soja" => ["soja"],
            "fromage" => ["lait"],
            "poisson" => ["poissons"],
            "saumon fumé" => ["poissons"],
            "crème fraîche" => ["lait"],
            "miel" => ["pollen"],
            "pousses de soja" => ["soja"],
            "pesto" => ["fruits à coque"],
            "pain pita" => ["gluten"],
            "sésame" => ["sésame"],
            "feta" => ["lait"],
            "céleri" => ["céleri"],
            "noix" => ["fruits à coque"],
            "noix de cajou" => ["fruits à coque"],
            "sauce aïoli" => ["ail"],
            "sauce tartare" => ["oeufs"],
            "sushi" => ["poissons"],
            "crevettes tempura" => ["crustacés"],
            "sushis rolls" => ["poissons"],
            "edamame" => ["soja"],
            "pâte à pizza" => ["gluten"],
            "mozzarella" => ["lait"],
            "pâte feuilletée" => ["gluten"],
            "fromage de chèvre" => ["lait"],
            "sauce alfredo" => ["lait"]
        ];

        $i = 0;

        foreach ($ingredientAllergies as $ingredient => $row_allergy) {
            if (!empty($row_allergy)) {
                $ingredientToUpdate[$i] = $manager
                    ->getRepository(Ingredient::class)
                    ->findOneBy(['name_fr' => $ingredient]);
                foreach ($row_allergy as $row) {
                    $allergy = $manager->getRepository(Allergy::class)
                        ->findOneBy(["name_fr" => $row]);

                    if ($allergy !== null && $ingredientToUpdate[$i] !== null)
                        $ingredientToUpdate[$i]->addAllergy($allergy);
                }
            }
            $i++;
        }
        $manager->flush();


    }
}
