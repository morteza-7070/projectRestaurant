<head>

    <link rel="stylesheet" href="../../css/Cririeshing/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite([
                 'resources/css/app.css', 'resources/scss/Article/article.scss',
                 'resources/js/app.js',
             ])

</head>



<body id="Article">
<div class="container article1">
    <a href="{{route('home')}}"> <button class="btn btn-success"> صفحه اصلی</button></a>

    <div class="row">
        <h1>درباره ما</h1>
        <div class="col-sm-4 col-lg-6">
            <img src="../../images/heeva.jpg" alt="" class="imageHeeva img-fluid">
            <img src="../../images/heeva2.jfif" alt="" class="imageHeeva img-fluid">


        </div>
        <div class="col-sm-4 col-lg-6">
            <section class="body-article">
                <div class="article">

                    <p class="body-article">
                        فست فود هیوا با ارائه غذاهای باکیفیت، متنوع و با قیمت مناسب، توانسته است به یکی از محبوب‌ترین برندهای فست فود در ایران تبدیل شود. اگر به دنبال یک فست فود با محیطی دلنشین و غذایی خوشمزه هستید، هیوا می‌تواند گزینه مناسبی برای شما باشد.
                    </p>
                </div>
                <h3>دلایل محبوبیت فست فود هیوا</h3>
                <ul class="article-list">
                    <li class="list-item">
                        <h5>تنوع منو:</h5>
                        <p class="paragraph-article">یکی از دلایل اصلی محبوبیت هیوا، تنوع بالای منوی آن است. از برگر و ساندویچ گرفته تا پیتزا، سالاد و انواع نوشیدنی، در منو هیوا برای هر سلیقه‌ای گزینه وجود دارد</p>
                    </li>
                    <li class="list-item">
                        <h5>کیفیت مواد اولیه:</h5>
                        <p class="paragraph-article">هیوا از مواد اولیه تازه و باکیفیت برای تهیه غذاهای خود استفاده می‌کند که این امر باعث شده است طعم و کیفیت غذاهای این برند نسبت به رقبا متمایز باشد.</p>
                    </li>
                    <li class="list-item"><h5>قیمت مناسب:</h5>
                        <p class="paragraph-article">قیمت‌های مناسب و مقرون به صرفه، یکی دیگر از عوامل جذابیت هیوا برای مشتریان است.
                            سرویس‌دهی سریع: سرعت بالای سرو غذا، از دیگر مزایای هیوا است که باعث شده این برند برای افرادی که زمان کمی برای صرف غذا دارند، گزینه مناسبی باشد.</p>
                    </li>
                    <li class="list-item">
                        <h5> فضای دلنشین:</h5>
                        <p class="paragraph-article">بسیاری از شعب هیوا دارای فضای دلنشین و مناسبی برای صرف غذا هستند که این امر بر تجربه مشتریان تأثیر مثبت می‌گذارد.</p>

                    </li>

                </ul>
                <h3>چشم انداز فست فود هیوا</h3>
                <p class="viewHeeva">هیوا با هدف گسترش شعب و ارائه غذاهای سالم‌تر، در تلاش است که تجربه‌ای متمایز از غذاخوری را برای مشتریان خود فراهم کند و به یکی از برندهای پیشرو در صنعت غذایی کشور تبدیل شود.</p>

            </section>
        </div>
    </div>
    <div class="map_container ">
        <div id="googleMap"></div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
</body>
