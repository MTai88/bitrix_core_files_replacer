<?php

class CoreClassesReplacement
{
    static array $replaceableClasses = [
        //"Bitrix\Fileman\UserField\Address" => "/modules/fileman/lib/userfield/address.php",  only for example
    ];

    public static function Init(): void
    {
        spl_autoload_register(array(__class__, 'Autoloader'), false, true);
    }

    public static function Autoloader(string $className): void
    {
        foreach (self::$replaceableClasses as $currClassName => $fileLocation) {
            if ($className === $currClassName) {
                $filePath = __DIR__ . $fileLocation;
                if (file_exists($filePath)) {
                    require_once $filePath;
                }
            }
        }
    }

}
