@extends('layout')

@section('content')
<div class="m-5" style="min-height: 100vh">
    <div class="uk-card uk-card-default uk-card-body">
        {{-- <a href="{{ url('/') }}">
            <img style="width: 20px; height: 20px;" src="https://i.pinimg.com/736x/9e/b6/0e/9eb60ee1602cb5370382c2582ee2d0d1.jpg" alt="">
        </a> --}}
        <div class="uk-card-title">
            <h1>Profil</h1>
        </div>
            <div class="d-flex flex-row">
                <div class="d-flex flex-column col-lg-3">
                    <img style="border-radius: 50%;" src="https://images.unsplash.com/photo-1584999734482-0361aecad844?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cHJvZmlsZSUyMHBpY3R1cmV8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                    <h2 class="text-center mt-2 fw-bold">Username</h2>
                    <h6 class="text-center mt-2">Username@user.com</h6>
                </div>
                <div class="d-flex flex-column col-lg-9">
                    <div class="d-flex flex-row">
                        <div class="d-flex- flex-column ms-3 me-3 col-lg-5">
                            <div class="d-flex flex-column mb-3">
                                <label for="username">Username</label>
                                <input class="uk-input" type="text" placeholder="username">
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <label for="email">Email</label>
                                <input class="uk-input" type="text" placeholder="email">
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <label for="nohp">No. hp</label>
                                <input class="uk-input" type="text" placeholder="08xxxxxx">
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <label for="alamat">Alamat</label>
                                <button class="uk-button uk-button-default" type="button" uk-toggle="target: #modal-example">Edit Alamat</button>
                            </div>
                            <div id="modal-example" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <h2 class="uk-modal-title">Alamat</h2>
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
                        <div class="d-flex flex-column ms-3 col-lg-6">
                            <div class="d-flex flex-column mb-3">
                                <div class="d-flex flex-column mb-3">
                                    <label for="nohp">Password Baru</label>
                                    <input class="uk-input" type="password">
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <label for="nohp">Ulang Password Baru</label>
                                    <input class="uk-input" type="password">
                                </div>
                                <label for="update">Update foto profil</label>
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
                    </div>
                    <button class="uk-button uk-button-primary mt-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <x-Keranjang/>
@endsection