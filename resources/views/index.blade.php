@extends('main')

@section('title')
SheCode
@endsection

@section('before-content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        {{ $faker->sentence() }}
      </h1>
      <h2 class="subtitle">
        {{ $faker->monthName() }}
        {{ $faker->dayOfMonth() }}
        {{ $faker->year() }}
        {{ $faker->sentence() }}
      </h2>
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="section">
  <h1 class="title has-text-centered">{{ $faker->sentence() }}</h1>
  <div class="columns title">
    <div class="column">
      <div class="content is-medium">
        <p>{{ $faker->paragraph(15) }}</p>
      </div>
    </div>
    <div class="column">
      <div class="content is-medium">
        <p>{{ $faker->paragraph(15) }}</p>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <h1 class="title has-text-centered">{{ $faker->sentence() }}</h1>
  <div class="content">
    <table class="table is-narrow is-fullwidth">
      <thead>
        <tr>
          <th>{{ $faker->word() }}</th>
          <th>{{ $faker->word() }}</th>
        </tr>
      </thead>
      <tb>
        @for ($i = 0; $i < 10; $i++)
        <tr>
          <td>{{ $faker->time("H:i") }} {{ $faker->amPm() }}</td>
          <td>{{ $faker->sentence() }}</td>
        </tr>
        @endfor
      </tb>
    </table>
  </div>
</div>

<div class="section">
  <h1 class="title has-text-centered">{{ $faker->sentence() }}</h1>
  <div class="columns is-mobile is-centered">
        <div class="column is-half is-narrow has-text-centered">
            <a class="button is-primary is-large" href="/join">Join Now!</a>
        </div>
      </div>
</div>
@endsection
