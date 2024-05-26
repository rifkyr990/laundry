<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt - {{ $product->order_id }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 14px;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .header {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Amanah Laundry</h1>
            <p>Jl. Monumen Perjuangan Kertopaten No.rt 01, Glondong, Wirokerten, Kec. Banguntapan, Kabupaten Bantul,
                Daerah Istimewa Yogyakarta 55149</p>
            <p>HP : 0895394477132</p>
            <p>----------------------------------------------------------------------------------------</p>
        </div>
        <div class="details">
            <table class="table-borderless">
                <tr>
                    <th>ID Order</th>
                    <td>{{ $product->order_id }}</td>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <td>{{ $product->owner->nama }}</td>
                </tr>
                <tr>
                    <th>Status Pesanan</th>
                    <td>{{ $product->status->nama_status }}</td>
                </tr>
                <tr>
                    <th>Jenis layanan</th>
                    <td>{{ $product->category->nama_layanan }}</td>
                </tr>
                <tr>
                    <th>Status Pembayaran</th>
                    <td>{{ $product->pembayaran->nama_pembayaran }}</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>Rp{{ number_format($product->total) }}</td>
                </tr>
            </table>
        </div>
        <p style="text-align: center;">---------------------------------------------------------------------------------------</p>
        <p>Harap bawa nota ini atau tunjukan nota yang dikirim no.whatsapp ketika mengambil pakaian</p>
        <p style="text-align: center;">Terima Kasih</p>
        
    </div>
    <script>
        window.print();

    </script>
</body>

</html>
