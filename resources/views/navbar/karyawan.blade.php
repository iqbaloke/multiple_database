@extends('layout.template')
@section('title')
<title>Karyawan</title>
@endsection
@section('name')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
    </div>
</div>
<div class="card shadow mb-4">
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>email</th>
                        <th>jmh-posting</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $no=1; ?>
                    @foreach ($data_karyawan as $data)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $data->user_login}}</td>
                        <td>{{ $data->user_nicename}}</td>
                        <td>{{ $data->user_email}}</td>
                        <td>{{ $data->posts->count()}}</td>
                       <td>
                           <a href="detail/{{ $data->ID}}" class=" badge badge-success"> show</a>
                       </td>
                    </tr>
                    @endforeach
                    {{-- @foreach ($data_karyawan1 as $data)
                    <tr>
                        <td>{{ $no++}}</td>
                        <td>{{ $data->user_login}}</td>
                        <td>{{ $data->user_nicename}}</td>
                        <td>{{ $data->user_email}}</td>
                        <td>{{ $data->posts->count()}}</td>
                       <td>
                           <a href="detail/{{ $data->ID}}" class=" badge badge-success"> show</a>
                       </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('chart')
    <script>
        $(document).ready(function(){
            $('#dataTable').DataTable();
        });
    </script>
@endsection