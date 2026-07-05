<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>موقعي</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- سيتم تحميلها من header.html -->
  <div id="header"></div>

  <main>
    <h1 id="welcome-text">مرحبًا بك!</h1>
  </main>

  <!-- سيتم تحميلها من footer.html -->
  <div id="footer"></div>

  <script src="main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة الرحلات السياحية | الرئيسية</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            position: relative;
            overflow-x: hidden;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(180deg, #F5E6CA 0%, #D2B48C 100%);
        }
        .image-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .pyramids-day, .pyramids-night {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }
        .active-image {
            opacity: 1;
        }
        .sun {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 70px;
            height: 70px;
            background: #FF8C00;
            border-radius: 50%;
            box-shadow: 0 0 25px rgba(255, 140, 0, 0.7);
            animation: moveSun 8s infinite alternate;
            display: none;
            z-index: 2;
        }
        .moon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 70px;
            height: 70px;
            background: #F0F8FF;
            border-radius: 50%;
            box-shadow: 0 0 25px rgba(240, 248, 255, 0.7);
            animation: moveMoon 8s infinite alternate;
            display: none;
            z-index: 2;
        }
        .active-icon {
            display: block;
        }
        @keyframes moveSun {
            0% { transform: translateY(0); }
            100% { transform: translateY(10px); }
        }
        @keyframes moveMoon {
            0% { transform: translateY(0); }
            100% { transform: translateY(10px); }
        }
        header {
            background: rgba(44, 62, 80, 0.8);
            backdrop-filter: blur(10px);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 3;
        }
        nav {
            background: rgba(52, 73, 94, 0.8);
            backdrop-filter: blur(10px);
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 3;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px 20px; /* مسافة بين العناصر وعناصر الصف */
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px; /* مسافة بين الأيقونة والنص */
            padding: 5px 0; /* حشوة بسيطة للروابط */
        }
        nav a:hover {
            color: #FFD700;
        }
        nav a i {
            font-size: 1.1em;
        }
        .hero {
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 3.5em;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 10px;
        }
        section {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            padding: 40px;
            margin: 20px auto;
            max-width: 1200px;
            position: relative;
            z-index: 3;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: right;
        }
        section h2 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }
        section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #007bff;
            border-radius: 2px;
        }
        .tours, .main-links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px 0;
        }
        .tour-card, .link-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: right;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        .tour-card:hover, .link-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .tour-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .tour-card h3, .link-card h3 {
            padding: 15px;
            margin: 0;
            color: #007bff;
            font-size: 1.5em;
        }
        .tour-card p, .link-card p {
            padding: 0 15px 15px;
            color: #555;
        }
        .link-card .icon {
            font-size: 3em;
            color: #28a745;
            margin: 20px auto 10px;
            display: block;
            text-align: center;
        }
        .link-card a {
            display: block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: auto; /* يدفع الزر إلى الأسفل */
        }
        .link-card a:hover {
            background-color: #0056b3;
        }

        /* Video and Image Upload Section */
        .media-upload-container {
            display: grid;
            grid-template-columns: 1fr; /* عمود واحد افتراضيًا */
            gap: 30px;
            align-items: flex-start;
        }
        @media (min-width: 768px) {
            .media-upload-container {
                grid-template-columns: 1fr 1fr; /* عمودان على الشاشات الكبيرة */
            }
        }
        .media-upload-box {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            text-align: center;
            border: 1px dashed #ccc;
        }
        .media-upload-box h4 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 20px;
        }
        .media-upload-box .upload-button {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }
        .media-upload-box .upload-button:hover {
            background-color: #218838;
        }
        .media-upload-box .preview-area {
            margin-top: 20px;
            border: 1px solid #eee;
            min-height: 100px;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #aaa;
            font-size: 0.9em;
            border-radius: 5px;
            overflow: hidden; /* لإخفاء أي محتوى زائد */
        }
        .media-upload-box .preview-area img,
        .media-upload-box .preview-area video {
            max-width: 100%;
            max-height: 250px; /* لتحديد أقصى ارتفاع للمعاينة */
            display: block;
            object-fit: contain;
        }
        .media-upload-box input[type="file"] {
            display: none; /* إخفاء حقل الإدخال الأصلي */
        }
        .signup-icon {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            padding: 15px;
            transition: background 0.3s ease, transform 0.3s ease;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 4;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .signup-icon:hover {
            background: rgba(255, 255, 255, 0.6);
            transform: scale(1.15);
        }
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            display: none;
            z-index: 2;
        }
        .night .stars {
            display: block;
        }
        .star {
            position: absolute;
            background: white;
            border-radius: 50%;
            animation: twinkle 1.8s infinite alternate;
        }
        @keyframes twinkle {
            0% { opacity: 0.3; }
            100% { opacity: 1; }
        }
        .sand {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: linear-gradient(to right, #EDC9AF, #DAA520);
            animation: sandFlow 12s infinite linear;
            z-index: 2;
        }
        .night .sand {
            background: linear-gradient(to right, #2F4F4F, #4682B4);
        }
        @keyframes sandFlow {
            0% { background-position: 0 0; }
            100% { background-position: 150px 0; }
        }
        footer {
            background: rgba(44, 62, 80, 0.8);
            backdrop-filter: blur(10px);
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            z-index: 3;
        }
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .testimonial-card {
            background: #f0f8ff; /* لون فاتح لبطاقة الشهادة */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            text-align: center;
            font-style: italic;
            color: #444;
        }
        .testimonial-card p {
            margin-bottom: 10px;
        }
        .testimonial-card .author {
            font-weight: bold;
            color: #007bff;
            font-style: normal;
        }
    </style>
</head>
<body class="min-h-screen relative">
    <div class="image-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Egypt.Giza.Sphinx.01.jpg" alt="الأهرامات نهارًا" class="pyramids-day active-image">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Great_Sphinx_of_Giza_and_the_Pyramid_of_Khafre_at_night.jpg" alt="الأهرامات ليلًا" class="pyramids-night">
    </div>
    <div class="sun active-icon"></div>
    <div class="moon"></div>
    <div class="stars">
        <div class="star" style="width: 2px; height: 2px; top: 10%; left: 20%;"></div>
        <div class="star" style="width: 3px; height: 3px; top: 15%; left: 50%; animation-delay: 0.5s;"></div>
        <div class="star" style="width: 2px; height: 2px; top: 30%; left: 70%; animation-delay: 1s;"></div>
        <div class="star" style="width: 4px; height: 4px; top: 50%; left: 30%; animation-delay: 1.5s;"></div>
        <div class="star" style="width: 2px; height: 2px; top: 70%; left: 80%; animation-delay: 0.8s;"></div>
    </div>
    <div class="sand"></div>

    <header>
        <h1>شركة الرحلات السياحية</h1>
        <p>اكتشف مصر معنا!</p>
    </header>

    <nav>
        <a href="index.html"><i class="fa-solid fa-house"></i> الرئيسية</a>
        <a href="tours.html"><i class="fa-solid fa-plane-departure"></i> الرحلات</a>
        <a href="destinations.html"><i class="fa-solid fa-map-marked-alt"></i> الوجهات</a>
        <a href="booking.html"><i class="fa-solid fa-calendar-check"></i> الحجوزات</a>
        <a href="gallery.html"><i class="fa-solid fa-images"></i> معرض الصور</a>
        <a href="blog.html"><i class="fa-solid fa-blog"></i> المدونة</a>
        <a href="offers.html"><i class="fa-solid fa-tag"></i> العروض</a>
        <a href="testimonials.html"><i class="fa-solid fa-star-half-stroke"></i> آراء العملاء</a>
        <a href="pricing.html"><i class="fa-solid fa-money-bill-wave"></i> الأسعار</a>
        <a href="about.html"><i class="fa-solid fa-info-circle"></i> عنا</a>
        <a href="contact.html"><i class="fa-solid fa-envelope"></i> اتصل بنا</a>
        <a href="faq.html"><i class="fa-solid fa-question-circle"></i> الأسئلة الشائعة</a>
        <a href="news.html"><i class="fa-solid fa-newspaper"></i> الأخبار</a>
        <a href="csr.html"><i class="fa-solid fa-handshake-angle"></i> المسؤولية الاجتماعية</a>
        <a href="help.html"><i class="fa-solid fa-circle-question"></i> المساعدة</a>
        <a href="partners.html"><i class="fa-solid fa-handshake"></i> الشركاء</a>
        <a href="login.html"><i class="fa-solid fa-right-to-bracket"></i> تسجيل الدخول</a>
        <a href="register.html"><i class="fa-solid fa-user-plus"></i> إنشاء حساب</a>
        <a href="dashboard.html"><i class="fa-solid fa-tachometer-alt"></i> لوحة التحكم</a>
        <a href="privacy-policy.html"><i class="fa-solid fa-shield-alt"></i> سياسة الخصوصية</a>
        <a href="terms.html"><i class="fa-solid fa-file-contract"></i> شروط الخدمة</a>
        <a href="sitemap.html"><i class="fa-solid fa-sitemap"></i> خريطة الموقع</a>
        </nav>

    <div class="hero">
        <h1>رحلات لا تُنسى إلى قلب مصر</h1>
    </div>

    <section>
        <h2>من نحن؟</h2>
        <p>نحن شركة رائدة في تنظيم الرحلات السياحية إلى مصر، ملتزمون بتقديم تجارب فريدة لا تُنسى. من أهرامات الجيزة الشاهقة إلى شواطئ البحر الأحمر الساحرة، نضمن لك رحلة مليئة بالاستكشاف والراحة. فريقنا من الخبراء مستعد لتصميم رحلتك المثالية، مع مراعاة جميع تفضيلاتك لضمان تجربة لا مثيل لها.</p>
        <div class="text-center mt-8">
            <a href="about.html" class="inline-block bg-blue-600 text-white py-3 px-8 rounded-full hover:bg-blue-700 transition duration-300">اعرف المزيد عنا</a>
        </div>
    </section>

    <section>
        <h2>رحلاتنا المميزة</h2>
        <div class="tours">
            <div class="tour-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Egyptian_Pyramids_with_Camel.jpg" alt="رحلة إلى الأهرامات">
                <h3>رحلة إلى الأهرامات وأبو الهول</h3>
                <p>استمتع بجولة تأملية في أهرامات الجيزة وأبو الهول لمدة يوم كامل مع مرشد سياحي.</p>
                <a href="tours.html#pyramids">اكتشف الرحلة</a>
            </div>
            <div class="tour-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Aswan_from_the_Nile.jpg" alt="رحلة نيلية إلى أسوان والأقصر">
                <h3>رحلة نيلية إلى أسوان والأقصر</h3>
                <p>استكشف كنوز الحضارة المصرية على ضفاف النيل في رحلة بحرية فاخرة.</p>
                <a href="tours.html#nile">اكتشف الرحلة</a>
            </div>
            <div class="tour-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Ras_Mohammed_National_Park%2C_Egypt.jpg" alt="غطس في شرم الشيخ">
                <h3>استكشاف البحر الأحمر بشرم الشيخ</h3>
                <p>استمتع بالغوص والغطس في المياه الفيروزية الساحرة لشرم الشيخ.</p>
                <a href="tours.html#sharm">اكتشف الرحلة</a>
            </div>
        </div>
    </section>

    <section>
        <h2>أقسام الموقع</h2>
        <div class="main-links-grid">
            <div class="link-card">
                <i class="fa-solid fa-map-signs icon"></i>
                <h3>وجهاتنا</h3>
                <p>اكتشف المدن والمعالم السياحية التي نغطيها في رحلاتنا.</p>
                <a href="destinations.html">استكشف الوجهات</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-book icon"></i>
                <h3>المدونة</h3>
                <p>اقرأ مقالاتنا الشيقة عن تاريخ وثقافة مصر ونصائح السفر.</p>
                <a href="blog.html">اقرأ المدونة</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-percent icon"></i>
                <h3>أحدث العروض</h3>
                <p>لا تفوت أفضل العروض والخصومات على رحلاتنا السياحية.</p>
                <a href="offers.html">شاهد العروض</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-headset icon"></i>
                <h3>اتصل بنا</h3>
                <p>تواصل معنا لأي استفسارات أو للمساعدة في حجز رحلتك.</p>
                <a href="contact.html">تواصل الآن</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-chart-line icon"></i>
                <h3>لوحة التحكم</h3>
                <p>إدارة حجوزاتك، معلومات ملفك الشخصي، والمزيد (للمستخدمين المسجلين).</p>
                <a href="dashboard.html">اذهب إلى لوحة التحكم</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-file-invoice-dollar icon"></i>
                <h3>الأسعار</h3>
                <p>استعرض خيارات الأسعار المختلفة لرحلاتنا وباقاتنا المتنوعة.</p>
                <a href="pricing.html">اطّلع على الأسعار</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-users icon"></i>
                <h3>آراء العملاء</h3>
                <p>شاهد ما يقوله عملاؤنا السعداء عن تجاربهم معنا.</p>
                <a href="testimonials.html">شاهد الآراء</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-file-shield icon"></i>
                <h3>سياسة الخصوصية</h3>
                <p>تعرف على كيفية حماية بياناتك وخصوصيتك.</p>
                <a href="privacy-policy.html">اقرأ السياسة</a>
            </div>
            <div class="link-card">
                <i class="fa-solid fa-handshake icon"></i>
                <h3>شركاؤنا</h3>
                <p>اكتشف الشركات والمؤسسات التي نتعاون معها لتقديم أفضل الخدمات.</p>
                <a href="partners.html">تعرف على شركائنا</a>
            </div>
        </div>
    </section>

    <section>
        <h2>شاركنا لحظاتك</h2>
        <p class="text-center text-lg mb-8">نحن نحب أن نرى ذكرياتكم! قم بتحميل مقاطع الفيديو والصور من رحلاتك.</p>
        <div class="media-upload-container">
            <div class="media-upload-box">
                <h4>تحميل صور الرحلات</h4>
                <p class="text-gray-600">شارك أجمل صورك من مغامراتك معنا.</p>
                <input type="file" id="imageUpload" accept="image/*" onchange="previewFile('imageUpload', 'imagePreviewArea')">
                <label for="imageUpload" class="upload-button">
                    <i class="fa-solid fa-cloud-arrow-up ml-2"></i> اختر صورًا
                </label>
                <div class="preview-area" id="imagePreviewArea">
                    <p>سيظهر معاينة الصورة هنا.</p>
                </div>
            </div>
            <div class="media-upload-box">
                <h4>تحميل مقاطع الفيديو</h4>
                <p class="text-gray-600">شارك قصصك المصورة من رحلاتك المدهشة.</p>
                <input type="file" id="videoUpload" accept="video/*" onchange="previewFile('videoUpload', 'videoPreviewArea')">
                <label for="videoUpload" class="upload-button">
                    <i class="fa-solid fa-video ml-2"></i> اختر فيديو
                </label>
                <div class="preview-area" id="videoPreviewArea">
                    <p>سيظهر معاينة الفيديو هنا.</p>
                </div>
            </div>
        </div>
        <p class="text-center text-sm text-gray-500 mt-6">ملاحظة: هذه الواجهة لغرض العرض التوضيحي. وظيفة الرفع الفعلية تتطلب برمجة من جانب الخادم.</p>
    </section>

    <section>
        <h2>ماذا يقول عملاؤنا؟</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"كانت رحلة العمر! التنظيم مثالي والمرشدون رائعون. لا أستطيع الانتظار لأحجز رحلتي القادمة معهم."</p>
                <span class="author">- سارة محمد</span>
            </div>
            <div class="testimonial-card">
                <p>"أفضل شركة سياحة تعاملت معها على الإطلاق. اهتمام بالتفاصيل وتجارب فريدة. أوصي بشدة!"</p>
                <span class="author">- أحمد علي</span>
            </div>
            <div class="testimonial-card">
                <p>"المعرض كان مذهلاً. استمتعت بكل لحظة، والفريق كان متعاونًا للغاية."</p>
                <span class="author">- فاطمة حسين</span>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="testimonials.html" class="inline-block bg-blue-600 text-white py-3 px-8 rounded-full hover:bg-blue-700 transition duration-300">اقرأ المزيد من الآراء</a>
        </div>
    </section>

    <a href="register.html" class="signup-icon" title="إنشاء حساب جديد">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
        </svg>
    </a>

    <footer>
        <p>© 2025 شركة الرحلات السياحية. جميع الحقوق محفوظة.</p>
    </footer>

    <script>
        const body = document.body;
        const sun = document.querySelector('.sun');
        const moon = document.querySelector('.moon');
        const pyramidsDay = document.querySelector('.pyramids-day');
        const pyramidsNight = document.querySelector('.pyramids-night');

        let isDay = true; // يتم تعيين الحالة الأولية هنا بشكل صحيح

        function setInitialState() {
            body.classList.remove('night');
            sun.classList.add('active-icon');
            moon.classList.remove('active-icon');
            pyramidsDay.classList.add('active-image');
            pyramidsNight.classList.remove('active-image');
            isDay = true;
        }

        function toggleDayNight() {
            if (isDay) {
                body.classList.add('night');
                sun.classList.remove('active-icon');
                moon.classList.add('active-icon');
                pyramidsDay.classList.remove('active-image');
                pyramidsNight.classList.add('active-image');
            } else {
                body.classList.remove('night');
                sun.classList.add('active-icon');
                moon.classList.remove('active-icon');
                pyramidsNight.classList.remove('active-image');
                pyramidsDay.classList.add('active-image');
            }
            isDay = !isDay;
        }

        // عند تحميل الصفحة بالكامل، اضبط الحالة الأولية ثم ابدأ التبديل
        document.addEventListener('DOMContentLoaded', () => {
            setInitialState(); // اضبط الحالة الأولية (نهارًا)
            setInterval(toggleDayNight, 8000); // ابدأ التبديل كل 8 ثوانٍ
        });

        // JavaScript لوظيفة معاينة الملفات (رفع وهمي)
        function previewFile(inputId, previewAreaId) {
            const fileInput = document.getElementById(inputId);
            const previewArea = document.getElementById(previewAreaId);
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewArea.innerHTML = ''; // مسح أي معاينات سابقة
                    let mediaElement;
                    if (file.type.startsWith('image/')) {
                        mediaElement = document.createElement('img');
                    } else if (file.type.startsWith('video/')) {
                        mediaElement = document.createElement('video');
                        mediaElement.controls = true; // إضافة عناصر التحكم للفيديو
                    } else {
                        previewArea.innerHTML = '<p>نوع الملف غير مدعوم للمعاينه.</p>';
                        return;
                    }
                    mediaElement.src = e.target.result;
                    previewArea.appendChild(mediaElement);
                };
                reader.readAsDataURL(file);
            } else {
                previewArea.innerHTML = '<p>سيظهر معاينة ' + (inputId === 'imageUpload' ? 'الصورة' : 'الفيديو') + ' هنا.</p>';
            }
        }
    </script>
</body>
</html>