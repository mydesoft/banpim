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
                            <h4 class="mt-4">Create Produts</h4>
                            <center>

                                <small class="text-danger text-center">Kindly create a category before you create a product</small>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="col-md-8 offset-md-2">
                                <form method="POST" action="/create-product">
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
                                        <label><strong>Title</strong></label>
                                        <input type="text" class="form-control" name="title">
                                        @if($errors->has('title'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('title')}}
                                            </span>
                                        @endif
                                    </div>
                        

                                    <div class="mb-3">
                                        <label><strong>Tag</strong></label>
                                        <input type="text" class="form-control" name="tag">
                                        @if($errors->has('tag'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('tag')}}
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
                                        <label><strong>Size</strong></label>
                                        <input type="text" class="form-control" name="size">
                                        @if($errors->has('size'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('size')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label><strong>Weight</strong></label>
                                        <input type="text" class="form-control" name="weight">
                                        @if($errors->has('weight'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('weight')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label><strong>Sku</strong></label>
                                        <input type="text" class="form-control" name="sku">
                                        @if($errors->has('sku'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('sku')}}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label><strong>Colour</strong></label>
                                        <input type="text" class="form-control" name="colour">
                                        @if($errors->has('colour'))
                                            <span class="text-danger text-small" role="alert">
                                                {{$errors->first('colour')}}
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

