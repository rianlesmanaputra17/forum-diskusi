@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex flex-column flex-wrap flex-md-nowrap  pt-3 pb-2 mb-3 border-bottom">
        <h6>Hallo, {{ auth()->user()->name }}</h6>
        <h1 class="h2">Selamat Datang di Forum Diskusi </h1>
    </div>

    @foreach ($questions as $question)
        <div class="card mb-3">
            <h5 class="card-header">{{ $question->title }}</h5>
            <div class="card-body ">
                <h6 class="card-title mb-0">{{ $question->user->name }} - {{ $question->category->name }}</h6>
                <small class="text-secondary">{{ $question->created_at->diffForHumans() }}</small>
                <p class="card-text mt-2">{!! $question->desc !!}</p>
                <a href="/dashboard/forum/{{ $question->id }}" class="btn btn-sm btn-primary">Lihat Detail</a>
            </div>
        </div>
    @endforeach
@endsection
