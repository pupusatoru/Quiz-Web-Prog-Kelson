<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            display: flex;
            flex-direction: column;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }
        main {
            flex: 1; /* biar konten ngisi ruang kosong */
            margin-top: 90px;
        }
        footer {
            background-color: #0d1b2a;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: auto; /* biar nempel di bawah */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">EduFun</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/category">Category</a></li>
                <li class="nav-item"><a class="nav-link" href="/writers">Writers</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="/popular">Popular</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>© EduFun 2024 | Web Programming | Kelson | 2702245135</p>
    </footer>
</body>
</html>
