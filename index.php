<!DOCTYPE html><html lang="bn"><head><meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Dinilearn | Find your own way</title>
  <!-- Google Fonts & Font Awesome -->
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Hind Siliguri', sans-serif;
      background: #fefaf5;
      color: #1e2a3a;
      line-height: 1.5;
    }

    /* container utility */
    .container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* header / navbar */
    .navbar {
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    .nav-flex {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 16px 0;
    }
    .logo h1 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #e67e22;
    }
    .logo span {
      color: #2c3e50;
      font-size: 0.9rem;
      font-weight: 500;
    }
    .nav-links {
      display: flex;
      gap: 28px;
      align-items: center;
    }
    .nav-links a {
      text-decoration: none;
      font-weight: 600;
      color: #2c3e50;
      transition: 0.2s;
    }
    .nav-links a:hover, .nav-links a.active {
      color: #e67e22;
    }
    .btn-outline {
      border: 2px solid #e67e22;
      background: transparent;
      padding: 8px 20px;
      border-radius: 40px;
      font-weight: 600;
      color: #e67e22;
      cursor: pointer;
      transition: 0.2s;
    }
    .btn-outline:hover {
      background: #e67e22;
      color: white;
    }
    .btn-primary {
      background: #e67e22;
      border: none;
      padding: 12px 28px;
      border-radius: 40px;
      font-weight: 700;
      color: white;
      cursor: pointer;
      font-size: 1rem;
      transition: 0.2s;
      display: inline-block;
    }
    .btn-primary:hover {
      background: #d35400;
      transform: translateY(-2px);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #fff6e8 0%, #ffe6d5 100%);
      padding: 60px 0;
    }
    .hero-grid {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
    }
    .hero-text {
      flex: 1;
    }
    .hero-text h2 {
      font-size: 2.5rem;
      font-weight: 800;
      color: #2c3e50;
      line-height: 1.3;
    }
    .hero-text .highlight {
      color: #e67e22;
    }
    .hero-text p {
      margin: 20px 0;
      font-size: 1.1rem;
      color: #4a5568;
    }
    .hero-stats {
      display: flex;
      gap: 30px;
      margin-top: 30px;
      flex-wrap: wrap;
    }
    .stat-item h3 {
      font-size: 2rem;
      font-weight: 800;
      color: #e67e22;
    }
    .hero-img {
      flex: 1;
      text-align: center;
    }
    .hero-img img {
      max-width: 100%;
      border-radius: 32px;
      box-shadow: 0 20px 35px -10px rgba(0,0,0,0.15);
    }

    /* section titles */
    .section-title {
      text-align: center;
      font-size: 2rem;
      font-weight: 700;
      margin: 50px 0 30px;
      position: relative;
    }
    .section-title:after {
      content: '';
      display: block;
      width: 80px;
      height: 4px;
      background: #e67e22;
      margin: 12px auto 0;
      border-radius: 4px;
    }

    /* course cards grid (random images) */
    .courses-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 30px;
      margin: 40px 0;
    }
    .course-card {
      background: white;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    .course-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 30px rgba(0,0,0,0.1);
    }
    .course-img {
      height: 180px;
      width: 100%;
      object-fit: cover;
      background: #f3f0e7;
    }
    .course-info {
      padding: 20px;
    }
    .course-info h3 {
      font-size: 1.4rem;
      margin-bottom: 8px;
    }
    .course-info p {
      color: #5a6874;
      margin: 12px 0;
    }
    .price {
      font-weight: 800;
      color: #e67e22;
      font-size: 1.2rem;
    }
    .enroll-btn {
      margin-top: 16px;
      width: 100%;
      background: #f0f2f5;
      border: none;
      padding: 10px;
      border-radius: 40px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
    }
    .enroll-btn:hover {
      background: #e67e22;
      color: white;
    }

    /* Testimonials with random images & carousel style */
    .testimonials-slider {
      display: flex;
      overflow-x: auto;
      gap: 28px;
      padding: 20px 8px 40px;
      scroll-snap-type: x mandatory;
    }
    .testimonial-card {
      flex: 0 0 300px;
      background: white;
      border-radius: 28px;
      padding: 24px;
      box-shadow: 0 12px 24px rgba(0,0,0,0.05);
      scroll-snap-align: start;
      text-align: center;
      transition: all 0.2s;
    }
    .testimonial-img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 16px;
      border: 3px solid #e67e22;
    }
    .testimonial-card h4 {
      font-size: 1.2rem;
      margin: 10px 0 5px;
    }
    .testimonial-card p {
      font-style: italic;
      color: #2d3e50;
      margin-top: 12px;
    }
    .stars {
      color: #f39c12;
      margin: 12px 0;
    }

    /* features / benefits */
    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin: 40px 0;
    }
    .benefit-item {
      background: white;
      padding: 30px 20px;
      border-radius: 28px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0,0,0,0.03);
      transition: 0.2s;
    }
    .benefit-item i {
      font-size: 2.8rem;
      color: #e67e22;
      margin-bottom: 20px;
    }
    .benefit-item h3 {
      margin-bottom: 12px;
    }

    /* publication section */
    .publication {
      background: #fef3e9;
      padding: 50px 0;
      border-radius: 40px;
      margin: 50px 0;
    }
    .book-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }
    .book-badge {
      background: white;
      padding: 12px 28px;
      border-radius: 60px;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    footer {
      background: #1e2a3a;
      color: #cddde9;
      padding: 48px 0 24px;
      margin-top: 60px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
    }
    .footer-grid h4 {
      color: white;
      margin-bottom: 20px;
    }
    .footer-grid a {
      color: #cddde9;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
    }
    .copyright {
      text-align: center;
      padding-top: 40px;
      border-top: 1px solid #2c3e50;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .nav-flex {
        flex-direction: column;
        gap: 16px;
      }
      .hero-text h2 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body dir="ltr" spellcheck="true" style="direction: ltr; min-height: 901px;" data-new-gr-c-s-check-loaded="14.1280.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1280.0">

<!-- Navigation -->
<div class="navbar">
  <div class="container">
    <div class="nav-flex">
      <div class="logo">
        <h1>DiniLearn&nbsp;</h1>
      </div>
      <div class="nav-links">
        <a href="#" class="active">হোম</a>
        <a href="#">কোর্সসমূহ</a>
        <a href="#">আইটি</a>
        <a href="#">পাবলিকেশন</a>
        <a href="#">Update</a>
        <button class="btn-outline">লগইন</button>
      </div>
    </div>
  </div>
</div>

<!-- Hero Section -->
<section class="hero">
  <div class="container hero-grid">
    <div class="hero-text">
      <h2>2026 All course you can get here&nbsp;<span class="highlight">Online Course</span> স্পেশাল!</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
      <button class="btn-primary">ফ্রি ট্রায়াল শুরু করুন </button>
      <div class="hero-stats">
        <div class="stat-item"><h3>187K+</h3><span>শিক্ষার্থী</span></div>
        <div class="stat-item"><h3>100+</h3><span>শিক্ষক</span></div>
        <div class="stat-item"><h3>40+</h3><span>আইটি প্রোগ্রাম</span></div>
      </div>
    </div>
    <div class="hero-img">
      <img src="https://picsum.photos/id/42/500/400" alt="study motivation random">
    </div>
  </div>
</section>

<div class="container">
  <!-- Latest Premium Courses Section with Random Images -->
  <h2 class="section-title">🌟 সর্বশেষ প্রিমিয়াম কোর্স</h2>
  <div class="courses-grid" id="coursesContainer"><br></div>

  <!-- Benefits / কেন বিদ্যাবাড়ি -->
  <h2 class="section-title">🎯 কেন DiniLearn</h2>
  <div class="benefits-grid">
    <div class="benefit-item"><h3>নিজস্ব অ্যাপ ও ওয়েব</h3><p>যেকোনো সময়, যেকোনো জায়গায় পড়াশোনা</p></div>
    <div class="benefit-item"><h3>১০ লাখ+ কমিউনিটি</h3><p>ফেসবুক গ্রুপ ও ইউটিউবে ফ্রি সাপোর্ট</p></div>
    <div class="benefit-item"><h3>সেরা মেন্টরশিপ</h3><p>এম আই প্রধান মুকুল স্যার ও টিম</p></div>
    <div class="benefit-item"><h3>DiniLearn আইটি</h3><p>ডিজিটাল স্কিল ডেভেলপমেন্ট</p></div>
  </div>

  <!-- Testimonials with random images for each student -->
  <h2 class="section-title">🗣️ আমাদের শিক্ষার্থীদের মতামত</h2>
  <div class="testimonials-slider" id="testimonialsSlider"><br></div>

  <!-- Publication Section -->
  <div class="publication">
    <div style="text-align: center;">
      <h2 style="font-size: 1.8rem;">📚 NEXTPAGE পাবলিকেশন</h2>
      <p>সঠিক প্রস্তুতির জন্য মানসম্মত বই — BCS, NTRCA, প্রাইমারি ডাইজেস্ট প্লাস ও ইংলিশ শর্ট স্টোরিজ</p>
    </div>
    <div class="book-list">
      <div class="book-badge">📘 BCS ডাইজেস্ট প্লাস</div>
      <div class="book-badge">📙 NTRCA ডাইজেস্ট প্লাস</div>
      <div class="book-badge">📗 Primary ডাইজেস্ট প্লাস</div>
      <div class="book-badge">📕 Classroom MCQ ENGLISH</div>
      <div class="book-badge">⚡ বিদ্যাবাড়ি বুলেট নলেজ (ই-বুক)</div>
    </div>
  </div>

  <!-- IT section promo -->
  <div style="background: #2c3e50; border-radius: 32px; padding: 40px; color: white; margin: 40px 0; text-align: center;">
    
    <h2 style="margin: 16px 0;">DiniLearn আইটি - ডিজিটাল স্কিল শেখার পারফেক্ট প্ল্যাটফর্ম</h2>
    <p>১৩টি ক্যাটাগরির কোর্স, ২৫০০+ শিক্ষার্থী, ফ্রিল্যান্সিং ও গ্লোবাল মার্কেটে সফলতা</p>
    <button class="btn-primary" style="background: #e67e22; margin-top: 20px;">আইটি কোর্স এক্সপ্লোর করুন</button>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container footer-grid">
    <div><h4>DiniLearn</h4><p>শিক্ষার সমান সুযোগ, সবার জন্য। গ্রাম-শহর নির্বিশেষে চাকরির প্রস্তুতিতে বিপ্লব।</p></div>
    <div><h4>দ্রুত লিংক</h4><a href="#">প্রিমিয়াম কোর্স</a><a href="#">মডেল টেস্ট</a><a href="#">ফ্রি রিসোর্স</a><a href="#">যোগাযোগ</a></div>
    <div><h4>সাফল্য</h4><a href="#">সাক্ষাৎকার</a><a href="#">রেজাল্ট আপডেট</a><a href="#">স্টুডেন্ট স্টোরি</a></div>
    <div><h4>কন্টাক্ট</h4><p> info@biddabari.com</p><p> +৮৮০ ১২৩৪ ৫৬৭৮৯০</p><div>  <br></div></div>
  </div>
  <div class="container copyright">
    <p>© ২০২৫ DiniLearn from DiniLuck</p>
  </div>
</footer>



</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>