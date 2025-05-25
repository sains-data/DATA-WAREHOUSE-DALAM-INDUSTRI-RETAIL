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

## 4. Analisis Kebutuhan (dari Fase 1)

### Dataset Structure
```
Columns: 21 features
Rows: 9,994 records
Size: ~2.3 MB
```

### Key Features Analysis
- **Ship Mode**: Metode pengiriman produk
- **Segment**: Segmen customer (Consumer, Corporate, Home Office)
- **Country**: Negara (United States)
- **City**: Kota tempat pengiriman
- **State**: Negara bagian
- **Postal Code**: Kode pos
- **Region**: Wilayah geografis (West, East, Central, South)
- **Category**: Kategori produk utama
- **Sub-Category**: Sub-kategori produk
- **Sales**: Total penjualan dalam dollar
- **Quantity**: Jumlah unit yang terjual
- **Discount**: Persentase diskon yang diberikan
- **Profit**: Keuntungan yang diperoleh

---

## 5. Desain Konseptual, Logikal, dan Fisikal

### Desain Konseptual
#### Entity Relationship
```
ORDERS (1) ──── (M) ORDER_ITEMS
   │
   └── (M) CUSTOMERS (1)
   
PRODUCTS (1) ──── (M) ORDER_ITEMS
   │
   └── (1) CATEGORIES

LOCATIONS (1) ──── (M) ORDERS
```

### Desain Logikal
#### Data Model Structure
```sql
-- Fact Table
fact_sales (
    ship_mode,
    segment,
    country,
    city,
    state,
    postal_code,
    region,
    category,
    sub_category,
    sales,
    quantity,
    discount,
    profit
)
```

### Desain Fisikal
#### Technology Stack
- **Storage**: MySQL/PostgreSQL database
- **Processing**: SQL queries dan Excel/Google Sheets
- **Analytics**: SQL untuk data analysis
- **Visualization**: Tableau Desktop/Public
- **Data Import**: CSV import ke SQL database

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
