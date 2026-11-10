<?php
  // transaksi penjualan produk
  $namaproduk = "Baju suka tidur";
  $harga_satuan = 115500;
  $qty = 2;
  
  // hitung harga yang harus di bayar
  $tharga = $harga_satuan * $qty;

  echo "Sub Total: ". $tharga;

  // terdapat diskon 5% jika Sub Total lebih dari 500.000
  
