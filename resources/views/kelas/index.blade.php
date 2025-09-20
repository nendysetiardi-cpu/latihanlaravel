<!DOCTYPE html>
<html>
<head>
    <title>Data kelas</title>
</head>
<body>
    <h1>Tambah kelas</h1>
    <form method="POST" action="/kelas">
        @csrf
        <input type="text" name="nama" placeholder="Nama"><br>
        <input type="text" name="jumlahkelas" placeholder="jumlah kelas"><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>List Mahasiswa</h2>
    <ul>
        @foreach($data as $kelas)
            <li>{{ $kelas->nama }} - {{ $kelas->jumlahkelas }}</li>
        @endforeach
    </ul>
</body>
</html>