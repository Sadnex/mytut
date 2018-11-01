@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    
    @component('admin.components.breadcrumb')
        @slot('title') Category list @endslot
        @slot('parent') Admin home @endslot
        @slot('active') Categories @endslot
    @endcomponent
    
    <hr/>
    
    <a href='{{route('admin.category.create')}}' class='btn btn-primary pull-right'><i class='fafa-plus-square-o'></i> Create category</a>
    
    <table class="table table-striped">
        <thead>
           <th>Cat name</th>
           <th>Publish</th>
           <th class='text-right'>Actions</th>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->published}}</td>
                <td>
                    <a href='{{route('admin.category.edit',['id'=>$category->id])}}'><i class='fafa-edit'></i></a>
                </td>
            </tr>
            @empty
            <tr><td colspan="3"><h2>No categories</td></tr>
            @endforelse
        </tbody>
    </table>
    
</div>

@endsection