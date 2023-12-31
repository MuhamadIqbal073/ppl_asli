<!DOCTYPE html>
<html lang="en">
<title>Download PDF</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap-pdf.min.css" rel="stylesheet" type="text/css">
 </head>

<body>
    <div class="container text-center">
      <div class="row justify-content-center">
        <image  class="mr-1 mb-3" width="100%" src="{{ asset('img/logo.png') }}" style="height: 70px; width: 70px;"></image>
        <image  class="mr-1 mb-3" width="100%" src="{{ asset('img/Logo-Unib.png') }}" style="height: 70px; width: 70px;"></image>
        <image  class="mb-3" width="100%" src="{{ asset('img/logo-ft.png') }}" style="height: 80px; width: 80px;"></image>

        <div class="card">        
          <p><b>Laporan Prestasi</b></p>
          <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Prestasi</th>
                <th>Nama Lomba</th>
                <th>Penyelenggara</th>
                <th>Tingkat</th>
                <th>Tanggal</th>
              </tr>
            <tbody>
              @foreach ($kejuaraan as $item)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
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

</body>
</html> 
                
                  