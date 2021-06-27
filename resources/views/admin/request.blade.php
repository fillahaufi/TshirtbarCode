@extends('admin/adminlayout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        <h1 class="fw-bold">Permintaan</h1>
        <div class="p-5 d-flex flex-column">
            <div class="d-flex flex-column mb-3">
                <h3 class="me-3" style="min-width: fit-content">Jenis</h3>
                <select class="uk-select">
                    <option>Tshirt Short Sleeves</option>
                    <option>Tshirt Long Sleeves</option>
                    <option>Polo Shirt</option>
                    <option>Kemeja</option>
                    <option>Topi</option>
                    <option>Piyama</option>
                    <option>Hijab</option>
                    <option>Tas</option>
                </select>
            </div>
            <div class="d-flex flex-column mb-3">
                <h3 class="me-3" style="min-width: fit-content">Jumlah</h3>
                <input class="uk-input" type="number">
            </div>
            {{-- <div class="d-flex flex-column mb-3 mt-2">
                <h3 class="me-3">Warna</h3>
                <div class="uk-grid-small uk-child-width-auto uk-grid mt-2">
                    <label><input class="uk-checkbox" type="checkbox" checked> Merah</label>
                    <label><input class="uk-checkbox" type="checkbox"> Hijau</label>
                    <label><input class="uk-checkbox" type="checkbox"> Kuning</label>
                    <label><input class="uk-checkbox" type="checkbox"> Biru</label>
                </div>
            </div> --}}
            <div class="d-flex flex-row mt-2">
                <h3 class="me-3">Ukuran</h3>
                <div class="uk-grid-small uk-child-width-auto uk-grid mt-2">
                    <label><input class="uk-checkbox" type="checkbox" checked> S</label>
                    <label><input class="uk-checkbox" type="checkbox"> M</label>
                    <label><input class="uk-checkbox" type="checkbox"> L</label>
                    <label><input class="uk-checkbox" type="checkbox"> XL</label>
                </div>
            </div>
            <button href="#" class="uk-button uk-button-secondary mt-5">Kirim Permintaan</button>
            {{-- <button href="#" class="uk-button uk-button-danger mt-4">Hapus Produk</button> --}}
        </div>
    </div>
@endsection