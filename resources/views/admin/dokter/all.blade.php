@extends('admin.layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 class="text-light">Data Dokter</h1>
                @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
                <br>
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                            </div>
                            <div class="col-md-10">
                                <form action="/admin/dokter/all" method="GET" role="search">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="dokter_id" id="" class="form-select">
                                                <option name="dokter_id" value="0" selected="true">Keahlian</option>
                                                @foreach ($data_dokter as $doctor)
                                                    @if (request('dokter_id') == $doctor->id)
                                                        <option name="dokter_id" value="{{ $doctor->id }}" selected>
                                                            {{ $doctor->keahlian }}
                                                        </option>
                                                    @else
                                                        <option name="dokter_id" value="{{ $doctor->id }}">
                                                            {{ $doctor->keahlian }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group mb-3">
                                                <input type="text" name="search" class="form-control"
                                                    placeholder="Search name.." aria-label="Search username"
                                                    aria-describedby="basic-addon2" value="{{ request('search') }}">
                                                <button class="btn btn-outline-secondary" id="search"
                                                    type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">

                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Kode</th>
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
                                @if ($data_dokter->count())
                                    @foreach ($data_dokter as $dokter)
                                        <tr align="center">
                                            <td><?= $loop->iteration ?></td>
                                            {{-- <td><?= $dokter->id ?></td> --}}
                                            <td class="text-start"><?= $dokter->kode_dokter ?></td>
                                            <td class="text-start"><?= $dokter->nama_dokter ?></td>
                                            <td class="text-start"><?= $dokter->keahlian ?></td>
                                            <td class="text-start"><?= $dokter->telepon ?></td>
                                            <td class="text-start"><?= $dokter->alamat ?></td>
                                            <td>
                                                <a type="button" class="btn btn-outline-warning"
                                                    href="detail/{{ $dokter->id }}">Detail
                                                    Page</a>
                                                <a type="button" class="btn btn-outline-primary"
                                                    href="edit/{{ $dokter->id }}">Edit
                                                    Page</a>
                                                <form action="delete/{{ $dokter->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-outline-danger"
                                                        onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8" align="center">Data Tidak Ditemukan</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="">
                            {{ $data_dokter->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
