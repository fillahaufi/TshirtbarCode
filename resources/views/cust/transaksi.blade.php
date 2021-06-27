@extends('layout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        <div class="uk-card uk-card-default uk-card-body">
            <a href="{{ url('/checkout') }}">
                <img style="width: 20px; height: 20px;" src="https://i.pinimg.com/736x/9e/b6/0e/9eb60ee1602cb5370382c2582ee2d0d1.jpg" alt="">
            </a>
            <h1 class=" fw-bold mt-4 text-center">Transaksi Pembayaran</h1>
            <div class="d-flex flex-row">
                <div class="mt-5 me-3 col-lg-5" style="position: sticky; top: 100px; height: fit-content">
                    <h3>Keranjang</h3>
                    <div style="overflow-y: scroll; height: 400px">
                        <div class="m-3 uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container">
                                <img src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" uk-cover>
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h5>Produk Laki - laki #1</h5>
                                    <p class="">Qty: 1</p>
                                    <p class="text-primary fw-bold">Rp 40.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-3 uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container">
                                <img src="https://c4.wallpaperflare.com/wallpaper/297/678/332/lionel-messi-soccer-photoshop-effects-wallpaper-preview.jpg" alt="" uk-cover>
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h5>Produk Futsal #4</h5>
                                    <p class="">Qty: 1</p>
                                    <p class="text-primary fw-bold">Rp 55.000</p>
                                    {{-- <img src="https://lh3.googleusercontent.com/proxy/X180Fct0PRNcLyuibzHor9FqUiHSJ6eGwJzHyHg_QKVt2Phn8FqXQEDAvDhhdEkwPV_wjD7OFxLzG3smJnEB_ICl4E5tO3o" alt=""> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column mt-5 ms-3 col-lg-7">
                    <h3 class="">Cara Pembayaran</h3>
                    <ul class="mt-4">
                        <li>Datangi ATM terdekat atau gunakan Mobile Banking jika sudah terdaftar</li>
                        <li>Masuk pada menu Pembayaran dan alamat transafer kode berikut :</li>
                        <div class="uk-card uk-card-primary my-1" style="width: fit-content">
                            <h3 class="text-white p-3">
                                xxx-xxxx-xxxx-xx
                            </h3>
                        </div>
                        <li>Masukkan nominal pembayaran sejumlah :</li>
                        <div class="uk-card uk-card-primary my-1" style="width: fit-content">
                            <h3 class="text-white p-3">
                                Rp 107.000
                            </h3>
                        </div>
                        <li>Pastikan bahwa alamat pengiriman transfer sudah benar atas nama "Tshirtbar"</li>
                        <li>Simpan bukti transfer dan upload dengan klik tombol "Upload bukti transfer" dibawah</li>
                    </ul>
                    <div class="mt-auto">
                        <p>Pembayaran valid sampai : dd-mm-yyyy HH:MM:DD</p>
                        <a href="#modal-example" uk-toggle>
                            <div class="card card-primary d-flex flex-row p-3" style="place-content: center">
                                <h4 class="text-white m-0">Upload Bukti Transfer</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="modal-example" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body">
                        <h2 class="uk-modal-title">Upload Bukti Pembayaran</h2>
                        <div class="js-upload uk-placeholder uk-text-center">
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-middle">Drag n drop ke sini atau</span>
                            <div uk-form-custom>
                                <input type="file" multiple>
                                <span class="uk-link">Pilih dalam file</span>
                            </div>
                        </div>
                        
                        <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                        
                        <p class="uk-text-right">
                            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                            <button class="uk-button uk-button-primary" type="button">Submit</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection