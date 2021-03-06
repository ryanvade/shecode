<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="/images/shecodePurple.png" alt="SheCode: description">
    </a>

    <div class="navbar-burger burger" data-target="nav-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="nav-menu" class="navbar-menu">
    <div class="navbar-start">
    </div>

    <div class="navbar-end">
      @if(env('JOIN_ENABLE', false))
      <a class="navbar-item " href="/register">
        Register Now
      </a>
      @endif
      @if(env('FAQ_ENABLE', false))
      <a class="navbar-item " href="/faq">
        FAQ
      </a>
      @endif
    </div>
  </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function () {

// Get all "navbar-burger" elements
var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach(function ($el) {
    $el.addEventListener('click', function () {

      // Get the target from the "data-target" attribute
      var target = $el.dataset.target;
      var $target = document.getElementById(target);

      // Toggle the class on both the "navbar-burger" and the "navbar-menu"
      $el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
</script>
