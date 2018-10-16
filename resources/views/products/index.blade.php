@extends('layouts.app')

@section('content')

<div class="panel panel-default">
	<div class="panel-heading">
		ALL PRODUCTS
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td><img src="{{asset($product->image)}}" width="50px" height="50px"></td>
						<td>{{$product->name}}</td>
						<td>{{$product->price}}</td>
						<td>{{$product->description}}</td>
						<td><a href="{{ route('products.edit',['id'=>$product->id] ) }}" class="btn btn-xs btn-info">Edit</a></td>
						<td>
							<form action="{{ route('products.destroy',['id'=>$product->id] ) }}" method="post">
								{{csrf_field()}}
								{{method_field('DELETE')}}
								<button class="btn btn-xs btn-danger">Delete</button>
							</form>
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection