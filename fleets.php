<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/header.php";

/**
 * Fleet Data (you can edit anytime)
 * image = placeholder for now (you will replace later)
 * category = used in badge + filter
 */
$fleet = [
  ["name"=>"BMW 7 Series", "category"=>"Superior Class", "pax"=>3, "bags"=>2, "image"=>"uploads/fleets/Bmw 7 series.jpeg"],
  ["name"=>"Mercedes-Benz S-Class", "category"=>"Superior Class", "pax"=>3, "bags"=>2, "image"=>"uploads/fleets/Mercedes Benz S-Class.jpeg"],

  ["name"=>"Ford Taurus", "category"=>"Business Class", "pax"=>3, "bags"=>2, "image"=>"uploads/fleets/Ford taurus.jpeg"],
  ["name"=>"Lexus ES-350", "category"=>"Premier Class", "pax"=>3, "bags"=>2, "image"=>"uploads/fleets/Lexus ES-350.jpeg"],

  ["name"=>"Chevrolet Tahoe", "category"=>"Premier SUV Class", "pax"=>5, "bags"=>5, "image"=>"uploads/fleets/Chevrolet Tahoe.jpeg"],
  ["name"=>"GMC Yukon", "category"=>"VIP SUV Class", "pax"=>5, "bags"=>5, "image"=>"uploads/fleets/GMC Yukon.jpeg"],

  ["name"=>"Hyundai Staria", "category"=>"Business VAN Class", "pax"=>7, "bags"=>3, "image"=>"uploads/fleets/Hyundai staria.jpeg"],
  ["name"=>"Mercedes-Benz Vito", "category"=>"Mini VAN Class", "pax"=>6, "bags"=>3, "image"=>"uploads/fleets/Mercedes-Benz Vito.jpeg"],
  ["name"=>"Mercedes-Benz Sprinter", "category"=>"VIP VAN Class", "pax"=>15, "bags"=>10, "image"=>"uploads/fleets/Mercedes-Benz Sprinter.jpeg"],

  ["name"=>"Toyota Hiace", "category"=>"Mini BUS Class", "pax"=>14, "bags"=>10, "image"=>"uploads/fleets/Toyota Hiace.jpeg"],
  ["name"=>"Toyota Coaster", "category"=>"Business BUS Class", "pax"=>24, "bags"=>18, "image"=>"uploads/fleets/Toyota Coaster.jpeg"],
  ["name"=>"King Long 50 P", "category"=>"Premier BUS Class", "pax"=>50, "bags"=>40, "image"=>"uploads/fleets/King Long 50 P.jpeg"],
];

$categories = [
  "All",
  "Business Class",
  "Premier Class",
  "Superior Class",
  "Premier SUV Class",
  "VIP SUV Class",
  "Mini VAN Class",
  "Business VAN Class",
  "VIP VAN Class",
  "Mini BUS Class",
  "Business BUS Class",
  "Premier BUS Class",
];
?>

<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/pages/fleets.css">

<!-- HERO -->
<section class="fleetHero">
  <div class="fleetHero__bg" aria-hidden="true"></div>
  <div class="fleetHero__overlay" aria-hidden="true"></div>

  <div class="fleetHero__content container">
    <h1 class="fleetHero__title">Our Fleet</h1>
    <p class="fleetHero__desc">
      Premium vehicles for business, VIP travel, airport transfers, and group transportation across Saudi Arabia.
    </p>
  </div>
</section>

<!-- FILTERS -->
<section class="fleetFilters">
  <div class="container fleetFilters__row">
    <?php foreach ($categories as $i => $cat): ?>
      <button class="fleetFilter <?= $i===0 ? "is-active" : "" ?>" type="button" data-filter="<?= htmlspecialchars($cat) ?>">
        <?= htmlspecialchars($cat) ?>
      </button>
    <?php endforeach; ?>
  </div>
</section>

<!-- GRID -->
<section class="fleetSection">
  <div class="container">
    <div class="fleetGrid" id="fleetGrid">
      <?php foreach ($fleet as $car): ?>
        <article class="fleetCard" data-category="<?= htmlspecialchars($car["category"]) ?>">
          <div class="fleetCard__media">
            <img src="<?= BASE_URL . "/" . $car["image"] ?>" alt="<?= htmlspecialchars($car["name"]) ?>">
            <span class="fleetCard__badge"><?= htmlspecialchars($car["category"]) ?></span>
          </div>

          <div class="fleetCard__body">
            <h3 class="fleetCard__title"><?= htmlspecialchars($car["name"]) ?></h3>

            <div class="fleetCard__meta">
              <span class="metaItem">👤 <?= (int)$car["pax"] ?> Seats</span>
              <span class="metaDot">•</span>
              <span class="metaItem">🧳 <?= (int)$car["bags"] ?> Luggage</span>
            </div>

            <div class="fleetCard__actions">
              <a class="fleetBtn" href="<?= BASE_URL ?>/book/select-car.php?car=<?= urlencode($car["name"]) ?>">
                Book Now
              </a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  (function(){
    const btns = document.querySelectorAll(".fleetFilter");
    const cards = document.querySelectorAll(".fleetCard");

    btns.forEach(btn => {
      btn.addEventListener("click", () => {
        btns.forEach(b => b.classList.remove("is-active"));
        btn.classList.add("is-active");

        const filter = btn.getAttribute("data-filter");

        cards.forEach(card => {
          const cat = card.getAttribute("data-category");
          if (filter === "All" || cat === filter) {
            card.style.display = "";
          } else {
            card.style.display = "none";
          }
        });
      });
    });
  })();
</script>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
