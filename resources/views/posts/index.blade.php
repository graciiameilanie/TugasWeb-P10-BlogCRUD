@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <h1 class="h3 mb-3">Daftar post</h1>

    @forelse ($posts as $post)
        <x-card :title="$post->title">
            <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 120) }}</p>
            <p class="text-muted small">{{ $post->created_at->format('d M Y') }}</p>

            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-dark">Lihat</a>
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">Edit</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Hapus post ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </x-card>
    @empty
        <x-alert type="warning">Belum ada post. Klik "Tulis post" untuk mulai.</x-alert>
    @endforelse

    {{ $posts->links() }}
@endsection