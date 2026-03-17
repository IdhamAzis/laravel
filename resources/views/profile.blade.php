<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Profile</h1>
    <ol>
        <li>Nama:  Idham Azis Pangestu</li>
        <li>Npm: 123111011</li>
        <li>Jurusan: Teknik Informatika</li>
        <li>Telp: 08123456789</li>
        <li>Email: idham@gmail.com</li>
    </ol>
    
    <h2>Messages</h2>
    @if($messages->count() > 0)
        <ul>
            @foreach($messages as $message)
                <li>{{ $message->message }} <small>({{ $message->created_at->format('d-m-Y H:i') }})</small></li>
            @endforeach
        </ul>
    @else
        <p>No messages yet</p>
    @endif
    
    <a href="/contact">Contact</a>
    <span>|</span>
    <a href="/gmap">Gmap</a>
</body>
</html>