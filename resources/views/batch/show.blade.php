<!DOCTYPE html>
<html>
<head>
    <title>Volunteer</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#7a0000;
            padding:40px;
            color:white;
        }

        .container{
            max-width:1000px;
            margin:auto;
        }

        .box{
            background:white;
            color:black;
            padding:30px;
            border-radius:20px;
            margin-bottom:30px;
        }

        input{
            width:100%;
            padding:14px;
            margin-top:15px;
            border-radius:10px;
            border:1px solid #ccc;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:14px;
            margin-top:15px;
            border:none;
            background:#7a0000;
            color:white;
            border-radius:10px;
        }

        table{
            width:100%;
            margin-top:30px;
            border-collapse:collapse;
            background:white;
            color:black;
            border-radius:20px;
            overflow:hidden;
        }

        th,td{
            padding:15px;
        }

        th{
            background:#f2f2f2;
        }

        a{
            color:red;
            text-decoration:none;
        }

    </style>
</head>
<body>

<div class="container">

    <h1>Batch {{ $batch->nama_batch }}</h1>

    <p>{{ $batch->kota }}</p>

    <p>{{ $batch->tanggal }}</p>

    <p>{{ $batch->deskripsi }}</p>

    <br>

    <div class="box">

        <h2>Tambah Volunteer</h2>

        <form action="/batch/{{ $batch->id }}/volunteer" method="POST">
            @csrf

            <input type="text" name="nama" placeholder="Nama Lengkap">

            <input type="email" name="email" placeholder="Email">

            <input type="text" name="domisili" placeholder="Domisili">

            <input type="text" name="nomor_hp" placeholder="Nomor HP">

            <input type="text" name="instansi" placeholder="Instansi">

            <input type="text" name="alasan" placeholder="Alasan Mengikuti Volunteer">

            <button type="submit">
                Tambah Volunteer
            </button>

        </form>

    </div>

    <table>

        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Domisili</th>
            <th>No HP</th>
            <th>Instansi</th>
            <th>Alasan</th>
            <th>Sertifikat</th>
            <th>Aksi</th>
        </tr>

        @foreach($volunteers as $v)

        <tr>

            <td>{{ $v->nama }}</td>

            <td>{{ $v->email }}</td>

            <td>{{ $v->domisili }}</td>

            <td>{{ $v->nomor_hp }}</td>

            <td>{{ $v->instansi }}</td>

            <td>{{ $v->alasan }}</td>

            <td>{{ $v->nomor_sertifikat }}</td>

            <td>
                <td>

                    <form action="{{ route('volunteer.delete', $v->id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Hapus
                        </button>

                    </form>

                </td>
            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>