<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $url .'/resources/assets/sass/style.css'; ?>">
</head>
<?php // echo '<pre>'.print_r($book_detail["title"], true) .'</pre>'; ?>
<body class="text-left text-capitalize text-body">
  <div class="py-5 text-center">
    <div class="container">
      <div class="row shadow">
        <div class="mx-auto col-lg-6 col-10">
          <h1>UPDATE DATA</h1>
          <p class="mb-3"></p>
          <form class="text-left" action="<?php echo $url.'/crud/update_books'; ?>" method="post">
            <input type="hidden" name="book_id" value="<?php echo $book_detail['book_id']; ?>">
            <div class="form-group"><label for="form16">Judul</label> <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $book_detail['title']; ?>"> </div>
            <div class="form-group"><label for="form17">Author</label> <input type="text" class="form-control" name="author" placeholder="Author" value="<?php echo $book_detail['author']; ?>"> </div>
            <div class="form-group"><label for="form18">Sinopsis</label> <input type="text" class="form-control" name="sinopsis" value="<?php echo $book_detail['sinopsis']; ?>"> </div>
            <div class="form-row">
              <div class="form-group col-md-12"> <label for="form19">Url</label> <input type="text" class="form-control" name="coverurl" value="<?php echo $book_detail['cover']; ?>"> </div>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
 
</body>

</html>