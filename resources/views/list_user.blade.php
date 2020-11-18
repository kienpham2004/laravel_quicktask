@extends('content')
@section('userindex')

    <h2>{{ trans('mes_user.user_list') }}</h2>

    <form action="{{ route('user.create') }}" method="GET">
      <button class="btn btn-primary actionuser" type="submit">{{ trans('mes_user.add_user') }}</button>
    </form>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('mes_user.name') }}</th>
                <th>{{ trans('mes_user.email') }}</th>
                <th>{{ trans('mes_user.create_at') }}</th>
                <th>{{ trans('mes_user.update_at') }}</th>
                <th>{{ trans('mes_user.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td class="buttonflex">
                        <form action="{{ route('user.edit', $user->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning" type="submit">{{ trans('mes_user.edit') }}</button>
                        </form>
                            &nbsp; &nbsp; 
                        <form action="{{ route('user.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">{{ trans('mes_user.delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>     
    </table>

@endsection
