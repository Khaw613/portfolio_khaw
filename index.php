<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#home">หน้าแรก</a></li>
                <li><a href="#about">เกี่ยวกับฉัน</a></li>
                <li><a href="#skills">ทักษะ</a></li>
                <li><a href="#portfolio">ผลงาน</a></li>
                <li><a href="#contact">ติดต่อ</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="home" class="hero">
    <div class="container">
        <h2>My Portfolio</h2>
        <p>นี่คือข้อมูลและรายละเอี่ยดเกี่ยวกับตัวฉัน</p>
    </div>
</section>

<section id="about" class="about">
    <div class="container">
        <h2>เกี่ยวกับฉัน</h2>
        <div class="about-content">
            <img src="./assests/images/pfp.png" alt="Profile" class="profile-img">
            <div>
                <p>นางสาวธิชาวดี สมญาติ</p>
                <p>ตอนนี้กำลังศึกษาอยู่ที่วิทยาลัยนิคมอุตสาหกรรมระยอง</p>
                <p>แผนกเทคโนโลยีสารสนเทศ</p>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="skills">
    <div class="container">
        <h2>ทักษะ</h2>
        <ul class="skills-list">
            <li>✅ HTML</li>
            <li>✅ CSS</li>
        </ul>
    </div>
</section>

<section id="portfolio" class="portfolio">
    <div class="container">
        <h2>ผลงาน</h2>
        <div class="portfolio-grid">
            <div class="item">
                <img src="./assests/images/11.jpg" alt="Project 1">
                <h3>ถือป้ายงานกีฬาสี</h3>
            </div>
            <div class="item">
                <img src="./assests/images/22.jpg" alt="Project 2">
                <h3>เข้าอบรม Advice</h3>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <h2>ช่องทางการติดต่อ</h2>
            <strong>0@email.com</strong>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Tichawadee</p>
    </div>
</footer>

</body>
</html>
