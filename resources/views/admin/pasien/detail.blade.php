@extends('admin.layout.main')

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
                                <label for="" class="form-label">Kode Pasien</label>
                                <input class="form-control" value="{{ $pasien->kode_pasien }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Pasien</label>
                                <input class="form-control"value="{{ $pasien->nama_pasien }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tangal Lahir</label>
                                <input class="form-control"value="{{ $pasien->birthday }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <input class="form-control" value="{{ $pasien->dokter->keahlian }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input class="form-control" value="{{ $pasien->email}}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" value="{{ $pasien->alamat }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/pasien/all">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
