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

## Exo 2 👀

```php
<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
// modifier ici
echo $nom;
echo $prenom;
?>

<form method="POST">
    <input type="text" name="prenom" id="prenom" />
    <input type="text" name="nom" id="nom" />
</form>
```

Copiez le code de exo2.php du [dépôt github](https://github.com/sylvainmrs/introduction-php). L'objectif de cet exo:
créer des conditions qui permettent de vérifier que l'utilisateur a bien
indiqué un nom et un prénom sachant que _strlen($nom)_ renvoie le nombre
de caractères dans la variable _$nom_.

**Exemple:** _strlen("patate")_ ➡️ 6

## Les boucles

![](https://live.staticflickr.com/3770/10104990125_95ab6722d2_k.jpg)

##

[](https://sylvainmrs.github.io/introduction-php/dori-dans-un-bocal.html)

```php
<?php
// dori-dans-un-bocal.php
$tour = 0;

while ($tour < 10) {
    echo "Tiens, c'est sympa ici !<br />";
    $tour = $tour + 1;
}

/* ou en plus compact */
for ($tour = 0; $tour < 10; $tour++) {
    echo "Tiens, c'est sympa ici !<br />";
}
```

##

[](https://sylvainmrs.github.io/introduction-php/governator.html)

```php
<?php

for ($annee = 2001; $annee < 2021; $annee++) {
  if ($annee > 2000 && $annee <= 2008) {
    echo '<p>' . $annee . ': Attack Irak!</p>';
  }
  if ($annee > 2008 && $annee <= 2016) {
    echo "<p>$annee: Drop mic</p>";
  }
  if ($annee > 2016 && $annee <= 2020) {
    echo "<p>{$annee}: You're fake news!</p>";
  }
}

```

## Exo 3 🎉

Gauss étant gosse avait trouvé un moyen efficace
de calculer la somme suivante :

1 + 2 + 3 + 4 + 5 + 6 + 7 + 8 + 9 + 10 + 11 + 12 + 13 + 14 + 15 + 16 + 17 + 18 + 19 + 20 + 21 + 22 + 23 + 24 + 25 + 26 + 27 + 28 + 29 + 30 + 31 + 32 + 33 + 34 + 35 + 36 + 37 + 38 + 39 + 40 + 41 + 42 + 43 + 44 + 45 + 46 + 47 + 48 + 49 + 50 + 51 + 52 + 53 + 54 + 55 + 56 + 57 + 58 + 59 + 60 + 61 + 62 + 63 + 64 + 65 + 66 + 67 + 68 + 69 + 70 + 71 + 72 + 73 + 74 + 75 + 76 + 77 + 78 + 79 + 80 + 81 + 82 + 83 + 84 + 85 + 86 + 87 + 88 + 89 + 90 + 91 + 92 + 93 + 94 + 95 + 96 + 97 + 98 + 99 + 100 = 5050.

Depuis on a inventé PHP... et les ordinateurs en général.

## Exo 4 🤯🤒😶‍🌫️

ToDo
