@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h1 class="h3 mb-3">Edit post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        @include('posts._form', ['submitLabel' => 'Simpan perubahan'])
    </form>
@endsection