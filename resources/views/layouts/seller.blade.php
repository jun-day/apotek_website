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
            <li class="sidebar_item"><a href="{{ route('backend.dashboard')">Dashboard</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.produk')">Produk</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.pesanan')">Pesanan</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.resep')">Resep</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.pengriman')">Pengiriman</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.keuangan')">Keuangan</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.ulasan')">Ulasan</a></li>
            <li class="sidebar_item"><a href="{{ route('backend.laporan')">Laporan</a></li>
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
            </div>

            <div class="nav-right">
                <span class="icon">icon pesan</span>
                <span class="icon">icon bel</span>

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