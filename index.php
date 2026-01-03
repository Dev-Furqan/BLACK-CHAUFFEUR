<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/header.php";
?>

<link rel="stylesheet" href="assets/css/pages/home.css">

<section class="heroV2">
  <div class="heroV2__bg" aria-hidden="true"></div>
  <div class="heroV2__overlay" aria-hidden="true"></div>

  <div class="heroV2__content">
    <h1 class="heroV2__title">EXECUTIVE CHAUFFEUR SERVICE</h1>

    <p class="heroV2__desc">
      Black Chauffeur-KSA is your reliable partner for seamless and high-end ground
      transportation services globally. Whether you require airport transfers, city-to-city rides,
      or hourly chauffeur services, we provide personalized luxury transportation that meets
      the utmost standards of comfort and convenience.
    </p>

    <!-- BOOKING WIDGET (reference style) -->
    <div class="bookWidget">
      <div class="bookWidget__tabs">
        <button type="button" class="bookTab is-active">Airport</button>
        <button type="button" class="bookTab">Hourly</button>
        <button type="button" class="bookTab">Full day</button>
        <button type="button" class="bookTab">City to City</button>
      </div>

      <form class="bookWidget__bar" action="<?= BASE_URL ?>/book/index.php" method="get">
        <div class="bwField">
          <span class="bwIcon">📍</span>
          <input name="pickup" type="text" placeholder="Pickup location" required />
        </div>

        <div class="bwSwap" title="Swap">
          ⇄
        </div>

        <div class="bwField">
          <span class="bwIcon">📍</span>
          <input name="dropoff" type="text" placeholder="Drop-off location" required />
        </div>

        <div class="bwDivider"></div>

        <div class="bwMini">
          <span class="bwIcon">📅</span>
          <input name="date" type="text" placeholder="Sat, Dec, 2025" />
        </div>

        <div class="bwDivider"></div>

        <div class="bwMini">
          <span class="bwIcon">🕒</span>
          <input name="time" type="text" placeholder="3:25 AM" />
        </div>

        <div class="bwDivider"></div>

        <div class="bwMini bwMini--pax">
          <span class="bwIcon">👤</span>
          <input name="pax" type="text" value="1" />
          <span class="bwPlus">+</span>
        </div>

        <button class="bwSearch" type="submit" aria-label="Search">🔍</button>
      </form>
    </div>
  </div>
</section>


<section class="featuredV2">
  <div class="container">

    <h2 class="featuredV2__title">Featured Fleet</h2>

    <div class="featuredV2__filters">
      <button class="fPill is-active" type="button">ALL</button>
      <button class="fPill" type="button">First-class</button>
      <button class="fPill" type="button">Premium</button>
      <button class="fPill" type="button">Business</button>
    </div>

    <div class="fleetGridV2">

      <!-- Card 1 -->
      <article class="fleetCardV2">
        <div class="fleetCardV2__media">
          <div class="fleetCardV2__cityCircle"><img src="assets\img\home\Group 2.png" alt=""></div>

          <!-- Replace this placeholder with your <img> later -->
          <div class="fleetCardV2__carPh"><img src="assets\img\home\thumbnail-1742660814450-140030211 1.png" alt=""></div>

          <div class="fleetCardV2__topLabel">Mercedes-Benz</div>
        </div>

        <div class="fleetCardV2__body">
          <h3 class="fleetCardV2__name">Mercedes-Benz S Class</h3>

          <a href="book/index.php" class="fleetCardV2__btn">Book Now</a>
        </div>

        <div class="fleetCardV2__meta">
          <div class="metaItem">
            <span class="metaIcon">👥</span>
            <span class="metaText">3</span>
          </div>
          <div class="metaItem">
            <span class="metaIcon">🧳</span>
            <span class="metaText">3</span>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="fleetCardV2">
        <div class="fleetCardV2__media">
          <div class="fleetCardV2__cityCircle"><img src="assets\img\home\Group 2.png" alt=""></div>
          <div class="fleetCardV2__carPh"><img src="assets\img\home\thumbnail-1742661841019-340856239 1.png" alt=""></div>
          <div class="fleetCardV2__topLabel">Mercedes-Benz</div>
        </div>

        <div class="fleetCardV2__body">
          <h3 class="fleetCardV2__name">Mercedes-Benz E Class</h3>
          <a href="book/index.php" class="fleetCardV2__btn">Book Now</a>
        </div>

        <div class="fleetCardV2__meta">
          <div class="metaItem">
            <span class="metaIcon">👥</span>
            <span class="metaText">3</span>
          </div>
          <div class="metaItem">
            <span class="metaIcon">🧳</span>
            <span class="metaText">3</span>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="fleetCardV2">
        <div class="fleetCardV2__media">
          <div class="fleetCardV2__cityCircle"><img src="assets\img\home\Group 2.png" alt=""></div>
          <div class="fleetCardV2__carPh"><img src="assets\img\home\thumbnail-1742662163825-686362414 1.png" alt=""></div>
          <div class="fleetCardV2__topLabel">Chevrolet</div>
        </div>

        <div class="fleetCardV2__body">
          <h3 class="fleetCardV2__name">Chevrolet Suburban</h3>
          <a href="book/index.php" class="fleetCardV2__btn">Book Now</a>
        </div>

        <div class="fleetCardV2__meta">
          <div class="metaItem">
            <span class="metaIcon">👥</span>
            <span class="metaText">7</span>
          </div>
          <div class="metaItem">
            <span class="metaIcon">🧳</span>
            <span class="metaText">7</span>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>
