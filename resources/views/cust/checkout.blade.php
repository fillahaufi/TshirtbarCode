@extends('layout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        <div class="uk-card uk-card-default uk-card-body">
            <a href="{{ url('/') }}">
                <img style="width: 20px; height: 20px;" src="https://i.pinimg.com/736x/9e/b6/0e/9eb60ee1602cb5370382c2582ee2d0d1.jpg" alt="">
            </a>
            <h1 class="fw-bold mt-4 text-center">Checkout</h1>
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
                                    <p class="mb-0">Qty: 1</p>
                                    <p class="">Custom: -</p>
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
                                    <p class="mb-0">Qty: 1</p>
                                    <p class="">Custom: -</p>
                                    <p class="text-primary fw-bold">Rp 55.000</p>
                                    {{-- <img src="https://lh3.googleusercontent.com/proxy/X180Fct0PRNcLyuibzHor9FqUiHSJ6eGwJzHyHg_QKVt2Phn8FqXQEDAvDhhdEkwPV_wjD7OFxLzG3smJnEB_ICl4E5tO3o" alt=""> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column mt-5 ms-3 col-lg-7" style="height: 100vh">
                    <h3 class="">Detail Pemesanan</h3>
                    <div class="card card-default mt-3 p-3" style="width: 100%">
                        <h4>Alamat Pengiriman</h4>
                        <p>Jawa Timur, Surabaya, Keputih, 597362</p>
                        <button class="uk-button uk-button default" href="#modal-example" uk-toggle>Edit Alamat</button>
                        <div id="modal-example" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <h2 class="uk-modal-title">Edit Alamat</h2>
                                <div>
                                    <label for="">Provinsi</label>
                                    <select class="uk-select mb-3">
                                        <option>Jawa Timur</option>
                                        <option>Jawa Barat</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Kabupaten/Kota</label>
                                    <select class="uk-select mb-3">
                                        <option>Surabaya</option>
                                        <option>Malang</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Kecamatan</label>
                                    <select class="uk-select mb-3">
                                        <option>Keputih</option>
                                        <option>Kota</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="">Kode Pos</label>
                                    <input type="number" class="uk-input mb-3" placeholder="597362">
                                </div>
                                <p class="uk-text-right">
                                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                    <button class="uk-button uk-button-primary" type="button">Save</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default mt-3 p-3" style="width: 100%">
                        <h4>Data penerima</h4>
                        <div class="d-flex flex-row" style="place-items: center">
                            <h6 class="mb-0">Nama : &nbsp;</h6>
                            <p class="mb-0">Username</p>
                        </div>
                        <div class="d-flex flex-row" style="place-items: center">
                            <h6 class="mb-0">Email : &nbsp;</h6>
                            <p class="mb-0">Username@user.com</p>
                        </div>
                        <div class="d-flex flex-row" style="place-items: center">
                            <h6 class="mb-0">No. HP : &nbsp;</h6>
                            <p class="mb-0">08xxxxxxx</p>
                        </div>
                        <button class="uk-button uk-button default mt-3" href="#modal-nama" uk-toggle>Edit Data</button>
                        <div id="modal-nama" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <h2 class="uk-modal-title">Edit Data</h2>
                                <div>
                                    <label for="">Nama</label>
                                    <input type="name" class="uk-input mb-3" placeholder="Username">
                                </div>
                                <div>
                                    <label for="">Email</label>
                                    <input type="email" class="uk-input mb-3" placeholder="Username@user.com">
                                </div>
                                <div>
                                    <label for="">No. HP</label>
                                    <input type="text" class="uk-input mb-3" placeholder="08xxxxxxxxx">
                                </div>
                                <p class="uk-text-right">
                                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                    <button class="uk-button uk-button-primary" type="button">Save</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card card-default mt-3 p-3" style="width: 100%">
                        <h4>Pengiriman Resi pada alamat email</h4>
                        <p>username@user.com</p>
                        <button class="uk-button uk-button default" href="#modal-email" uk-toggle>Edit Alamat Email</button>
                        <div id="modal-email" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <h2 class="uk-modal-title">Edit Alamat Email</h2>
                                <div>
                                    <label for="">Email</label>
                                    <input type="email" class="uk-input mb-3" placeholder="Username@user.com">
                                </div>
                                <p class="uk-text-right">
                                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                    <button class="uk-button uk-button-primary" type="button">Save</button>
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card card-default mt-3 p-3" style="width: 100%">
                        <h4>Biaya Ongkir</h4>
                        <p class="text-primary fw-bold">Rp 12.000</p>
                    </div>
                    <a class="mt-3" href="{{ url('/transaksi') }}">
                        <div class="card card-primary d-flex flex-row p-3">
                            <h4 class="text-white m-0">Total Biaya : </h4>
                            <h4 class="text-white fw-bold ms-auto">Rp 107.000</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection