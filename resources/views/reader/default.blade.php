@section('mainsection')
<div class="jumbotron">
  <div class="container">
    <h1 class="display-5">Simple TXT book reader. By @mafelstroh</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<form method="get" action=" {{url('read')}} ">
    {{csrf_field()}}
<div class="input-group">
  <span class="input-group-addon" id="url">URL</span>
  <input type="url" name="url" id="url" class="form-control" placeholder="Enter an URL (if no URL entered, default will be: http://www.loyalbooks.com/download/text/Railway-Children-by-E-Nesbit.txt">
</div>
  <br />
  <button type="submit" class="btn btn-primary">Go!</button>
</form>
@endsection
