@extends('layouts.app')

@section('content')

@include('errors.error')

<div class="panel panel-default">
	<div class="panel-heading">
		Edit Product {{$product->name}}
	</div>
	<div class="panel-body">
		<form method="post" enctype="multipart/form-data" action="{{ route('products.update',['id'=>$product->id]) }}">
			{{ csrf_field() }}
			{{ method_field('PUT')}}    
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" value="{{$product->name}}">
			</div>
			<div class="form-group">
				<label for="price">product Price</label>
				<input type="text" name="price" class="form-control" value="{{$product->price}}">
			</div>
			<div class="form-group">
				
				<img src="{{asset($product->image)}}" width="50px" height="50px">
				<label for="image">Upload New Image</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="description" rows="5" cols="5" class="form-control">{{$product->description}}</textarea>
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