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
                class="form-control" 
                value="{{ old('name', $category->name ?? '') }}" 
                required
            >
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea 
                name="description" 
                class="form-control"
                rows="4"
            >{{ old('description', $category->description ?? '') }}</textarea>
        </div>

        <!-- Image Upload Field -->
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if(isset($category) && $category->image)
                <img src="{{ asset('storage/category_images/' . $category->image) }}" alt="Category Image" class="mt-2" width="120">
            @endif
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">
            {{ isset($category) ? 'Update' : 'Create' }}
        </button>
    </form>
</div>
@endsection
