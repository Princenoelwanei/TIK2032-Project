<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>PORTFOLIO WEBSITE</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <section class="home" id="home">
            <div class="home-isi">
                <h3>Hallo, Saya</h3>
                <h1>Prince</h1>
                <h3>Saya Adalah <span class="typing"></span></h3>
                <div class="social-media">
                    <a href="https://www.facebook.com/volerw.new"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxs-envelope'></i></a>
                    <a href="https://instagram.com/pntz_?igshid=ZDdkNTZiNTM="><i class='bx bxl-instagram'></i></a>
                    <a href="https://wa.me/+6285756095641"><i class='bx bxl-whatsapp'></i></a>
                </div>
            </div>
            <div class="home-img">
                <img src="Foto/Home-img.jpg" alt="">
            </div>
        </section>

        <section class="about" id="about">
            <div class="about-img">
                <img src="Foto/About-img.jpg" alt="">
            </div>
            <div class="about-isi">
                <h2 class="heading">About<span>Me</span></h2>
                <p>Saya Mahasiswa Teknik Informatika Universitas Sam Ratulangi Manado saat ini saya sedang mempelajari tentang
                    HTML, CSS, JavaScript, dan PHP dalam Matakuliah Pemrograman WEB.</p>
            </div>
        </section>

        <?php
            // Establish MySQL connection
            $mysqli = new mysqli("localhost", "root", "blog_artikel");

            // Check connection
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            // Fetch articles from the database
            $sql = "SELECT * FROM articles";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<img src='" . $row["image"] . "' alt='Coming Soon!'>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "</article>";
                }
            } else {
                echo "0 results";
            }

            // Close connection
            $mysqli->close();
            
?>

        <section class="Gallery" id="Gallery">
            <h2 class="heading">Gallery<span>Project</span></h2>
            <div class="Gallery-container">
                <div class="Gallery-box">
                    <img src="Foto/Gallery-img2.jpg" alt="">
                    <div class="Gallery-layer">
                        <h4>Personal Portfolio</h4>
                        <p>Project ini saya dapat pada MK Sem 2, dimana mendapatkan tugas untuk membuat Bio data dalam bentuk Website.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="Gallery-box">
                    <img src="Foto/Gallery-img1.png" alt="">
                    <div class="Gallery-layer">
                        <h4>Aplikasi Seller</h4>
                        <p>Project ini saya dan teman dapat pada MK Sem 3, dimana mendapatkan tugas untuk membuat sebuah aplikasi penjualan online.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="Gallery-box">
                    <img src="Foto/Gallery-img3.jpg" alt="">
                    <div class="Gallery-layer">
                        <h4>Game Store</h4>
                        <p>Project ini saya membuat website penjualan untuk game mobile dan PC, dimana pembeli dapat melakukan pembelian online yang cepat melalui web.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact" id="contact">
            <h2 class="heading">Contact<span>ME!</span></h2>
            <form action="#" name="">
                <div class="input-box">
                    <input type="text" name="Name" placeholder="Nama">
                    <input type="email" name="Email Address" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="number" name="Mobile Number" placeholder="Nomor">
                    <input type="text" name="Email Subject" placeholder="Email Tujuan">
                </div>
                <textarea name="Your Message" cols="30" rows="10" placeholder="Pesan"></textarea>
                <input type="submit" value="Kirim" class="tombol">
            </form>
            <span id="msg"></span>
        </section>


        <script src="script.js"></script>
    </body>
</html>
