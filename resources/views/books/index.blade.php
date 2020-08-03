<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
		<a href="/add-books">Tambah Buku</a> <br><br>
	<table class="table table-striped" border="3">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">JUDUL BUKU</th>
      <th scope="col">PENERBIT</th>
      <th scope="col">JUMLAH HALAMAN</th>
      <th scope="col">JUMLAH BUKU</th>
      <th scope="col">KATEGORI</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    	@foreach($book as $count=> $book)
    	
    	<tr>
    		<td>{{$count+1}}</td>
    		<td>{{$book->book_title}}</td>
        <td>{{$book->publisher_id}}</td>
        <td>{{$book->page_total}}</td>
        <td>{{$book->book_total}}</td>
    		<td>{{$book->book_category}}</td>
    		<td>    			
          <form action="/books/{{$book->book_id}}" method="post">
              <a href="edit-books/{{$book->book_id}}/edit">Edit Siswa</a>
              <input type="submit" name="submit" value="DELETE">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE">
          </form>
    		</td>
    	</tr>

    	@endforeach
  </tbody>
</table>


</body>
</html>