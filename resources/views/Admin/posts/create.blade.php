@extends('layouts.admin');


@section('content')
    <div class="container mt-5">

        <h2>Crea un nuovo post</h2>
        
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)

                  <li>{{ $error }}</li>
                      
                  @endforeach

                </ul>
            </div>
        @endif --}}

        <form class="mt-5" action="{{ route('admin.posts.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" id="content" rows="3" name="content"> {{ old('content') }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">Salva</button>
        </form>

    </div>
@endsection
