<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Guest List</h1>
    <a href="{{ route('guest.form') }}" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Tambah Guest</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>No. Telp</th>
            </tr>
            <tbody>
                @foreach($guests as $guest)
                <tr>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->email }}</td>
                    <td>{{ $guest->message }}</td>
                    <td>{{ $guest->phone_number }}</td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>