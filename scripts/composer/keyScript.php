<?php
/**
 * Created by PhpStorm.
 * User: tahlya
 * Date: 26/09/18
 * Time: 2:53 PM
 */

//namespace DrupalProject\composer;


class keyScript
{
    public static function createKey()
    {
        //$saltVal = \Drupal\Core\Site\Settings::getHashSalt();
        $hashVal = hash('sha256', 'test');
        file_put_contents('/home/tahlya/workspace/keyFile.key', $hashVal);
    }
}

?>