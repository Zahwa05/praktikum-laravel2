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
            font-family: 'Poppins', sans-serif;
        }

        body{
            background: linear-gradient(135deg, #ffe4ec, #fff0f5, #ffd6e7);
            min-height:100vh;
            padding:40px;
        }

        .container{
             width:90%;
            margin:auto;
            background:#ffffffcc;
            backdrop-filter: blur(10px);
            padding:35px;
            border-radius:25px;
            box-shadow:0 8px 25px rgba(255,182,193,0.3);
        }

        h1{
            color:#ff85a2;
            margin-bottom:25px;
            text-align:center;
            font-size:35px;
        }

        label{
            color:#ff85a2;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:14px;
            margin-top:10px;
            margin-bottom:20px;
            border:2px solid #ffd6e7;
            border-radius:15px;
            outline:none;
            background:#fff7fa;
            transition:0.3s;
        }

        input:focus{
            border-color:#ffb6c1;
            background:white;
        }

        button{
            background:#ffb6c1;
            color:white;
            border:none;
            padding:12px 25px;
            border-radius:15px;
            cursor:pointer;
            font-size:16px;
            transition:0.3s;
        }

        button:hover{
            background:#ff9eb5;
            transform:scale(1.03);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:35px;
            overflow:hidden;
            border-radius:20px;
        }

        table th{
            background:#ffb6c1;
            color:white;
            padding:15px;
        }

        table td{
            padding:15px;
            border-bottom:1px solid #ffe4ec;
            background:white;
        }

        tr:hover td{
            background:#fff0f5;
        }

        .btn-edit{
            background:#ffc2d1;
            color:white;
            padding:8px 16px;
            border-radius:10px;
            text-decoration:none;
            margin-right:5px;
        }

        .btn-hapus{
            background:#ff8fab;
            color:white;
            padding:8px 16px;
            border-radius:10px;
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