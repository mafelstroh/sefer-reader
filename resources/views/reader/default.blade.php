@section('mainsection')
<div class="jumbotron">
  <div class="container">
    <h1 class="display-5">Simple TXT book reader. By @mafelstroh</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<form>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">URL</span>
  <input type="text" class="form-control" placeholder="Enter an URL (if no URL entered, default will be: http://www.loyalbooks.com/download/text/Railway-Children-by-E-Nesbit.txt" aria-label="Enter an URL (if no URL entered, default will be: http://www.loyalbooks.com/download/text/Railway-Children-by-E-Nesbit.txt" aria-describedby="basic-addon1">
</div>
  <br />
  <button type="submit" class="btn btn-primary">Go!</button>
</form>
@endsection
