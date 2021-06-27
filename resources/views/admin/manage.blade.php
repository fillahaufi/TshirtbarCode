@extends('admin/adminlayout')

@section('content')
<div class="m-5 d-flex flex-column" style="min-height: 100vh">
    <h1 class="fw-bold my-3">Kelola Produk</h1>
    <div class="d-flex flex-row mt-5">
        <div class="d-flex flex-column mx-3">
            <div style="position: sticky; top: 100px; z-index: 200">
                <h3>Kategori</h3>
                <div>
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                <li><a href="#">Tshirt</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Jacket</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-expand@m d-flex flex-column mx-3">
            <ul id="component-tab-left" class="uk-switcher">
                <li>
                    <div uk-filter="target: .js-filter">

                        <ul class="uk-subnav uk-subnav-pill" style="position: sticky;
                        top: 50px;
                        z-index: 100;
                        background-color: white;
                        padding-top: 50px;
                        margin-top: -50px;
                        width: 108%;
                        margin-left: -50px;
                        padding-left: 20px;
                        padding-bottom: 10px;">
                            <li class="uk-active" uk-filter-control><a href="#">Semua</a></li>
                            <li uk-filter-control="[data-color='laki']"><a href="#">Laki - laki</a></li>
                            <li uk-filter-control="[data-color='perem']"><a href="#">Perempuan</a></li>
                            <div class="uk-button uk-button-primary ms-auto me-5" href="#modal-full-plus" uk-toggle>+ Tambah Produk</div>
                        </ul>

                        <div id="modal-full-plus" class="uk-modal-full" uk-modal>
                            <div class="uk-modal-dialog">
                                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                    <div class="uk-background-cover" style="background-image: url('https://images.unsplash.com/photo-1579389083046-e3df9c2b3325?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWFuYWdlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');" uk-height-viewport></div>
                                    <div class="p-5 d-flex flex-column">
                                        <h1 class="fw-bold mb-5">+ Tambah produk baru</h1>
                                        <div class="d-flex flex-row">
                                            <h3 class="me-3" style="min-width: fit-content">Nama</h3>
                                            <input class="uk-input" type="text">
                                        </div>
                                        <div class="d-flex flex-row">
                                            <h3 class="me-3" style="min-width: fit-content">Harga</h3>
                                            <input class="uk-input" type="number">
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <h3 class="me-3">Warna</h3>
                                            <div class="uk-grid-small uk-child-width-auto uk-grid mt-2">
                                                <label><input class="uk-checkbox" type="checkbox" checked> Merah</label>
                                                <label><input class="uk-checkbox" type="checkbox"> Hijau</label>
                                                <label><input class="uk-checkbox" type="checkbox"> Kuning</label>
                                                <label><input class="uk-checkbox" type="checkbox"> Biru</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mt-2">
                                            <h3 class="me-3">Ukuran</h3>
                                            <div class="uk-grid-small uk-child-width-auto uk-grid mt-2">
                                                <label><input class="uk-checkbox" type="checkbox" checked> S</label>
                                                <label><input class="uk-checkbox" type="checkbox"> M</label>
                                                <label><input class="uk-checkbox" type="checkbox"> L</label>
                                                <label><input class="uk-checkbox" type="checkbox"> XL</label>
                                            </div>
                                        </div>
                                        <div>
                                            <h3>Tambah Gambar</h3>
                                            <div class="d-flex flex-column mb-3">
                                                <div class="js-upload uk-placeholder uk-text-center">
                                                    <span uk-icon="icon: cloud-upload"></span>
                                                    <span class="uk-text-middle">Drag n drop ke sini atau</span>
                                                    <div uk-form-custom>
                                                        <input type="file" multiple>
                                                        <span class="uk-link">Pilih dalam file</span>
                                                    </div>
                                                </div>
                                                
                                                <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                                
                                            </div>
                                        </div>
                                        <button href="#" class="uk-button uk-button-primary mt-4">Tambah Produk</button>
                                        {{-- <button href="#" class="uk-button uk-button-danger mt-4">Hapus Produk</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                            <li class="col-lg-3 mt-3" data-color="laki">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Laki - laki #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 40.000</h4>
                                        <button href="#modal-full" uk-toggle class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Laki_1">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            {{-- <a class="uk-button uk-button-default" href="#modal-full" uk-toggle>
                            </a> --}}

                            <div id="modal-full" class="uk-modal-full" uk-modal>
                                <div class="uk-modal-dialog">
                                    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                                    <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                                        <div class="uk-background-cover" style="background-image: url('https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');" uk-height-viewport></div>
                                        <div class="p-5 d-flex flex-column">
                                            <h1 class="fw-bold">Produk Laki - laki #1</h1>
                                            <h2 class="text-primary">Rp 40.000</h2>
                                            <div class="d-flex flex-row">
                                                <h3 class="me-3" style="min-width: fit-content">Ganti Nama</h3>
                                                <input class="uk-input" type="text">
                                            </div>
                                            <div class="d-flex flex-row">
                                                <h3 class="me-3" style="min-width: fit-content">Ganti Harga</h3>
                                                <input class="uk-input" type="number">
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <h3 class="me-3">Warna</h3>
                                                <div class="uk-grid-small uk-child-width-auto uk-grid mt-2">
                                                    <label><input class="uk-checkbox" type="checkbox" checked> Merah</label>
                                                    <label><input class="uk-checkbox" type="checkbox"> Hijau</label>
                                                    <label><input class="uk-checkbox" type="checkbox"> Kuning</label>
                                                    <label><input class="uk-checkbox" type="checkbox"> Biru</label>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <h3 class="me-3">Ukuran</h3>
                                                <div class="uk-grid-small uk-child-width-auto uk-grid mt-2">
                                                    <label><input class="uk-checkbox" type="checkbox" checked> S</label>
                                                    <label><input class="uk-checkbox" type="checkbox"> M</label>
                                                    <label><input class="uk-checkbox" type="checkbox"> L</label>
                                                    <label><input class="uk-checkbox" type="checkbox"> XL</label>
                                                </div>
                                            </div>
                                            <button href="#" class="uk-button uk-button-secondary mt-4">Edit Produk</button>
                                            <button href="#" class="uk-button uk-button-danger mt-4">Hapus Produk</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li class="col-lg-3 mt-3" data-color="perem">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1519722417352-7d6959729417?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Perempuan #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 40.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Perempuan_1">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="laki">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1619367258692-ff8935545ea9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE1fHx0c2hpcnR8ZW58MHwxfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Laki - laki #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 40.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Laki_2">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="laki">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1590999659195-e64a988eaf4f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzd8fHRzaGlydHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Laki - laki #3</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 40.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Laki_3">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="perem">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1456885284447-7dd4bb8720bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHRzaGlydHxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Perempuan #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 40.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Perempuan_2">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    
                    </div>
                </li>
                <li>
                    <div uk-filter="target: .js-filter">

                        <ul class="uk-subnav uk-subnav-pill" style="position: sticky;
                        top: 50px;
                        z-index: 100;
                        background-color: white;
                        padding-top: 50px;
                        margin-top: -50px;
                        width: 108%;
                        margin-left: -50px;
                        padding-left: 20px;
                        padding-bottom: 10px">
                            <li class="uk-active" uk-filter-control><a href="#">Semua</a></li>
                            <li uk-filter-control="[data-color='fut']"><a href="#">Futsal</a></li>
                            <li uk-filter-control="[data-color='run']"><a href="#">Running</a></li>
                            <li uk-filter-control="[data-color='bas']"><a href="#">Basket</a></li>
                        </ul>
                    
                        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                            <li class="col-lg-3 mt-3" data-color="fut">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1577212017308-55c4d60d2609?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vdGJhbGwlMjBzaGlydHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Futsal #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_1" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="run">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/1e8412dc-bb0d-48cd-96f8-1f9126c613c7/dri-fit-wild-run-long-sleeve-running-t-shirt-CN3GfS.png" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Running #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Running_1" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="run">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://n.nordstrommedia.com/id/sr3/5b6b3aa1-bcbe-4cfc-90a1-98fbfe8d4641.jpeg?crop=pad&pad_color=FFF&format=jpeg&w=780&h=1196" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Running #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Running_2" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="bas">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1580089595767-98745d7025c5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8YmFza2V0YmFsbCUyMHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Basket #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Basket_1" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="fut">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1552066379-e7bfd22155c5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vdGJhbGwlMjBzaGlydHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Futsal #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_2" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="run">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.asos-media.com/products/nike-running-logo-t-shirt-in-black/14879112-1-black?$XXL$&wid=513&fit=constrain" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Running #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Running_2" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="fut">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c29jY2VyfGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Futsal #3</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_3" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="bas">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1499552442814-13341b4aed72?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGZlbWFsZSUyMGJhc2tldGJhbGx8ZW58MHwxfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Basket #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Basket_2" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="fut">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://c4.wallpaperflare.com/wallpaper/297/678/332/lionel-messi-soccer-photoshop-effects-wallpaper-preview.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Futsal #4</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 55.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_4" data-price="55000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    
                    </div>
                </li>
                <li>
                    <div uk-filter="target: .js-filter">

                        <ul class="uk-subnav uk-subnav-pill" style="position: sticky;
                        top: 50px;
                        z-index: 100;
                        background-color: white;
                        padding-top: 50px;
                        margin-top: -50px;
                        width: 108%;
                        margin-left: -50px;
                        padding-left: 20px;
                        padding-bottom: 10px">
                            <li class="uk-active" uk-filter-control><a href="#">Semua</a></li>
                            <li uk-filter-control="[data-color='hud']"><a href="#">Hoodie</a></li>
                            <li uk-filter-control="[data-color='park']"><a href="#">Parka</a></li>
                        </ul>
                    
                        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                            <li class="col-lg-3 mt-3" data-color="hud">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1564557287817-3785e38ec1f5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aG9vZGllfGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Hoodie #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_1" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="park">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1580927240099-b05c5a007955?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fG1pY3JvZmlicmUlMjBqYWNrZXR8ZW58MHwxfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Parka #1</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Parka_1" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="park">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1619659712390-c0ffe7eec650?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fG1pY3JvZmlicmUlMjBqYWNrZXR8ZW58MHwxfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Parka #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Parka_2" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="hud">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1609873814058-a8928924184a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8aG9vZGllfGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Hoodie #2</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_2" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="park">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1617667239596-1db3c1600ff3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTl8fG1pY3JvZmlicmUlMjBqYWNrZXR8ZW58MHwxfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Parka #3</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Parka_3" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="hud">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1617171594207-430a01a9da3f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGhvb2RpZXxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Hoodie #3</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_3" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-3 mt-3" data-color="hud">
                                <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                    <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden">
                                        <img style="width: 100%" src="https://images.unsplash.com/photo-1572495673508-62a6b369c380?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGhvb2RpZXxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                    </div>
                                    <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                        <h3 class="uk-card-title mb-0 fw-bold">Produk Hoodie #4</h3>
                                        <h4 class="mt-0 text-primary fw-bold">Rp 67.000</h4>
                                        <button class="uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_4" data-price="67000">Edit Produk</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<a href="#" uk-totop uk-scroll style="position: fixed; bottom: 55px; right: 20px"></a>
@endsection