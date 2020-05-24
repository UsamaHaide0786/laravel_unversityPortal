@extends('base')

@section('content')
    <h1>Available Users</h1>
    <div>
      <table class="table">
        <tr>
          <th>UserID</th>
          <th>TeachID</th>
        </tr>
        @foreach ($users as $u)
        <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->tid }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
