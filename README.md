### If you need to add your changes to bitrix core classes you can replace them with this class.
### Also, these files will be located in /local/ directory, and you can add them to your git repository

### Setup
- Add the following code to `/local/php_interface/init.php`
```
require_once(__DIR__ . '/core_files_replacer/core_classes_replacement.php');
CoreClassesReplacement::Init();
```
- Add to property $replaceableClasses bitrix core classes names that need to be replaced and paths to your replaceable files location. 
Example:
```
static array $replaceableClasses = [
        "Bitrix\Fileman\UserField\Address" => "/modules/fileman/lib/userfield/address.php",
    ];
```