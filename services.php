<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/header.php";
?>

<link rel="stylesheet" href="assets/css/pages/services.css">

<section class="svcHero">
  <div class="svcHero__bg"></div>
  <div class="svcHero__overlay"></div>
  <h1 class="svcHero__title">OUR SERVICE</h1>
</section>

<!-- OPTIONAL: small list like the PDF shows (anchors) -->
<section class="svcQuick">
  <div class="container">
    <div class="svcQuick__row">
      <a class="svcQuick__link" href="#airport">Airport Transfers</a>
      <a class="svcQuick__link" href="#hourly">Hourly Chauffeur Services</a>
      <a class="svcQuick__link" href="#fleet">A Fleet for Every Occasion</a>
      <a class="svcQuick__link" href="#city">City to City Rides</a>
      <a class="svcQuick__link" href="#chauffeurs">Professional Chauffeurs</a>
    </div>
  </div>
</section>

<!-- SERVICES BLOCKS -->
<section class="svcBlocks">
  <div class="container svcBlocks__wrap">

    <!-- Airport Transfers (image left, text right) -->
    <div class="svcRow" id="airport">
      <div class="svcImg"><img src="assets/img/service/service1.png" alt=""></div>
      <div class="svcContent">
        <h2 class="svcH">Airport Transfers</h2>
        <p class="svcP">
          Arrive or depart in style with our dependable airport transfer services. Our chauffeurs monitor flight
          schedules in real-time, ensuring timely pickups, even in the event of unforeseen flight alterations.
          Whether you are arriving after an extended journey or departing for the airport, Black chauffeur-KSA
          offers a stress-free experience with meet-and-greet services, luggage assistance, and top-tier vehicles.
        </p>
      </div>
    </div>

    <!-- City-to-City Rides (text left, image right) -->
    <div class="svcRow svcRow--reverse" id="city">
      <div class="svcImg"><img src="assets/img/service/service2.png" alt=""></div>
      <div class="svcContent">
        <h2 class="svcH">City-to-City Rides</h2>
        <p class="svcP">
          Travel between cities in unparalleled comfort and privacy with our premium intercity rides.
          Black chauffeur-KSA vehicles provide a superior alternative to flights, eliminating the need for lengthy
          security checks, crowded terminals, and potential delays. Enjoy a smooth journey while prioritizing
          your tasks or simply relaxing.
        </p>
      </div>
    </div>

    <!-- Hourly Chauffeur Services (image left, text right) -->
    <div class="svcRow" id="hourly">
      <div class="svcImg"><img src="assets/img/service/service3.png" alt=""></div>
      <div class="svcContent">
        <h2 class="svcH">Hourly Chauffeur Services</h2>
        <p class="svcP">
          Black chauffeur-KSA hourly chauffeur services offer unparalleled flexibility, allowing you to have a
          personal driver at your disposal for the duration of your needs. Whether you have multiple meetings,
          events, or stops within the city, our professional chauffeurs ensure punctuality and comfort throughout
          your journey.
        </p>
      </div>
    </div>

    <!-- Professional Chauffeurs (text left, image right) -->
    <div class="svcRow svcRow--reverse" id="chauffeurs">
      <div class="svcImg"><img src="assets/img/service/service4.png" alt=""></div>
      <div class="svcContent">
        <h2 class="svcH">Professional Chauffeurs</h2>
        <p class="svcP">
          Our chauffeurs are highly trained and embody the highest levels of professionalism, discretion, and local
          knowledge. All Black chauffeur-KSA are bilingual in English and the local language, facilitating seamless
          communication throughout your travels.
        </p>
      </div>
    </div>

    <!-- A Fleet for Every Occasion (image left, text right) -->
    <div class="svcRow" id="fleet">
      <div class="svcImg"><img src="assets/img/service/service5.png" alt=""></div>
      <div class="svcContent">
        <h2 class="svcH">A Fleet for Every Occasion</h2>
        <p class="svcP">
          Our fleet encompasses a diverse range of luxury vehicles, from executive sedans to spacious SUVs, all
          meticulously equipped with modern amenities to ensure a comfortable ride. Whether the occasion demands
          a formal sedan or a spacious SUV, Black chauffeur-KSA guarantees a vehicle that aligns with your specific
          needs and provides an unparalleled travel experience.
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
  <script src="assets/js/main.js"></script>
</section>


<?php
require_once __DIR__ . "/includes/footer.php";