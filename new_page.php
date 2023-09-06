<?php 
//Variabili
$title = "PHP BadWords";

$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];

$paragraphlength = strlen($paragraph);
$censoredParagraph = str_replace($badword, "***", $paragraph)
?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
</head>
<body>
  
  <div class="container mt-5">

    <h1 class="text-center fw-bold"><?php echo $title ?></h1>

    <h3 class="fw-bold">Questo è il paragrafo senza censura:</h3>
    <p class="text-center p-3"> <?php echo $paragraph ?> </p>
    <h4 class="fw-bold">La sua lunghezza è di:</h4> <span class="fw-bold"> <?php echo $paragraphlength ?> </span>

    <h3 class="fw-bold">Questo è il paragrafo con censura:</h3>
    <p class="text-center p-3"> <?php echo $censoredParagraph ?> </p>
    <h4 class="fw-bold">La parola censurata è:</h4> <span class="fw-bold"><?php echo $badword ?></span>

  </div>

</body>
</html>