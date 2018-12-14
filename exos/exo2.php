<?php
require_once '../inc/functions.php';

/*
 * Exo 2 : Please Respect My Privacy
 *
 * Aaaaah, I'm aliiiiive !
 *
 * Well... Now that I'm a human being, I have rights, OK? #MarioLivesMatter
 * As every other humain being, I have the right to privacy.
 * I'm not fond of my lives being public like that.
 *
 * Can you create me a `getLives()` method, that return the amount of lives that I have?
 * And of course, the property needs to be private now.
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      echo $mario->lives; // Fatal Error
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
}




/*
 * Tests
 * Do not touch.
 */
check(2);