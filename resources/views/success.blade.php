@extends('main')

@section('title')
SheCode
@endsection

@section('before-content')
@endsection

@section('content')
<div class="section">
  <h1 class="title has-text-centered">Thank you for registering, {{ $name }}!</h1>
  <div class="columns is-mobile is-centered">
    <div class="column is-half is-narrow has-text-centered">
    <p>We have sent a confirmation email to {{ $email }}</p>
    <a href="/">Home</a>
    </div>
  </div>
</div>
@endsection
