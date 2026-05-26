<!DOCTYPE html>
<html>
<head>
    <title>Tempat Pulang</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#6b0d0d;
            padding:40px;
            color:white;
        }

        .container{
            max-width:1000px;
            margin:auto;
        }

        h1{
            font-size:42px;
            margin-bottom:20px;
        }

        a{
            text-decoration:none;
        }

        .btn{
            background:white;
            color:#6b0d0d;
            padding:12px 18px;
            border-radius:10px;
            font-weight:600;
        }

        table{
            width:100%;
            margin-top:30px;
            border-collapse:collapse;
            background:white;
            color:black;
            border-radius:15px;
            overflow:hidden;
        }

        th,td{
            padding:15px;
            text-align:left;
        }

        th{
            background:#f2f2f2;
        }

        tr:nth-child(even){
            background:#fafafa;
        }

        .hapus{
            color:red;
            font-weight:600;
        }

    </style>
</head>
<body>

<div class="container">

    <h1>tempat pulang.</h1>

    <a href="/create" class="btn">
        Tambah Volunteer
    </a>

    <table>

        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Divisi</th>
            <th>Batch</th>
            <th>Nomor Sertifikat</th>
            <th>Aksi</th>
        </tr>

        @foreach($volunteers as $v)

        <tr>

            <td>{{ $v->nama }}</td>

            <td>{{ $v->email }}</td>

            <td>{{ $v->divisi }}</td>

            <td>{{ $v->batch }}</td>

            <td>{{ $v->nomor_sertifikat }}</td>

            <td>
                <a href="/delete/{{ $v->id }}" class="hapus">
                    Hapus
                </a>
            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>