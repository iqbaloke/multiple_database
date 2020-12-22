@extends('layout.template')
@section('title')
<title>after | insert</title>
@endsection
@section('name')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">After Insert</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <table class="table">
        <thead>
          <tr>
              <th scope="col">user login</th>
              <th scope="col">user nicname</th>
              <th scope="col">user email</th>
              <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as  $item)
         <tr>
         <td>{{$item->user_login}}</td>
            <td>{{$item->user_nicename}}</td>
            <td>{{$item->user_email}}</td>
            <td>{{$item->post_author}}</td>
            <td>
                <a href="detail/{{ $item->ID}}" class=" badge badge-success"> show</a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
@endsection
