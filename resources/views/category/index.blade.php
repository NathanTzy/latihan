@extends('admin.create')


@section('content')
    <h1>Category Index</h1>
    <hr>
    <div class="container d-flex justify-content-end">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create category</a>
    </div>


    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            @foreach ($category as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td><a href="{{ route('category.show', $row->id) }}" class="btn btn-info">Show Category</a>
                        <a href="{{ route('category.edit', $row->id) }}" class="btn btn-warning">edit Category</a>
                        <form action="{{ route('category.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash">DELETE</i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
    <tbody>
        <tr>
            <td>1</td>
            <td>Category 1</td>
        </tr>
    </tbody>
@endsection
