@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group mb-2">
                    <a href="{{ url('kategori-items') }}" class="btn btn-secondary">Kembali ke Daftar Item</a>
                </div>
                <div class="card">
                    <div class="card-header">Kategori Item</div>

                    <div class="card-body">
                        <table>
                            <tr>
                                <th>Kode</th>
                                <td>:</td>
                                <td>{{ $data->kode }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Data relasi</td>
                                <br>

                            </tr>
                            @foreach ($data->master_items as $master)
                                <tr>
                                    <td>{{ $master->kode }}</td>
                                    <td>{{ $master->nama }}</td>
                                    <td>{{ $master->jenis }}</td>
                                    <td>{{ $master->harga_beli }}</td>
                                    <td>{{ $master->harga_jual }}</td>
                                    <td>{{ $master->supplier }}</td>
                                </tr>
                            @endforeach

                        </table>
                        <a class="btn btn-info" href="{{ url('kategori-items/form/edit') }}/{{ $data->id }}">Edit</a>
                        <a class="btn btn-danger" href="{{ url('kategori-items/delete') }}/{{ $data->id }}"
                            onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
