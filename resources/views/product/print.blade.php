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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 60%;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
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

        .separator {
            text-align: center;
            margin: 20px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets/image/logo-fix.png') }}" width="50%">
            <p>Jl. Monumen Perjuangan Kertopaten No.rt 01, Glondong, Wirokerten, Kec. Banguntapan, Kabupaten Bantul,
                Daerah Istimewa Yogyakarta 55149</p>
            <p>HP : 0895394477132</p>
        </div>
        <div class="details">
            <table>
                <tr>
                    <th>ID Order</th>
                    <td>{{ $product->order_id }}</td>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <td>{{ $product->owner->nama }}</td>
                </tr>
                <tr>
                    <th>Tanggal Masuk</th>
                    <td>{{ $product->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <th>Tanggal Selesai</th>
                    <td>{{ $product->tanggal_selesai }}</td>
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
                    <th>Total Berat</th>
                    <td>{{ $product->berat }} Kg</td>
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
        <div class="separator">
            -------------------------------------------------------------
        </div>
        <p style="text-align: justify;">Harap bawa nota ini atau tunjukan nota yang dikirim no.whatsapp ketika mengambil
            pakaian. Kunjungi situs website kami untuk melihat status pesanan anda secara realtime
            <a href="">www.laundrygo.com/track</a>
        </p>
        <div class="footer">
            Terima Kasih
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
