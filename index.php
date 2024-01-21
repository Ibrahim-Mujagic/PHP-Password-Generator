<?php require './functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Document</title>
</head>
<body>
  <?php include './partials/header.php' ?>
  <div class="container-general">
    <div class="info-card">
      <?php if(empty($_GET['psw_length']) && !$isError): ?>
      <p>
        Scegli una password con un minimo di 8 caratteri e un massimo di 32
      </p>
      <?php else: ?>
        <p class="error"><?php echo writeError() ?></p>
      <?php endif;?>
    </div>
    <div class="card">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <div class="quest-side">
          <p>Lunghezza password:</p>
          <p>Consenti ripetizioni di uno o più caratteri:</p>
          <div class="control-btns">
            <button type="submit">Invia</button>
            <button type="reset">Annulla</button>
          </div>
        </div>
        <div class="input-side">
          <div class="psw-length">
            <input type="number" name="psw_length" id="psw-length" placeholder="Inserisci un numero">
          </div>
          <div class="psw-repeat">
            <div class="cont-radio">
              <div class="cont-yes-choice">
                <label for="yes-radio">Si</label>
                <input type="radio" name="repeat" value="1" id="yes-radio">
              </div>
              <div class="cont-no-choice">
                <label for="no-radio">No</label>
                <input type="radio" name="repeat" value="" id="no-radio">
              </div>
            </div>
          </div>
          <div class="psw-checkbox">
            <div class="cont-chebox">
              <input type="checkbox" name="chars[]" value="0" id="letters">
              <label for="letters">Lettere</label>
            </div>
            <div class="cont-chebox">
              <input type="checkbox" name="chars[]" value="1" id="numbers">
              <label for="numbers">Numeri</label>
            </div>
            <div class="cont-chebox">
              <input type="checkbox" name="chars[]" value="2" id="simbols">
              <label for="simbols">Simboli</label>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>