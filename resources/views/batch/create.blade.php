<!DOCTYPE html>
<html>
<head>
    <title>Tambah Batch</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#7a0000;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .box{
            width:500px;
            background:white;
            padding:35px;
            border-radius:25px;
        }

        input, textarea{
            width:100%;
            padding:14px;
            margin-top:15px;
            border-radius:12px;
            border:1px solid #ccc;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:14px;
            margin-top:20px;
            border:none;
            background:#7a0000;
            color:white;
            border-radius:12px;
            cursor:pointer;
        }

    </style>
</head>
<body>

<div class="box">

    <h1>Tambah Batch</h1>

    <form action="/batch/store" method="POST">

        @csrf

        <input type="number" name="nama_batch" placeholder="Batch ke">

        <input type="text" name="kota" placeholder="Kota">

        <input type="date" name="tanggal">

        <textarea name="deskripsi" placeholder="Deskripsi"></textarea>

        <button type="submit">
            Simpan
        </button>

    </form>

</div>

</body>
</html>