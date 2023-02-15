@extends('layouts.app')

@section('title', 'MdCategory')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hello') }}</div>

                <div class="card-body">
                    @if (empty($data))
                    <p>Data not found</p>
                    @else
                    <table>
                        <thead>
                            <th>Category Name</th>
                            <th>API URL</th>
                            <th>Action</th>
                        </thead>
                        @foreach ($data as $d)
                        <tr>
                            <td width="160px">
                                <p class="">{{$d['category_name']}}</p>
                            </td>
                            <td width="360px">
                                <p class="">{{$d['api']}}</p>
                            </td>
                            <td>
                                <a href="/admin/md_category/{{$d['id']}}" class="btn btn-sm btn-success">Edit</a>
                                <form action="/admin/md_category/{{$d['id']}}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                    <a href="/admin/md_category/create" class="btn btn-primary">Add a Category</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection