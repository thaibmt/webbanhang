@foreach($dataList as $item)
    <tr>
        <td>{{ ++$index }}</td>
        <td>{{ $item->fullname }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->phone_number }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->note }}</td>
        <td>{{ getTimeFormat($item->order_date) }}</td>
        <td>
            @if($item->status == 0)
                <label class="label label-warning">Pending</label>
            @elseif($item->status == 1)
                <label class="label label-success">Approved</label>
            @else
                <label class="label label-danger">Cancel</label>
            @endif
        </td>
        <td>{{ number_format($item->total_money, 0) }}</td>
        <td>
            @if($item->status == 0)
                <button class="btn btn-success" onclick="updateItem({{ $item->id }}, 1)">Appove</button>
                <button class="btn btn-danger" onclick="updateItem({{ $item->id }}, 2)">Cancel</button>
            @endif
            <a href="{{ route('order.detail') }}?id={{ $item->id }}"><button class="btn btn-info">Details</button></a>
            <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Delete</button>
        </td>
    </tr>
@endforeach