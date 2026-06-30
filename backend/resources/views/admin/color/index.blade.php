    @extends('layouts.adminlayout')
    @section('title')
        Colors
    @endsection
    @section('content')
        <main class="p-4">
            <div class="container-fluid">
                <h2 class="mb-4 fw-bold" style="color: var(--dark-color);">Colors</h2>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card p-3">
                            <div class="d-flex align-items-center">
                                <a href="{{ route('admin.color.create') }}">
                                    <button class="btn btn-success"><i class="bi bi-plus"></i> Add</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card p-4">
                    <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $color)
                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td>{{ $color->name }}</td>
                                    <td>{{ $color->slug }}</td>
                                    <td><a href="{{ route('admin.color.edit', $color->slug) }}" class="btn btn-warning"><i
                                                class="bi bi-pencil"></i></a>
                                    </td>
                                    <td>
                                        <a href="#" onclick="deleteItem({{ $color->id }})"
                                            class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        <form id="{{ $color->id }}"
                                            action="{{ route('admin.color.destroy', $color->slug) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    @endsection
