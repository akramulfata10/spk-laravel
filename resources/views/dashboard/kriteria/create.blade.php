@extends('dashboard.layout.main')

@section('container')
    <div class="row">
        <div class="col-lg-12 col-lg-4 col-sm-5">
            <div class="card mb-2">
                <div class="card-header p-3 pt-2">
                    <div class="text-end pt-1">
                        <a href="{{ url('kriteria') }}">kembali</a>
                    </div>
                </div>
                <hr class="dark horizontal my-0" />
            </div>
            <div class="card-body mt-3">
                <form action="{{ route('kriteria.store') }}" method="POST">
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Nama Kriteria</label>
                        <input type="text" name="nama_kriteria" class="form-control">
                    </div>
                    <div class="input-group input-group-static mb-3">
                        <label for="exampleFormControlSelect1" class="ms-0">Attribute</label>
                        <select class="form-control" name="attribut" id="exampleFormControlSelect1">
                            <option value="cost">Cost</option>
                            <option value="benefit">Benefit</option>
                        </select>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Bobot</label>
                        <input type="number" name="bobot" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Tambah
                            kriteria</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
