<?php
require_once '../inc/functions.php';

/*
 * Exo 1 : Mario Comes To Life
 *
 * Hello! It's me, Mario!
 *
 * Oh, I'm sorry, I'm not speaking French right now.
 * But I've been told you're a developer, so I figure
 * you speak English, at least a little.
 *
 * And for Peach's sake, you're a student in a school
 * named “O’clock”, so you HAVE to be able to read English!
 *
 * So, where were we?
 * OK, I'm Mario! But right now, I am not programmed yet.
 *
 * Can you write me a PHP class to make me exist?
 * Just a bare class nammed `Mario`, with just one property: `lives`.
 * In this game, I start with 3 lives. Oh, and this property
 * should be public knowledge…
 *
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->lives; // Display: 3
 */

class Mario {
    public $lives;

    public function __construct()
    {
        $this->lives = 3;
    }
}




/*
 * Tests
 * Do not touch.
 */
check(1);
