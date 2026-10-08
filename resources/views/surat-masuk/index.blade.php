<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Masuk</title>
</head>
<body>
    <h1>Halaman Surat Masuk</h1>

    <table border="1" cellpadding="4" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($suratMasuk as $surat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $surat ['nomor_surat'] }}</td>
                <td>{{ $surat ['tanggal'] }}</td>
                <td>{{ $surat ['pengirim'] }}</td>
                <td>{{ $surat ['perihal'] }}</td>
                <td>
                    <a href="{{ route('surat-masuk.show', $surat['id']) }}">
                        Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>