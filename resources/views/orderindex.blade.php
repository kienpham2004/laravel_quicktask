@extends('content')
@section('orderindex')

    <h2>{{ trans('trans.order_list') }}</h2>

    <form action="{{ route('order.create') }}" method="get">
      <button class="btn btn-primary" style="float: right" 
                type="submit">{{ trans('trans.add_order') }}</button>
    </form>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('trans.user_id') }}</th>
                <th>{{ trans('trans.order_name') }}</th>
                <th>{{ trans('trans.create_at') }}</th>
                <th>{{ trans('trans.update') }}</th>
                <th>{{ trans('trans.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->order_name}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->updated_at}}</td>
                    <td style="display: flex">
                        <form action="{{ route('order.edit', $order->id) }}" 
                                method="get">
                            @csrf
                                <button class="btn btn-warning" 
                                    type="submit">{{ trans('trans.edit') }}</button>
                        </form>
                            &nbsp; &nbsp; 
                        <form action="{{ route('order.destroy', $order->id) }}" 
                                method="post" id="{{ $order->id }}">
                            @csrf
                            @method('delete')
                                <button class="btn btn-danger" 
                                    type="submit" >{{ trans('trans.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
  
    
@endsection
