<?php

/**
 * 
 * Final Keyword
 * https://www.php.net/manual/en/language.oop5.final.php
 * เป็นการป้องกันการแก้ไขคลาสจากการ inherit
 * 
 */

final class Unchangeable
{
    final public function hello()
    {
        echo "This method cannot be changed.";
    }
}

// หากลองลองแก้ไข class จากมี error เกิดขึ้น

// class Change extends Unchangeable
// {
//     public function hello()
//     {
//         echo "Hello World!";
//     }
// }
// Fatal error: Class Change may not inherit from final class (Unchangeable)
