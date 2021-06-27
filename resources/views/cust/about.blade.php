@extends('layout')

@section('content')
    <div class="d-flex flex-column p-5">
        <div class="m-5 d-flex flex-row justify-content-between">
            <div class="p-2 col-lg-6">
                <h1 class="fw-bold">TSHIRTBAR AND ITS FOUNDER</h1>
                <p style="text-align: justify">Tshirtbar lahir pada tahun 2013 sebagai penyedia jasa print kaos digital menggunakan tekhnologi Direct To Garment di Jakarta. Disaat itu kami melihat kebutuhan apparel dan pakaian custom di Indonesia semakin berkembang dan memiliki banyak tantangan. Oleh karena itu kami hendak menggunakan teknologi digital sebagai solusi produksi pakaian custom di Indonesia. <br> <br>
    
                    Produk pakaian custom kami tidak ada hanya untuk kaos saja, namun juga polo shirt, jaket dan produk bahan garmen lainnya. Tekhnologi print digital ternyata memiliki daya saing yang tinggi dibanding sablon manual. Hal ini dikarenakan proses yang lebih simple dan hasil yang full colour. <br> <br>
                    
                    Tshirtbar sekarang ini sudah tergolong vertically integrated, alias menguasai produksi mulai penjahitan hingga printing, sampai ke marketing dan sales. Kami percaya, bahwa banyak anak muda Indonesia yang memiliki talenta luar biasa untuk mengembangkan bisnis kami. <br> <br>
                    
                    Setiap bulan, kami memproduksi sedikitnya sekitar 5000 kaos custom setiap bulannya. Hal ini merupakan tantangan tersendiri karena kaos ini bukan dipesan secara massal, melainkan dipesan dalam jumlah sedikit, bahkan seringkali hanya memesan 1 pcs saja. <br> <br>
                    
                    Pada tahun 2018, kami melakukan rebranding logo kami agar memiliki brand yang kuat dipasaran.</p>
            </div>
            <div class="p-2">
                <img src="https://tshirtbar.id/wp-content/uploads/2018/01/logo-evolution.jpg" alt="">
            </div>
        </div>
        <div class="m-5 d-flex flex-row justify-content-between">
            <div class="p-2 col-lg-6 me-3">
                <h1 class="fw-bold">THE FOUNDER</h1>
                <div class="d-flex flex-row">
                    <img style="height: 50vh" class="me-3 mt-2" src="https://tshirtbar.id/wp-content/uploads/2019/09/founder-tshirtbar-375x500.jpg" alt="">
                    <p style="text-align: justify">Tshirtbar didirikan oleh Bryan Wicaksono pada tahun 2013, sebelumnya, bapak dengan tiga orang anak ini adalah seorang karyawan swasta di sebuah bank multi-nasional. <br> <br>

                        Dalam perjalananya, Bryan Wicaksono memulai usaha dengan belajar sablon di Bandung. Namun lambat laun melihat potensi sablon digital di Indonesia. <br> <br>
                        
                        Dengan passion dibidang kesehatan dan olah raga, Bryan meluangkan waktu untuk berolah raga rutin dan berdiskusi tentang manfaat pola makan yang sehat dan olah raga. <br> <br>
                        
                        Sebagai seorang cancer survivor, motto hidupnya : ” Pain is inevitable,but suffering is optional “</p>
                </div>
            </div>
            <div class="p-2 col-lg-6 ms-3">
                <h1 class="fw-bold">THE STORE</h1>
                <img src="https://tshirtbar.id/wp-content/uploads/2019/09/toko-tshirtbar-cipete-300x225.jpg" alt="">
                <p class="mt-3" style="text-align: justify">Toko kami di Cipete dibuka pada tahun 2016, dan sejak tahun 2017 telah menjadi kantor pusat dan main store Tshirtbar. <br><br>

                    Kami juga mengoperasikan basis produksi kami di beberapa tempat di Jakarta untuk printing, konveksi dan penjahitan.</p>
            </div>
        </div>
        <div class="m-5 d-flex flex-column justify-content-between">
            <h1>In Media</h1>
            <div class="mt-3 d-flex flex-row">
                <iframe class="col-lg-6" width="620" height="350" src="https://www.youtube.com/embed/WfYh1j2nJl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe class="col-lg-6" width="620" height="350" src="https://www.youtube.com/embed/Z9lxbMsTlYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <x-Keranjang/>
@endsection