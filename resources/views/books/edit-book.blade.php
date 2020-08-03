<!DOCTYPE html>
<html>
<head>
  <title>Input Buku</title>
</head>
<body>
  <h3>Input Data Buku</h3>
  <form action="/update-books/{{$book->book_id}}" method="POST">

  <table style="height: 100px">
      <tr>
        <td>Judul Buku</td>
        <td>:</td>
        <td><input type="text" name="book_title" value="{{$book -> book_title}}"></td>
      </tr>

      <tr>
        <td>Penerbit</td>
        <td>:</td>
        <td><input type="number" name="book_publisher_id" value="{{$book -> book_publisher_id}}"></td>
      </tr>

      <tr>
        <td>Jumlah Halaman</td>
        <td>:</td>
        <td><input type="number" name="book_page_total" value="{{$book -> book_page_total}}"></td>
      </tr>

      <tr>
        <td>Jumlah Buku</td>
        <td>:</td>
        <td><input type="number" name="book_total" value="{{$book -> book_total}}"></td>
      </tr>


      <tr>
        <td>Kategori</td>
        <td>:</td>
        <td><input type="text" name="book_category" value="{{$book -> book_category}}"></td>
      </tr>

      
      <tr>
        
        <td>
          <input type="submit" value="Simpan">
          <input type="reset" value="reset">
        </td>
      </tr>
    </table>
    {{csrf_field()}}
  </form>
</body>
</html>