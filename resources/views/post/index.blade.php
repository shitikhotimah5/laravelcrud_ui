@extends('layouts.app')
@section('title', 'Semua Post')
@section('content')

<div class="wrapper">

  <h1 style="text-align: center;">Semua Post</h1>
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif

  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <a href="{{route('posts.create')}}" class="btn-tambah">Tambah Post</a>

  <table style="width:100%">

    <thead>

      <tr>
        <th>Title</th>
        <th>Body</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td style="width: 200px" >{{ $post->title}}</td>
        <td style="width: 500px" >{{ $post->body }}</td>
        {{-- <td style="width: 100px"><a href="{{route('posts.edit',$post)}}" class="btn-green">Edit</a></td> --}}
        {{-- <td style="width: 100px"> <a href="{{route('posts.destroy',$post)}}" id="delete-form" class="btn-red" onclick="notifikasidelete(event, this)">Hapus</a></td> --}}

        <form method="POST" action="{{ url('posts', $post->id ) }}">
            @csrf
            @method('DELETE')

            <td style="width: 8%"><button class="btn-red">Hapus</button>
                <a href="{{route('posts.edit',$post)}}" class="btn-green">Edit</a>
            </td>
          </form>
    </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
