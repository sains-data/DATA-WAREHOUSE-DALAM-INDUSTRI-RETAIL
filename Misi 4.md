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
- **Customer Info**: Customer ID, Name, Segment
- **Geographic**: Country, State, City, Region, Postal Code
- **Product Info**: Category, Sub-Category, Product Name
- **Financial**: Sales, Quantity, Discount, Profit

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
    order_id,
    customer_key,
    product_key,
    location_key,
    order_date,
    sales_amount,
    quantity,
    discount,
    profit
)

-- Dimension Tables
dim_customer (customer_key, customer_id, name, segment)
dim_product (product_key, category, sub_category, product_name)
dim_location (location_key, region, state, city, postal_code)
dim_date (date_key, order_date, year, month, quarter, weekday)
```

### Desain Fisikal
#### Technology Stack
- **Storage**: PostgreSQL untuk data warehouse
- **Processing**: 
- **Analytics**: 
- **Visualization**: 

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

### Core Team
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
│   ├── processed/
│   └── external/
├── notebooks/
│   ├── 01-data-exploration.ipynb
│   ├── 02-data-cleaning.ipynb
│   ├── 03-analytics.ipynb
│   └── 04-modeling.ipynb
├── src/
│   ├── data/
│   ├── features/
│   ├── models/
│   └── visualization/
├── dashboard/
├── reports/
├── tests/
└── requirements.txt
```

## 🚀 Getting Started
```bash
# Clone repository
git clone [repository-url]

# Install dependencies
pip install -r requirements.txt

# Run data pipeline
python src/data/etl_pipeline.py

# Start dashboard
streamlit run dashboard/app.py
```

## 📈 Key Performance Indicators
- **Data Freshness**: Updated daily
- **Dashboard Performance**: <3 second load time
- **Analysis Coverage**: 100% data completeness
- **User Adoption**: 85% stakeholder engagement

---

*Last Updated: May 2025*
*Version: 1.0*
*Contact: [team-email@company.com]*
