# Introduction à PHP

![](https://live.staticflickr.com/7906/47065983791_a0f0895d28_b.jpg)

<!-- notes -->

Présentation à retrouver sur [ohmydeck!](https://app.ohmydeck.com/sylvain/decks/uSP7zQxXuZdz6UVQt8vEQE)

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

## Les variables

![](https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Montreal_Comiccon_2016_-_Solid_Snake_%2827978588430%29.jpg/1599px-Montreal_Comiccon_2016_-_Solid_Snake_%2827978588430%29.jpg)

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

## 0.7734

On peut également faire des calculs en PHP

```php
<?php

$vanDamme = 1 + 1; // 2 ?

$buzz = 1 / 0; // vers l'infini...

$blackFriday = 1999 * 0.75; // quelle promo

$resteEuclidien = 5 % 4; // reste 1
```

## Exo 1 et demi

Sachant que **date('Y')** vous donnera l'année courante à 4 chiffres (exemple: 2022),
modifiez le code précédent pour calculer à peu près votre âge.

[](https://sylvainmrs.github.io/introduction-php/exo1.5.html)

## Les conditions

![](https://static.im-a-puzzle.com/gallery/Miscellaneous/Doors/Choose-the-right-door.jpg)

##

```php
<?php

$dansUnBar = true;
$debout = true;

if ($dansUnBar && $debout) {
    echo "j'attrape le covid";
} else if ($dansUnBar && !$debout) {
    echo "je suis immunisé";
} else {
    echo "je suis tout seul";
}
```

##

```php
if ($cas > 200000) {
    echo "Alerte écarlate à points rouges";
} else {
    echo "Yolo";
}
```

## Exo 1 3/4

Trouvez sur un site de cartographie les coordonnées de votre ville, si la latitude est au-dessus de **43.9416582**, vous êtes du Nord, sinon du Sud.

[](https://sylvainmrs.github.io/introduction-php/exo1.75.html)

## Les boucles

![](https://live.staticflickr.com/3770/10104990125_95ab6722d2_k.jpg)

##

```php
<?php
// dori-dans-un-bocal.php

for ($i = 0; $i < 10; $i++) {
    echo "Tiens, c'est sympa ici !<br />";
}
```

[](https://sylvainmrs.github.io/introduction-php/dori-dans-un-bocal.html)
