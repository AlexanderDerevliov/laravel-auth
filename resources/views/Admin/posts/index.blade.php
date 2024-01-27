@extends('layouts.admin');

@section('content')

<div class="container mt-5" >

    <h2>La lista dei post</h2>

    <div class="text-end">
        <a class="btn btn-secondary" href="{{ route('admin.posts.create') }}">Crea un nuovo post</a>
    </div>

    <table class="table table-striped mt-4">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                 <tr>
                    <th scope="row">{{ $post->id  }}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                       <a class="btn btn-success" href="{{ route('admin.posts.show', ['post' => $post->slug]) }}">Dettagli</a>


                    </td>
                 </tr>
            @endforeach
        </tbody>
      </table>

</div>
    
@endsection