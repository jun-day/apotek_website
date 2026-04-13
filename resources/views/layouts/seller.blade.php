<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Seller</title>
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
</head>
<body>

<div class="wrapper">

    <div class="sidebar">
        <h2>APOTEKU</h2>

        <p class="menu-title">Main Menu</p>
        <ul>
            <li>Dashboard</li>
            <li class="active">Produk</li>
            <li>Pesanan</li>
            <li>Resep</li>
            <li>Pengiriman</li>
            <li>Keuangan</li>
            <li>Ulasan</li>
            <li>Laporan</li>
        </ul>

        <p class="menu-title">Others</p>
        <ul>
            <li>Pengaturan</li>
        </ul>
    </div>

    <div class="main">

        <div class="header">
            <div class="nav-left">
                <input type="text" placeholder="Search..." class="search">
                <span class="shortcut">⌘ + S</span>
            </div>

            <div class="nav-right">
                <span class="icon">💬</span>
                <span class="icon">🔔</span>

                <div class="profil">
                    <img src="{{ asset('images/logo.png') }}">
                    <div>
                        <strong>Orleans Bow</strong>
                        <p>Mokopi Seller</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>