# Encrypt.php
php class with advanced encryption methods ( encrypt, decrypt, validate, sanitize, verify email )

### First instantiate the class ###
```php
        $enc = new Encrypt();
```         
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
