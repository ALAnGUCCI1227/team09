<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Team09 Database')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px; /* 增加內部間距 */
        }
        header {
            background: #333;
            color: #fff;
            padding: 20px 0;
            margin-bottom: 15px;
        }
        h2 {
            margin-top: 20px; /* 增加標題的上邊距 */
        }
        ul {
            padding: 0;
        }
        ul li {
            background: #fff;
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>@yield('title', 'Team09')</h1>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
