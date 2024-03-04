<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi POS</title>
    
    <style>
        
    </style>
</head>
<body>
    <h1>Halaman Transaksi POS</h1>
    
    
    <form action="/pos/process" method="POST">
        @csrf
        <label for="product">Produk:</label>
        <select name="product" id="product">
            
            <option value="nasi-goreng">Soto Ayam</option>
            <option value="mie-goreng">Soto Babat</option>
            <option value="ayam-goreng">Soto Kikil</option>
           
        </select>
        <br>
        <label for="quantity">Jumlah:</label>
        <input type="number" name="quantity" id="quantity" min="1" value="1">
        <br>
        <button type="submit">Tambahkan ke Keranjang</button>
    </form>

    
    <h2>Keranjang Belanja</h2>
    <ul>
        <!-- Tampilkan daftar item yang sudah ditambahkan ke keranjang -->

        <li>Soto Babat (x3)</li>
        <li>Soto Kikil (x1)</li>
    </ul>

</body>
</html>
