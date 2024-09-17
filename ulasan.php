<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Halaman Ulasan" />
    <meta property="og:description" content="Silakan tinggalkan ulasan atau komentar Anda di bawah ini." />
    <title>Ulasan dan Komentar</title>

    <!-- Menyertakan SDK JavaScript Facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" 
        src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v17.0" nonce="abc123"></script>
</head>
<body>
    <h1>Ulasan dan Komentar</h1>
    <p>Silakan tinggalkan ulasan Anda di kolom komentar di bawah ini.</p>

    <!-- Menampilkan plugin komentar Facebook -->
    <div class="fb-comments" 
         data-href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" 
         data-width="100%" 
         data-numposts="5">
    </div>

</body>
</html>
