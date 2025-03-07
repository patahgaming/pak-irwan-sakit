<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - DokterKita</title>
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
    <!-- Left Column: Login Form -->
    <div class="col-md-6 d-flex align-items-center login-left">
      <div class="w-100">
        <img src="http://localhost:3001/gambar/logo.png" 
             alt="DokterKita"  
             class="logo mb-4">

        <h4 class="mb-2">HALO, SELAMAT DATANG</h4>
        <p class="text-muted mb-4">Halo, selamat datang di website DokterKita</p>

        <form id="loginForm">
          <div class="mb-3">
            <input type="email" id="email" class="form-control" placeholder="e-mail" required>
          </div>
          <div class="mb-3">
            <input type="password" id="password" class="form-control" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-custom text-white w-100 py-2">Masuk</button>
        </form>

        <p class="mt-3">
          Tidak punya akun? <a href="register1" class="text-decoration-none">Daftar</a>
        </p>
      </div>
    </div>

    <!-- Right Column: Illustration -->
    <div class="col-md-6 login-right d-flex align-items-center justify-content-center">
      <img src="http://localhost:3001/gambar/ilu.jpg" alt="Ilustrasi Login" class="illustration">
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Added JavaScript for API Integration -->
<script>
document.getElementById('loginForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  try {
    const response = await fetch('http://localhost:3001/api/auth/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        email: email,
        password: password
      })
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();
    
    // Simpan token sebagai cookie
    document.cookie = `authToken=${data.token}; path=/; max-age=86400`; // Cookie berlaku selama 1 hari (86400 detik)
    
    console.log('Login successful:', data);
    alert('Login successful! Redirecting...');
    window.location.href = '/home'; // Adjust redirect URL

  } catch (error) {
    console.error('Login error:', error);
    alert('Login failed. Please check your credentials.');
  }
});
</script>
</body>
</html>
