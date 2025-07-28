@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">{{ isset($category) ? 'Edit' : 'Create' }} Category</h3>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form starts -->
    <form 
        method="POST" 
        action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" 
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($category)) @method('PUT') @endif

        <!-- Name Field -->
        <div class="mb-3">
            <label class="form-label">Name <span class="text-danger">*</span></label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name', $category->name ?? '') }}" 
                required
            >
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea 
                name="description" 
                class="form-control @error('description') is-invalid @enderror"
                rows="4"
            >{{ old('description', $category->description ?? '') }}</textarea>
            @error('description')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image Upload Field -->
        <div class="mb-3">
            <label for="inputImage" class="form-label"><strong>Image:</strong></label>
            <input 
                type="file" 
                name="image" 
                class="form-control @error('image') is-invalid @enderror" 
                id="inputImage"
            >
            @error('image')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror

            @if(isset($category) && $category->image)
                <div class="mt-3">
                    <img 
                        src="{{ asset('images/' . $category->image) }}" 
                        width="300" 
                        class="img-thumbnail"
                        alt="Category Image"
                    >
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">
            {{ isset($category) ? 'Update' : 'Create' }}
        </button>
    </form>
</div>
@endsection
