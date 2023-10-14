@extends('layouts_admin')
@section('title', 'Edit Prestasi')

  @section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="text-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Prestasi</h1>
        </div>
    <div class="row mb-3">

    <!-- Form Edit Prestasi -->
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <form class="row g-3" action="/update_prestasi/{{ $kejuaraan->id }}" method="POST">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                        value="{{ old('name',$kejuaraan->name) }}">
                        @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror 
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">NPM</label>
                        <input type="text" name="npm" class="form-control @error('npm') is-invalid @enderror" 
                        value="{{ old('npm',$kejuaraan->npm) }}">
                        @error('npm')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group col-12 mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" >Jurusan</label>
                        </div>
                        <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                          <option value="{{ old('jurusan', $kejuaraan->jurusan) }}">{{ old('jurusan', $kejuaraan->jurusan) }}</option>
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

                    <div class="col-12 mb-3">
                        <label class="form-label">Perolehan Prestasi</label>
                        <input type="text" name="juara" class="form-control @error('juara') is-invalid @enderror"
                        value="{{ old('juara',$kejuaraan->juara) }}">
                        @error('juara')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Nama Lomba</label>
                        <input type="text" name="lomba" class="form-control @error('lomba') is-invalid @enderror"
                        value="{{ old('lomba',$kejuaraan->lomba) }}">
                        @error('lomba')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror  
                    </div>

                    <div class="col-12 mb-4">
                        <label class="form-label">Penyelenggara</label>
                        <input type="text" name="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror"
                        value="{{ old('penyelenggara', $kejuaraan->penyelenggara) }}">
                          @error('penyelenggara')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                    </div>

                    <div class="input-group col-12 mb-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text">Tingkatan</label>
                        </div>
                            <select class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                                <option value="{{ old('tingkat', $kejuaraan->tingkat) }}">{{ old('tingkat', $kejuaraan->tingkat) }}</option>
                                <option value="Desa/Lurah" @if(old('tingkat') == 'Desa/Lurah') selected @endif>Desa/Lurah</option>
                                <option value="Kecamatan" @if(old('tingkat') == 'Kecamatan') selected @endif>Kecamatan</option>
                                <option value="Kota/Kabupaten" @if(old('tingkat') == 'Kota/Kabupaten') selected @endif>Kota/Kabupaten</option>
                                <option value="Provinsi" @if(old('tingkat') == 'Provinsi') selected @endif>Provinsi</option>
                                <option value="Nasional" @if(old('tingkat') == 'Nasional') selected @endif>Nasional</option>
                                <option value="Internasional" @if(old('tingkat') == 'Internasional') selected @endif>Internasional</option>
                            </select>
                            @error('tingkat')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                    </div>

                            <p class="col-lg-12 mb-4">
                              <label for="date">Tanggal</label>
                              <input type="date" name="date" value="{{ $kejuaraan->tanggal }}" id="date">
                            </p>

                </div >
                            <div class="d-flex justify-content-center mb-4">
                                <button type="submit" class="ml-2 btn btn-primary">Simpan</button>
                            </div>
                    </div> 
                            </form>              
                </div>
                                     
            </div>             
          </div>
        </div>
    </div>
    <!-- End Edit Prestasi -->

  @endsection