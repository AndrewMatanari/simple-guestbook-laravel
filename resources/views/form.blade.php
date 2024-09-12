<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    @if(errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach(errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('guest.store') }}" method="post">
        @csrf
        <label form="name">Silahkan isi nama anda....</label>
        <input type="text" name="name" placeholder="Name">
        <label form="message">Silahkan isi pesan anda...."></label>
        <input type="text" name="message" placeholder="Message">
        <label form="phone_number">Silahkan isi nomor anda...."></label>
        <input type="text" name="phone_number" placeholder="Phone Number">
        <label form="email">Silahkan isi email anda...."></label>  
        <input type="text" name="email" placeholder="Email">
        <button type="submit" style="align=center" value="Submit">
    </form>
</body>
</html>