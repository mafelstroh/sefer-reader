@section('mainresults')
    <div class="alert alert-success" role="alert" style="margin-top: 3em;">
      A list of statistics has been generated for you! TOTAL WORDS {{ $wordCount }}
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
        @php
            $i = 0;
        @endphp
        @foreach ( $wordsAndWords as $key => $value)
        @php
            $i += 1;
        @endphp
        <tr>
          <th scope="row">{{ $value }}</th>
          <td>{{ $key }}</td>
          <td>
              @php
                echo $wordsPrime[$key];
              @endphp
          </td>
        </tr>
        @endforeach
       </tbody>
    </table>
@endsection
