@extends('content')
@section('list_order')

    <h2>{{ trans('mes_order.order_list') }}</h2>

    <form action="{{ route('order.create') }}" method="get">
        <button class="btn btn-primary actionuser" 
            type="submit">{{ trans('mes_order.add_order') }}</button>
    </form>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('mes_order.user_id') }}</th>
                <th>{{ trans('mes_order.order_name') }}</th>
                <th>{{ trans('mes_order.create_at') }}</th>
                <th>{{ trans('mes_order.update') }}</th>
                <th>{{ trans('mes_order.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->index }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->order_name }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td class="buttonflex">
                        <form action="{{ route('order.edit', $order->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning" 
                                type="submit">{{ trans('mes_order.edit') }}</button>
                        </form>
                            &nbsp; &nbsp; 
                        <form action="{{ route('order.destroy', $order->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" 
                                type="submit" >{{ trans('mes_order.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
