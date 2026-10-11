@props(['title'])

<div class="card shadow-sm mb-3">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        {{ $slot }}
    </div>
</div>