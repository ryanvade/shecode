@extends('main')

@section('title')
SheCode
@endsection

@section('before-content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        She Code 2017
      </h1>
      <h2 class="subtitle">
        Saturday Decemeber 2nd, 2017
      </h2>
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="section">
  <h1 class="title has-text-centered">Why should I go?</h1>
  <div class="columns">
    <div class="column">
      <div class="content is-medium">
        <p>Whether you're a master programmer or have never touched a computer you'll come away from SheCode with a new appreciation for the field of Computer Science. At SheCode you'll be working closely with a team of your peers and a mentor to create an app.Each of the mentors is an SIUE Computer Science Alumnae and a professional in the technology field. At the end of the day you will walk away with an app on your phone that you created from scratch.Show your friends and family what you have learned and continue to do it.</p>
      </div>
    </div>
    <div class="column">
      <div class="content is-medium">
        <p>The field of Computer Science is an ever growing field with limitless opportunities. However, there is great lack of women. This creates the perfect opportunity for women seeking to enter Computer Science but they still need the skills. At SheCode we aim to provide a way to get young women interested in the field before they even step foot on a college campus. By providing the mentorship and experience to get started we hope SheCode will give your daughter the push to consider Computer Science in the future.</p>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <h1 class="title has-text-centered">Agenda</h1>
  <div class="content">
    <table class="table is-narrow is-fullwidth">
      <thead>
        <tr>
          <th>Start Time</th>
          <th>Description</th>
        </tr>
      </thead>
      <tb>
        <tr>
          <td>10:30 am</td>
          <td>Check in and form teams</td>
        </tr>
        <tr>
          <td>11:00 am</td>
          <td>Welcome/Introduction</td>
        </tr>
        <tr>
          <td>11:15 am</td>
          <td>Begin working on project</td>
        </tr>
        <tr>
          <td>12:15 pm</td>
          <td>Lunch</td>
        </tr>
        <tr>
          <td>12:45 pm</td>
          <td>Resume working on projects</td>
        </tr>
        <tr>
          <td>2:15 pm</td>
          <td>Closing ceremony begins</td>
        </tr>
        <tr>
          <td>2:30 pm</td>
          <td>Event ends</td>
        </tr>
      </tb>
    </table>
  </div>
</div>

@if(env('JOIN_ENABLE', false))
<div class="section">
  <h1 class="title has-text-centered">Click here to register</h1>
  <div class="columns is-mobile is-centered">
        <div class="column is-half-desktop is-narrow has-text-centered">
            <a class="button is-primary is-large" href="/register">Register Now!</a>
        </div>
      </div>
</div>
@endif
@endsection
