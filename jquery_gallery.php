<html>
<head>
    <title>Animasi sangat sederhana</title>
    <style type='text/css'>
    #slideshow img
    {
        position: absolute;
        left: 0;
        top: 0;
        width: 150px;
        height: 150px;
    }
    </style>
 
    <!--jquery, bisa didownload di jquery.com
    // atau ambil dari google CDN (seperti dibawah)-->
    <script type='text/javascript' src='jquery/jquery.js'>
    </script>
 
    <!--script animasi-->
    <script>
 
    // Fungsi yang menjadi inti dari script animasi ini
    function simpleSlideshow(slideContainer, duration)
    {
        // gambar/foto yang akan dianimasikan
        // adalah child (anak) pertama dari container yang digunakan
        var currentSlide = $('img:nth-child(1)', slideContainer);
 
        // slide tersebut akan dimodifikasi sedemikian rupa
        $(currentSlide)
        .css({
            opacity: 0 // buat opacity-nya menjadi 0, sehingga tidak terlihat (transparan)
        })
        // appendTo akan membuat anak pertama menjadi anak terakhir,
        // sehingga akan berada dibagian paling depan.
        // namun meskipun berada dipaling depan,
        // tidak akan terlihat karena sudah transparan (step sebelumnya)
        .appendTo(slideContainer)
 
        // animasikan tingkat opacity menjadi 1 (FULL),
        // sehingga pelan-pelan akan terlihat
        .animate({
            opacity: 1
        }, 'normal', function(){
            setTimeout(function(){
                // fungsi akan dijalankan kembali
                // setelah sekian detik sesuai dengan duration
                // sehingga menampilkan efek animasi berulang-ulang
                simpleSlideshow(slideContainer, duration);
            }, duration);
        })
    }
 
    // implementasi
    // jalankan fungsi animasi ketika document sudah di-load (ready)
    $(function(){
        var duration = 3000; // millsecond        
        var slideContainer = $('#slideshow');
        simpleSlideshow(slideContainer, duration);
    });
    </script>
</head>
<body>
<div id='slideshow'>
    <img src='gallery/1.jpg'>
    <img src='gallery/2.jpg'>
    <img src='gallery/3.jpg'>
    <img src='gallery/4.jpg'>
    <img src='gallery/5.jpg'>
</div>
</body>
</html>