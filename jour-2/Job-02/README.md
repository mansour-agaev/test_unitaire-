# Test Unitaire PHP avec PHPUnit

## 🛠️ Initialisation du projet

```bash
composer init
composer require --dev phpunit/phpunit
```

## 📁 Structure

- `src/Math.php` → contient la classe `Math` avec la méthode `addition`.
- `tests/MathTest.php` → test unitaire de la méthode `addition`.

## 🧪 Exemple de test

```php
$this->assertEquals(5, $math->addition(2, 3));
```

## 📷 Captures d'écran

Ajoutez ici vos captures dans le dossier `image/` :

- ![composer](./image/composer.png)
- ![test-ok](./image/phpunit-ok.png)
- ![test-fail](./image/phpunit-fail.png)

## ✅ Lancer les tests

```bash
./vendor/bin/phpunit
```
