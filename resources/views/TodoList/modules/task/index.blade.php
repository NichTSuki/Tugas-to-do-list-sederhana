@extends('TodoList.layouts.index')

@section('main-content')
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header fw-bold ">
                    Dafftar Tugas
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr style="text-align: center">
                                <th scope="col">No</th>
                                <th scope="col">Tugas</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $task)
                                <tr style="text-align: center">
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $task->tugas }}</td>
                                    <td>{{ $task->status ==1? 'Done': 'On Progress...'}}</td>
                                    <td>{{ $task->keterangan }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="/details/{{ $task->id }}">
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </a>
                                            <a href="/update/{{ $task->id }}">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </a>
                                            <a href="/delete/{{ $task->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- ini buat nyambungin ke halaman selanjutnya --}}
            {{-- <div class="mt-3">
                {{$data->links()}}
            </div> --}}

        </div>
        <div class="col-lg-4">
            @include('TodoList.modules.task.create')
        </div>
    </div>
@endsection
