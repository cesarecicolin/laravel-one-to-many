@extends('layouts.admin')
@section('content')
    <div class="container mt-5">

        <div class="mb-3 has-validation">
            <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }} " method="POST">
                @csrf
                @method('PUT')
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"id="title" name="title"
                    value="{{ old('title', $project->title) }}">

                @error('title')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror

        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $project->title) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="type">seleziona tipologia</label>
            <select name="type_id" id="type">
                <option  value="">nessuna</option>

                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>

        </div>
        <button class="btn btn-success" type="submit">Save</button>
        </form>

    </div>
@endsection
