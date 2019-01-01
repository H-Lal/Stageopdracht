@extends('layouts.app')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h2>Create, Read, Update and Delete Users</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive table-striped ">
        <tr>
            <th>Naam</th>
            <th>Adres</th>
            <th>Email</th>
            <th>Geupdate om</th>
            <th class="text-center">
                <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">Create + </a>
            </th>
        </tr>
        @foreach ($post as $key => $value)
            <tr>
                <td>{{ $value->naam }}</td>
                <td>{{ $value->adres }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->updated_at }}</td>
                <td with="50px" class="text-center">
                    <a class="btn btn-info btn-sm " href="{{route('posts.show',$value->id)}}">View</a>                               {{--zie de post--}}
                    <a class="btn btn-primary btn-sm " href="{{route('posts.edit',$value->id)}}">Edit</a>                            {{--pas de post aan--}}
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm ">Delete</button>                    {{--verwijder de post--}}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection