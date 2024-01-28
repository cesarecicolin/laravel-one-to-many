@extends('layouts.admin')
@section('content')
    <div class="container mt-5 ">
        <div class="text-end">
            <a class="btn btn-success" href="{{route('admin.projects.create')}}">crea</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->title}}</td>
                        <td>{{$project->created_at}}</td>
                        <td><a class="btn btn-primary" href="{{route('admin.projects.show',['project'=>$project->slug ])}}">dettagli</a>
                        <a class="btn btn-danger" href="{{route('admin.projects.edit', ['project' =>$project->slug])}}">modifica</a>

                            <form class="d-inline-block" action="{{ route('admin.projects.destroy' , ['project'=> $project->slug])}}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">eliminare</button>
                            </form>

                        </td>
                @endforeach


                </tr>

            </tbody>
        </table>
    </div>
@endsection
