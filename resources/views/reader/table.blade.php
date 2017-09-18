@section('mainresults')
    <div class="alert alert-success" role="alert" style="margin-top: 3em;">
      A list of statistics has been generated for you!
    </div>
    <br />
    <table class="table">
      <thead>
        <tr>
          <th>Ocurrencies</th>
          <th>Word</th>
          <th>isPrime?</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $wordsAndWords as $key => $value)
        <tr>
          <th scope="row">{{ $value }}</th>
          <td>{{ $key }}</td>
          <td></td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection
