@extends('layouts.app')

@section('title', 'MdCategory')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add master data Category') }}</div>

                <div class="card-body">
                    <form action="/admin/md_category" method="post">
                        @csrf
                        <input type="text" name="category_name" placeholder="Enter Category Name" class="form-control mb-2" />
                        <input type="text" name="api" placeholder="Enter API Link of Category" class="form-control mb-2">
                        <input type="submit" value="Submit" class="btn btn-primary form-control">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection