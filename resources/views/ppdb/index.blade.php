@extends('layouts.app')

@section('content')


<div class="container">
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Selamat Datang {{Auth::user()->name}}</h1>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Anda</h4>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-12">
                                    <div class="card">
                                        <div class="section-title"></div>
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">nis</th>
                                                        <th scope="col">nama</th>
                                                        <th scope="col">jenis_kelamin</th>
                                                        <th scope="col">tempat_lahir</th>
                                                        <th scope="col">tgl_lahir</th>
                                                        <th scope="col">alamat</th>
                                                        <th scope="col">asal_sekolah</th>
                                                        <th scope="col">kelas</th>
                                                        <th scope="col">jurusan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($ppdb as $ppdb)
                                                    <tr>
                                                        <td>{{$ppdb->id}}</td>
                                                        <td>{{$ppdb->nis}}</td>
                                                        <td>{{$ppdb->nama}}</td>
                                                        <td>{{$ppdb->jenis_kelamin}}</td>
                                                        <td>{{$ppdb->tempat_lahir}}</td>
                                                        <td>{{$ppdb->tgl_lahir}}</td>
                                                        <td>{{$ppdb->alamat}}</td>
                                                        <td>{{$ppdb->asal_sekolah}}</td>
                                                        <td>{{$ppdb->kelas}}</td>
                                                        <td>{{$ppdb->jurusan}}</td>
                                                        <td>
                                                            <a class="btn btn-primary" href="/edit/{{ $ppdb->id }}">Edit</a>
                                                            <form action="/delete/{{ $ppdb->id }}" method="post">
                                                                @csrf
                                                                @method("delete")
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
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
                    </div>
                </div>
            </div>
        </section>
    </div>


    <canvas id="myChart" height="158"></canvas>
</div>
</div>
</div>
</div>

@endsection