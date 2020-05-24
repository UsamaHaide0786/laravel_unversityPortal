@extends('base')

@section('content')
    <h1>Available Students</h1>
    <div>
      <table class="table">
        <tr>
          <th>StudentID</th>
          <th>SureName</th>
          <th>FirstName</th>
          <th>Address</th>
          <th>DateOfBirth</th>
          <th>ParticipantID</th>
          <th>GPA</th>
          <th>Gender</th>
        </tr>
        @foreach ($students as $s)
        <tr>
          <td>{{ $s-> sid}}</td>
          <td>{{ $s->sname }}</td>
          <td>{{ $s->fname }}</td>
          <td>{{ $s->address }}</td>
          <td>{{ $s->dob }}</td>
          <td>{{ $s->pid }}</td>
          <td>{{ $s->gpa }}</td>
          <td>{{ $s->gender }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
