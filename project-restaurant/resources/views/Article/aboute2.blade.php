<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Article/article.scss',
                 'resources/js/app.js',
             ])

</head>



<div class="container">
    @yield('content')
    <section class="article">
        <h2>در باره ما</h2>
        <p class="body-article">
            فست فود هیوا با ارائه غذاهای باکیفیت، متنوع و با قیمت مناسب، توانسته است به یکی از محبوب‌ترین برندهای فست فود در ایران تبدیل شود. اگر به دنبال یک فست فود با محیطی دلنشین و غذایی خوشمزه هستید، هیوا می‌تواند گزینه مناسبی برای شما باشد.
        </p>
    </section>



    <h3>دلایل محبوبیت فست فود هیوا</h3>
    <ul class="article-list">
        <li class="list-item">تنوع منو:
            <p class="paragraph-article">یکی از دلایل اصلی محبوبیت هیوا، تنوع بالای منوی آن است. از برگر و ساندویچ گرفته تا پیتزا، سالاد و انواع نوشیدنی، در منو هیوا برای هر سلیقه‌ای گزینه وجود دارد</p>
        </li>
        <li class="list-item"> کیفیت مواد اولیه:
            <p class="paragraph-article">هیوا از مواد اولیه تازه و باکیفیت برای تهیه غذاهای خود استفاده می‌کند که این امر باعث شده است طعم و کیفیت غذاهای این برند نسبت به رقبا متمایز باشد.</p>
        </li>
        <li class="list-item">قیمت مناسب:
            <p class="paragraph-article">قیمت‌های مناسب و مقرون به صرفه، یکی دیگر از عوامل جذابیت هیوا برای مشتریان است.
                سرویس‌دهی سریع: سرعت بالای سرو غذا، از دیگر مزایای هیوا است که باعث شده این برند برای افرادی که زمان کمی برای صرف غذا دارند، گزینه مناسبی باشد.</p>
        </li>
        <li class="list-item"> فضای دلنشین:
            <p class="paragraph-article"></p>
        </li>
        <li class="list-item">تنوع منو:
            <p class="paragraph-article">بسیاری از شعب هیوا دارای فضای دلنشین و مناسبی برای صرف غذا هستند که این امر بر تجربه مشتریان تأثیر مثبت می‌گذارد.</p>
        </li>
    </ul>

</div>
