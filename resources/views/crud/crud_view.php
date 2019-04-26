<!DOCTYPE html>
<html>
<head>
	<title>Crud View V1</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>

<?php //echo '<pre>'.print_r($books, true).'</pre>';
	//echo $books[0]['title']; ?>
<div class="container">
  <h2>Data Buku</h2>
  <p>Table view Data Buku</p>   


  <a class="btn btn-info btn-sm" style="margin-bottom: 12px;" data-toggle="modal" data-target="#myModal">ADD DATA</a>   
  <hr>      
  <table class="table" id="crudTable">
    <thead>
      <tr>
        <th>book_id</th>
        <th>title</th>
        <th>author</th>
        <th>sinopsis</th>
        <th>cover</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($books as $book) { ?>
      <tr>
        <td><?php echo $book['book_id']; ?></td>
        <td><?php echo $book['title']; ?></td>
        <td><?php echo $book['author']; ?></td>
         <td><?php echo $book['sinopsis']; ?></td>
        <td><?php echo $book['cover']; ?></td>
        <td style="width: 30px;"><a class="btn btn-sm btn-danger delete" data-id_book="<?php echo $book['book_id']; ?>">delete</a><a class="btn btn-info btn-sm" href="<?php echo $url .'/crud/detail_books/'.$book['book_id']; ?> ">view/edit</td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Buku</h4>
        </div>
        <div class="modal-body">
		<form action="<?php echo $url .'/crud/add_buku'; ?>" method="post">
			  <div class="form-group">
			    <label for="email">Judul/Title:</label>
			    <input type="text" class="form-control" id="title" name="title">
			  </div>
			  <div class="form-group">
			    <label>Author:</label>
			    <input type="text" class="form-control" id="author" name="author">
			  </div>
			   <div class="form-group">
			    <label>Sinopsi:</label>
			    <textarea class="form-control" name="sinopsis" rows="10" ></textarea>
			  </div>
			   <div class="form-group">
			    <label>Url Cover:</label>
			    <input type="text" class="form-control" id="cover" name="cover">
			  </div>
			  <button type="submit" class="btn btn-info">Submit</button>
		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    		$('#crudTable').DataTable();

        var base_url = '<?php echo $url; ?>';

        $('.delete').on('click', function(){
            let id = $(this).data('id_book');
          //  alert(id);
            
            let del = confirm("apakah anda akan menghapus data ini?");
            if(confirm === true)
            {
                ajax_delete(id);
            }else{
                alert("trima kasih :)");
            }

        });

        function ajax_delete(id)
        {
            $.ajax({
                url      : base_url +'/crud/delete_books/'+id,
                type     : 'GET',
                dataType : 'text',
                success : function(response){
                    if(response === "ok")
                    {
                        window.location.reload(true);
                    }else{
                        alert('data gagal di hapus');
                        window.location.reload(true);
                    }
                },
                error : function(response)
                {
                    alert("galat");
                    window.location.reload(true);
                }
            });
        }
	});

</script>
</body>
</html>