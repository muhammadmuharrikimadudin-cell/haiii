<!DOCTYPE html>
<html>
<head>
    <title>Inbox Pesan</title>
    <style>
        body{
            font-family: Arial;
            background:#0f172a;
            color:white;
            padding:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:#1e293b;
        }

        th, td{
            padding:15px;
            border:1px solid #334155;
            text-align:left;
        }

        th{
            background:#38bdf8;
            color:black;
        }

        .badge{
            padding:6px 12px;
            border-radius:20px;
        }

        .unread{
            background:red;
            color:white;
        }

        .read{
            background:green;
            color:white;
        }
    </style>
</head>
<body>

<h1>Inbox Pesan ({{ $unreadCount }} unread)</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Pesan</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($messages as $message)
    <tr>
        <td>{{ $message->nama }}</td>
        <td>{{ $message->email }}</td>
        <td>{{ $message->subject }}</td>
        <td>{{ $message->message }}</td>
        <td>
            <span class="badge {{ $message->status }}">
                {{ $message->status }}
            </span>
        </td>
        <td>
            <a href="/admin/messages/{{ $message->id }}">View</a>

            <form method="POST" action="/admin/messages/{{ $message->id }}">
                @csrf
                @method('DELETE')
                <button type="submit"
                    onclick="return confirm('Hapus pesan ini?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>