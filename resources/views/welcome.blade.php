<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Web Design Mastery</title>
  </head>
  <body style="background: url('{{ asset('assets/images/bg.jpg') }}">
    <div class="container">
      <nav>
        <div class="nav__logo">
          <img src="{{ asset('assets/images/logo.png') }}" alt="logo" />
        </div>
        <ul class="nav__links">
          <li class="link"><a href="#">Home</a></li>
          <li class="link"><a href="#">Contact Us</a></li>
        </ul>
        <div class="login">
            <div class="login__item">
                <span><i class="ri-user-3-fill"></i></span>
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">Log In</a>
              </div>
              <div class="login__item">
                <span><i class="ri-user-3-fill"></i></span>
                <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500">Register</a>
              </div>
        </div>
      </nav>
      <div class="destination__container">
        <img class="bg__img__1" src="{{ asset('assets/images/bg-dots.png') }}" alt="bg" />
        <div class="socials">
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-youtube-fill"></i></span>
        </div>
        <div class="content">
          <h1>EXPLORE<br />OUR<br /><span>SYSTEM</span></h1>
          <p>
            It encourages exploration of unfamiliar territories, embracing
            diverse cultures and landscapes, while pursuing the desired
            destination that captivates the heart and ignites a sense of wonder.
          </p>
          <button class="btn">BOOK NOW</button>
        </div>
        <div class="destination__grid">
          <div class="destination__card">
            <img src="{{ asset('assets/images/destination-1.jpg') }}" alt="destination" />
            <div class="card__content">
              <h4>10 Must-Visit Hidden Gems</h4>
              <p>
                Discover off-the-beaten-path locations and hidden gems within
                dream destinations, taking you beyond the typical tourist spots.
              </p>
              <button class="btn">Read More</button>
            </div>
          </div>
          <div class="destination__card">
            <img src="{{ asset('assets/images/destination-2.jpg') }}" alt="destination" />
            <div class="card__content">
              <h4>Immersive Cultural Experiences</h4>
              <p>
                Dive deep into the vibrant cultures of dream destinations,
                showcasing the rituals, traditions, and local customs that make
                these places truly unique.
              </p>
              <button class="btn">Read More</button>
            </div>
          </div>
          <div class="destination__card">
            <img src="{{ asset('assets/images/destination-3.jpg') }}" alt="destination" />
            <div class="card__content">
              <h4>From Dreams to Reality</h4>
              <p>
                Explore expert tips, and hidden gems, ensuring every moment of
                your trip is optimized, and make the most of time in your
                long-awaited dream location.
              </p>
              <button class="btn">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
