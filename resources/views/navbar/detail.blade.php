@extends('layout.template')
@section('title')
<title>Show</title>
@endsection
@section('name')
<div class="container-fluid">
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="">
                                    <h4 class="text-dark">{{$karyawan->user_nicename}}</h4>
                                    <p class="text-muted"><small>@Founder <span>| </span><span>websitename.com</span></small></p>
                                </div>
                                <ul class="social-links list-inline">
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="align-items-center text-center">
                                <div class="row">
                                    <h6 class="mb-0">Nama : {{$karyawan->user_nicename}}</h6>
                                </div>
                                <hr>
                                <div class="row">
                                    <h6 class="mb-0">Email : {{$karyawan->user_email}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                  <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah Postingan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$karyawan->posts->count()}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                          Earnings (Annual)</div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                  </div>
                                  <div class="col-auto">
                                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-4 col-md-6 mb-4">
                      <div class="card border-left-info shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                      </div>
                                      <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                              {{-- <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$data->postingan}}</div> --}}
                                          </div>
                                          <div class="col">
                                              <div class="progress progress-sm mr-2">
                                                  <div class="progress-bar bg-info" role="progressbar"
                                                      style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                      aria-valuemax="100"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-auto">
                                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center"><strong>Data</strong> Post</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>title</th>
                                            <th>name</th>
                                            <th>modified</th>
                                            <th>modified gmt</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?= $no=1; ?>
                                        @foreach ($karyawan->posts as $data)
                                        <tr>
                                            <td>{{ $no++}}</td>
                                            <td>{{ $data->post_title}}</td>
                                            <td>{{ $data->post_name}}</td>
                                            <td>{{ $data->post_modified}}</td>
                                            <td>{{ $data->post_modified_gmt}}</td>
                                           <td>
                                               <a href="{{ $data->guid}}" target="blank" class=" badge badge-success">Get Link</a>
                                           </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel">
                        <div id="chartpost">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartpost', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Postingan'
    },
    subtitle: {
        text: 'postingan berdasarkan perbulan'
    },
    xAxis: {
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
     series: [{
        name: 'Postingan',
        data: [49.9,3,3]

    }]
});
</script>
@endsection