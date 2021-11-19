@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <div class="card">
        <div class="card-header">
            <h5>Danh sách đặt hàng</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($orders as $order)
                <a href="{{ route('admin.showorder',['id'=>$order->id]) }}" class="list-group-item latest-order">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="id" style="width:150px">Mã đơn hàng: {{ $order->id }}</div>
                            <div class="name">Tên khách hàng: {{ $order->name }}</div>
                            <div class="status text-success ml-auto">Đã thanh toán</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
