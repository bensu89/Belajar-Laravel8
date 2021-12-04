<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>File Upload</title>
</head>
<body>

<div class="container mt-3">
  <h2>File Upload</h2>
  <hr>

  <form action="{{url('/file-upload')}}" method="POST"
    enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="berkas">Gambar Profile</label>
      <input type="file" class="form-control-file" id="berkas" name="berkas">
      @error('berkas')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary my-2">Upload</button>
  </form>
</div>

</body>
</html>



