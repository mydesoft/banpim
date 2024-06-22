@extends('layouts.app')
@section('content')
        
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<a href="/create-media" class="btn btn-sm btn-primary">Create</a>
				<div class="row mt-4">
					<div class="table-responsive">
						<table id="example" class="display table" style="min-width: 845px">
							<thead>
								<tr>
									<th>S/N</th>
									<th>Name</th>
									<th>Media</th>
									<th>Description</th>
									<th>Category</th>
									<th>Created</th>
									
								</tr>

							</thead>
							<tbody>
								@foreach($medias as $i => $media)
									<tr>
										<td>{{$i + 1}}</td>
										<td>{{$media->name}}</td>
										<td><img src="{{asset('storage/image/'.$media->image)}}" alt="" width="40"></td>
										<td>{{$media->description}}</td>
										<td>{{$media->category->name}}</td>
										<td>{{$media->created_at}}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
        </div>
		
 @endsection     

