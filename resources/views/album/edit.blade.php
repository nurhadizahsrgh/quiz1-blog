@extends('layouts.app')   
  
@section('content')   
 
<div class="container">   

        <h3>Edit Data Album</h3>   
        <form action="{{ url('/album' . $row->album_id) }}" method="POST">
            @csrf   
            <div class="form-group">
                <label for="">NAME</label>
                <input type="text" name="album_name" class="form-control" value="{{ $row->album_name}}">
            </div>
            <div class="form-group">
                <label for="">TEKS</label>
                <textarea name="album_text" class="form-control">{{ $row->album_text }}</textarea>
            </div>
            <div class="form-group">
                <label for="">ID PHOTOS</label>
                <select name="photos_id" class="form-control" value="{{ $row->album_photos_id}}">
						@foreach($lst as $row)
						<option value ="{{ $row->photos_id }}">{{ $row->photos_id }}</option>
						@endforeach
				    </select>
            </div>
            <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary btn-sm">
            </div> 
        </form>   
</div>   
@endsection 