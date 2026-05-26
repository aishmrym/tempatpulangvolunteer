<!DOCTYPE html>
<html>
<head>
    <title>Edit Batch</title>

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

        input, textarea{
            width:100%;
            padding:14px;
            margin-top:15px;
            border-radius:10px;
            border:1px solid #ccc;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        button{
            width:100%;
            padding:14px;
            margin-top:20px;
            border:none;
            background:#7a0000;
            color:white;
            border-radius:10px;
            font-weight:600;
            cursor:pointer;
        }

    </style>
</head>
<body>

<div class="box">

    <h2>Edit Batch</h2>

    <form action="/batch/update/{{ $batch->id }}" method="POST">

        @csrf
        @method('PUT')

        <input
            type="text"
            name="nama_batch"
            value="{{ $batch->nama_batch }}"
            required
        >

        <input
            type="text"
            name="kota"
            value="{{ $batch->kota }}"
            required
        >

        <input
            type="date"
            name="tanggal"
            value="{{ $batch->tanggal }}"
            required
        >

        <textarea
            name="deskripsi"
            rows="5"
            required
        >{{ $batch->deskripsi }}</textarea>

        <button type="submit">
            Update Batch
        </button>

    </form>

</div>

</body>
</html>