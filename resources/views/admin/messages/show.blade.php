<!DOCTYPE html>
<html>
<head>
    <title>Detail Pesan</title>
</head>
<body>

<h1>Detail Pesan</h1>

<p><strong>Nama:</strong> {{ $message->nama }}</p>
<p><strong>Email:</strong> {{ $message->email }}</p>
<p><strong>Subject:</strong> {{ $message->subject }}</p>
<p><strong>Pesan:</strong></p>
<p>{{ $message->message }}</p>

<a href="/admin/messages">Kembali</a>

</body>
</html>