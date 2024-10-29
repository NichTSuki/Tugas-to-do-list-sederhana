@extends('TodoList.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">Tugas :</span>
            <h2>{{ $data->tugas }}</h2>
        </div>
        <div class="desc mt-4">
            <span class="text-secondary">Status :</span>
            <h2>{{ $data->status }}</h2>
        </div>
        <div class="price mt-4">
            <span class="text-secondary">Keterangan :</span>
            <h2>{{ $data->keterangan }}</h2>
        </div>
    </div>
@endsection
