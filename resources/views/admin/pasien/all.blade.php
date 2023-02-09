@extends('admin.layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 class="text-light">Data Pasien</h1>
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
                                <form action="/admin/pasien/all" method="GET" role="search">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="dokter_id" id="" class="form-select">
                                                <option name="dokter_id" value="0" selected="true" disabled="disabled">
                                                    Diagnosa</option>
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
                                    <th scope="col" class="text-start">Nama Pasien</th>
                                    <th scope="col" class="text-start">Birth</th>
                                    <th scope="col" class="text-start">Diagnosa</th>
                                    <th scope="col" class="text-start">Email</th>
                                    <th scope="col" class="text-start">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data_pasien->count())
                                    @foreach ($data_pasien as $pasien)
                                        <tr align="center">
                                            <td class="align-middle"><?= $loop->iteration ?></td>
                                            {{-- <td class="align-middle"><?= $pasien->id ?></td> --}}
                                            <td class="text-start align-middle"><?= $pasien->kode_pasien ?></td>
                                            <td class="text-start align-middle"><?= $pasien->nama_pasien ?></td>
                                            <td class="text-start align-middle"><?= $pasien->birthday ?></td>
                                            <td class="text-start align-middle"><?= $pasien->dokter->keahlian ?></td>
                                            <td class="text-start align-middle"><?= $pasien->email ?></td>
                                            <td class="text-start align-middle"><?= Str::limit($pasien->alamat, 18) ?>
                                            </td>
                                            <td class="text-start">
                                                <a type="button" class="btn btn-outline-warning"
                                                    href="detail/{{ $pasien->id }}">Detail
                                                    Data</a>
                                                <a type="button" class="btn btn-outline-primary"
                                                    href="edit/{{ $pasien->id }}">Edit
                                                    Data</a>
                                                <form action="delete/{{ $pasien->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-outline-danger"
                                                        onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                {{-- @elseif ($data_pasien->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/pasien/all">Back</a>
                                    </div> --}}
                                @else
                                    <tr>
                                        <td colspan="8" align="center">Data Tidak Ditemukan</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="">
                            {{ $data_pasien->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
