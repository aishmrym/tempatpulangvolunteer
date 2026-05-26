<!DOCTYPE html>
<html>
<head>
    <title>tempat pulang.</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#7a0000;
            color:white;
        }

        .container{
            max-width:1100px;
            margin:auto;
            padding:50px 20px;
        }

        .top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:70px;
        }

        .logo{
            font-size:50px;
            font-weight:700;
        }

        .btn{
            background:white;
            color:#7a0000;
            padding:14px 22px;
            border-radius:14px;
            text-decoration:none;
            font-weight:600;
            transition:0.2s;
        }

        .btn:hover{
            transform:translateY(-2px);
        }

        .hero{
            margin-bottom:60px;
        }

        .hero h1{
            font-size:70px;
            line-height:85px;
            margin-bottom:25px;
        }

        .hero p{
            width:600px;
            line-height:34px;
            color:#ffdede;
            font-size:18px;
        }

        .stats{
            display:flex;
            gap:20px;
            margin-bottom:60px;
        }

        .stat-card{
            flex:1;
            background:white;
            color:#7a0000;
            padding:25px;
            border-radius:22px;
        }

        .stat-card h2{
            font-size:42px;
            margin-bottom:5px;
        }

        .batch-title{
            margin-bottom:25px;
            font-size:28px;
        }

        .card{
            background:white;
            color:black;
            padding:30px;
            border-radius:24px;
            margin-bottom:25px;
            transition:0.2s;
        }

        .card:hover{
            transform:translateY(-4px);
        }

        .card h2{
            margin-bottom:10px;
            color:#7a0000;
        }

        .desc{
            margin-top:15px;
            line-height:30px;
            color:#444;
        }

        .lihat{
            display:inline-block;
            margin-top:20px;
            color:#7a0000;
            font-weight:600;
            text-decoration:none;
        }

        .quote{
            background:white;
            color:#7a0000;
            padding:40px;
            border-radius:24px;
            text-align:center;
            margin-top:50px;
            font-size:24px;
            font-weight:600;
            line-height:40px;
        }

        footer{
            margin-top:70px;
            text-align:center;
            color:#ffdede;
            font-size:15px;
        }

        @media(max-width:768px){

            .hero h1{
                font-size:45px;
                line-height:55px;
            }

            .hero p{
                width:100%;
            }

            .stats{
                flex-direction:column;
            }

            .top{
                flex-direction:column;
                gap:20px;
                align-items:flex-start;
            }

        }

    </style>

</head>
<body>

<div class="container">

    <!-- TOP -->
    <div class="top">

        <div class="logo">
            tempat pulang.
        </div>

        <a href="/batch/create" class="btn">
            Tambah Batch
        </a>

    </div>

    <!-- HERO -->
    <div class="hero">

        <h1>
            Tempat untuk pulang,
            berbagi, dan
            bertumbuh bersama.
        </h1>

        <p>
            Tempat Pulang merupakan ruang volunteer sosial
            untuk menciptakan pengalaman bermakna,
            berbagi kebahagiaan, dan membangun
            dampak positif bersama banyak orang.
        </p>

    </div>

    <!-- STATISTIK -->
    <div class="stats">

        <div class="stat-card">

            <h2>{{ $totalVolunteer }}</h2>

            <p>Total Volunteer</p>

        </div>

        <div class="stat-card">

            <h2>{{ $totalBatch }}</h2>

            <p>Total Batch</p>

        </div>

        <div class="stat-card">

            <h2>{{ $totalKota }}</h2>

            <p>Total Kota</p>

        </div>

    </div>

    <!-- TITLE -->
    <h2 class="batch-title">
        Batch Volunteer
    </h2>

    <!-- CARD -->
    @foreach($batches as $batch)

    <div class="card">

        <h2>
            Batch {{ $batch->nama_batch }}
        </h2>

        <p>
            📍 {{ $batch->kota }}
        </p>

        <p>
            📅 {{ $batch->tanggal }}
        </p>

        <p class="desc">
            {{ $batch->deskripsi }}
        </p>

        <div style="margin-top:20px; display:flex; gap:15px;">

    <a href="/batch/{{ $batch->id }}" class="lihat">
        Lihat Volunteer →
    </a>

    <form action="/batch/{{ $batch->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit"
        style="
            background:#ff4d4d;
            border:none;
            color:white;
            padding:10px 16px;
            border-radius:10px;
            cursor:pointer;
            font-family:Poppins;
        ">

            Hapus

        </button>

    </form>

</div>

    </div>

    @endforeach

    <!-- QUOTE -->
    <div class="quote">

        “Kebaikan kecil yang dilakukan bersama,
        akan terasa jauh lebih besar.”

    </div>

    <!-- FOOTER -->
    <footer>

        © 2026 Tempat Pulang — Volunteer Project

    </footer>

</div>

</body>
</html>