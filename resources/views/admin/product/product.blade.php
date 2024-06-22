@extends('layouts.app')
@section('content')
        
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<a href="/create-product" class="btn btn-sm btn-primary">Create</a>
				<div class="row mt-4">
					<div class="table-responsive">
						<table id="example" class="display table" style="min-width: 845px">
							<thead>
								<tr>
									<th>S/N</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Title</th>
									<th>Description</th>
									<th>Category</th>
									<th>Size</th>
									<th>Weight</th>
									<th>Sku</th>
									<th>Colour</th>
									<th>Created</th>
									
								</tr>

							</thead>
							<tbody>
								@foreach($products as $i => $product)
									<tr>
										<td>{{$i + 1}}</td>
										<td>{{$product->name}}</td>
										<td>{{$product->slug}}</td>
										<td>{{$product->title}}</td>
										<td>{{$product->description}}</td>
										<td>{{$product->category->name}}</td>
										<td>{{$product->size}}</td>
										<td>{{$product->weight}}</td>
										<td>{{$product->sku}}</td>
										<td>{{$product->colour}}</td>
										<td>{{$product->created_at}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
        </div>
		
 @endsection     

