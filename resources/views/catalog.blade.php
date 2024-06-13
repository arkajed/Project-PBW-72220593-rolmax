@extends('layouts.main')
@section('title', 'Catalog')
@section('artikel')
    <div class="card">
        <div class="card-header">
            <a href="/catalog/add-form" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Watch</a>
        </div>
        <div class="card-body">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                @if (@session('alert'))
                    <strong>{{ session('alert')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                @endif
            </div>
            {{-- tabel disini --}}
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Tipe</th>
                <th>Warna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wc as $idx => $w)
                <tr>
                    <td>{{ $idx+1}}</td>
                    <td>{{ $w->merk }}</td>
                    <td>
                        <img src="{{ asset('/storage/'.$w->model)}}" alt="{{$w->model}}" height="80" width="80">
                    </td>
                    <td>{{ $w->tipe }}</td>
                    <td>{{ $w->warna }}</td>
                    <td>
                        <a href="/catalog/edit-form/{{ $w->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <a href="/delete/{{ $w->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
@endsection