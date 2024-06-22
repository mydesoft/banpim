@extends('layouts.app')
@section('content')
        
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<a href="/create-category" class="btn btn-sm btn-primary">Create</a>
				<div class="row mt-4">
					<div class="table-responsive">
						<table id="example" class="display table" style="min-width: 845px">
							<thead>
								<tr>
									<th>Name</th>
									<th>Slug</th>
									<th>No of Products</th>
									<th>Created</th>
									
								</tr>

							</thead>
							<tbody>
								@foreach($categories as $category)
									<tr>
										<td>{{$category->name}}</td>
										<td>{{$category->slug}}</td>
										<td>{{$category->products->count()}}</td>
										<td>{{$category->created_at}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
        </div>
		
 @endsection     

