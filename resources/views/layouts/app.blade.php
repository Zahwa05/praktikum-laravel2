<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #ffb6d9, #ffcce6, #ffe6f2);
            min-height:100vh;
            padding:40px;
        }

        .container{
            width:90%;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        h1{
            color:#ff1493;
            margin-bottom:25px;
            text-align:center;
        }

        input{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:20px;
            border:2px solid #ffb6d9;
            border-radius:10px;
            outline:none;
        }

        input:focus{
            border-color:#ff1493;
        }

        button{
            background:#ff1493;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:10px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#ff4da6;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:30px;
        }

        table th{
            background:#ff1493;
            color:white;
            padding:15px;
        }

        table td{
            padding:15px;
            border-bottom:1px solid #ddd;
        }

        tr:hover{
            background:#fff0f5;
        }

        .btn-edit{
            background:#ff69b4;
            color:white;
            padding:8px 15px;
            border-radius:8px;
            text-decoration:none;
        }

        .btn-hapus{
            background:#ff1493;
            color:white;
            padding:8px 15px;
            border-radius:8px;
            text-decoration:none;
        }

        .btn-edit:hover,
        .btn-hapus:hover{
            opacity:0.8;
        }

    </style>

</head>
<body>

    <div class="container">

        @yield('content')

    </div>

</body>
</html>