<?php


namespace Pattern\Structural\Flyweight\Sample2;

/**
 * EN: Flyweight Design Pattern
 *
 * Intent: Lets you fit more objects into the available amount of RAM by sharing
 * common parts of state between multiple objects, instead of keeping all of the
 * data in each object.
 *
 * Example: Before we begin, please note that real applications for the
 * Flyweight pattern in PHP are pretty rare. This stems from the single-thread
 * nature of PHP, where you're not supposed to be storing ALL of your
 * application's objects in memory at the same time, in the same thread. While
 * the idea for this example is only half-serious, and the whole RAM problem
 * might be solved by structuring the app differently, it still demonstrates the
 * concept of the pattern as it works in the real world. All right, I've given
 * you the disclaimer. Now, let's begin.
 *
 * In this example, the Flyweight pattern is used to minimize the RAM usage of
 * objects in an animal database of a cat-only veterinary clinic. Each record in
 * the database is represented by a Cat object. Its data consists of two parts:
 *
 * 1. Unique (extrinsic) data such as a pet's name, age, and owner info.
 * 2. Shared (intrinsic) data such as a breed name, color, texture, etc.
 *
 * The first part is stored directly inside the Cat class, which acts as a
 * context. The second part, however, is stored separately and can be shared by
 * multiple cats. This shareable data resides inside the CatVariation class. All
 * cats that have similar features are linked to the same CatVariation class,
 * instead of storing the duplicate data in each of their objects.
 */
class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         */
        $db = new CatDataBase();

        echo "Client: Let's see what we have in \"cats.csv\".\n";

        // EN: To see the real effect of the pattern, you should have a large database
        // with several millions of records. Feel free to experiment with code to see
        // the real extent of the pattern.
        $handle = fopen(__DIR__ . "/cats.csv", "r");
        $row = 0;
        $columns = [];
        while (($data = fgetcsv($handle)) !== false) {
            if ($row == 0) {
                for ($c = 0; $c < count($data); $c++) {
                    $columnIndex = $c;
                    $columnKey = strtolower($data[$c]);
                    $columns[$columnKey] = $columnIndex;
                }
                $row++;
                continue;
            }

            $db->addCat(
                $data[$columns['name']],
                $data[$columns['age']],
                $data[$columns['owner']],
                $data[$columns['breed']],
                $data[$columns['image']],
                $data[$columns['color']],
                $data[$columns['texture']],
                $data[$columns['fur']],
                $data[$columns['size']],
            );
            $row++;
        }
        fclose($handle);

        echo "\nClient: Let's look for a cat named \"Siri\".\n";
        $cat = $db->findCat(['name' => "Siri"]);
        if ($cat) {
            $cat->render();
        }

        echo "\nClient: Let's look for a cat named \"Bob\".\n";
        $cat = $db->findCat(['name' => "Bob"]);
        if ($cat) {
            $cat->render();
        }
    }
}
