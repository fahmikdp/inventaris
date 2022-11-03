<html lang="en">
  <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="mt-5 container">
      <a href="lokasi/tambah">
        <button class="btn btn-success mb-2">Tambah Lokasi</button>
      </a>
      {{-- Tables --}}
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Lokasi Gedung</th>
            <th scope="col">Penanggung Jawab</th>
            <th scope="col">Keterangan</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($lokasi as $t)  
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $t->nama_lokasi }}</td>
            <td>{{ $t->penanggung_jawab }}</td>
            <td>{{ $t->keterangan }}</td>
            <td>
              <a href="lokasi/edit/{{ $t->id_lokasi }}">
                <button class="btn btn-primary">Edit</button>
              </a>
              <a href="lokasi/hapus/{{ $t->id_lokasi }}">
                <button class="btn btn-danger">Hapus</button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
{{-- @dd($data) --}}

        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>
</body>
</html>