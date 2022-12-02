@extends('master')
@section('title','Data Game')

@section('content')
<style>
    .bg-blue {
        background-color: blue;
        color: white;
    }

    .bt-blue {
        background-color: blue;
        color: white;
    }
</style>
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-12">
            <h2>Tambah List Game</h2>
            <p>Silahkan masukkan data game anda!</p>
            @if (session()->has('message'))
            <div class="my-3">
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            </div>
            @endif
            <form action="{{route('game.store')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama game" class="form-control" value="{{old('nama')}}">
                    @error('nama')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="dev" class="form-label">Developer</label>
                    <input type="text" name="dev" id="dev" placeholder="Masukkan Nama Developer" class="form-control" value="{{old('dev')}}">
                    @error('dev')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="genre" class="form-label">Genre</label>
                    <select name="genre" id="genre" class="form-control">
                        <option value="fantasy" {{old('genre') == "fantasy" ? "selected" : ""}}>fantasy</option>
                        <option value="action" {{old('genre') == "action" ? "selected" : ""}}>action</option>
                        <option value="racing" {{old('genre') == "racing" ? "selected" : ""}}>racing</option>
                        <option value="rhythm" {{old('genre') == "rhythm" ? "selected" : ""}}>rhythm</option>
                        <option value="shooter" {{old('genre') == "shooter" ? "selected" : ""}}>shooter</option>
                    </select>
                    @error('genre')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" name="publisher" id="publisher" placeholder="Masukkan Nama Publisher" class="form-control" value="{{old('publisher')}}">
                    @error('publisher')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="platform" class="form-label">Platform</label>
                    <select name="platform" id="platform" class="form-control">
                        <option value="mobile" {{old('platform') == "mobile" ? "selected" : ""}}>mobile</option>
                        <option value="console" {{old('platform') == "console" ? "selected" : ""}}>console</option>
                        <option value="pc" {{old('platform') == "pc" ? "selected" : ""}}>pc</option>
                    </select>
                    @error('platform')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" name="rating" id="rating" placeholder="Masukkan Rating dari game" class="form-control" value="{{old('rating')}}">
                    @error('rating')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info"><b class="text-white">Tambah</b></button>
                <p></p>
            </form>
        </div>
    </div>
</div>
@endsection