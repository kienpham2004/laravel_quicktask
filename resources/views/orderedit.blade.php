@extends('content')
@section('orderedit')

<form class="form-horizontal" action="{{ route('order.update', $order->id) }}" 
        method="POST">
    @csrf
    @method('put')

    <fieldset>
        <h2 style="margin-left: 180px">{{ trans('trans.add_user') }}</h2>
        
        <div class="form-group">
            <label >{{ trans('trans.user_id') }}</label>
            <input type="text" class="form-control"
                    placeholder="{{ trans('trans.plh_name') }}" name="user_id"
                        value="{{ $order->user_id}}" readonly>
        </div>
    
        <div class="form-group">
            <label >{{ trans('trans.order_name') }}</label>
            <input type="text" class="form-control" 
                    name="order_name" value="{{ $order->order_name}}">
        </div>

        
        <div class="control-group">
            <div class="controls" style="float: right">
                <button class="btn btn-success" 
                            type="submit">{{ trans('trans.update') }}</button>
                <a href="{{ route('order.back') }}" 
                    class="btn btn-danger ">{{ trans('trans.cancel') }}</a>
            </div>
        </div>
    </fieldset>
</form>

@endsection
