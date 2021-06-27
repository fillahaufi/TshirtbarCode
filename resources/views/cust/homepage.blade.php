@extends('layout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        <h1 class="text-center mb-3">What's New</h1>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 5000; pause-on-hover: false" style="height: 80vh; max-height: 80vh !important;">

            <ul class="uk-slider-items uk-grid">
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%" src="https://images.unsplash.com/photo-1485218126466-34e6392ec754?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" alt="">
                        <div class="uk-position-center uk-text-center">
                            <h2 uk-slider-parallax="x: 100,-100">Produk Baru #1</h2>
                            <p uk-slider-parallax="x: 200,-200">Nyaman dan berkualitas</p>
                        </div>
                    </div>
                </li>
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%" src="https://images.unsplash.com/photo-1521498542256-5aeb47ba2b36?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                        <div class="uk-position-center uk-text-center">
                            <h2 uk-slider-parallax="x: 100,-100">Produk Baru #2</h2>
                            <p uk-slider-parallax="x: 200,-200">Nyaman dan berkualitas</p>
                        </div>
                    </div>
                </li>
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%" src="https://images.unsplash.com/photo-1519549735396-e5f6f8ee578c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                        <div class="uk-position-center uk-text-center">
                            <h2 uk-slider-parallax="x: 100,-100">Produk Baru #3</h2>
                            <p uk-slider-parallax="x: 200,-200">Nyaman dan berkualitas</p>
                        </div>
                    </div>
                </li>
                <li class="uk-width-4-5">
                    <div class="uk-panel">
                        <img style="width: 100%" src="https://images.unsplash.com/photo-1522724514897-24b0eb7ba3ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=889&q=80" alt="">
                        <div class="uk-position-center uk-text-center">
                            <h2 uk-slider-parallax="x: 100,-100">Produk Baru #4</h2>
                            <p uk-slider-parallax="x: 200,-200">Nyaman dan berkualitas</p>
                        </div>
                    </div>
                </li>
            </ul>
        
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        
        </div>
        <div class="uk-divider-icon"></div>
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
                            </ul>
                        
                            <ul class="js-filter uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                                <li class="col-lg-3 mt-3" data-color="laki">
                                    <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                        <div class="uk-card-media-top" style="max-width: 100%; max-height: 300px; overflow: hidden" href="#modal-full" uk-toggle>
                                            <img style="width: 100%" src="https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                        </div>
                                        <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                            <h3 class="uk-card-title mb-0 fw-bold">Produk Laki - laki #1</h3>
                                            <h4 class="mt-0 text-primary fw-bold">Rp 40.000</h4>
                                            <button href="#" class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Laki_1" data-price="40000">+ Add to cart</button>
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
                                                <div class="d-flex flex-row mt-2">
                                                    <h3>Warna</h3>
                                                    <div class="ms-3 mt-1">
                                                        <input type="radio" name="color" id="red" value="red" checked/>
                                                        <label for="red" name="color"><span class="red"></span></label>
                                                        
                                                        <input type="radio" name="color" id="green" />
                                                        <label for="green" name="color"><span class="green"></span></label>
                                                        
                                                        <input type="radio" name="color" id="yellow" />
                                                        <label for="yellow" name="color"><span class="yellow"></span></label>
                                                        
                                                        <input type="radio" name="color" id="blue" />
                                                        <label for="blue" name="color"><span class="blue"></span></label>
                                                    </div>

                                                </div>
                                                <div class="d-flex flex-row mt-2">
                                                    <h3>Ukuran</h3>
                                                    <div>
                                                        <input type="radio" name="size" id="size_1" value="small" checked />
                                                        <label for="size_1" style="text-align: center; padding: 10px;">S</label>
                                                        
                                                        <input type="radio" name="size" id="size_2" value="small" />
                                                        <label for="size_2" style="text-align: center; padding: 10px;">M</label>
                                                        
                                                        <input type="radio" name="size" id="size_3" value="small" />
                                                        <label for="size_3" style="text-align: center; padding: 10px;">L</label>
                                                        
                                                        <input type="radio" name="size" id="size_4" value="small" />
                                                        <label for="size_4" style="text-align: center; padding: 10px;">XL</label>
                                                    </div>
                                                </div>
                                                <button href="#" class="add-to-cart uk-button uk-button-secondary mt-4" style="float: right" data-name="Produk_Laki_1" data-price="40000">+ Add to cart</button>
                                                <a href="{{ url('/custom') }}" style="width: 100%">
                                                    <button class="uk-button uk-button-secondary mt-1" style="width: 100%">Custom Barang ini</button>
                                                </a>
                                                <div class="mt-5">
                                                    <h3>Reviews <span style="color: gold">5/5</span></h3>
                                                    <div style="overflow-y: scroll; height: 180px">
                                                        <div class="m-3 uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                                                            <div class="uk-card-media-left uk-cover-container">
                                                                <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHRzaGlydHxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" uk-cover>
                                                                <canvas width="600" height="400"></canvas>
                                                            </div>
                                                            <div>
                                                                <div class="uk-card-body">
                                                                    <h3 class="uk-card-title">Other User #1</h3>
                                                                    <p>Enak dan nyaman</p>
                                                                    <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_1600,h_410/https://fullbrightinstitute.com/wp-content/uploads/2020/06/5-stars.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="m-3 uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                                                            <div class="uk-card-media-left uk-cover-container">
                                                                <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fHRzaGlydHxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" uk-cover>
                                                                <canvas width="600" height="400"></canvas>
                                                            </div>
                                                            <div>
                                                                <div class="uk-card-body">
                                                                    <h3 class="uk-card-title">Other User #2</h3>
                                                                    <p>Packaging keren</p>
                                                                    <img src="https://cdn.shortpixel.ai/client/q_lossy,ret_img,w_1600,h_410/https://fullbrightinstitute.com/wp-content/uploads/2020/06/5-stars.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Perempuan_1" data-price="40000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Laki_2" data-price="40000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Laki_3" data-price="40000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Perempuan_2" data-price="40000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_1" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Running_1" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Running_2" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Basket_1" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_2" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Running_2" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_3" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Basket_2" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Futsal_4" data-price="55000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_1" data-price="67000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Parka_1" data-price="67000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Parka_2" data-price="67000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_2" data-price="67000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Parka_3" data-price="67000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_3" data-price="67000">+ Add to cart</button>
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
                                            <button class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="Produk_Hoodie_4" data-price="67000">+ Add to cart</button>
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
    <x-Keranjang/>
@endsection