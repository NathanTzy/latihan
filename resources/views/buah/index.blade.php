@extends('admin.create')


@section('content')
    <h1>Category Index</h1>
    <hr>
    <div class="container d-flex justify-content-end">
        <a href="{{ route('buah.create') }}" class="btn btn-success">Create category</a>
    </div>
@endsection