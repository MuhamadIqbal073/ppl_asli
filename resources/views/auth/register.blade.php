<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Register</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-7 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <a href="/"><span class="col-md-9"><i class="bi bi-house-door-fill"></i></span></a> 
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                    @if (session('sukses'))
                    <div class="alert alert-success">
                        {{ session('sukses') }}
                    </div>
                    @endif
                    @if (session('eror'))
                      <div class="alert alert-danger">
                        {{ session('eror') }}
                      </div>
                    @endif
                  <form action="{{ route('proses_register') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                      value="{{ old('name') }}" placeholder="Nama Lengkap">
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label>Jurusan</label>
                        <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                          <option value="">Pilih Jurusan</option>
                          <option value="Informatika" @if(old('jurusan') == 'Informatika') selected @endif>Informatika</option>
                          <option value="Teknik Sipil" @if(old('jurusan') == 'Teknik Sipil') selected @endif>Teknik Sipil</option>
                          <option value="Teknik Elektro" @if(old('jurusan') == 'Teknik Elektro') selected @endif>Teknik Elektro</option>
                          <option value="Teknik Mesin" @if(old('jurusan') == 'Teknik Mesin') selected @endif>Teknik Mesin</option>
                          <option value="Arsiterktur" @if(old('jurusan') == 'Arsitektur') selected @endif>Arsitektur</option>
                          <option value="Sistem Informasi" @if(old('jurusan') == 'Sistem Informasi') selected @endif>Sistem Informasi</option>
                        </select>
                            @error('jurusan')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror                             
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control  @error('gender') is-invalid @enderror">
                              <option value="">Pilih</option>
                              <option value="Laki-Laki" @if(old('gender') == 'Laki-Laki') selected @endif>Laki-Laki</option>
                              <option value="Perempuan" @if(old('gender') == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                            @error('gender')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror                              
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                      value="{{ old('email') }}"placeholder="Email">
                        @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror    
                    </div>

                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" 
                      value="{{ old('username') }}" placeholder="Username(NPM)">
                        @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                      value="{{ old('password') }}" placeholder="Password">
                        @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group d-flex justify-content-center mb-2">
                      <button type="submit" class="btn btn-primary ">Register</button>
                    </div>
                
                  <div class="text-center">
                    <label>Sudah Punya Akun?</label>
                    <a class="font-weight-bold" href="/login">Login</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>