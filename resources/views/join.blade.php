@extends('main')
@section('title') SheCode @endsection
@section('before-content')
@endsection @section('content')
<div class="section">
  <h1 class="title has-text-centered">Register Now</h1>
  <div class="columns is-mobile is-centered">
    <div class="column is-half-desktop has-text-centered">
    <p>SheCode will be on December 2nd 2017, starting at 10:30 am and ending at 2:30 pm.
      SheCode will take place in the SIUE Engineering Building, 61 Circle Drive, Edwardsville IL.
      All participants will need a permission form signed be a parent or gaurdian at the start of SheCode.</p>
      <a class="has-text-centered" href="/file">Download Permission Form</a>
    </div>
  </div>
</div>

<div class="columns" id="forms">
  <div class="column is-half is-offset-one-quarter">
    @if ($errors->any())
    <div class="content has-text-danger" id="errors-box">
      <ul id="errors-list" class="">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif
    <form action="/join" class="" method="POST" enctype="multipart/form-data" id="form">
      {{ csrf_field() }}
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input id="name" class="input" type="text" placeholder="First Last" name="name" onchange="hideErrors()">
        </div>
      </div>
      <div class="field">
        <label class="label">Email</label>
        <p class="control has-icons-left has-icons-right">
          <input id="email" class="input" type="email" placeholder="Email" name="email" onchange="hideErrors()">
          <span class="icon is-small is-left">
        <i class="fa fa-envelope"></i>
      </span>
          <span class="icon is-small is-right">
        <i class="fa fa-check"></i>
      </span>
        </p>
      </div>
      <div class="field">
        <label class="label">Permission Form</label>
        <div class="file has-name">
          <label class="file-label">
            <input id="file" class="file-input" type="file" onchange="getFileName(this.files)" name="doc">
            <span class="file-cta">
              <span class="file-icon">
                <i class="fa fa-upload"></i>
              </span>
              <span class="file-label">
                Choose a file…
              </span>
            </span>
            <span class="file-name" id="filename">
            </span>
          </label>
        </div>
      </div>
      <div class="field is-grouped is-grouped-centered">
        <div class="control">
          <a href="/" class="button is-light">Cancel</a>
        </div>
        <div class="control">
          <button type="submit" class="button is-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection @section('javascript')
<script src="/js/jquery.min.js"></script>
<script>
  function getFileName(files) {
    document.getElementById('filename').innerHTML = files[0].name;
    hideErrors();
  }

  function hideErrors()
  {
    if(document.getElementById('errors-box'))
    {
      document.getElementById('errors-box').classList.add("is-hidden");
    }
  }
</script>
@endsection
