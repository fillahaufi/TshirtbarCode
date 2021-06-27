@extends('admin/adminlayout')

@section('content')
    <div class="m-5" style="min-height: 100vh">
        <h1 class="fw-bold mb-3">Pembayaran</h1>
        <div class="mx-5">
            <table class="uk-table uk-table-justify uk-table-divider">
                <thead style="position: sticky; top: 88px; background-color: white">
                    <tr>
                        <th class="uk-width-small">Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th class="text-center">Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12/02/2021</td>
                        <td>Produk_Laki_1</td>
                        <td>Rp 40.000</td>
                        <td><button class="uk-button uk-button-default mx-auto d-flex" type="button" href="#modal-full" uk-toggle>Review</button></td>
                    </tr>
                    <tr>
                        <td>22/01/2021</td>
                        <td>Produk_Futsal_4</td>
                        <td>Rp 55.000</td>
                        <td><button class="uk-button uk-button-default mx-auto d-flex" type="button" disabled>Sudah direview</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="modal-full" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                    <div class="uk-background-cover" style="background-image: url('https://images.unsplash.com/photo-1527719327859-c6ce80353573?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dHNoaXJ0fGVufDB8MXwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');" uk-height-viewport></div>
                    <div class="uk-padding-large d-flex flex-column">
                        <h1 class="fw-bold">Produk Laki - laki #1</h1>
                        <h2 class="text-primary mt-0">Rp 40.000</h2>
                        <div style="height: 340px; overflow-y: scroll">
                            <img style="height: auto; width: 100%" src="https://1.bp.blogspot.com/-MOHGve9IHeQ/XHvEjRpgyhI/AAAAAAAAIyQ/06yF5OyDDHQEwAqbc9SnzW7Sq0rx_RMdwCLcBGAs/s1600/IMG_20181120_064248_565.jpg" alt="">
                        </div>
                        
                        <button href="#" class=" uk-button uk-button-primary mt-4" style="float: right">Validasi Pembayaran</button>
                        <button href="#" class=" uk-button uk-button-danger mt-2" style="float: right">Tolak Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection