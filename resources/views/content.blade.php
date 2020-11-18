@extends('layouts.app')
@section('content')

    <div class="header">
        <a href="{{ route('user.index') }}" class="logo">{{ trans('trans.title') }}</a>
            <div class="header-right">
                <a href="{!! route('user.lang', ['en']) !!}" >English</a>
                <a href="{!! route('user.lang', ['vi']) !!}" >Tiếng Việt</a>
            </div>
    </div>

    <div class="sidenav sidea">
        <a href="{{ route('user.index') }}">{{ trans('trans.user_list') }}</a>
        <a href="{{ route('order.index') }}">{{ trans('trans.order_list') }}</a>
    </div>

    <div class="showindex" >
        <div class="show">
            @yield('userindex')
        </div>
    </div>

    <div class="edit">
        <div class="showedit">
            @yield('usercreate')  
        </div>
    </div>

    <div class="edit">
        <div class="showedit">
            @yield('useredit')
        </div>
    </div>

    <div class="showindex">
        <div class="show">
            @yield('orderindex')
        </div>
    </div>

    <div class="edit">
        <div class="showedit">
            @yield('orderedit')
        </div>
    </div>

    <div class="edit">
        <div class="showedit">
            @yield('ordercreate')
        </div>
    </div>
         
@endsection
