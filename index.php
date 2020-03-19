<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dynamische Applicatie</title>
  <link rel="stylesheet" href="style.css?t=<?=time()?>">
  <script src="https://kit.fontawesome.com/8a70fffbf9.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">
</head>
<body>
<div class="grid-container">
  <?php
  include('includes/content.php');
  ?>
  <div class="grid-item item6">
<a href = 'includes/addCharacter.php'><i class="fas fa-plus"></i> Add new character</a>
  </div>
  <?php
    include('includes/footer.php');
?>
  </div>

</body>
</html>