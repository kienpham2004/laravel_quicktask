@extends('content')
@section('orderedit')

<form class="form-horizontal" action="{{ route('order.update', $order->id) }}" 
    method="POST">
    @csrf
    @method('put')

    <fieldset>
        <h2 class="adduser">{{ trans('mes_order.add_user') }}</h2>
        
        <div class="form-group">
            <label >{{ trans('mes_order.user_id') }}</label>
            <input type="text" class="form-control"
                placeholder="{{ trans('mes_order.plh_name') }}" name="user_id"
                value="{{ $order->user_id}}" readonly>
        </div>
    
        <div class="form-group">
            <label >{{ trans('mes_order.order_name') }}</label>
            <input type="text" class="form-control" 
                name="order_name" value="{{ $order->order_name}}">
                @error('order_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div class="control-group">
            <div class="controls actionuser">
                <button class="btn btn-success" 
                    type="submit">{{ trans('mes_order.update') }}</button>
                <a href="{{ route('order.back') }}" 
                    class="btn btn-danger ">{{ trans('mes_order.cancel') }}</a>
            </div>
        </div>
    </fieldset>
</form>
@endsection
