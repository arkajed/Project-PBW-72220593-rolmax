@extends('layouts.main')
@section('title', 'Form Edit Watch')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            {{-- FORM edit Watch DISINI --}}
            <form action="/update/{{ $wc->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" name="merk" class="form-control" value="{{ $wc->merk }}" required>
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input type="file" name="model" class="form-control-file" accept="image/*">
                </div>
                <div>
                    <img src="{{ asset('/storage/'.$wc->model)}}" alt="{{$wc->model}}" height="80" width="80">
                </div>
                <div class="form-group">
                    <label>Tipe</label>
                    <select name="tipe">
                        <option value="0">--Pilih Tipe--</option>
                        <option value="Analog" {{ ($wc->tipe == "Analog") ? "Selected":"" }}>Analog</option>
                        <option value="Digital" {{ ($wc->tipe == "Digital") ? "Selected":"" }}>Digital</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" value="{{ $wc->warna }}" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection