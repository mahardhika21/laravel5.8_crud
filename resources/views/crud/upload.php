<!DOCTYPE html>
<html>
<body>

<form action="<?php echo $url .'/crud/upload'; ?>" method="post" enctype="multipart/form-data">
  <table>
  	  <tbody>
  	  	   <tr>
  	  	   		<td>
  	  	   			title
  	  	   		</td>
  	  	   		<td>
  	  	   			<input type="text" name="title">
  	  	   		</td>
  	  	   </tr>
  	  	   <tr>
  	  	   		<td>
  	  	   			detail
  	  	   		</td>
  	  	   		<td>
  	  	   			  <textarea name="detail" ></textarea>
  	  	   		</td>
  	  	   </tr>
  	  	   <tr>
  	  	   		<td>
  	  	   			file
  	  	   		</td>
  	  	   		<td>
  					<input type="file" name="gambar">
  	  	   		</td>
  	  	   </tr>
  	  	   <tr>
  	  	   		<td>
  	  	   			
  	  	   		</td>
  	  	   		<td>
  	  	   			<input type="submit">
  	  	   		</td>
  	  	   </tr>

  	  </tbody>
  </table>
</form>



</body>
</html>
