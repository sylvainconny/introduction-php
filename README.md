# Introduction à PHP

![](https://live.staticflickr.com/7906/47065983791_a0f0895d28_b.jpg)

## PHP c'est quoi ?

_C'est pour écrire du HTML mais en plus compliqué..._

## Écrire du HTML

```php
<?php

echo '<h1>Bonjour les gens</h1>';
echo '<p>Comment ça va bien ?</p>';
```

## Écrire _dans_ du HTML

```php
<h1>
    <?php echo 'Bonjour les gens'; ?>
</h1>
<p>
    <?php echo 'Comment ça va bien ?'; ?>
</p>
```

## Des **variables** _dans_ du HTML

```php
<?php
    $nom = "o'clock";
?>

<h1>
    Bienvenue les gens de chez
    <?php echo $nom; ?>
</h1>
```

## La magie du serveur

Le serveur PHP transforme tout ce qui est entre `<?php [...] ?>` en code HTML.
![](https://sylvainmrs.github.io/introduction-php/assets/php-server.jpg)

## Nomenclature des variables

NB: des humains peuvent lire votre code.

```php
<?php

$chaineDeCaractere; ✅
$chainedecaractere; ✅
$CHAINEDECARACTERE; ✅
$chaine_de_caractere; ✅
$_chaine_de_caractere; ✅
$Chaine_De_Caractere; ✅
$chaine-de-caractere; ❌
$1chaineDeCaractere; ❌
$chaîneDeCaractère; ❌
```

## Différents types de variables

```php
<?php

$chaineDeCaractere = "Yo !";
$chaineDeCaractere2 = 'Ouech ouech les amis';
$nombreEntier = 42;
$nombreFlotant = 3.14;
$booleen = true;
$aussiBooleen = false;
```

## $premier_Exo

Dans votre dossier de travail (racine du serveur ou sous-dossier), créez un fichier **exo-01.php** et essayez
de retourner le résultat suivant en utilisant des variables correctement typées pour le **nom** et l'**âge**:

[](https://sylvainmrs.github.io/introduction-php/exo1.html)
