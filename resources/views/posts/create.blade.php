@extends('layouts.app')

@section('title', 'Tulis Post')

@section('content')
    <h1 class="h3 mb-3">Tulis post baru</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts._form', ['submitLabel' => 'Simpan post'])
    </form>
@endsection