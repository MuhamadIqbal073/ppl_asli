@extends('layouts_admin')
@section('title', 'Edit Lomba')

    @section('content')

        <div class="container-fluid">
            <div class="text-center mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Lomba</h1>
            </div>

            <!-- Form Edit Lomba -->
            <div class="row justify-content-center">
                <div class=" col-xl-8 col-lg-8 col-md-9">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <div class="card-body">
                            <form class="row g-3"  action="{{ route('admin_update_lomba' ,  ['id' => $lomba->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" value="{{ $lomba->name }}" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">NPM</label>
                                <input type="text" name="npm" value="{{ $lomba->npm }}" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="namelomba" class="form-label">Nama Lomba</label>
                                <input type="text" name="lomba" value="{{ $lomba->lomba }}" class="form-control">
                            </div>

                            <div class="input-group col-12 mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" >Jurusan</label>
                                </div>
                                <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                <option value="{{ old('jurusan', $lomba->jurusan) }}">{{ old('jurusan', $lomba->jurusan) }}</option>
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
                                <label for="penyelenggara" class="form-label">Penyelenggara</label>
                                <input type="text" name="penyelenggara" value="{{ $lomba->penyelenggara }}" class="form-control">
                            </div>

                            <div class="input-group col-12 mb-4">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Tingkatan</label>
                                </div>
                                    <select class="custom-select" name="tingkat">
                                        <option selected>{{$lomba->tingkat}}</option>
                                        <option value="Desa">Desa/Lurah</option>
                                        <option value="Kecamatan">Kecamatan</option>
                                        <option value="Kota/Kabupaten">Kota/Kabupaten</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Nasional">Nasional</option>
                                        <option value="Internasional">Internasional</option>
                                    </select>
                            </div>

                            <p class="col-lg-12 mb-3">
                                <label for="date">Tanggal</label>
                                <input type="date" name="date" value="{{ $lomba->tanggal }}" id="date">
                            </p>

                            <div class="col-lg-12">
                                <label for="formFile" class="form-label">Upload Sertifikat</label>
                            </div>
                            
                            <div class="d-flex justify-content-center mb-4" style="margin-left: 13px;">
                                <input class="form" name="sertifikat" type="file" id="formFile">
                            </div>

                        </div>
                            
                            <div class="d-flex justify-content-center mb-4">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>                
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!-- End Form Edit Lomba -->

            

        </div>

    @endsection

</html>
