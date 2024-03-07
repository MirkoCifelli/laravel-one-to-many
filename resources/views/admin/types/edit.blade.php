@extends('layouts.app')

@section('page-title', $type->title . 'Edit')

@section('main-content')
    <h1 class="text-center">
        {{ $type->title }} Edit
    </h1>

    <div class="row">
        <div class="col py-4">
            <div class="container">
                <div class="mb-4">
                    <a href="{{ route('admin.types.index') }}" class="btn btn-primary">
                        Torna all'index del types
                    </a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.types.show', ['type' => $type->id]) }}" method="POST">

                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                        <input value="{{ old('title', $type->title) }}" type="text"
                            class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                            placeholder="Inserisci il titolo..." maxlength="255">
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning w-100">
                            Modifica
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
