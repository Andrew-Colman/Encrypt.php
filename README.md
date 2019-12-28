# Encrypt.php
php class with advanced encryption methods ( encrypt, decrypt, validate, sanitize, verify email )
>learn more about Bcrypt https://wikipedia.org/wiki/Bcrypt

## using ##
```php
require_once 'Encrypt.php'

$enc = new Encrypt();
```
## using with psr-4 autoload ##
```php
$enc = new App\Encrypt();
```
>learn more about php psr-4 https://www.php-fig.org/psr/psr-4/ 
>autoload https://getcomposer.org/doc/01-basic-usage.md#autoloading

     
### call a function when required ###
```php
        $enc->encrypt($password); // example: pick $_POST["Password"] when registering user in db
```      
        
### decrypt() example ###
```php
    if($enc->decrypt($_POST["thePasswordInput"],$userPassInDB)){
        //allow login
    }
    else{
        //deny login
    }
```
