@extends('base')

@section('content')
    <h1>Available Products</h1>
    <div>
      <table class="table">
        <tr>
          <th>ProductName</th>
          <th>Price</th>
        </tr>
        @foreach ($products as $p)
  <tr>
  <td>{{ $p->Productname }}</td>
  <td>{{ $p->Price }}</td>
  </tr>
  @endforeach
      </table>


      </ul>

    </div>
@endsection
