<!DOCTYPE html>
<html>
<head>
	<title>Home View Laravel</title>
</head>
<body>
 <center >Helow Gue View Pertama Laravel</center>
 <?php echo "hello ". $nama;
 		//echo '<pre>'.print_r($url, true) .'</pre>';

 		var_dump($url);
  ?>

 <form class="" method="post" action="<?php echo $url.'/post2'; ?>">
 	  <label>
 	  	  Nama
 	  </label>
 	  <input type="text" name="nama" placeholder="Nama Anda" />
 	  <button type="submit">Submit</button>
 </form>
</body>
</html>