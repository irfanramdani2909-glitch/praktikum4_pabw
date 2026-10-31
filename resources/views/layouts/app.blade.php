
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir</title>

    <style>
        
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - Sistem Pelaporan Banjir</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #e3f2fd, #e8f5e9);
            color: #263746;
            min-height: 100vh;
            padding: 35px 20px;
        }

        .container {
            max-width: 950px;
            margin: auto;
        }

        .card {
            background: #ffffff;
            padding: 30px;
            margin-bottom: 25px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 80, 120, 0.09);
            border: 1px solid #dceef0;
        }

        h1 {
            color: #087eae;
            margin-bottom: 10px;
        }

        h2 {
            color: #087eae;
            margin-bottom: 20px;
        }

        h3 {
            color: #15966b;
            margin-bottom: 12px;
        }

        p {
            line-height: 1.7;
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #176b87;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #c8dfe9;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
        }

        input:focus {
            border-color: #15966b;
            box-shadow: 0 0 5px rgba(21, 150, 107, 0.25);
        }

        button {
            background: linear-gradient(135deg, #087eae, #15966b);
            color: white;
            border: none;
            padding: 13px 25px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(8, 126, 174, 0.2);
        }

        a {
            display: inline-block;
            color: #087eae;
            text-decoration: none;
            font-weight: 600;
            margin: 8px 8px 0 0;
        }

        a:hover {
            color: #15966b;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #d9f5e8;
            color: #147849;
        }

        .alert-danger {
            background: #fee2e2;
            color: #b91c1c;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 12px;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>

    </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
