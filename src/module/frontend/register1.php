<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>register - DokterKita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  
  <!-- Google Fonts: Poppins (Opsional) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    /* Kolom kiri (form login) */
    .login-left {
      padding: 50px;
    }
    /* Kolom kanan (ilustrasi) */
    
    .illustration {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
      margin-top: 1px;
      margin-right: -11px;
    }
    .logo {
        width: 210px !important; /* Memaksa ukuran lebar */
        height: auto !important;
        position: absolute; /* Menggunakan posisi absolut */
        top: 20px; /* Jarak dari atas */
        left: 50px; /* Jarak dari kiri */
        margin-bottom: 0; /* Menghilangkan margin bawah */
    }
    /* Tombol kustom */
    .btn-custom {
      background-color: #0F6463;
      border: none;
    }
    .btn-custom:hover {
      background-color: #094C4B;
    }
    .logo {
            width: 150px; /* Sesuaikan ukuran logo */
            margin-bottom: 20px;
        }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Left Column: Registration Form -->
    <div class="col-md-6 d-flex align-items-center login-left">
      <div class="w-100">
        <img src="http://localhost:3001/gambar/logo.png" 
             alt="DokterKita"  
             class="logo mb-4">

        <h4 class="mb-2">HALO, SELAMAT DATANG</h4>
        <p class="text-muted mb-4">Halo, silakan isi form dibawah ini</p>

        <form id="registerForm">
          <div class="mb-3">
            <input type="text" id="nama_pasien" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="mb-3">
            <input type="email" id="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="mb-3">
            <input type="text" id="no_telepon" class="form-control" placeholder="Nomor HP">
          </div>
          <div class="mb-3">
            <input type="date" id="tanggal_lahir" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="mb-3">
            <input type="text" id="alamat" class="form-control" placeholder="Alamat">
          </div>
          <button type="submit" class="btn btn-custom text-white w-100 py-2">Daftar</button>
        </form>

        <p class="mt-3">
          Sudah punya akun? <a href="login1" class="text-decoration-none">masuk</a>
        </p>
      </div>
    </div>

    <!-- Right Column: Illustration -->
    <div class="col-md-6 login-right d-flex align-items-center justify-content-center">
      <img src="http://localhost:3001/gambar/ilu2.jpg" alt="Ilustrasi Login" class="illustration">
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Added JavaScript for API Integration -->
<script>
document.getElementById('registerForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  
  // Collect form data
  const nama_pasien = document.getElementById('nama_pasien').value;
  const email = document.getElementById('email').value;
  const no_telepon = document.getElementById('no_telepon').value;
  const tanggal_lahir = document.getElementById('tanggal_lahir').value;
  const password = document.getElementById('password').value;
  const alamat = document.getElementById('alamat').value;

  try {
    const response = await fetch('http://localhost:3001/api/auth/register', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        email: email,
        password: password,
        nama_pasien: nama_pasien,
        no_telepon: no_telepon || null, // Set to null if empty
        tanggal_lahir: tanggal_lahir,
        alamat: alamat || null // Set to null if empty
      })
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();
    
    // Handle successful registration
    console.log('Registration successful:', data);
    alert('Registration successful! Redirecting to login...');
    window.location.href = 'login1'; // Redirect to login page

  } catch (error) {
    console.error('Registration error:', error);
    alert('Registration failed. Please check your input and try again.');
  }
});
</script>
</body>
</html>
