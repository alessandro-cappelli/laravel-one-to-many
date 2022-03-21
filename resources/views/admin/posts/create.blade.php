@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <form action="{{route("admin.posts.store")}}" method="POST">
    @csrf

        <ul>
            <li>
                <div class="form-group">
                    <label for="title">Titolo blog</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del tuo post" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <input type="content" class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="3" placeholder="Inserisci il contenuto" value="{{old('content')}}">
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label for="author">Autore del blog</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Autore" value="{{old('author')}}">
                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </li>
            <button type="submit" class="btn btn-primary">Crea</button>
        </ul>
    </form> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection