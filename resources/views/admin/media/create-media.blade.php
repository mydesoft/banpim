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
                            <h4 class="mt-4">Create Media</h4>
                            
                        </div>
                        
                        <div class="card-body">
                            <center>

                                <small class="text-danger text-center">Kindly create a category before you create a media</small>
                            </center>
                        </div>
                            <div class="col-md-8 offset-md-2">
                                <form method="POST" action="/create-media" enctype="multipart/form-data">
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

                                    <div class="mb-3">
                                        <label><strong>Media</strong></label>
                                        <input type="file" class="form-control" name="image">
                                        @if($errors->has('image'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('image')}}
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label><strong>Category</strong></label>

                                       <select name="category_id" class="form-control">
                                        <option value="">Select category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                       </select>
                                        @if($errors->has('category_id'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('category_id')}}
                                            </span>
                                        @endif
                                    </div>
                                  

                                    <div class="mb-3">
                                        <label><strong>Description</strong></label>
                                        <textarea type="text" class="form-control" name="description" rows="10"></textarea>
                                        @if($errors->has('description'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('description')}}
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

