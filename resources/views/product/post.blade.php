@extends('product.layout')

@section('title', 'List of products')

@section('content')
<div class="bg-color" style="background: #f7f7f7">
            <div class="container">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    
<div class="type-2048">
    <div class="event-page">
        <div class="leave-reply">
            <!--TITLE/-->
            <h2>Send post</h2>
            <!--END TITLE/-->
            <form action="/post" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row-fluid">
                    <div class="col-md-12 text-content">
                        <div class="row">
                            <input name="name" type="text" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <textarea name="detail" placeholder="Data" cols="" rows=""></textarea>
                            <textarea name="token" placeholder="Token" cols="" rows=""></textarea>
                            <button class="btn-style">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
                </div>
            </div>
        </div>
@endsection