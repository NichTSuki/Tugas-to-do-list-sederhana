@extends('TodoList.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-header fw-bold ">
            <h4>Edit Task</h4>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/update/{{ $task->id }}/edit" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tugas" class="form-label">Tugas</label>
                    <input type="text" name="tugas" class="form-control @error('tugas') is-invalid @enderror"
                        id="tugas" autocomplete="off" value="{{ old('tugas', $task->tugas) }}">
                    @error('tugas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <textarea name="status" class="form-control @error('status') is-invalid @enderror" id="status"
                        rows="3">{{ old('status', $task->status) }}</textarea>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="keterangan" class="form-label">Keterangan</label>
                <div class="input-group mb-3">
                    {{-- <span class="input-group-text" id="basic-addon1"></span> --}}
                    <input name="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror"
                        id="keterangan" autocomplete="off" value="{{ old('keterangan', $task->keterangan) }}">
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-3 mb-3">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>
    </div>
@endsection
