<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran DokterKita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7f6;
            font-family: "Poppins", sans-serif;
        }
        .left-section {
            background-color: #ecf0ec;
            padding: 50px;
            height: 100vh;
        }
        .right-section {
            background-color: #fff;
            padding: 50px;
            height: 100vh;
            box-shadow: -5px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .doctor-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .btn-pay {
            background-color: #373D70;
            color: white;
            width: 100%;
            padding: 12px;
            font-weight: bold;
            border-radius: 8px;
        }
        .btn-pay:hover {
            background-color: #2c325d;
        }
        .payment-method {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }
        .payment-method.active {
            border: 2px solid #373D70;
            background-color: #f8f9fa;
        }
        .visa-logo {
            width: 40px;
            float: right;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #373D70;
            color: #373D70;
            text-decoration: none;
        }
        .btn-back:hover {
            background-color: #373D70;
            color: white;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row ms-1">
        <!-- Kiri: Informasi & Review -->
        <div class="col-md-6 left-section">
            <a href="janji_temu" class="btn-back">
                <i class="fa fa-arrow-left"></i>
            </a>
            <h5 class="mt-5 fw-bold">Informasi & Review</h5>
            <p class="text-muted small">Dengan melakukan pemesanan, Anda menyetujui persetujuan DokterKita</p>
            
            <div class="d-flex align-items-center doctor-card mt-4">
                <img src="img/dokter.png" alt="Dr. Winny Budiharto">
                <div class="ms-3">
                    <h6 class="mb-0 fw-bold">Dr. Winny Budiharto</h6>
                    <p class="text-muted small mb-1">Dokter Umum</p>
                    <span class="badge bg-light text-dark">16 Tahun</span>
                    <span class="badge bg-light text-dark">99%</span>
                    <h6 class="mt-2 fw-bold">Rp 49.000</h6>
                </div>
            </div>
        </div>

        <!-- Kanan: Detail Pembayaran -->
        <div class="col-md-6 right-section">
            <h5 class="fw-bold">Detail Pembayaran</h5>
            <p class="text-muted small">Selesaikan pembelian Anda dengan memberikan detail pembayaran Anda.</p>
            
            <label class="form-label mt-2">Email</label>
            <input type="email" class="form-control" value="" readonly placeholder="Masukkan email anda">
            
            <label class="form-label mt-3">Pilih Metode Pembayaran</label>
            <div class="d-flex">
                <div class="payment-method active me-2 px-3 py-2">
                    <i class="bi bi-credit-card me-1"></i> Debit / Credit Card
                </div>
                <div class="payment-method px-3 py-2">
                    <i class="bi bi-bank"></i> Virtual Account
                </div>
            </div>
            
            <label class="form-label mt-3">Rincian Kartu</label>
            <input type="text" class="form-control mb-3" value="" readonly placeholder="Masukkan nama lengkap anda">
            <div class="input-group">
                <input type="text" class="form-control mb-3" value="" readonly placeholder="Masukkan nomor kartu anda">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" class="visa-logo ms-3 mb-3" alt="Visa">
            </div>
            <div class="row mt-2">
                <div class="col">
                    <input type="text" class="form-control mb-3" value="" readonly placeholder="Masukkan tanggal lahir anda">
                </div>
                <div class="col">
                    <input type="password" class="form-control" value="" readonly placeholder="Masukkan password anda">
                </div>
            </div>
            <p class="text-muted small mt-2">Pembayaran aman dan terenkripsi</p>

            <div class="d-flex justify-content-between mt-3 mb-1">
                <span>Sub Total</span> <span>Rp 49.000</span>
            </div>
            <div class="d-flex justify-content-between mb-1">
                <span>Diskon</span> <span>Rp 0</span>
            </div>
            <div class="d-flex justify-content-between fw-bold mb-1">
                <span>Total</span> <span>Rp 49.000</span>
            </div>

            <a href="cashdone" class="btn btn-pay mt-3">
                Bayar Rp 49.000 →
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>