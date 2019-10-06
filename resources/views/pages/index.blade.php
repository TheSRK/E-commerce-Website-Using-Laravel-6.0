@extends('layouts.master') 
 
 
 @section('content')
 {{-- Start sidebar and Content  --}}

 <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">First item</a>
                    <a href="#" class="list-group-item list-group-item-action">Second item</a>
                    <a href="#" class="list-group-item list-group-item-action">Third item</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget">
                    <h3>Featured Product</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" >
                                <img class="card-img-top featured-img" src="{{ asset("images/products/"."napa.png") }}"
                                    alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Napa </h4>
                                    <p class="card-text">BDT 2.00</p>
                                    <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="widget">

                </div>

            </div>
        </div>
    </div>


    {{-- End sidebar and content --}}
     
 @endsection