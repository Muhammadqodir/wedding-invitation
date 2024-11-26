<?php

$guests = json_decode(file_get_contents("guests_hash.json"), true);

$guest = "Xurmatli mehmonimiz!";

if (isset($_GET["guest"])) {
    if (isset($guests[$_GET["guest"]])) {
        $guest = "Xurmatli " . $guests[$_GET["guest"]] . "!";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="theme-color" content="#F5F1F1">
    <meta name="msapplication-TileColor" content="#F5F1F1">

    <!-- Social Images -->
    <meta content="res/illustration_7.jpg" itemprop="image">
    <meta content="res/illustration_7.jpg" name="twitter:image">
    <meta content="res/illustration_7.jpg" property="og:image">

    <!-- Titles -->
    <meta content="Muhammadqodir · Bibihadicha" itemprop="name">
    <meta content="Muhammadqodir · Bibihadicha" name="twitter:title">
    <meta content="Muhammadqodir · Bibihadicha" property="og:title">
    <meta content="Muhammadqodir · Bibihadicha" property="og:site_name">

    <!-- Descriptions -->
    <meta content="Nonushta taklifnoma">
    <meta content="Nonushta taklifnoma" itemprop="description">
    <meta content="Nonushta taklifnoma" name="twitter:description">
    <meta content="Nonushta taklifnoma" property="og:description">


    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" href="res/icon.jpg" sizes="180x180">
    <link rel="icon" href="res/icon.jpg" sizes="32x32" type="image/png">
    <link rel="icon" href="res/icon.jpg" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="res/icon.jpg" color="#23372d">
    <link rel="shortcut icon" href="res/icon.jpg">

    <!-- Page Title -->
    <title>Muhammadqodir · Bibihadicha</title>

    <!-- Styles -->
    <link href="./res/main.min.css" rel="stylesheet">

</head>

<body>

    <section class="opening">
        <h1 class="opening-title">
            <span>MUHAMMADQODIR</span><br>
            <span>·</span><br>
            <span>BIBIHADICHA</span>
        </h1>
    </section>

    <!-- <div class="text">
        <p class="text-big">Kun qoldi</p>
    </div> -->

    <figure class="date" style="text-align: center; margin-top: 0px !important; margin-bottom: 0px !important;">

        <p class="optional" style="font-weight: bold; font-family: Campton; font-size: 25px; max-width: 500px; margin: auto;">
            <?php echo $guest ?>
        </p>
        <p class="optional" style="font-family: Campton; font-size: 25px; max-width: 500px; margin: auto;">
            Sizni "NIGOX" toyimiz munosabati bilan yoziladigan "AMRU-MA'RUF" dasturxonimizga
            taklif etamiz.
        </p><br>
        <small style="font-family: Campton;">
            <span id="days"></span> kun qoldi
        </small>
        <div style="font-family: Campton; font-size: 2rem;">
            04 · 08 · 2024
        </div>
        <small style="font-family: Campton;">
            Yakshanba, soat: 06:00
        </small>

    </figure>

    <figure class="illustration-container" style="margin-top: 40px !important;">
        <img class="illustration" src="res/illustration_3.jpg">
    </figure>

    <div class="text">
        <p class="optional" style="font-family: Campton; margin-bottom: 0px;">
            Manzil:
        </p>
        <p class="optional" style="font-family: Campton;">
            "Jasmin" toyxonasi
        </p>
        <div style="position:relative;overflow:hidden;"><a href="https://yandex.com/maps/org/22890665030/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Jasmin</a><a href="https://yandex.com/maps/10336/fergana/category/banquet_hall/184108315/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Банкетный зал в Фергане</a><iframe src="https://yandex.com/map-widget/v1/?ll=71.759650%2C40.395597&mode=search&poi%5Bpoint%5D=71.759852%2C40.395604&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D22890665030&sctx=ZAAAAAgCEAAaKAoSCbyTT49tulBAEcdmR6rv0kNAEhIJN8KiIk4niT8R5bM8D%2B7Oej8iBgABAgMEBSgKOABA4FBIAWIlcmVsZXZfaXJyZWxfZmlsdGVyPWlycmVsX2RjNTE0NTkxX2V4cGI1cmVhcnI9c2NoZW1lX0xvY2FsL0dlby9Qb3N0ZmlsdGVyL0lycmVsVGhyZXNob2xkPTAuMjFiO3JlYXJyPXNjaGVtZV9Mb2NhbC9HZW8vUG9zdGZpbHRlci9JcnJlbFRocmVzaG9sZEZvckFkcz0wLjEwYj1yZWFycj1zY2hlbWVfTG9jYWwvR2VvL1Bvc3RmaWx0ZXIvRGVjaWRlVGhyZXNob2xkQnlSdWJyPWZhbHNlagJydZ0BzcxMPaABAKgBAL0BYF%2BDSYICDkphc21pbiBmZXJnYW5higIAkgIFMTAzMzaaAgxkZXNrdG9wLW1hcHM%3D&sll=71.759650%2C40.395597&sspn=0.005932%2C0.003126&text=Jasmin%20fergana&utm_source=share&z=17.79" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
    </div>

    <figure class="illustration-container illustration-container-small illustration-container-final">
        <img class="illustration" src="./res/illustration_7.jpg">
    </figure>
    <script src="countdown.js"></script>

</body>

</html>