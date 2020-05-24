@extends('base')

@section('content')
    <h1>Available Teachers</h1>
    <div>
      <table class="table">
        <tr>
          <th>TeacherID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Dasignation</th>
          <th>Experience</th>
        </tr>
        @foreach ($teachers as $t)
        <tr>
          <td>{{ $t-> TId}}</td>
          <td>{{ $t->Firstname }}</td>
          <td>{{ $t->Lastname }}</td>
          <td>{{ $t->Designation }}</td>
          <td>{{ $t->Experience }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
