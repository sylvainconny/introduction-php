# Introduction à PHP

![](https://live.staticflickr.com/7906/47065983791_a0f0895d28_b.jpg)

## À quoi ça sert ?

### Yo

Dans **/var/www/html**, créer un fichier **bapteme-01-01.php** et écrire le code suivant:

```php
<?php

echo 'Bonjour les gens !';
```

Dans le navigateur, ouvrir [http://localhost/bapteme-01-01.php](http://localhost/bapteme-01-01.php).

Il doit s'afficher **Bonjour les gens !**, mais c'est un peu moche.

<!-- notes -->

- Le code php est systématiquement précédé par <?php\n

### <h1>Ouech ouech</h1>

Dans **/var/www/html**, créer un fichier **bapteme-01-02.php** et écrire le code suivant:

```php
<?php

echo '<h1>Bonjour les gens !</h1>';
```

Dans le navigateur, ouvrir [http://localhost/bapteme-01-02.php](http://localhost/bapteme-01-02.php).

C'est déjà mieux.

<!-- notes -->

- clic droit / Afficher le code source de la page

### <h1> Salutations </h1>

Dans **/var/www/html**, créer un fichier **bapteme-01-03.php** et écrire le code suivant:

```php
<h1>
  <?php echo 'Bonjour les gens !'; ?>
</h1>
```

Dans le navigateur, ouvrir [http://localhost/bapteme-01-03.php](http://localhost/bapteme-01-03.php).

C'est exactement le même résultat... 🤔 (ou presque)

<!-- notes -->

- clic droit / Afficher le code source de la page
- résultat légèrement différent

### $Variables distinguées

Dans **/var/www/html**, créer un fichier **bapteme-01-04.php** et écrire le code suivant:

```php
<?php

$bonjour = 'Bonjour les gens !';
echo $bonjour;
```

Dans le navigateur, ouvrir [http://localhost/bapteme-01-04.php](http://localhost/bapteme-01-04.php).

### Définition ?

_Le PHP c'est pour écrire du HTML mais en plus compliqué..._

## Exercice 2

conditions

## Exercice 3

boucles

```

```
