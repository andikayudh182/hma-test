@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div role="main" class="col-md-6 ml-sm-auto col-lg-10 px-md-4">
            <div class="card" style="height:650px; max-height:600px">
               <div class="card-body">

                {{-- Alert Message --}}
                    @if (session()->has('Success'))
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 50%; text-align: center;">
                            {{ session()->get('Success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @elseif (session()->has('Error'))
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 50%; text-align: center;">
                                {{ session()->get('Error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>           
                    @endif
                {{-- End Alert --}}

                   <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#addModal" width="20vh"> TAMBAH </button>
                    @include('User.Partials.AddUser')
                   
                    <div class="mt-4">

                    <table id="data-table" class="table table-hover" style="width:100%;">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($Data as $data)
                            <tr class="text-center">
                                <td>{{ $data['id'] }}</td>
                                <td>{{ $data['name'] }}</td>
                                <td>{{ $data['email'] }}</td>

                                @if ($data['status'] == 1)
                                    <td> Aktif </td>
                                @else
                                    <td> Tidak Aktif </td>
                                @endif
                                <td>
                                    <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#updateModal{{ $data['id'] }}" width="20vh"> Edit </button>
                                    <br>
                                    <button type="button" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data['id'] }}"width="20vh"> Hapus </button>
                                </td>

                                @include('User.Partials.UpdateUser')
                                @include('User.Partials.DeleteUser')
                               
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>

                            </tr>
                        </tfoot>

                    </table>

                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#data-table').DataTable();
    });
</script>
@endsection
