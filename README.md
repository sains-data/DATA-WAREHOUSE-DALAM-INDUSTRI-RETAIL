# Implementasi Data Warehouse pada Bidang Retail di Superstore

## Nama Kelompok
- Marhanny Zahra Nurendra 	120450017
- Eunike Bunga Santa		121450095
- Muhammad Bayu Syuhada	122450007
- Johannes Krisjon Silitonga	122450043
- Rian Bintang Wijaya		122450094
- Bastian Heskia Silaban	122450130

## Ringkasan Kebutuhan Bisnis
Superstore membutuhkan *data warehouse* untuk mengkonsolidasikan data dari berbagai sumber seperti *Point of Sale* (POS), sistem inventori, dan *platform customer management*. Tujuan utama adalah memperoleh gambaran komprehensif tentang kinerja bisnis lintas kategori produk, segmen pelanggan, dan wilayah geografis untuk mendukung pengambilan keputusan strategis. *Data warehouse* ini akan memungkinkan analisis terkait:

1. Profitabilitas produk di berbagai kategori dan subkategori
2. Efektivitas strategi diskon dan promosi
3. Performa penjualan berdasarkan wilayah geografis
4. Pola pembelian dan perilaku pelanggan

## Skema Konseptual Multidimensi
Dalam pengembangan skema konseptual multidimensi ini, kami menggunakan pendekatan gabungan Business/Data Driven sesuai dengan kebutuhan Superstore:

### Pendekatan *Business Driven*
Dari perspektif bisnis, kami mengidentifikasi kebutuhan analisis utama seperti profitabilitas produk berdasarkan kategori, efektivitas strategi diskon, performa penjualan regional, segmentasi pelanggan, dan efisiensi pengiriman.

### Pendekatan *Data Driven*
Dari perspektif data, kami menganalisis ketersediaan data dalam metadata yang mencakup data transaksi penjualan (Sales, Quantity, Discount, Profit), informasi produk (Category, Sub-category), data lokasi geografis (Country, Region, State, City, Postal Code), segmentasi pelanggan (Segment), dan metode pengiriman (Ship Mode).

### Hasil Penggabungan
Berdasarkan penggabungan kedua pendekatan tersebut, kami mengembangkan skema bintang (star schema) yang optimal dengan satu tabel fakta utama FACT_SALES yang menyimpan data transaksi penjualan dengan berbagai metrik penting, serta lima tabel dimensi yang saling terhubung yaitu:

- **DIM_CUSTOMER**: untuk informasi pelanggan
- **DIM_PRODUCT**: untuk detail produk
- **DIM_LOCATION**: untuk hierarki lokasi geografis
- **DIM_TIME**: untuk analisis temporal
- **DIM_SHIPPING**: untuk informasi pengiriman
