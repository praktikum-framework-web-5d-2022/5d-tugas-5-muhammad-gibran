@extends('master')
@section('title','Data Game')
@section('menu','active')

@section('content')
<style>
    .bg-blue {
        background-color: blue;
        color: white;
    }

    .text-blue {
        color: blue;
        font-weight: bold
    }
</style>
<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h2>Data Game</h2>
                <a href="{{route('game.create')}}" class="btn bg-info"><b class="text-white">Tambah</b></a>
            </div>
            <p>Dibawah ini merupakan <span class="text-info">List Game</span></p>
            @if (session()->has('message'))
            <div class="my-3">
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" align="center">
                    <thead>
                        <tr align="center">
                            <th align="center" class="align-middle" rowspan="2">No</th>
                            <th align="center" class="align-middle" rowspan="2">Nama</th>
                            <th align="center" class="align-middle" rowspan="2">Developer</th>
                            <th align="center" class="align-middle" rowspan="2">Genre</th>
                            <th align="center" colspan="3">Detail Game</th>
                            <th align="center" class="align-middle" rowspan="2">Aksi</th>
                        </tr>
                        <tr align="center">
                            <td align="center">Publisher</td>
                            <td align="center">Platform</td>
                            <td align="center">Rating</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($games as $game)
                        <tr>
                            <td align="center">{{$loop->iteration}}</td>
                            <td align="center">{{$game->nama}}</td>
                            <td align="center">{{$game->nama}}</td>
                            <td align="center">{{$game->genre}}</td>
                            <td align="center">{{$game->datagame->publisher}}</td>
                            <td align="center">{{$game->datagame->platform}}</td>
                            <td align="center">{{$game->datagame->rating}}</td>
                            <td align="center">
                                <div class="d-flex">
                                    <a href="{{route('game.edit', ['game'=>$game->id])}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('game.destroy', ['game'=>$game->id])}}" method="POST" class="ms-1">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <td colspan="11">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection