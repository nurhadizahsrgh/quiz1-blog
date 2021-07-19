@extends('layouts.app')

@section('content')

<div class="container">

    <h3> Daftar Post <a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a></h3>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>DATE</th>
            <th>SLUG</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>ID CATEGORY</th>
            <th>EDIT</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->post_id }}</td>
            <td>{{ $row->post_date}}</td>
            <td>{{ $row->post_slug}}</td>
            <td>{{ $row->post_title}}</td>
            <td>{{ $row->post_text}}</td>
            <td>{{ $row->post_cat_id}}</td>
            <td><a href="{{ url('post/' . $row->post_id . '/edit') }}" class="btn btn-success btn-sm">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection