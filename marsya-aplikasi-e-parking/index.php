<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin - Sistem Parkir</title>

<style>
body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #e5e5e5;
}

/* Sidebar */
.sidebar {
  width: 240px;
  height: 100vh;
  position: fixed;
  background: linear-gradient(180deg, #2b5876, #4e4376);
  color: white;
  padding-top: 20px;
}

/* Logo + Text */
.logo-title {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 0 20px;
  margin-bottom: 30px;
}

/* Logo Pin */
.logo-pin {
  width: 45px;
  height: 45px;
  background: #ff6f5e;
  border-radius: 50% 50% 50% 0;
  transform: rotate(-45deg);
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo-pin span {
  transform: rotate(45deg);
  font-weight: bold;
  color: #2c3e50;
  font-size: 20px;
}

/* Menu */
.sidebar a {
  display: block;
  padding: 14px 20px;
  color: #ddd;
  text-decoration: none;
}

.sidebar a:hover {
  background: rgba(255, 255, 255, 0.1);
  color: white;
}

/* Main */
.main {
  margin-left: 240px;
  padding: 30px;
}

/* Header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logout {
  background: #e74c3c;
  color: white;
  border: none;
  padding: 10px 18px;
  border-radius: 8px;
  cursor: pointer;
}

/* Cards */
.cards {
  margin-top: 30px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

.card {
  padding: 25px;
  border-radius: 12px;
  color: white;
  text-align: center;
}

.blue { background: #3b82f6; }
.yellow { background: #facc15; color: black; }
.red { background: #ef4444; }
.green { background: #22c55e; }

.card h4 {
  margin: 0;
  font-size: 16px;
}

.card p {
  margin-top: 10px;
  font-size: 28px;
  font-weight: bold;
}
</style>

</head>

<body>

<!-- Sidebar -->
<div class="sidebar">

  <div class="logo-title">
    <div class="logo-pin">
      <span>P</span>
    </div>
    <h3>Aplikasi Parkir</h3>
  </div>

  <a href="#">📊 Dashboard</a>
  <a href="#">👤 User</a>
  <a href="#">🚗 Kendaraan</a>
  <a href="#">🏷️ Tarif Parkir</a>
  <a href="#">📍 Area Parkir</a>
  <a href="#">📋 Log Aktivitas</a>

</div>

<!-- Main -->
<div class="main">

  <div class="header">
    <h1>Dashboard</h1>
    <button class="logout">Logout</button>
  </div>

  <div class="cards">
    <div class="card blue">
      <h4>Total Kendaraan</h4>
      <p>2</p>
    </div>

    <div class="card yellow">
      <h4>Parkir Masuk</h4>
      <p>2</p>
    </div>

    <div class="card red">
      <h4>Parkir Keluar</h4>
      <p>8</p>
    </div>

    <div class="card green">
      <h4>Pendapatan</h4>
      <p>Rp 114,000</p>
    </div>
  </div>

</div>

</body>
</html>