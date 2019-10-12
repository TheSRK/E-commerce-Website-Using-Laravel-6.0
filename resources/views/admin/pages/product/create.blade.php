@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">

            <div class="card-header">
                Add Product
            </div>
            <div class="card-body">
                <form action="{{ route("admin.product.store") }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('admin.partials.messages')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" 
                            placeholder="Enter Product Title">
                        
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Write Product description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" class="form-control" name="price" id="exampleInputEmail1" 
                            placeholder="Enter Product Title">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" 
                            placeholder="Enter Product Title">
                        
                    </div>
                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <div class="row">
                            <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>    
                            <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>    
                            <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>    
                            <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>    
                            <div class="col-md-4">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" >
                            </div>    
                        </div>
                        
                    </div>

                
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>


        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->

    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection