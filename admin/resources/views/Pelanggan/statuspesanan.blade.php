<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Status Pesanan</title>

</head>
<body>
        <div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Status Pemesanan</h1>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">Nomor Meja</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Status</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Keterangan</th>
                    </tr>
                    <tr id="Antrian1">
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">#NomorMeja</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">#MenungguPembayaran</td>
                        <td id="statuspesanan1" style="padding: 10px; border-bottom: 1px solid #ddd;">Silahkan datang ke kasir untuk membayar pesanan anda</td>
                    </tr>
                </table>        
            </div>
        </div>

    <script>feather.replace();</script>
    <!-- Your JavaScript file -->
    @include('Kasir.asset.script')

</body>

</html>
