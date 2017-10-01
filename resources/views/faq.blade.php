@extends('main')

@section('title')
SheCode
@endsection

@section('before-content')
@endsection

@section('content')
<div class="section">
  <h1 class="title">Frequently Asked Questions</h1>
  <div class="content">
    <dl>
      @for ($i = 0; $i < 20; $i++)
        <dt class="has-text-weight-bold is-size-5 is-size-5-mobile">{{ $faker->sentence() }}</dt>
        <dd style="margin-bottom:20px;">{{ $faker->paragraph() }}</dd>
      @endfor
    </dl>
  </div>
</div>
@endsection
