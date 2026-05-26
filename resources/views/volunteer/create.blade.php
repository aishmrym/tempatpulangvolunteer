<!DOCTYPE html>
<html>
<head>
    <title>Tambah Volunteer</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#6b0d0d;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .box{
            background:white;
            width:400px;
            padding:30px;
            border-radius:20px;
        }

        h2{
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:10px;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            background:#6b0d0d;
            color:white;
            border-radius:10px;
            cursor:pointer;
        }

    </style>
</head>
<body>

<div class="box">

    <h2>Tambah Volunteer</h2>

    <form action="/store" method="POST">

        @csrf

        <input type="text" name="nama" placeholder="Nama">

        <input type="email" name="email" placeholder="Email">

        <input type="text" name="divisi" placeholder="Divisi">

        <input type="number" name="batch" placeholder="Batch">

        <button type="submit">
            Simpan
        </button>

    </form>

</div>

</body>
</html>