<?php declare(strict_types=1);

/**
 * Represents FairyTail mage
 */
class Mage
{
    public string $age;
    public string $guild;
    public string $name;
    public string $magicType;

    public function fight(): void
    {
        echo 'WALKA NA ŚMIERĆ I ŻYCIE!';
    }
}

//$natsu = new Mage();

//$natsu->name = 'Natsu';
//$natsu->age = 'teen';
//$natsu->guild = 'Fairy Tail';
//$natsu->magicType = 'Fire';