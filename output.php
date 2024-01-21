<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <title>Output</title>
</head>
<body>
  <div class="container-general">
    <div class="info-card">
      <p><?php echo $_SESSION['generated_psw'] ?></p>
    </div>    
    <a href="./index.php" class="redirect-btn">Torna alla home</a>
  </div>
</body>
</html>