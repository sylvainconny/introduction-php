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

Le serveur PHP transforme tout ce qui est entre `<?php ?>` en texte, en code HTML.
![](https://github.com/sylvainmrs/bapteme-oclock/blob/main/assets/server-img.jpg?raw=true)
