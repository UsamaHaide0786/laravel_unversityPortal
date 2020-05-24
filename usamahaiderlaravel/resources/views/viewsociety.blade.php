@extends('base')

@section('content')
    <h1>Available Societies</h1>
    <div>
      <table class="table">
        <tr>
          <th>SocietyName</th>
          <th>SocietyType</th>
        </tr>
        @foreach ($societies as $s)
        <tr>
          <td>{{ $s->socname }}</td>
          <td>{{ $s->type }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
