@extends('layouts.app')

@section('content')

@include('errors.error')

<div class="panel panel-default">
	<div class="panel-heading">
		Create a new Product
	</div>
	<div class="panel-body">
		<form method="post" enctype="multipart/form-data" action="{{ route('products.store') }}">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" value="{{ old('name') }}">
			</div>
			<div class="form-group">
				<label for="price">product Price</label>
				<input type="text" name="price" class="form-control" value="{{ old('price') }}">
			</div>
			<div class="form-group">
				<label for="image">Upload Image</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="description" rows="5" cols="5" class="form-control">{{ old('description') }}</textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</div>
		</form>
	</div>
	
</div>
	
@endsection

@section('styles')
   <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop

@section('scripts')
   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
   <script>
       $(document).ready(function() {
           $('#description').summernote();
       });
     </script>
@stop