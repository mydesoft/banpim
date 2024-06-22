@extends('layouts.app')
@section('content')
        
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				
				<div class="row">
					<div class="card">
                        <div class="card-title">
                            <h4 class="mt-4">Create Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-md-8 offset-md-2">
                                <form method="POST" action="/create-category">
                                    @csrf
                                    <div class="mb-3">
                                        <label><strong>Name</strong></label>
                                        <input type="text" class="form-control" name="name">
                                        @if($errors->has('name'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('name')}}
                                            </span>
                                        @endif
                                    </div>
        
                                   
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Create</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
				</div>
			</div>
        </div>
		
 @endsection     

