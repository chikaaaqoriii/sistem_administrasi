@extends('layouts.admin')

@section('title')
    <title>Seminar Proposal</title>
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Seminar Proposal</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('seminar-proposal.index') }}">Seminar Proposal</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Seminar Proposal</li>
    </ol>
</div>

<form action="{{ route('seminar-proposal.store') }}" method="POST">
    @csrf
    @if($errors->any())
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h6><i class="fas fa-exclamation-triangle"></i><b> Gagal!</b> Terjadi Kesalahan</h6>
        </div>
    @endif
    <div class="row mb-3">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="npm">Mahasiswa</label>
                        <select name="npm" id="npm" class="form-control @error('npm') is-invalid @enderror select2-mahasiswa">
                            <option hidden value="">-- Pilih Mahasiswa --</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->npm }}" @if(old('npm') == $item->npm) selected @endif>{{ $item->nama }} - {{ $item->npm }}</option>
                            @endforeach
                        </select>
                        @error('npm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Seminar Proposal</label>
                        <input type="text" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" placeholder="Masukkan Tanggal Seminar Proposal" autocomplete="off">
                            @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" name="jam" id="jam" class="form-control @error('jam') is-invalid @enderror clockpicker" value="{{ old('jam') }}" placeholder="Masukkan Jam" autocomplete="off">
                        @error('jam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ruang">Ruang</label>
                        <input type="text" name="ruang" id="ruang" class="form-control @error('ruang') is-invalid @enderror" value="{{ old('ruang') }}" placeholder="Masukkan Ruang">
                        @error('ruang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('addon-style')
    <link href="{{ url('backend/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('backend/vendor/clock-picker/clockpicker.css') }}" rel="stylesheet">
    <link href="{{ url('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" >
@endpush

@push('addon-script')
    <script src="{{ url('backend/vendor/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ url('backend/vendor/clock-picker/clockpicker.js') }}"></script>
    <script src="{{ url('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $('.select2-mahasiswa').select2({
            placeholder: "-- Pilih Mahasiswa --",
            allowClear: true
        });
        $('#tanggal').datepicker({
            format: 'yyyy/mm/dd',
            todayBtn: 'linked',
            todayHighlight: true,
            autoclose: true,
        });
        $('#jam').clockpicker({
            autoclose: true
        });
        $('#tanggal, #jam').keypress(function(e) {
            e.preventDefault();
        });
    </script>
@endpush
