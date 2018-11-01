@extends('admin.layouts.app_admin')

@section('content')
<div class="container">  
    <div class="row">  
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Categories[0]</span></p>
            </div>
        </div>  
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Materialas[0]</span></p>
            </div>
        </div>  
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Users[0]</span></p>
            </div>
        </div>  
        <div class="col-sm-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Users today[0]</span></p>
            </div>
        </div>  
    </div> 
    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-block btn-default" href="#">Create categoty</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Last category</h4>
                <p class="list-group-item-text">Lelele - fsdklgn</p>
            </a>
        </div>
         <div class="col-sm-6">
             <a class="btn btn-block btn-default" href="#">Create material</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Last material</h4>
                <p class="list-group-item-text">Lelelefsa - fasdfsafsac</p>
            </a>
        </div>
    </div>
</div>
@endsection