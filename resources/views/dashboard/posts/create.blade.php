@extends('dashboard.layouts.main')

@section('container')
<form method="post" action="/dashboard/posts" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-4">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required autofocus value="{{ old('title') }}">
      <div class="invalid-feedback mb-2">
        @error('title'){{ $message }}@enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" required value="{{ old('slug') }}">
      <div class="invalid-feedback mb-2">
        @error('slug'){{ $message }}@enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Kategori</label>
      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
          @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Pilih Gambar</label>
      <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image">
      <div class="invalid-feedback mb-2">
        @error('image'){{ $message }}@enderror
      </div>
    </div>    
    <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
    <trix-editor input="body"></trix-editor>
    <div class="is-invalid invalid-feedback mb-2">
      @error('body')
        {{ $message }}
      @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-2">Tambah</button>
</form>

{{-- js dibawah masih error --}}
{{-- <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script> --}}
@endsection