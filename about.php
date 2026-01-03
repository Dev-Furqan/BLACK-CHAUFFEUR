<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/header.php";
?>


<link rel="stylesheet" href="assets/css/pages/about.css">
<link rel="stylesheet" href="assets/css/pages/home.css">

<section class="aboutHero">
  <!-- Replace this div background with your image OR use <img> later -->
  <div class="aboutHero__bg"></div>

  <div class="aboutHero__badge">About us</div>
</section>

<section class="aboutFeatures">
  <div class="container">

    <div class="aboutFeatures__grid">

      <div class="featCard">
        <div class="featIcon"><img src="assets/img/about/taxi-solid-full 1.png" alt=""></div>
        <h3 class="featTitle">Limo Service</h3>
        <p class="featText">
          Welcome to Black Chauffeur Limo Service Company, your trusted
          partner for premium luxury transportation in Riyadh
        </p>
      </div>

      <div class="featCard">
        <div class="featIcon"><img src="assets/img/about/icon-04 1.png" alt=""></div>
        <h3 class="featTitle">Expert Drivers</h3>
        <p class="featText">
          Professionally trained, reliable drivers committed to your safety
          and comfort on every ride.
        </p>
      </div>

      <div class="featCard">
        <div class="featIcon"><img src="assets/img/about/dollar-sign-solid-full 3.png" alt=""></div>
        <h3 class="featTitle">Travel on your terms</h3>
        <p class="featText">
          Stay flexible and in charge of your schedule. It's quick and easy for
          you to cancel or make changes to any ride.
        </p>
      </div>

    </div>

  </div>
</section>

<section class="aboutBlocks">
  <div class="container aboutBlocks__wrap">

    <!-- ROW 1 -->
    <div class="aboutRow">
      <div class="aboutRow__img aboutRow__img--one"><img src="assets\img\about\a8r2kklsnta-684x1024 1.png" alt=""></div>

      <div class="aboutRow__content">
        <h3 class="aboutH">Who We Are</h3>

        <p class="aboutP">
          Welcome to Black Chauffeur-KSA Limo Service Company, your trusted partner for premium
          luxury transportation in Riyadh, Saudi Arabia. At Black Chauffeur-KSA, we redefine travel by
          offering unparalleled limo services tailored to meet the needs of discerning clients. Whether
          you're traveling for business, leisure, or special occasions, we are committed to providing a
          seamless, comfortable, and stylish journey every time.
        </p>

        <a href="book/index.php" class="aboutBtn">Book Now</a>
      </div>
    </div>

    <!-- ROW 2 -->
    <div class="aboutRow">
      <div class="aboutRow__img aboutRow__img--two"><img src="assets\img\about\2197496-1024x682 1.png" alt=""></div>

      <div class="aboutRow__content">
        <h3 class="aboutH">Global reach</h3>

        <p class="aboutP">
          Black chauffeur’s city-to-city service offers premium, reliable transportation across cities worldwide.
          Available in over 50 countries, it ensures seamless and comfortable travel with professional chauffeurs
          and high-quality vehicles on hundreds of routes worldwide. Planning your next ski trip? Check out our
          city-to-slopes offering for all your ski season transport needs. <br><br>
          Or maybe sandy beaches are on your mind? Check out our city-to-beach offering for all your beach getaway
          transport needs.
        </p>
      </div>
    </div>

  </div>
</section>

<section class="faqV2">
  <div class="container">
    <h2 class="faqV2__title">Frequently Asked Questions</h2>

    <div class="faqV2__list">

      <div class="faqItem">
        <button class="faqBtn" type="button" aria-expanded="false">
          <span class="faqQ">How do I book a taxi?</span>
          <span class="faqPlus">+</span>
        </button>
        <div class="faqA">
          You can book by using the booking form on the homepage, selecting pickup/drop-off, date and time, then confirming your ride.
        </div>
      </div>

      <div class="faqItem">
        <button class="faqBtn" type="button" aria-expanded="false">
          <span class="faqQ">Can I schedule a ride in advance?</span>
          <span class="faqPlus">+</span>
        </button>
        <div class="faqA">
          Yes, you can schedule rides in advance by choosing your preferred date and time in the booking form.
        </div>
      </div>

      <div class="faqItem">
        <button class="faqBtn" type="button" aria-expanded="false">
          <span class="faqQ">Do you offer airport transfers?</span>
          <span class="faqPlus">+</span>
        </button>
        <div class="faqA">
          Yes, we provide airport pickup and drop-off services with professional chauffeurs and premium vehicles.
        </div>
      </div>

      <div class="faqItem">
        <button class="faqBtn" type="button" aria-expanded="false">
          <span class="faqQ">Are your drivers licensed and insured?</span>
          <span class="faqPlus">+</span>
        </button>
        <div class="faqA">
          Yes, all drivers are properly licensed, trained, and insured to ensure a safe and comfortable journey.
        </div>
      </div>

    </div>
  </div>
  <script src="/assets/js/main.js"></script>
</section>
<section class="cities">
  <div class="container">
    <h2 class="cities__title">Cities we cover</h2>

    <div class="citiesGrid">

      <div class="cityCard">
        <div class="cityCard__img"><img src="assets/img/cities/city1.png" alt=""></div>
        <h3 class="cityCard__name">Riyadh</h3>
      </div>

      <div class="cityCard">
        <div class="cityCard__img"><img src="assets/img/cities/city2.png" alt=""></div>
        <h3 class="cityCard__name">Jeddah</h3>
      </div>

      <div class="cityCard">
        <div class="cityCard__img"><img src="assets/img/cities/city3.png" alt=""></div>
        <h3 class="cityCard__name">Makkah</h3>
      </div>

      <div class="cityCard">
        <div class="cityCard__img"><img src="assets/img/cities/city4.png" alt=""></div>
        <h3 class="cityCard__name">Al Ula</h3>
      </div>

      <div class="cityCard">
        <div class="cityCard__img"><img src="assets/img/cities/city5.png" alt=""></div>
        <h3 class="cityCard__name">Al Khobar</h3>
      </div>

      <div class="cityCard">
        <div class="cityCard__img"><img src="assets/img/cities/city6.png" alt=""></div>
        <h3 class="cityCard__name">Madinah</h3>
      </div>

    </div>
  </div>
</section>

<?php
require_once __DIR__ . "/includes/footer.php";