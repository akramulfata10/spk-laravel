@extends('dashboard.layout.main')

@section('container')
    <div class="row">
        <div class="col-lg-12 col-lg-4 col-sm-5">
            <div class="card mb-2">
                <div class="card-header p-3 pt-2">
                    <div class="text-end pt-1">
                        <a class="bg-gradient-dark-primary" href="{{ url('kriteria/create') }}">Tambah Kriteria</button>
                    </div>
                </div>
                <hr class="dark horizontal my-0" />
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama_Kriteria</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Attribute</th>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Bobot</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    action</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($kriterias as $kriteria)
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $kriteria->nama_kriteria }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{ $kriteria->attribut }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $kriteria->bobot }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('kriteria.edit', $kriteria->id) }}"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <form action="{{ route('kriteria.destroy', $kriteria->id) }}" method="POST" class="text-secondary font-weight-bold text-xs"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Are You Sure?')"> <span
                                                    data-feather="x-circle">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
