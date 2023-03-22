<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <main>
      <section class="my-4">
        <div class="container">
          <h1 class="text-center">Form Input Klub</h1>

          <form action="/add" method="POST">
          @csrf
        
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <a href="{{ url('/') }}" class="btn btn-secondary my-2">Kembali</a>

          
          <table id="table" class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th scope="col">Nama</th>
                <th scope="col">Kota</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td>
                  <input type="text" name="inputs[0][nama_klub]" placeholder="Masukan nama" class="form-control" required>
                </td>
                <td>
                  <input type="text" name="inputs[0][kota_klub]" placeholder="Masukan kota" class="form-control" required>
                </td>
                <td>
                  <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>

          <button type="button" name="add" id="add" class="btn btn-success">[ + ]</button>
          <button type="submit" class="btn btn-primary col-md-2">Simpan</button>
          </form>

            
        </div>
      </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
      let i = 0;
      $('#add').click(function () { 
        ++i;

        $('#table').append(
          `<tr class="text-center">
                <td>
                  <input type="text" name="inputs[`+i+`][nama_klub]" placeholder="Masukan nama" class="form-control" required>
                </td>
                <td>
                  <input type="text" name="inputs[`+i+`][kota_klub]" placeholder="Masukan kota" class="form-control" required>
                </td>
                <td>
                  <button type="button" class="btn btn-danger remove-table-row">[ - ]</button>
                </td>
              </tr>`
        );
      });

      $(document).on('click', '.remove-table-row', function() {
        $(this).parents('tr').remove();  
      });
    </script>
  </body>
</html>