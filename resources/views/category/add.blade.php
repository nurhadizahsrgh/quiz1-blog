@extends('layouts.app')   
  
@section('content')   
 
<div class="container">   

        <h3>Tambah Data Kategori</h3>   
        <form action="{{ url('/category') }}" method="POST">   
            @csrf   
            <div class="form-group">
                <label for="">NAMA</label>
                <input type="text" name="cat_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">TEKS</label>
                <textarea name="cat_text" class="form-control"></textarea>
            </div>
            <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary btn-sm">
            </div> 
        </form>   
</div>   
@endsection 