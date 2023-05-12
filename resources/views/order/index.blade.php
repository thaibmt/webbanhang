@php
$title = "Quản Lý Đơn Hàng";
@endphp
@extends('layouts.master-admin')

@section('content')
<table class="table mb-0 table-hover align-middle text-nowrap">
    <thead>
        <tr>
            <th class="border-top-0">No</th>
            <th class="border-top-0">Full Name</th>
            <th class="border-top-0">Email</th>
            <th class="border-top-0">Phone Number</th>
            <th class="border-top-0">Address</th>
            <th class="border-top-0">Note</th>
            <th class="border-top-0">Order Date</th>
            <th class="border-top-0">Status</th>
            <th class="border-top-0">Total Money</th>
            <th class="border-top-0" style="width: 100px"></th>
        </tr>
    </thead>
    <tbody>
        @include('order.part_order')
    </tbody>
</table>

{!! $dataList->links() !!}
@endsection

@section('js')
<script type="text/javascript">
    function updateItem(id, status) {
        if(status == 1) {
            var option = confirm('Are you sure to update order\'s status "Approved"?')
        } else {
            var option = confirm('Are you sure to update order\'s status "Cancel"?')
        }
        if(!option) return

        $.post('{{ route('order.update') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id,
            'status': status
        }, function(data) {
            location.reload()
        })
    }

    function deleteItem(id) {
        var option = confirm('Are you sure to delete this item')
        if(!option) return

        $.post('{{ route('order.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload()
        })
    }
</script>
@stop