<section class="partners">
  <div class="container">
    <h2 class="partners__title">Our Partners</h2>
  </div>

  <div class="partnersMarquee" aria-label="Partners logos">
    <div class="partnersMarquee__track">

      <!-- SET A -->
      <div class="partnerLogo"><img src="assets/img/partners/client1.png" alt="Partner 1"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client2.png" alt="Partner 2"></div>
      <div class="partnerLogo"><img src="assets\img\partners\client 3.png" alt="Partner 3"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client4.png" alt="Partner 4"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client5.png" alt="Partner 5"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client6.png" alt="Partner 6"></div>

      <!-- SET B (duplicate for seamless loop) -->
      <div class="partnerLogo"><img src="assets/img/partners/client1.png" alt="Partner 1"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client2.png" alt="Partner 2"></div>
      <div class="partnerLogo"><img src="assets\img\partners\client 3.png" alt="Partner 3"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client4.png" alt="Partner 4"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client5.png" alt="Partner 5"></div>
      <div class="partnerLogo"><img src="assets/img/partners/client6.png" alt="Partner 6"></div>

    </div>
  </div>
</section>

<section class="ctaSplit">
  <div class="container">

    <div class="ctaSplit__wrap">

      <!-- LEFT (Black) -->
      <div class="ctaCard ctaCard--dark">
        <h3 class="ctaCard__title">
          Looking to hire a full- <br>
          time driver?
        </h3>

        <div class="ctaCard__subTitle">What you receive:</div>

        <ul class="ctaList ctaList--light">
          <li><span class="ctaCheck">✓</span> Full-time professional chauffeur</li>
          <li><span class="ctaCheck">✓</span> Customized schedule that fits your busy lifestyle</li>
          <li><span class="ctaCheck">✓</span> Flexible and transparent pricing</li>
        </ul>

        <a href="<?= BASE_URL ?>/register.php" class="ctaBtn">Get started</a>
      </div>

      <!-- RIGHT (White) -->
      <div class="ctaCard ctaCard--light">
        <h3 class="ctaCard__title ctaCard__title--dark">
          The easiest way to <br>
          plan any event.
        </h3>

        <p class="ctaCard__desc">
          Partnering with industry-leading event planners, we <br>
          ensure that every aspect of your event logistics, <br>
          including transportation needs, is expertly managed from <br>
          start to finish.
        </p>

        <ul class="ctaList ctaList--dark">
          <li><span class="ctaCheck ctaCheck--dark">✓</span> Stress-free planning</li>
          <li><span class="ctaCheck ctaCheck--dark">✓</span> All logistics and execution are handled by professionals</li>
          <li><span class="ctaCheck ctaCheck--dark">✓</span> We cover your transportation needs at 100%</li>
        </ul>

        <a href="<?= BASE_URL ?>/register.php" class="ctaBtn">Get started</a>
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
<section class="reviews">
  <div class="container">
    <h2 class="reviews__title">What Our Customers Say</h2>
  </div>

  <div class="reviewsMarquee">
    <div class="reviewsMarquee__track">

      <!-- SET A -->
      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--blue">F</div>
        <div class="reviewName">Faraz</div>
        <div class="reviewStars">★★★★★</div>
        <div class="reviewText">
          They offered me really good <br> service top notch quality
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--purple">A</div>
        <div class="reviewName">Ahmed Sadique</div>
        <div class="reviewStars">★★★★★</div>
        <div class="reviewText">
          They offered me really good <br> service top notch quality
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--red">P</div>
        <div class="reviewName">Paul Cousins</div>
        <div class="reviewStars">★★★★☆</div>
        <div class="reviewText reviewText--small">
          Great service. Exceptional cars, <br>
          professional chauffeurs. Courteous and <br>
          effective. Focus on customers. <br>
          Recommend for Riyadh travel
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--green">A</div>
        <div class="reviewName">Asad</div>
        <div class="reviewStars">★★★★★</div>
        <div class="reviewText">
          They offered me really good <br> service top notch quality
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <!-- SET B (duplicate for seamless infinite loop) -->
      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--blue">F</div>
        <div class="reviewName">Faraz</div>
        <div class="reviewStars">★★★★★</div>
        <div class="reviewText">
          They offered me really good <br> service top notch quality
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--purple">A</div>
        <div class="reviewName">Ahmed Sadique</div>
        <div class="reviewStars">★★★★★</div>
        <div class="reviewText">
          They offered me really good <br> service top notch quality
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--red">P</div>
        <div class="reviewName">Paul Cousins</div>
        <div class="reviewStars">★★★★☆</div>
        <div class="reviewText reviewText--small">
          Great service. Exceptional cars, <br>
          professional chauffeurs. Courteous and <br>
          effective. Focus on customers. <br>
          Recommend for Riyadh travel
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

      <article class="reviewCard">
        <div class="reviewAvatar reviewAvatar--green">A</div>
        <div class="reviewName">Asad</div>
        <div class="reviewStars">★★★★★</div>
        <div class="reviewText">
          They offered me really good <br> service top notch quality
        </div>
        <a class="reviewLink" href="#">Read full review →</a>
      </article>

    </div>
  </div>
</section>


<?php require_once __DIR__ . "/includes/footer.php"; ?>
