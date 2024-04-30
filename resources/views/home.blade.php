<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN CSS BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Random User</title>
</head>
<body>
    <!-- As a link -->
    <div>
        
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Random User</a>
        </div>
    </nav>

    <div class="container">
        {{-- Header User --}}
        <div class="mt-3">
            <h2>User</h2>
        </div>

        {{-- Table user  --}}
        <div class="mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jalan</th>
                    <th>Email</th>
                    <th>Profesi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $value )
                    <tr>
                        <td>{{ ($data->currentPage() - 1) * $data->perPage() + $index + 1 }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->jenisKelamin->jenis_kelamin }}</td>
                        <td>{{ $value->nama_jalan }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->namaProfesi->nama_profesi }}</td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="pagination justify-content-end">
            {{ $data->links('pagination::bootstrap-4') }}
        </div>

        {{-- Header  --}}
        <div class="mt-3">
            <h2>Data Profesi</h2>
            <div class="mt-3 ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Profesi</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profesi as $item)
                        <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->nama_profesi }}</td>
                        <td>{{ $item->profesi_count }}</td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    


    {{-- CDN SCRIPT BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>