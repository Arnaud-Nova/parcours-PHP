<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Bowser Is Coming
 *
 * Bowser: Mouhahahahahahahahaaaaaaa! It's me, Bowser!
 * Don't be mad, the game would not be fun if there is no bad guy in it.
 *
 * So. I want a way to kill Mario's life when I throw a turtle shell on him :)
 * Can you create me a method `takeHit`, and decrement Mario's lives when it's being used?
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3 (display because of the "echo")
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2 (display because of the "echo")
 *
 * ---
 *
 * Mario: Heeeeey, what are you doing here?!?
 * …
 * Well…
 * …
 * OK, it's fair. A method to kill me. Nice.
 * But I want a method to gain 1up! I love these green mushrooms…
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->up();
 *      $mario->takeHit();
 *      $mario->up();
 *      echo $mario->getLives(); // Display: 4
 */


class Mario {
    private $lives;

    public function __construct()
    {
        $this->lives = 3;
    }

    public function getLives()
    {
        return $this->lives;
    }

    public function takeHit()
    {
        $this->lives -= 1;
        return $this->lives;
    }

    public function up()
    {
        $this->lives += 1;
        return $this->lives;
    }
}


/*
 * Tests
 * Pas touche !
 */
check(3);
