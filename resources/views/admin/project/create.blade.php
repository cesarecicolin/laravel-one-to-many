@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 has-validation">
                
                <label for="title" class="form-label">Title</label>
                <input type="text"
                    class="form-control @error('title') is-invalid @enderror"id="title" name="title" value="{{ old('title') }}">

                @error('title')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">img</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <label for="type">scegli la tipologia</label>
                <select name="type_id" id="type">
                    <option value="">nessuna</option>
                    @foreach ($types as  $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                        
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success" type="submit">Save</button>


        </form>
    </div>
@endsection
