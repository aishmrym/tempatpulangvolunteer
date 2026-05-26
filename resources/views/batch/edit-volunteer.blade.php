<!DOCTYPE html>
<html>
<head>
    <title>Edit Volunteer</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

        body{
            font-family:'Poppins',sans-serif;
            background:#7a0000;
            padding:40px;
        }

        .box{
            max-width:700px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:20px;
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
            margin-top:20px;
            border:none;
            background:#7a0000;
            color:white;
            border-radius:10px;
        }

    </style>
</head>
<body>

<div class="box">

    <h2>Edit Volunteer</h2>

    <form action="/volunteer/update/{{ $volunteer->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="nama" value="{{ $volunteer->nama }}">

        <input type="email" name="email" value="{{ $volunteer->email }}">

        <input type="text" name="domisili" value="{{ $volunteer->domisili }}">

        <input type="text" name="nomor_hp" value="{{ $volunteer->nomor_hp }}">

        <input type="text" name="instansi" value="{{ $volunteer->instansi }}">

        <input type="text" name="alasan" value="{{ $volunteer->alasan }}">

        <button type="submit">
            Update Volunteer
        </button>

    </form>

</div>

</body>
</html>