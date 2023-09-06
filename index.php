<?php
// Variabili
$title = "PHP BadWords";
$badword = "Scrivi una parola da censurare";
$paragraph = "Scrivi un paragrafo"
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

    <form action="new_page.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"><?php echo $badword ?></label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"><?php echo $paragraph ?></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="button" class="btn btn-primary">Invia</button>
    </form>
  </div>

</body>

</html>