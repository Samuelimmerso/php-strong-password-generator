<?php 

//avvio sessione
session_start();

$difficult= $_GET["difficult"];


if($difficult){
    $Password = GeneraPasswordRandom($difficult);

    //salvataggio variabile Password nella sessione
    $_SESSION["Password"] = $Password;

    //reindirizzamento alla pagina di visualizzazione del risultato
    header('Location: ./result_password.php');
}




function GeneraPasswordRandom($password_lenght) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $Password = '';

    for ($i = 0; $i < $password_lenght; $i++) {
        $Password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $Password;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


<form method="GET">
         
          <!-- difficult -->
          <select class="form-select" aria-label="Default select example" name="difficult" for="review">
            <option selected value="0">Difficoltà</option>
            <option value="10">LOW</option>
            <option value="15">NORMAL</option>
            <option value="20">STRONG</option>
          </select>
        <button class="btn btn-success">Invia il form</button>
        
      </form>




</body>

</html>