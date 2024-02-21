@extends('admin.parent')
@section('content')
<div class="container d-flex justify-content-end">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Create Admin</a>
</div>

<div class="container text-center">
    <h5 class="fw-bold">USER</h5>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ACTION</th>
            <th>GENDER</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

@endsection