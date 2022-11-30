@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data Dokter</h1>
                @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">

                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Kode Dokter</th>
                                    <th scope="col" class="text-start">Nama Dokter</th>
                                    <th scope="col" class="text-start">Keahlian</th>
                                    <th scope="col" class="text-start">Telepon</th>
                                    <th scope="col" class="text-start">Alamat</th>
                                    <th scope="col">Aksi</th>
                                    <!-- <th scope="col">Tanggal Lahir</th>
                                                                    <th scope="col">Foto</th>
                                                                    <th scope="col">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_dokter as $dokter)
                                    <tr align="center">
                                        <td><?= $dokter->id ?></td>
                                        <td class="text-start"><?= $dokter->kode_dokter ?></td>
                                        <td class="text-start"><?= $dokter->nama_dokter ?></td>
                                        <td class="text-start"><?= $dokter->keahlian ?></td>
                                        <td class="text-start"><?= $dokter->telepon ?></td>
                                        <td class="text-start"><?= $dokter->alamat ?></td>
                                        <td>
                                            <a type="button" class="btn btn-warning"
                                                href="detail/{{ $dokter->id }}">Detail
                                                Page</a>
                                            <a type="button" class="btn btn-primary" href="edit/{{ $dokter->id }}">Edit
                                                Page</a>
                                            <form action="/dokter/delete/{{ $dokter->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger"
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
