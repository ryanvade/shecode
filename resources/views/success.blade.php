@extends('main')

@section('title')
SheCode
@endsection

@section('before-content')
@endsection

@section('content')
<div class="section">
  <h1 class="title has-text-centered"> {{ $faker->sentence() }}</h1>
  <div class="columns is-mobile is-centered">
    <div class="column is-half is-narrow has-text-centered">
    <p>{{ $faker->paragraph(5)}}</p>
    <p>{{ $name }} {{ $email }}</p>
    <a href="/">Home</a>
    </div>
  </div>
</div>
@endsection
