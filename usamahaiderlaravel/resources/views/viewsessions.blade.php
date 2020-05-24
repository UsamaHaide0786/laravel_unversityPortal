@extends('base')

@section('content')
    <h1>Available Session</h1>
    <div>
      <table class="table">
        <tr>
          <th>SessionTitle</th>
          <th>SessionDate</th>
        </tr>
        @foreach ($sessions as $s)
        <tr>
          <td>{{ $s->stitle }}</td>
          <td>{{ $s->sdate }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
