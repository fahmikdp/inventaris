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
      <form action="update" method="POST" class="w-50 m-auto">
        <div class="mt-5">
        <h2 class="h2">Edit Lokasi {{ $nama_lokasi }}</h2>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lokasi</label>
          <input 
                type="text" 
                name="nama_lokasi"
                class="form-control" 
                id="exampleFormControlInput1" 
                value="{{ $nama_lokasi }}">
          <input 
                type="hidden" 
                name="id_lokasi"
                class="form-control" 
                id="exampleFormControlInput1" 
                value="{{ $id_lokasi }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penanggung Jawab</label>
          <input 
                type="text" 
                name="penanggung_jawab" 
                class="form-control" 
                id="exampleFormControlInput1" 
                value="{{ $penanggung_jawab }}">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
          <textarea 
          class="form-control" 
          name="keterangan" 
          id="exampleFormControlTextarea1" 
          rows="3">{{ $keterangan }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit" value="Simpan">Simpan</button>
      </div>
      </form>

        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>
</body>
</html>