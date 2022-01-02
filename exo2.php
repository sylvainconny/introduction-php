<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exo 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <?php
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  // Créez vos conditions ci-dessous
  ?>

  <div class="container">
    <p>
      <strong>Votre nom:</strong>
      <?php echo $nom; ?>
    </p>
    <p>
      <strong>Votre prénom:</strong>
      <?php echo $prenom; ?>
    </p>
    <form method="POST">
      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" />
      </div>
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" />
      </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
</body>

</html>
