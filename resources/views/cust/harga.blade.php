@extends('layout')

@section('content')
    <div class="m-5" style="min-height: 100vh">
        <div class="d-flex flex-column">
            <h1 class="text-center fw-bold">Pricelist Custom</h1>
            <div class="uk-divider-icon"></div>
            <div class="d-flex flex-row mt-3">
                <div class="me-2 col-lg-6">
                    <div class="d-flex flex-column">
                        <h2>How to calculate the prices</h2>
                        <p style="text-align: justify">Perhitungan harga printing kaos di Tshirtbar cukup simpel dan menggunakan sistem “ala carte”. Hal ini disebabkan metode printing digital untuk apparel di Tshirtbar sangat bervariasi, mulai dari polyflex, fullprinting hingga direct to garment. Harga printing kaos per pcs cukup dengan menambahkan baju polos yang diinginkan dengan harga printing kaos tersebut. Kecuali produk fullprint sublimation di mana harganya sudah termasuk biaya print.</p>
                    </div>
                </div>
                <div class="ms-2">
                    <div class="d-flex flex-column">
                        <h2>Harga Polos (kecuali produk fullprint sudah termasuk print)</h2>
                        <p style="text-align: justify">
                            Berikut adalah harga bahan polos yang tidak termasuk printing, kecuali produk fullprint yang sudah termasuk biaya print.
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-divider-icon"></div>
            <div class="mt-4">
                <h2 class="">Fashionwear</h2>
                <div>
                    <div uk-grid>
                        <div class="uk-width-1-6@m">
                            <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                                <li><a href="#">Tshirt</a></li>
                                <li><a href="#">Kemeja</a></li>
                                <li><a href="#">Topi</a></li>
                                <li><a href="#">Piyama</a></li>
                                <li><a href="#">Hijab</a></li>
                                <li><a href="#">Tas</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-expand@m">
                            <ul id="component-tab-left" class="uk-switcher">
                                <li class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Tshirt short sleeve</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 45.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1595211877493-41a4e5f236b3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHRzaGlydCUyMGxvbmclMjBzbGVldmV8ZW58MHwxfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Tshirt Long sleeve</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 60.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1587632592210-22a9fe6a3e23?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHBvbG8lMjBzaGlydHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Polo shirt</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 68.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>Kemeja</li>
                                <li>Topi</li>
                                <li>Piyama</li>
                                <li>Hijab</li>
                                <li>Tas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="">Stickers and Labels</h2>
                <div>
                    <div uk-grid>
                        <div class="uk-width-1-6@m">
                            <ul class="uk-tab-left" uk-tab="connect: #component-sticker; animation: uk-animation-fade">
                                <li><a href="#">Cutting Sticker</a></li>
                                <li><a href="#">Sticker Safety</a></li>
                                <li><a href="#">Label</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-expand@m">
                            <ul id="component-sticker" class="uk-switcher">
                                <li class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1579815473039-43535dad40e1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8c3RpY2tlcnxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Sticker</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 15.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>Sticker Safety</li>
                                <li>Label</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="">Merchandises</h2>
                <div>
                    <div uk-grid>
                        <div class="uk-width-1-6@m">
                            <ul class="uk-tab-left" uk-tab="connect: #component-merch; animation: uk-animation-fade">
                                <li><a href="#">E-money</a></li>
                                <li><a href="#">USB and Powerbanks</a></li>
                                <li><a href="#">ID Cards and Lanyard</a></li>
                                <li><a href="#">Mugs</a></li>
                                <li><a href="#">Tumbler</a></li>
                                <li><a href="#">Touchless Finger</a></li>
                                <li><a href="#">Cake Topper</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-expand@m">
                            <ul id="component-merch" class="uk-switcher">
                                <li class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1578670812003-60745e2c2ea9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y3JlZGl0JTIwY2FyZHxlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Card</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 65.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>USB PB</li>
                                <li>ID card</li>
                                <li>Mugs</li>
                                <li>Tumbler</li>
                                <li>Touchless</li>
                                <li>Cake</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="">Home Decor</h2>
                <div>
                    <div uk-grid>
                        <div class="uk-width-1-6@m">
                            <ul class="uk-tab-left" uk-tab="connect: #component-home; animation: uk-animation-fade">
                                <li><a href="#">Sarung Bantal</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-expand@m">
                            <ul id="component-home" class="uk-switcher">
                                <li class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1574430032074-11a26f101094?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGlsbG93fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Sarung bantal</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 45.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mt-3">
                                        <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                            <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                                <img style="width: 100%" src="https://images.unsplash.com/photo-1592789705442-5b20c74711cd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njh8fHBpbGxvd3xlbnwwfDF8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                            </div>
                                            <div class="uk-card-body p-4 d-flex flex-column">
                                                <h3 class="uk-card-title mb-0 fw-bold">Sarung bantal large</h3>
                                                <h4 class="mt-0 text-primary fw-bold">Rp 65.000</h4>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-Keranjang/>
@endsection