<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap">
    <!-- Bootstrap ikon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body style="font-family: 'DM Sans', sans-serif; background-color: #ffffff; color: #000000;">
    <nav class="navbar" style="background-color: #efe9d3; display: flex; overflow: hidden; align-items: center; padding: 1rem 5%;">
        <a href="" style="color: #000000; margin-left: 0; margin-right: 1rem;"><i data-feather="arrow-left"></i></a>
        <h1 style="margin: 0;">Detail Pesanan</h1>
    </nav>

    <div class="container" style="font-weight: bold; display: grid; width: 80%; background-color: #efe9d3; margin: 0 auto; padding: 20px; margin-top: 3rem; border-radius:10px;">
        <h3 style="text-align: left; margin-bottom: 0; font-weight:bold;">#NOMOR ANTRIAN</h3>
        <h3 style="text-align: left; margin-bottom: 0; font-weight:bold;">#NOMOR MEJA</h3>
        <br><br>
        <h2 style="text-align: justify; margin-bottom: 0; margin-left:50px; font-weight:bold;">Pesanan</h2>
        <table style="width: auto; border-collapse: collapse; margin: 0 auto;">
            <tr>
                <td style="padding: 8px 100px; text-align: left;">Nama Menu</td>
                <td style="padding: 8px 100px; text-align: left;">Harga</td>
                <td style="padding: 8px 100px; text-align: left;">Quantity</td>
                <td style="padding: 8px 100px; text-align: left;">Total</td>
            </tr>
            <tr>
                <th style="padding: 8px 100px; text-align: left;">Iced Americano</th>
                <th style="padding: 8px 100px; text-align: left;">30.000</th>
                <th style="padding: 8px 100px; text-align: left;">2X</th>
                <th style="padding: 8px 100px; text-align: left;">60.000</th>
            </tr>
            <tr>
                <th style="padding: 8px 100px; text-align: left;">Iced Coffe Latte</th>
                <th style="padding: 8px 100px; text-align: left;">35.000</th>
                <th style="padding: 8px 100px; text-align: left;">2X</th>
                <th style="padding: 8px 100px; text-align: left;">70.000</th>
            </tr>
            <tr>
                <th colspan="3" style="padding: 8px 180px; text-align: left; font-weight:bold;">TOTAL</th>
                <th style="padding: 8px 95px; text-align: left;">130.000</th>
            </tr>
        </table>
        <br><br><br>
        <p style="text-align: center; font-weight: bolder; margin-bottom: 0;">SILAHKAN TERLEBIH DAHULU MEMBAYAR KE KASIR!</p>
        <br><br>
        <button class="box-button" style="border: 1px solid #8e181f; padding: 10px 200px; background-color: transparent; color: #8e181f; cursor: pointer; transition: all 0.3s ease; border-radius: 5px; width: fit-content; margin: 0 auto;" onclick="location.href='{{ route('pelanggan-statuspesanan') }}'">Cek Status Pesanan</button>
    </div>

    <!-- Logo Logo -->
    <script>
        feather.replace();
    </script>
</body>
</html>
