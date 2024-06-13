@extends('layouts.main')
@section('title', 'Form Add Watch')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            {{-- FORM ADD WATCH DISINI --}}
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" name="merk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input type="file" name="model" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Tipe</label>
                    <select name="tipe">
                        <option value="0">--Pilih Tipe--</option>
                        <option value="Analog">Analog</option>
                        <option value="Digital">Digital</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection