<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href= "css/main.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/bars?f=classic&s=solid">
</head>
 <body>
    <div class="header">
        <div class="logo">
            NEWS 
        </div>
        
        <nav>
            <ul class="nav-links" id="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="About.php">Contact</a></li>
                <li><a href="login.php">Login</a></li> 
            </ul>

            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars open"></i>
                <i class="fas fa-times close"></i>
            </div>
        </nav>
    </div>
    </div>

    <div class="topHeadlines">
        <div class="left">
            <div class="title">
                <h2>Breaking News</h2>
            </div>
            <div class="img" id="breakingImg">
                <?php
                include 'db.php';

                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='news-item'>";
                        if (!empty($row["image"])) {
                            echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "'>";
                        }
                        echo "<h3><a href='https://www.cnnindonesia.com/ekonomi/20240607074948-78-1106950/isi-sesal-menteri-basuki-dan-tantangan-ke-dpr-rombak-aturan-tapera' target='_blank'>" . $row["title"] . "</a></h3>";
                        echo "<p>" . $row["content"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No news found</p>";
                }

                $conn->close();
                ?>
            </div>
            <div class="text" id="breakingNews">
                <div class="title"></div>
                <div class="description"></div>
            </div>
        </div>
        <div class="right">
            <div class="title">
                <h2>Top Headlines</h2>
            </div>
            <div class="topNews">
                <div class="news">
                    <div class="img">
                        <img src="./image/Berita 1.jpg" alt="image1">
                    </div>
                    <div class="text">
                        <div class="title">
                            <a href="https://example.com/news1" target="_blank"><p>Dejan dan Gloria mengalahkan juara dunia dalam pertandingan Indonesia Open 2024, memenangkan dua gim secara brilian dengan skor 22–20 dan 21-17, dan melaju ke babak semifinal, pencapaian yang sangat dihargai oleh para penggemar bulutangkis Indonesia.</p></a>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="img">
                        <img src="./image/Berita 2.jpg" alt="image2">
                    </div>
                    <div class="text">
                        <div class="title">
                            <a href="https://example.com/news2" target="_blank"><p>KPK meraih Opini WTP untuk kelima kalinya berturut-turut sejak 2019 dan klaim telah menyelamatkan uang negara Rp 114,8 triliun melalui berbagai tindakan pencegahan dan penindakan korupsi dalam Laporan Hasil Pemeriksaan</p></a>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="img">
                        <img src="./image/Berita 3.jpg" alt="image2">
                    </div>
                    <div class="text">
                        <div class="title">
                            <a href="https://example.com/news2" target="_blank"><p>Pertamina menurunkan harga berbagai jenis BBM non-subsidi seperti Pertamax, Pertamax Turbo, dan Dexlite; dipicu oleh penurunan harga minyak mentah internasional dan penguatan nilai tukar rupiah terhadap dolar AS pada Mei 2024</p></a>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="img">
                        <img src="./image/Berita 2.jpg" alt="image2">
                    </div>
                    <div class="text">
                        <div class="title">
                            <a href="https://example.com/news2" target="_blank"><p>KPK meraih Opini WTP untuk kelima kalinya</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Breaking News. All rights reserved.</p>
    </footer>

</body>
</html>
<script src="js/index.js"></script>
