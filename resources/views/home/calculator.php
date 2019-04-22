<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calculator Boostrab 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Calculator Form</h2>
  <form action="<?php echo $url .'/operation_calculator/'; ?>" method="post" >
    <div class="form-group">
      <label for="email">Anka 1:</label>
      <input type="text" class="form-control"  placeholder="masukkan angka peratama" name="anka1">
    </div>
    <div class="form-group">
      <label for="email">Methode:</label>
      <select class="form-control">
            <option value="+">Tambah (+)</option>
            <option value="*">Kali (*)</option>
            <option value=":">Bagi (:)</option>
            <option value="-">Kurang (-)</option>
      </select>
    </div>
    <div class="form-group">
      <label for="email">Anka 2:</label>
      <input type="text" class="form-control"  placeholder="masukan angka kedua" name="anka2">
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
