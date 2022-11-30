@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Kode Dokter</label>
                                <input class="form-control" value="{{ $dokter->kode_dokter }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Dokter</label>
                                <input class="form-control"value="{{ $dokter->nama_dokter }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Keahlian</label>
                                <input class="form-control"value="{{ $dokter->keahlian }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Telepon</label>
                                <input class="form-control" value="{{ $dokter->telepon }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" value="{{ $dokter->alamat }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/dokter/all">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div @endsection
