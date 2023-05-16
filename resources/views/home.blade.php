@php
    $title = 'Trang Quản Trị';
@endphp
@extends('layouts.master-admin')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <p>
                <label>Sản phẩm</label>
                <span>{{ $productCount }}</span>
            </p>
            <p>
                <label>Đơn hàng</label>
                <span>{{ $ordersCount }}</span>
            </p>
            <p>
                <label>Tin tức</label>
                <span>{{ $newsCount }}</span>
            </p>
            <p>
                <label>Người dùng</label>
                <span>{{ $usersCount }}</span>
            </p>
        </div>
        <div class="col-lg-6">
            <p>
                <label>Doanh thu</label>
                <span>{{ $totalBenefit }}</span>
            </p>
            <p>
                <label>Đơn hàng</label><br>
                <span>Mới: {{ $countOrderByStatus['new'] }}</span><br>
                <span>Hoàn thành: {{ $countOrderByStatus['completed'] }}</span><br>
                <span>Đã hủy: {{ $countOrderByStatus['cancelled'] }}</span><br>
            </p>
            <p>
                <label>Tin tức</label>
                <span>{{ $newsCount }}</span>
            </p>
            <p>
                <label>Người dùng</label>
                <span>{{ $usersCount }}</span>
            </p>
        </div>
    </div>
    <div class="">
        <label>5 đơn hàng mới</label>
    </div>
    <table class="table mb-0 table-hover align-middle text-nowrap">
        <thead>
            <tr>
                <th class="border-top-0">#</th>
                <th class="border-top-0">Tên</th>
                <th class="border-top-0">Email</th>
                <th class="border-top-0">Số điện thoại</th>
                <th class="border-top-0">Địa chỉ</th>
                <th class="border-top-0">Ghi chú</th>
                <th class="border-top-0">Tổng tiền</th>
                <th class="border-top-0">Ngày đặt</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newOrders as $key => $order)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $order->fullname }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ number_format($order->total_money, 0, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->order_date)->format('H:i d/m/Y') }}đ</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <table class="table mb-0 table-hover align-middle text-nowrap">
        <thead>
            <tr>
                <th class="border-top-0">Loại</th>
                <th class="border-top-0">License</th>
                <th class="border-top-0">Support Agent</th>
                <th class="border-top-0">Technology</th>
                <th class="border-top-0">Tickets</th>
                <th class="border-top-0">Sales</th>
                <th class="border-top-0">Earnings</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-info text-white">EA</a>
                        </div>
                        <div class="">
                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                        </div>
                    </div>
                </td>
                <td>Single Use</td>
                <td>John Doe</td>
                <td>
                    <label class="badge bg-danger">Angular</label>
                </td>
                <td>46</td>
                <td>356</td>
                <td>
                    <h5 class="m-b-0">$2850.06</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-orange text-white">MA</a>
                        </div>
                        <div class="">
                            <h4 class="m-b-0 font-16">Monster Admin</h4>
                        </div>
                    </div>
                </td>
                <td>Single Use</td>
                <td>Venessa Fern</td>
                <td>
                    <label class="badge bg-info">Vue Js</label>
                </td>
                <td>46</td>
                <td>356</td>
                <td>
                    <h5 class="m-b-0">$2850.06</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-success text-white">MP</a>
                        </div>
                        <div class="">
                            <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                        </div>
                    </div>
                </td>
                <td>Single Use</td>
                <td>John Doe</td>
                <td>
                    <label class="badge bg-success">Bootstrap</label>
                </td>
                <td>46</td>
                <td>356</td>
                <td>
                    <h5 class="m-b-0">$2850.06</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="m-r-10"><a class="btn btn-circle d-flex btn-purple text-white">AA</a>
                        </div>
                        <div class="">
                            <h4 class="m-b-0 font-16">Ample Admin</h4>
                        </div>
                    </div>
                </td>
                <td>Single Use</td>
                <td>John Doe</td>
                <td>
                    <label class="badge bg-purple">React</label>
                </td>
                <td>46</td>
                <td>356</td>
                <td>
                    <h5 class="m-b-0">$2850.06</h5>
                </td>
            </tr>
        </tbody>
    </table> --}}
@endsection
