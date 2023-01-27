@extends('admin.layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Tambah Data Dokter</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/dokter/add">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kode Dokter</label>
                                <input type="number" class="form-control noscroll" id="kode_dokter" name="kode_dokter"
                                    value="{{ old('kode_dokter') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Dokter</label>
                                <input class="form-control" id="nama_dokter"
                                    name="nama_dokter"value="{{ old('nama_dokter') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Keahlian</label>
                                <input class="form-control" id="keahlian"
                                    name="keahlian"value="{{ old('keahlian') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Telepon</label>
                                <input class="form-control" id="telepon" name="telepon"
                                    value="{{ old('telepon') }}">
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <select class="form-select" name="dokter_id" id="dokter_id">
                                    @foreach ($dokter as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->keahlian }}</option>
                                    @endforeach
                                </select>
                                <input doctor="form-control"id="kode_dokter" name="kode_dokter" value="{{ $Dokter->kelas->kelas }}">
                            </div>
                            <br> --}}
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"value="{{ old('alamat') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/dokter/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
