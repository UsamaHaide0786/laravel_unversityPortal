@extends('base')

@section('content')
    <h1>Aloted Subjects</h1>
    <div>
      <table class="table">
        <tr>
          <th>TeacherID</th>
          <th>SubjectISBN</th>
          <th>IssueDate</th>
          <th>ReturnDate</th>
        </tr>
        @foreach ($issue as $i)
        <tr>
          <td>{{ $i-> Tid}}</td>
          <td>{{ $i->Isbn }}</td>
          <td>{{ $i->Issuedate }}</td>
          <td>{{ $i->returndate }}</td>

        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
