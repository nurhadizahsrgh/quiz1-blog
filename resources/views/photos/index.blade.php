@extends('layouts.app')

@section('content')

<div class="container">

    <h3> Daftar Photos <a href="{{ url('/photos/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a></h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>DATE</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>ID POST</th>
            <th>EDIT</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->photos_id }}</td>
            <td>{{ $row->photos_date}}</td>
            <td>{{ $row->photos_title}}</td>
            <td>{{ $row->photos_text}}</td>
            <td>{{ $row->photos_post_id}}</td>
            <td><a href="{{ url('photos/' . $row->photos_id . '/edit') }}" class="btn btn-success btn-sm">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection