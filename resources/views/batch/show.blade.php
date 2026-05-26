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
            margin:0;
        }

        .container{
            width:100%;
            max-width:1100px;
            margin:auto;
        }

        .box{
            width:100%;
            background:white;
            color:black;
            padding:30px;
            border-radius:20px;
            margin-bottom:30px;
            box-sizing:border-box;
        }

        h1{
            margin-bottom:10px;
        }

        input{
            width:100%;
            padding:14px;
            margin-top:15px;
            border-radius:10px;
            border:1px solid #ccc;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        .btn-submit{
            width:100%;
            padding:14px;
            margin-top:15px;
            border:none;
            background:#7a0000;
            color:white;
            border-radius:10px;
            cursor:pointer;
            font-family:'Poppins',sans-serif;
            font-weight:600;
        }

        .table-wrapper{
            width:100%;
            overflow-x:auto;
        }

        table{
            width:100%;
            background:white;
            color:black;
            border-radius:20px;
            border-collapse:collapse;
            overflow:hidden;
        }

        th,td{
            padding:18px;
            text-align:left;
            vertical-align:top;
            border-bottom:1px solid #eee;
        }

        th{
            background:#f5f5f5;
            font-weight:600;
        }

        tr:last-child td{
            border-bottom:none;
        }

        .btn-hapus{
            background:#7a0000;
            color:white;
            border:none;
            padding:10px 18px;
            border-radius:10px;
            cursor:pointer;
            font-family:'Poppins',sans-serif;
            font-weight:500;
            width:100%;
        }

        .btn-hapus:hover{
            opacity:0.9;
        }

        .btn-edit{
            display:inline-block;
            background:#f5f5f5;
            color:#7a0000;
            padding:10px 18px;
            border-radius:10px;
            text-decoration:none;
            font-weight:600;
            margin-bottom:10px;
            text-align:center;
            width:100%;
            box-sizing:border-box;
        }

        .aksi-form{
            margin:0;
        }

        .aksi{
            min-width:120px;
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

            <input type="text" name="nama" placeholder="Nama Lengkap" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="text" name="domisili" placeholder="Domisili" required>

            <input type="text" name="nomor_hp" placeholder="Nomor HP" required>

            <input type="text" name="instansi" placeholder="Instansi" required>

            <input type="text" name="alasan" placeholder="Alasan Mengikuti Volunteer" required>

            <button type="submit" class="btn-submit">
                Tambah Volunteer
            </button>

        </form>

    </div>

    <div class="table-wrapper">

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

                <td class="aksi">

                    <a
                        href="/volunteer/edit/{{ $v->id }}"
                        class="btn-edit"
                    >
                        Edit
                    </a>

                    <form
                        action="{{ route('volunteer.delete', $v->id) }}"
                        method="POST"
                        class="aksi-form"
                    >

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn-hapus">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

</body>
</html>