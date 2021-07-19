@extends('layouts.app')   
  
@section('content')   
 
<div class="container">   

        <h3>Edit Data Post</h3>   
        <form action="{{ url('/post' . $row->post_id) }}" method="POST">
            @csrf   
            <div class="form-group">
                <label for="">DATE</label>
                <input type="date" name="post_date" class="form-control" value="{{ $row->post_date}}">
            </div>
            <div class="form-group">
                <label for="">SLUG</label>
                <input type="text" name="post_slug" class="form-control" value="{{ $row->post_slug}}">
            </div>
            <div class="form-group">
                <label for="">TITLE</label>
                <input type="text" name="post_title" class="form-control" value="{{ $row->post_title}}">
            </div>
            <div class="form-group">
                <label for="">TEKS</label>
                <textarea name="post_text" class="form-control">{{ $row->post_text }}</textarea>
            </div>
            <div class="form-group">
                <label for="">CATEGORY</label>
                <select name="cat_id" class="form-control" value="{{ $row->post_cat_id}}">
						@foreach($lst as $row)
						<option value ="{{ $row->cat_id }}">{{ $row->cat_name }}</option>
						@endforeach
				    </select>
            </div>
            <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary btn-sm">
            </div> 
        </form>   
</div>   
@endsection 