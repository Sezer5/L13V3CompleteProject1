    @extends('layouts.adminlayout')
    @section('title')
        Colors
    @endsection
    @section('content')
        <main class="p-4">
            <div class="container-fluid">
                <h2 class="mb-4 fw-bold" style="color: var(--dark-color);">Color Create</h2>
                <div class="card p-4">
                    <form action="{{ route('admin.color.update', $color->slug) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Please enter name*"
                                    value="{{ $color->name, old('name') }}" />
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 text-right">
                                <button type="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    @endsection
