@extends('layouts.app')   
  
@section('content')   
 
<div class="container">   

        <h3>Tambah Data Album</h3>   
        <form action="{{ url('/album') }}" method="POST">   
            @csrf   
            <div class="form-group">
                <label for="">NAME</label>
                <input type="text" name="album_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">TEXT</label>
                <textarea name="album_text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">ID PHOTOS</label>
                <select name="photos_id" class="form-control">
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