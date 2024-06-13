@extends('layouts.app')

@section('content')
<div class="container">
    <h1>SMMEs and Their Categories</h1>
    <a href="{{ route('smmes.create') }}" class="btn btn-primary mb-3">Create SMME</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SMME ID</th>
                <th>SMME Name</th>
                <th>Categories</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($smmes as $smme)
                <tr>
                    <td>{{ $smme->id }}</td>
                    <td>{{ $smme->name }}</td>
                    <td>
                        @foreach($smme->categories as $category)
                            <span class="badge badge-secondary">{{ $category->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('smmes.show', $smme->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('smmes.edit', $smme->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('smmes.destroy', $smme->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('smmes.add_category', $smme->id) }}" class="btn btn-success">Add Category</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
