<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokterkita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        .search-bar {
            background-color: #cfe8fc;
            padding: 20px;
        }
        .doctor-card {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .doctor-card img {
            width: 100px;
            height:100px;
            margin-right: 15px;
        }
    </style>
</head>
<body>
<?php
include('includes/header.php');
?>
    
    <div class="search-bar text-center">
        <h4>Janji Temu Dokter</h4>
        <div class="d-flex justify-content-center mt-3">
            <input type="text" class="form-control w-25 me-2" placeholder="Cari Lokasi">
            <input type="text" class="form-control w-50 me-2" placeholder="Cari dokter, spesialis atau rumah sakit">
            <button class="btn text-white" style="background-color: #373D70;">Cari</button>
        </div>
    </div>
    
    <div class="container mt-4">
        <div class="doctor-card">
            <img src="img/dokter.png" alt="Dokter">
            <div>
                <h5 class="fw-bold">Dr. Winny Budiharto</h5>
                <p class="text-muted mb-1">Dokter Umum</p>
                <small class="text-secondary"><i class="fas fa-clock"></i> 16 Tahun</small>
                <small class="ms-2 text-secondary"><i class="fas fa-thumbs-up"></i> 99%</small>
            </div>
            <div class="ms-auto">
            <a href="pembayaran" class="btn text-white" style="background-color: #373D70;">
                Buat Janji
            </a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>