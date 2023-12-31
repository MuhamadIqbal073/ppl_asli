@extends('layouts_landingpage')
@section('title', 'Prestasi')


@section('content')


        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Prestasi Siswa</h1>
                    <a href="" class="h5 text-white">SMPIT Generasi Rabbani</a>
                    <a href="" class="h5 text-white">Kota Bengkulu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


     <div class="container-fluid">
        <div class="text-center mb-4">
          <h1 class="h3 mb-0 text-gray-800">Prestasi Siswa SMPIT Generasi Rabbani</h1>
        </div>

       <div class="row">
         <div class="col-lg-12">
           <div class="card mb-4">
             <div class="table-responsive p-3">
             @if ($kejuaraan->count())
             <a href="{{ route('download') }}" id="pdf" type="button" onclick="myFunction()" class="btn btn-outline-success mb-3" target="blank">Download
                <i class="bi bi-download"></i>
              </a>
             @else

             @endif
               <table class="table table-bordered" id="dataTable">
                 <thead class="table-primary">
                 <tr>
                     <th scope="col">No</th>
                     <th scope="col">Nama</th>
                     <th scope="col">NISN</th>
                     <th scope="col">Kelas</th>
                     <th scope="col">Prestasi</th>
                     <th scope="col">Nama Lomba</th>
                     <th scope="col">Penyelenggara</th>
                     <th scope="col">Tingkat</th>
                     <th scope="col">Tanggal</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach ($kejuaraan as $item)
                   <tr>
                     <th scope="row">{{ $loop->index + 1 }}</th>
                     <td>{{ $item->name }}</td>
                     <td>{{ $item->npm }}</td>
                     <td>{{ $item->jurusan }}</td>
                     <td>{{ $item->juara }}</td>
                     <td>{{ $item->lomba }}</td>
                     <td>{{ $item->penyelenggara }}</td>
                     <td>{{ $item->tingkat }}</td>
                     <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                     @endforeach
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>

          </div>
        </div>


        </form>
        </div>
      </div>


      <script>
        function myFunction() {
          // onlick agar button tidak menjadi undefined ketika di tekan
          // open().print() membuka view kemudian print
          document.getElementById("pdf").onclick = open('download').print();
        }
      </script>

@endsection

