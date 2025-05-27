# Data Warehouse Dalam Industri Retail

## 📊 Dataset Overview
Proyek ini menganalisis dataset Superstore dari Kaggle, dengan fokus pada kinerja penjualan, perilaku pelanggan, dan wawasan bisnis untuk jaringan superstore ritel.

**Dataset Source**: [Kaggle - Superstore Dataset](https://www.kaggle.com/datasets/roopacalistus/superstore)

---

## 1. Ringkasan Proyek dan Latar Belakang

### Latar Belakang
Superstore merupakan salah satu retailer terbesar yang menjual berbagai produk mulai dari furniture, office supplies, hingga technology. Dengan pertumbuhan bisnis yang pesat, perusahaan membutuhkan analisis mendalam terhadap data penjualan untuk mengoptimalkan strategi bisnis dan meningkatkan profitabilitas.

### Permasalahan Bisnis
- Bagaimana tren penjualan dan profitabilitas di berbagai kategori produk?
- Siapa customer segment yang paling menguntungkan?
- Wilayah mana yang memberikan kontribusi revenue tertinggi?
- Produk apa yang perlu difokuskan atau dihentikan?

### Objektif Proyek
- Menganalisis performa penjualan berdasarkan kategori, region, dan customer segment
- Mengidentifikasi produk dan customer yang paling profitable
- Memberikan rekomendasi strategis untuk meningkatkan profitabilitas
- Membangun dashboard interaktif untuk monitoring KPI

---

## 2. Tujuan dan Ruang Lingkup Sistem

### Tujuan Utama
1. **Analisis Deskriptif**: Memahami pola penjualan historis dan tren bisnis
2. **Analisis Profitabilitas**: Mengidentifikasi produk dan segmen yang paling menguntungkan
3. **Segmentasi Customer**: Mengelompokkan customer berdasarkan behavior pembelian
4. **Forecasting**: Memprediksi tren penjualan untuk periode mendatang
5. **Dashboard Development**: Membangun visualisasi interaktif untuk stakeholder

### Ruang Lingkup
- **Data Temporal**: 2014-2017 (4 tahun data penjualan)
- **Geografis**: United States (3 regions, 49 states, 531 cities)
- **Produk**: 3 kategori utama (Furniture, Office Supplies, Technology)
- **Customer**: 3 segmen (Consumer, Corporate, Home Office)

---

## 3. Metodologi

### Tools dan Teknologi

### Tahapan Analisis


---

## 4. Analisis Kebutuhan (dari Misi 1)


---

## 5. Desain Konseptual, Logikal, dan Fisikal
Desain data warehouse ini mengadopsi **Skema Bintang (Star Schema)** untuk optimalisasi query analitik dan kemudahan pemahaman.
![Diagram Star Schema](images/schema-star.png)

### Desain Konseptual
## Penjelasan Tabel

### Fact Table
- **fakta_sales**: Tabel utama yang menyimpan data penjualan

### Dimension Tables
- **dim_location**: Data lokasi (country, city, state, region, postalcode)
- **dim_customer**: Data pelanggan (customer_id, segment)
- **dim_product**: Data produk (product_id, category, subcategory)
- **dim_time**: Data waktu (time_id, year, month, day)

## Relasi
- Semua dimension tables terhubung ke fact table melalui foreign keys
- Menggunakan model star schema untuk optimasi query analytical
```

### Desain Logikal

```

### Desain Fisikal

---

## 6. Proses Implementasi


---

## 7. Hasil Implementasi



---

## 8. Evaluasi




---

## 9. Rencana Pengembangan ke Depan

### Short-term Improvements (3 months)


### Medium-term Goals (6-12 months)


### Long-term Vision (1-2 years)


---

## 10. Tim Proyek

- Marhanny Zahra Nurendra 	120450017
- Eunike Bunga Santa		121450095
- Muhammad Bayu Syuhada	122450007
- Johannes Krisjon Silitonga	122450043
- Rian Bintang Wijaya		122450094
- Bastian Heskia Silaban	122450130

---

## 📁 Project Structure
```
superstore-analysis/
├── data/
│   ├── raw/
│   │   └── superstore.csv
│   ├── processed/
│   │   └── cleaned_superstore.csv
│   └── sql/
│       └── database_schema.sql
├── excel_analysis/
│   ├── data_exploration.xlsx
│   ├── pivot_analysis.xlsx
│   └── summary_report.xlsx
├── sql_queries/
│   ├── basic_analysis.sql
│   ├── advanced_queries.sql
│   └── kpi_calculations.sql
├── tableau/
│   ├── superstore_dashboard.twb
│   ├── executive_summary.twb
│   └── detailed_analysis.twb
└── documentation/
    ├── data_dictionary.xlsx
    └── user_guide.pdf
```
