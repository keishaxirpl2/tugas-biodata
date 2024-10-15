<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Keisha Schatzi Salsabila</title>
    <style>
        /* CSS untuk styling umum */
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #f5f5f5; /* Warna background abu-abu lembut */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Styling sidebar navigasi */
        .sidebar {
            width: 230px;
            height: 100vh;
            background-color: #2c3e50; /* Warna sidebar biru gelap */
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.15);
        }

        .sidebar a {
            color: #ecf0f1;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e; /* Warna hover */
        }

        /* Konten utama */
        .content {
            margin-left: 230px;
            padding: 50px;
        }

        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            margin: 30px auto;
            text-align: center;
        }

        .profile-container h2 {
            color: #2980b9; /* Warna biru terang */
            margin-bottom: 20px;
            font-size: 24px;
        }

        .profile-container p {
            font-size: 18px;
            color: #555;
            margin: 12px 0;
            line-height: 1.6;
        }

        .profile-container p strong {
            color: #2980b9; /* Warna highlight biru terang */
        }

        /* Footer styling */
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 230px;
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigasi -->
    <div class="sidebar">
        <a href="#home">Home</a>
        <a href="#biodata">Biodata</a>
        <a href="#kontak">Kontak</a>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        <!-- Home -->
        <div class="profile-container" id="home">
            <h2>Welcome to Keisha Schatzi Salsabila Profile</h2>
            <p>Explore more about Keisha Schatzi Salsabila by navigating through the menu on the left side.</p>
        </div>

        <!-- Biodata -->
        <div class="profile-container" id="biodata">
            <h2>Biodata</h2>
            <?php
            // PHP untuk menampilkan biodata
            $nama = "Keisha Schatzi Salsabila";
            $umur = "16th";
            $hobi = "Menonton film";
            $tanggal_lahir = "27-03-2008";
            ?>
            <p><strong>Name:</strong> <?php echo "Name:$nama"; ?></p>
            <p><strong>Age:</strong> <?php echo"$umur years old"; ?></p>
            <p><strong>Hobby:</strong> <?php echo "$hobi"; ?></p>
           <p><strong>Date of Birth:</strong> <?php echo"$tanggal_lahir"; ?></p>
        
        </div>

        <!-- Kontak -->
        <div class="profile-container" id="kontak">
            <h2>Contact Information</h2>
            <p>Email: keisoopra@example.com</p>
            <p>Instagram: @s61627</p>
            <p>Phone: 0812345678</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Profil Keisha Schatzi Salsabila - All Rights Reserved
    </div>
</body>
</html>
