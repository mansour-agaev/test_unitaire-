# 🧪 Test Unitaire - Projet Calculatrice (PHP + JS)

## Objectif
Valider le comportement d’une calculatrice PHP et JS avec PHPUnit et Jest.

## 📁 Structure
- `src/` : logique PHP
- `public/` : logique JS
- `tests/` : tests unitaires
- `image/` : captures d’écran

## 🔧 Lancer les tests

### PHP (via Composer)
```bash
composer install
./vendor/bin/phpunit
```

### JavaScript (via npm)
```bash
npm install
npm test
```

## ✅ Couverture des tests
- Addition, soustraction, multiplication, division
- Priorité des opérations, parenthèses
- Cas d’erreurs : division par zéro, expression invalide, chaîne vide

## ✍️ Bonnes pratiques
- Tests isolés
- Commits explicites
- README clair
