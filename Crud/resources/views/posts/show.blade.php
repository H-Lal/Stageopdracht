@extends('layouts.app')
@section('content')
    <link href="{{asset('css/show.css')}}" rel="stylesheet" type="text/css" >
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <h2> Show Post</h2>
                <div class="pull-right">
                </div>

                <br/>
                </div>
                <table class="table table-striped table-responsive table-responsive">
                    <tr>
                        <th>Naam : </th>
                        <th>Adres : </th>
                        <th>Email : </th>
                        <th>Made at : </th>
                        <th>Updated at : </th>
                        </th>
                    </tr>
                    <tr>
                        <td>{{ $post->naam }}</td>
                        <td>{{ $post->adres }}</td>
                        <td>{{ $post->email }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>

                    </tr>
                </table>
                <div class="form-group">
                   <a class="btn btn-primary " href="{{ route('posts.index') }}">Back</a>
                </div>
        </div>
    </div>
@endsection