## Filipac CNP - Validare CNP
[![Build Status](https://travis-ci.org/filipac/cnp.svg)](https://travis-ci.org/laravel/framework)[![Latest Stable Version](https://poser.pugx.org/filipac/cnp/v/stable.svg)](https://packagist.org/packages/filipac/cnp) [![Total Downloads](https://poser.pugx.org/filipac/cnp/downloads.svg)](https://packagist.org/packages/filipac/cnp) [![Latest Unstable Version](https://poser.pugx.org/filipac/cnp/v/unstable.svg)](https://packagist.org/packages/filipac/cnp) [![License](https://poser.pugx.org/filipac/cnp/license.svg)](https://packagist.org/packages/filipac/cnp)

![Filipac/CNP](https://raw.githubusercontent.com/filipac/cnp/master/cnp.jpg)

### Cum instalez pachetul?
```
composer require filipac/cnp ~1.0
```
Sau introduceti in sectiunea require din ```composer.json```:
```json
"filipac/cnp": "~1.0"
```

### Cum folosesc acest pachet?
Clasa ```Cnp``` are 2 metode publice statice: ```valid``` care returneaza un boolean (true, false). Este disponibila si functia
```invalid``` care este practic functia valid, dar negata.
```php
<?php
use Filipac\Cnp\Cnp;
if(Cnp::valid('1930101021162')) #true
	echo 'Cnp-ul este valid';
if(! Cnp::valid('1930101021161')) #false
   echo 'Cnp-ul este invalid';
if(Cnp::invalid('1930101021161')) #true
	echo 'Cnp-ul este invalid';
if(!Cnp::invalid('1930101021162')) #false
	echo 'Cnp-ul este valid';
?>
```

### Cum sa contribui?
Daca ai idei de imbunatatire a acestui script, da fork acestui repository, fa modificarile necesare si apoi da un pull-request.
Nu uita sa scrii un test (vezi ```tests/CnpTest.php```) pentru ce ai implementat, altfel nu voi accepta request-ul.
Testarea se face cu **PhpUnit**.

### Licienta

Acest script este distribuit sub [licienta MIT](http://opensource.org/licenses/MIT).
