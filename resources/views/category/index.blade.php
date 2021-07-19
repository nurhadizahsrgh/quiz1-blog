@extends('layouts.app')

@section('content')

<div class="container">

    <h3> Daftar Kategori <a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a></h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>TEKS</th>
            <th>EDIT</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->cat_id }}</td>
            <td>{{ $row->cat_name }}</td>
            <td>{{ $row->cat_text }}</td>
            <td><a href="{{ url('category/' . $row->cat_id . '/edit') }}" class="btn btn-success btn-sm">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection