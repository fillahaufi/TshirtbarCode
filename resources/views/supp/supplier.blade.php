@extends('supp/supplayout')

@section('content')
    <div class="m-5 d-flex flex-column" style="min-height: 100vh">
        <h1 class="fw-bold">Permintaan Admin</h1>
        <div class="mx-5">
            <table class="uk-table uk-table-justify uk-table-divider">
                <thead style="position: sticky; top: 88px; background-color: white">
                    <tr>
                        <th class="uk-width-small">Tanggal</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th class="text-center">Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12/02/2021</td>
                        <td>Tshirt Short Sleeves</td>
                        <td>100</td>
                        <td class="d-flex flex-row" style="place-content: center">
                            <button class="uk-button uk-button-primary d-flex p-2" type="button">verifikasi</button>
                            <button class="uk-button uk-button-danger d-flex p-2" type="button">Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>22/01/2021</td>
                        <td>Polo Shirt</td>
                        <td>50</td>
                        <td><button class="uk-button uk-button-primary mx-auto d-flex" type="button" disabled>Sudah diverifikasi</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection