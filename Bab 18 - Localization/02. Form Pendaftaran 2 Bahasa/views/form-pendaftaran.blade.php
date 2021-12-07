<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Form Registrasi</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>{{ __('form.judul') }}</h1>
      <hr>

      <form action="{{url('/proses-form')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nim">{{ __('form.input.nim') }}</label>
          <input type="text"
          class="form-control @error('nim') is-invalid @enderror"
          id="nim" name="nim" value="{{ old('nim') }}">
          @error('nim')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nama">{{ __('form.input.nama_lengkap') }}</label>
          <input type="text"
          class="form-control @error('nama') is-invalid @enderror"
          id="nama" name="nama" value="{{ old('nama') }}">
          @error('nama')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">{{ __('form.input.email') }}</label>
          <input type="text"
          class="form-control @error('email') is-invalid @enderror"
          id="email" name="email" value="{{ old('email') }}">
          @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label>{{ __('form.input.jenis_kelamin') }}</label>
          <div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="laki_laki" value="L"
              {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
              <label class="form-check-label" for="laki_laki">
                {{ __('form.input.pilihan_jenis_kelamin.laki_laki') }}
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin"
              id="perempuan" value="P"
              {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
              <label class="form-check-label" for="perempuan">
                {{ __('form.input.pilihan_jenis_kelamin.perempuan') }}
              </label>
            </div>
            @error('jenis_kelamin')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <label for="jurusan">{{ __('form.input.jurusan') }}</label>
          <select class="form-control" name="jurusan" id="jurusan">
            <option value="Teknik Informatika"
            {{ old('jurusan')=='Teknik Informatika' ? 'selected': '' }} >
            Teknik Informatika
            </option>
            <option value="Sistem Informasi"
            {{ old('jurusan')=='Sistem Informasi' ? 'selected': '' }} >
            Sistem Informasi
            </option>
            <option value="Ilmu Komputer"
            {{ old('jurusan')=='Ilmu Komputer' ? 'selected': '' }} >
            Ilmu Komputer
            </option>
            <option value="Teknik Komputer"
            {{ old('jurusan')=='Teknik Komputer' ? 'selected': '' }} >
            Teknik Komputer
            </option>
            <option value="Teknik Telekomunikasi"
            {{ old('jurusan')=='Teknik Telekomunikasi' ? 'selected': '' }} >
            Teknik Telekomunikasi
            </option>
          </select>
          @error('jurusan')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="alamat">{{ __('form.input.alamat') }}</label>
          <textarea class="form-control" id="alamat" rows="3"
          name="alamat">{{ old('alamat') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">
            {{ __('form.input.tombol') }}
        </button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
