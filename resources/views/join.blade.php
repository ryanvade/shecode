@extends('main') @section('title') SheCode @endsection @section('before-content') @endsection @section('content')
<div class="section">
  <h1 class="title has-text-centered">{{ $faker->sentence() }}</h1>
  <div class="columns is-mobile is-centered">
    <div class="column is-half is-narrow has-text-centered">
    <p>{{ $faker->paragraph(5)}}</p>
      <a class="has-text-centered" href="/file">File Download</a>
    </div>
  </div>
</div>

<div class="columns" id="forms">
  <div class="column is-half is-offset-one-quarter">
    @if ($errors->any())
    <div class="content" id="errors-box">
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
      <label class="label">Permission Slip</label>
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
      <div class="field is-grouped">
        <div class="control">
        </div>
        <button type="submit" class="button is-primary">Submit</button>
        <div class="control">
          <a href="/" class="button is-link">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection @section('javascript')
<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
  function getFileName(files) {
    document.getElementById('filename').innerHTML = files[0].name;
    hideErrors();
  }

  function hideErrors()
  {
      document.getElementById('errors-box').classList.add("is-hidden");
  }
</script>
@endsection
