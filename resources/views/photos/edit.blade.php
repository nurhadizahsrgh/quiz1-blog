@extends('layouts.app')   
  
@section('content')   
 
<div class="container">   

        <h3>Edit Data Photos</h3>   
        <form action="{{ url('/photos' . $row->photos_id) }}" method="POST">
            @csrf   
            <div class="form-group">
                <label for="">DATE</label>
                <input type="date" name="photos_date" class="form-control" value="{{ $row->photos_date}}">
            </div>
            <div class="form-group">
                <label for="">TITLE</label>
                <input type="text" name="photos_title" class="form-control" value="{{ $row->photos_title}}">
            </div>
            <div class="form-group">
                <label for="">TEKS</label>
                <textarea name="photos_text" class="form-control">{{ $row->photos_text }}</textarea>
            </div>
            <div class="form-group">
                <label for="">POST</label>
                <select name="post_id" class="form-control" value="{{ $row->photos_post_id}}">
						@foreach($lst as $row)
						<option value ="{{ $row->post_id }}">{{ $row->post_id }}</option>
						@endforeach
				    </select>
            </div>
            <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary btn-sm">
            </div> 
        </form>   
</div>   
@endsection 