@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <div class="card">
        <div class="card-header">
            <h5>Danh sách tài khoản</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Đất nước</th>
                    <th scope="col">Thành phố</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Mã bưu điện</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $user->user_id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phonenumber }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->zipcode }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
