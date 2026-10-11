@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card :title="$post->title">
        <p class="text-muted small">{{ $post->created_at->format('d M Y, H:i') }}</p>
        <p class="card-text" style="white-space: pre-line;">{{ $post->content }}</p>

        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>
        <a href="{{ route('posts.index') }}" class="btn btn-sm btn-outline-secondary">Kembali</a>
    </x-card>
@endsection