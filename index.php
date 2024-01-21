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
      <p>
        Scegli una password con un minimo di 8 caratteri e un massimo 32
      </p>
    </div>
    <div class="card">
      <form action="">
        <div class="quest-side">
          <p>Lunghezza password:</p>
          <p>Consenti ripetizioni di uno o più caratteri:</p>
          <div class="control-btns">
            <button>Invia</button>
            <button>Annulla</button>
          </div>
        </div>
        <div class="input-side">
          <div class="psw-length">
            <input type="number" name="" id="">
          </div>
          <div class="psw-repeat">
            <div class="cont-radio">
              <div class="cont-yes-choice">
                <label for="">Si</label>
                <input type="radio" name="" id="">
              </div>
              <div class="cont-no-choice">
                <label for="">No</label>
                <input type="radio" name="" id="">
              </div>
            </div>
          </div>
          <div class="psw-checkbox">
            <div class="cont-chebox">
              <input type="checkbox" name="" id="">
              <label for="">lalla</label>
            </div>
            <div class="cont-chebox">
              <input type="checkbox" name="" id="">
              <label for="">lalla</label>
            </div>
            <div class="cont-chebox">
              <input type="checkbox" name="" id="">
              <label for="">lalla</label>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>