@extends('base')

@section('content')
    <h1>Available Products</h1>
    <div>
      <table class="table">
        <tr>
          <th>CafeID</th>
          <th>ProductID</th>
        </tr>
        @foreach ($item as $i)
        <tr>
          <td>{{ $i->Cafeid }}</td>
          <td>{{ $i->Productid }}</td>
        </tr>
        @endforeach
      </table>


      </ul>

    </div>
@endsection
