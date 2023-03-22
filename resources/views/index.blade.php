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
          <h1 class="text-center">Klasemen Liga 1 Indonesia</h1>

          @if (Session::has('success'))
            <div class="alert alert-success text-center">
              <p>{{ Session::get('success') }}</p>
            </div>
              
          @endif
          
          <a href="{{ url('/add') }}" class="btn btn-primary float-end">Tambah Klub</a>
          <a href="{{ url('/add-goal') }}" class="btn btn-success">Input Hasil Pertandingan</a>

          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Peringkat</th>
                <th scope="col">Nama Klub</th>
                <th scope="col">Main</th>
                <th scope="col">Menang</th>
                <th scope="col">Seri</th>
                <th scope="col">Kalah</th>
                <th scope="col">GM</th>
                <th scope="col">GK</th>
                <th scope="col">Point</th>

              </tr>
            </thead>
            <tbody>

              @foreach ($klubs as $key=>$klub)
                  
              <tr>
                <td style="width: 2%" class="text-center">{{ ++$key }}</td>
                <td>{{ $klub->nama_klub }} {{ $klub->kota_klub }}</td>
                <td>{{ $klub->main }}</td>
                <td>{{ $klub->menang }}</td>
                <td>{{ $klub->seri }}</td>
                <td>{{ $klub->kalah }}</td>
                <td>{{ $klub->gm }}</td>
                <td>{{ $klub->gk }}</td>
                <td>{{ $klub->poin }}</td>
              </tr>

              @endforeach

            </tbody>
          </table>

            
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
    
  </body>
</html>