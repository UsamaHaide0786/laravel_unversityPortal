@extends('base')

@section('content')
    <h1>Available Books</h1>
    <div>
      <table class="table">
        <tr>
          <th>BookTitle</th>
          <th>BookAuthor</th>
        </tr>
        @foreach ($books as $b)
        <tr>
          <td>{{ $b->Title }}</td>
          <td>{{ $b->Author }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
