@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data Pasien</h1>
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">
                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Kode Pasien</th>
                                    <th scope="col" class="text-start">Nama Pasien</th>
                                    <th scope="col" class="text-start">Tanggal Lahir</th>
                                    <th scope="col" class="text-start">Diagnosa</th>
                                    <th scope="col" class="text-start">Email</th>
                                    <th scope="col" class="text-start">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_pasien as $pasien)
                                    <tr align="center">
                                        <td class="align-middle"><?= $pasien->id ?></td>
                                        <td class="text-start align-middle"><?= $pasien->kode_pasien ?></td>
                                        <td class="text-start align-middle"><?= $pasien->nama_pasien ?></td>
                                        <td class="text-start align-middle"><?= $pasien->birthday ?></td>
                                        <td class="text-start align-middle"><?= $pasien->dokter->keahlian ?></td>
                                        <td class="text-start align-middle"><?= $pasien->email ?></td>
                                        <td class="text-start align-middle"><?= $pasien->alamat ?></td>
                                        <td class="text-start">
                                            <a type="button" class="btn btn-outline-warning"
                                                href="detail/{{ $pasien->id }}">Detail
                                                Data</a>
                                            <a type="button" class="btn btn-outline-primary" href="edit/{{ $pasien->id }}">Edit
                                                Data</a>
                                            <form action="/pasien/delete/{{ $pasien->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger"
                                                    onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
