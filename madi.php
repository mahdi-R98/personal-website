<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>سایت شخصی مهدی</title>
    <style>
        body {
            font-family: 'Vazir', Tahoma, sans-serif;
            margin: 0; padding: 0;
            background: #f0f0f0;
            color: #222;
            line-height: 1.6;
        }
        header {
            background: #005b9a;
            color: white;
            text-align: center;
            padding: 30px 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        header h1 {
            margin: 0;
            font-size: 3rem;
        }
        header p {
            margin: 5px 0 0;
            font-size: 1.3rem;
            font-weight: 300;
        }
        section {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 25px 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        h2 {
            border-bottom: 3px solid #005b9a;
            padding-bottom: 7px;
            margin-bottom: 15px;
            font-weight: 600;
            color: #005b9a;
        }
        /* درباره من */
        #about p {
            font-size: 1.1rem;
            color: #444;
        }
        /* توانایی‌ها */
        .skills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 18px;
        }
        .skill {
            width: 140px;
            text-align: center;
            border: 2px solid #005b9a;
            border-radius: 12px;
            padding: 15px 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.07);
            background: #e6f0fc;
            cursor: default;
            transition: transform 0.3s ease;
        }
        .skill:hover {
            transform: translateY(-5px);
            box-shadow: 0 7px 15px rgba(0,0,0,0.15);
        }
        .skill img {
            width: 64px;
            height: 64px;
            margin-bottom: 10px;
            object-fit: contain;
            border-radius: 30px;
        }
        .skill-name {
            font-weight: 700;
            font-size: 1.1rem;
            color: #003f6b;
        }
        /* دموها */
        .demos {
            margin-top: 10px;
        }
        .demo {
            border: 1.5px solid #005b9a;
            border-radius: 10px;
            margin-bottom: 18px;
            cursor: pointer;
            box-shadow: 0 0 8px rgba(0,91,154,0.15);
            background: #f9fcff;
            transition: box-shadow 0.3s ease;
        }
        .demo:hover {
            box-shadow: 0 0 18px rgba(0,91,154,0.4);
        }
        .demo-header {
            font-size: 1.3rem;
            font-weight: 600;
            padding: 14px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #00497a;
            user-select: none;
        }
        .toggle-icon {
            font-size: 1.7rem;
            font-weight: 700;
            color: #00497a;
            transition: transform 0.3s ease;
        }
        .toggle-icon.open {
            transform: rotate(45deg);
        }
        .demo-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, padding 0.3s ease;
            padding: 0 18px;
        }
        .demo-content.open {
            padding: 15px 18px 20px;
            max-height: 400px;
        }
        .demo-content img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 12px;
            user-select: none;
        }
        /* فرم تماس */
        #contactForm label {
            display: block;
            margin: 15px 0 6px;
            font-weight: 600;
            color: #00497a;
        }
        #contactForm input, #contactForm textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #005b9a;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        #contactForm input:focus, #contactForm textarea:focus {
            outline: none;
            border-color: #003f6b;
            background: #f0f6ff;
        }
        #contactForm button {
            margin-top: 15px;
            background: #005b9a;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            padding: 12px 25px;
            border-radius: 12px;
            cursor: pointer;
            border: none;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        #contactForm button:hover {
            background: #003f6b;
        }
        .form-message {
            margin-top: 10px;
            font-weight: 600;
            padding: 9px 12px;
            border-radius: 8px;
            display: none;
        }
        .form-message.error {
            background: #fddede;
            color: #a70000;
            border: 1.5px solid #a70000;
        }
        .form-message.success {
            background: #d2f7d2;
            color: #0b5a0b;
            border: 1.5px solid #0b5a0b;
        }
        /* بخش مشاهده پیام‌ها */
        #passwordSection {
            margin-top: 35px;
            border-top: 1.5px solid #005b9a;
            padding-top: 25px;
        }
        #passwordSection label {
            font-weight: 600;
            color: #00497a;
            display: block;
            margin-bottom: 7px;
        }
        #passwordSection input {
            width: 100%;
            padding: 9px 12px;
            border-radius: 8px;
            border: 1.5px solid #005b9a;
            font-size: 1rem;
            box-sizing: border-box;
            margin-bottom: 8px;
            font-family: inherit;
        }
        #passwordSection button {
            background: #005b9a;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            padding: 11px 22px;
            border-radius: 10px;
            cursor: pointer;
            border: none;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        #passwordSection button:hover {
            background: #003f6b;
        }
        #passwordMessage {
            margin-top: 10px;
            font-weight: 600;
            color: #a70000;
            display: none;
        }
        #messagesList {
            margin-top: 25px;
            display: none;
        }
        #messagesList h3 {
            color: #00497a;
            border-bottom: 2px solid #00497a;
            padding-bottom: 6px;
            margin-bottom: 15px;
        }
        .message-item {
            background: #e6f0fc;
            border-radius: 10px;
            padding: 15px 18px;
            margin-bottom: 14px;
            box-shadow: 0 2px 5px rgba(0,91,154,0.1);
            color: #003f6b;
            user-select: text;
            white-space: pre-wrap;
        }

        /* ریسپانسیو */
        @media (max-width: 640px) {
            .skills {
                justify-content: center;
            }
            section {
                margin: 15px 12px;
                padding: 20px 18px;
            }
            header h1 {
                font-size: 2.4rem;
            }
            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>مهدی رسولی</h1>
    <p>برنامه نویس وب | توسعه‌دهنده فول‌استک</p>
</header>

<section id="about">
    <h2>درباره من</h2>
    <p>
        سلام! من مهدی هستم، برنامه نویس وب با چندین سال تجربه در طراحی و توسعه وب‌سایت‌ها و اپلیکیشن‌های کاربردی. عاشق یادگیری تکنولوژی‌های جدید و ساخت پروژه‌های خلاقانه هستم.
    </p>
</section>

<section id="skills">
    <h2>توانایی‌ها</h2>
    <div class="skills">
        <div class="skill">
            <img src="images.png" alt="jQuery" />
            <div class="skill-name">jQuery</div>
        </div>
        <div class="skill">
            <img src="php-logo-png_seeklogo-265704.png" alt="PHP" />
            <div class="skill-name">PHP</div>
        </div>
        <div class="skill">
            <img src="mysql-logo-png-image-11660514413jvwkcjh4av.png" alt="MySQL" />
            <div class="skill-name">MySQL</div>
        </div>
        <div class="skill">
            <img src="https://cdn-icons-png.flaticon.com/512/919/919852.png" alt="Python" />
            <div class="skill-name">Python</div>
        </div>
        <div class="skill">
            <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" alt="CSS3" />
            <div class="skill-name">CSS3</div>
        </div>
        <div class="skill">
            <img src="https://cdn-icons-png.flaticon.com/512/732/732212.png" alt="HTML5" />
            <div class="skill-name">HTML5</div>
        </div>
    </div>
</section>

<section id="demos">
    <h2>دموها</h2>

    <div class="demo" tabindex="0" role="button" aria-expanded="false" aria-controls="demo1-content" onclick="toggleDemo('demo1')" onkeypress="if(event.key==='Enter') toggleDemo('demo1')">
        <div class="demo-header">
            <span>دمو فروشگاه آنلاین</span>
            <span class="toggle-icon" id="demo1-icon">+</span>
        </div>
        <div class="demo-content" id="demo1-content" aria-hidden="true">
            <img src="https://picsum.photos/id/1015/900/280" alt="دمو فروشگاه آنلاین" />
            <p>یک فروشگاه آنلاین کامل با امکانات سبد خرید، پرداخت و مدیریت سفارشات.</p>
        </div>
    </div>

    <div class="demo" tabindex="0" role="button" aria-expanded="false" aria-controls="demo2-content" onclick="toggleDemo('demo2')" onkeypress="if(event.key==='Enter') toggleDemo('demo2')">
        <div class="demo-header">
            <span>دمو وبلاگ شخصی</span>
            <span class="toggle-icon" id="demo2-icon">+</span>
        </div>
        <div class="demo-content" id="demo2-content" aria-hidden="true">
            <img src="https://picsum.photos/id/1016/900/280" alt="دمو وبلاگ شخصی" />
            <p>وبلاگی مدرن با بخش نوشته‌ها، دسته‌بندی و جستجوی پیشرفته.</p>
        </div>
    </div>

    <div class="demo" tabindex="0" role="button" aria-expanded="false" aria-controls="demo3-content" onclick="toggleDemo('demo3')" onkeypress="if(event.key==='Enter') toggleDemo('demo3')">
        <div class="demo-header">
            <span>دمو رزومه دیجیتال</span>
            <span class="toggle-icon" id="demo3-icon">+</span>
        </div>
        <div class="demo-content" id="demo3-content" aria-hidden="true">
            <img src="https://picsum.photos/id/1019/900/280" alt="دمو رزومه دیجیتال" />
            <p>صفحه رزومه دیجیتال با امکان دانلود و چاپ، همراه با بخش مهارت‌ها و تجربه‌ها.</p>
        </div>
    </div>

</section>

<section id="contact">
    <h2>تماس با من</h2>
    <form id="contactForm" novalidate>
        <label for="name">نام کامل:</label>
        <input type="text" id="name" name="name" required minlength="3" placeholder="مثلا: مهدی محمدی" />

        <label for="email">ایمیل:</label>
        <input type="email" id="email" name="email" required placeholder="example@example.com" />

        <label for="message">پیام شما:</label>
        <textarea id="message" name="message" rows="5" required minlength="10" placeholder="پیام خود را وارد کنید"></textarea>

        <div id="formMessage" class="form-message"></div>

        <button type="submit">ارسال پیام</button>
    </form>

    <div id="passwordSection">
        <label for="passwordInput">رمز عبور برای مشاهده پیام‌ها:</label>
        <input type="password" id="passwordInput" placeholder="رمز عبور را وارد کنید" />
        <button id="checkPasswordBtn">ورود</button>
        <div id="passwordMessage" class="form-message error"></div>
    </div>

    <div id="messagesList" aria-live="polite" aria-atomic="true">
        <h3>پیام‌های ارسال شده:</h3>
        <div id="messagesContainer"></div>
    </div>
</section>

<footer>
    © ۱۴۰۴ مهدی | تمامی حقوق محفوظ است
</footer>

<script>
    // باز و بسته کردن دموها
    function toggleDemo(id) {
        const content = document.getElementById(id + '-content');
        const icon = document.getElementById(id + '-icon');
        const isOpen = content.classList.toggle('open');
        content.setAttribute('aria-hidden', !isOpen);
        icon.textContent = isOpen ? '×' : '+';
        icon.classList.toggle('open', isOpen);
    }

    let messages = [];

    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const name = this.name.value.trim();
        const email = this.email.value.trim();
        const message = this.message.value.trim();
        const formMessage = document.getElementById('formMessage');
        formMessage.style.display = 'none';

        if(name.length < 3) {
            showMessage('نام باید حداقل ۳ کاراکتر باشد.', false);
            return;
        }
        if(!validateEmail(email)) {
            showMessage('ایمیل معتبر نیست.', false);
            return;
        }
        if(message.length < 10) {
            showMessage('پیام باید حداقل ۱۰ کاراکتر باشد.', false);
            return;
        }

        // ذخیره پیام
        messages.push({name, email, message, time: new Date().toLocaleString()});
        showMessage('پیام با موفقیت ارسال شد.', true);
        this.reset();
    });

    function showMessage(text, success) {
        const formMessage = document.getElementById('formMessage');
        formMessage.textContent = text;
        formMessage.className = success ? 'form-message success' : 'form-message error';
        formMessage.style.display = 'block';
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // مدیریت نمایش پیام‌ها با رمز عبور
    const correctPassword = 'M89P90'; // رمز عبور را اینجا تغییر دهید
    const passwordInput = document.getElementById('passwordInput');
    const checkPasswordBtn = document.getElementById('checkPasswordBtn');
    const passwordMessage = document.getElementById('passwordMessage');
    const messagesList = document.getElementById('messagesList');
    const messagesContainer = document.getElementById('messagesContainer');

    checkPasswordBtn.addEventListener('click', function() {
        const entered = passwordInput.value.trim();
        if(entered === correctPassword) {
            passwordMessage.style.display = 'none';
            messagesList.style.display = 'block';
            renderMessages();
        } else {
            passwordMessage.textContent = 'رمز عبور اشتباه است.';
            passwordMessage.style.display = 'block';
            messagesList.style.display = 'none';
        }
    });

    function renderMessages() {
        if(messages.length === 0) {
            messagesContainer.innerHTML = '<p>هیچ پیامی ارسال نشده است.</p>';
            return;
        }
        messagesContainer.innerHTML = '';
        messages.forEach(msg => {
            const div = document.createElement('div');
            div.className = 'message-item';
            div.textContent = `نام: ${msg.name}\nایمیل: ${msg.email}\nزمان: ${msg.time}\n\nپیام:\n${msg.message}`;
            messagesContainer.appendChild(div);
        });
    }
</script>

</body>
</html>
