<!doctype html>
<html lang="en">

<head>
  <title>Belajar Absensi - Laravel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand">Latihan Absensi Online</a>
          <form action="/logout" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
          </form>
        </div>
      </nav>
      <h2>Welcome back, {{ auth()->user()->nama }}</h2>
        <div class="my-4">
          <form action="/absent" method="post">
            @csrf
            <input type="hidden" name="id_murid" value="{{ auth()->user()->id }}">
            <input type="hidden" name="jam_masuk" value="{{ auth()->user()->schedule->jam_masuk }}">
            <input type="hidden" name="jam_keluar" value="{{ auth()->user()->schedule->jam_keluar }}">
            {{-- <button class="btn btn-primary" @if ($current_datetime->toTimeString() > auth()->user()->schedule->jam_keluar)
                disabled
            @endif>Absen</button> --}}
            <button class="btn btn-primary" id="absen">Absen</button>
          </form>
        </div>
        @if (session()->has('absentSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{session('absentSuccess')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jam Datang</th>
                    <th>Jam Keluar</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($absents as $absent)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$absent->student->nama}} </td>
                <td>{{$absent->jam_datang}}</td>
                <td>{{$absent->jam_pulang}}</td>
                <td>{{$absent->status}}</td>
                <td>{{$absent->keterangan}}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>







































  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>