@php
$title = "Trang Quản Trị";
@endphp
@extends('layouts.master-admin')

@section('content')
<div>
    <p>
        <lable>Sản phẩm</lable>
        <span>{{$productCount}}</span>
    </p>
    <p>
        <lable>Đơn hàng</lable>
        <span>{{$ordersCount}}</span>
    </p>
    <p>
        <lable>Tin tức</lable>
        <span>{{$newsCount}}</span>
    </p>
    <p>
        <lable>Người dùng</lable>
        <span>{{$usersCount}}</span>
    </p>
</div>

<table class="table mb-0 table-hover align-middle text-nowrap">
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
                    <div class="m-r-10"><a
                            class="btn btn-circle d-flex btn-info text-white">EA</a>
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
                    <div class="m-r-10"><a
                            class="btn btn-circle d-flex btn-orange text-white">MA</a>
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
                    <div class="m-r-10"><a
                            class="btn btn-circle d-flex btn-success text-white">MP</a>
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
                    <div class="m-r-10"><a
                            class="btn btn-circle d-flex btn-purple text-white">AA</a>
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
</table>
@endsection
