<?php
/**
 * Created by PhpStorm.
 * User: tahlya
 * Date: 30/09/18
 * Time: 2:07 PM
 */

namespace DrupalProject\composer;


class KeyGeneration
{
    public static function createKey()
    {
        $bytes = random_bytes(64);
        $saltVal=bin2hex($bytes);
        $hashVal = hash('sha512', $saltVal);
        file_put_contents("keys/JWTkey.key", $hashVal);
    }
}
