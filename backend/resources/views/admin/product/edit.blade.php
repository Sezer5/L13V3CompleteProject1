    @extends('layouts.adminlayout')
    @section('title')
        Products
    @endsection
    @section('content')
        <main class="p-4">
            <div class="container-fluid">
                <h2 class="mb-4 fw-bold" style="color: var(--dark-color);">Product Create</h2>
                <div class="card p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.product.update', $product->slug) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name', $product->name) }}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty"
                                    value="{{ old('qty', $product->qty) }}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror"
                                    name="price" value="{{ old('price', $product->price) }}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sizes*</label>
                                <select multiple class="form-select form-select-sm" name="size_id[]">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}"
                                            {{ in_array($size->id, $product->sizes->pluck('id')->toArray()) ? 'selected' : '' }}>
                                            {{ $size->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Colors*</label>
                                <select multiple class="form-select form-select-sm" name="color_id[]">
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}"
                                            {{ in_array($color->id, $product->colors->pluck('id')->toArray()) ? 'selected' : '' }}>
                                            {{ $color->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="desc" rows="3">{{ old('desc', $product->desc) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Thumbnail</label><br>
                                <img src="{{ asset($product->thumbnail) }}" width="100" alt="Thumbnail">
                                <input type="file" class="form-control mt-2 @error('thumbnail') is-invalid @enderror"
                                    name="thumbnail" />
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    @endsection
