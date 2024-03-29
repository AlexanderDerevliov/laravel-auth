@extends('layouts.admin');

@section('content')
    <div class="container mt-5">
        <h2>Modifica il tuo Post</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        <form class="mt-5" action="{{ route('admin.posts.update', ['post' => $post->slug]) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">

            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" id="content" rows="3" name="content"> {{ $post->content }}</textarea>
            </div>

            <button class="btn btn-secondary" type="submit">Salva le Modifiche</button>

        </form>
















    </div>

@endsection
