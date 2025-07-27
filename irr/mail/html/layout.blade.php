<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #d3b600; /* Jupiter Gold */
            padding: 30px;
            text-align: center;
        }
        .header img {
            max-height: 60px;
        }
        .content {
            background-color: #ffffff;
            padding: 40px;
        }
        .footer {
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            padding: 30px 20px;
            font-size: 14px;
        }
        .footer span {
            display: block;
            color: #d3b600;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .content, .header, .footer {
                padding: 15px !important;
                font-size: 16px !important;
            }
            .header img {
                max-width: 100px !important;
                height: auto !important;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{ asset('logo.png') }}" width="131" height="62" alt="Jupiter Legal Logo">
</div>

<div class="content">
    @yield('content') {{-- This renders the Markdown content --}}
</div>

<div class="footer">
    <div>
        <span>Abuja</span>
        House 24, Grace Community Estate,<br>
        Dawaki Hills, Abuja.
    </div>
    <br>
    <div>
        <span>Lagos</span>
        Block 69, Flat 6, LSDPC Estate,<br>
        Pencinema, Agege Lagos State.
    </div>
    <br>
    <div>
        <span>Osun</span>
        Brown Building, Usteem Junction,<br>
        Agunbelewo, Osogbo, Osun State.
    </div>
    <br><br>
    &copy; Jupiter Legal {{ now()->year }}
</div>
</body>
</html>
