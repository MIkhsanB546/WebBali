<?php include_once 'components/header.php' ?>

<header class="h-screen bg-[url(./assets/img/hero.jpg)] bg-cover bg-center bg-fixed" id="hero">
  <div class="flex justify-center items-center h-full bg-black/50">
    <div class="text-center text-white rellax">
      <h1 class="mb-4 text-6xl font-bold">Discovery Beautiful Bali Island</h1>
      <p class="mb-8 text-lg">One of the best tourist destination in Indonesia</p>
      <a href="#" class="py-2 px-4 transition bg-green-500 text-white rounded hover:bg-green-600">Explore Destinations</a>
    </div>
  </div>
</header>

<section class="flex items-center py-8 lg:h-screen lg:py-0">
  <div class="w-5/6 mx-auto text-justify lg:w-3/4">
    <h2 class="text-5xl font-bold text-green-600 mb-8">
      About
    </h2>
    <p class="mb-6 text-base/8">Bali is the Island of God in Paradise among Indonesian tourism. Furthermore, it is a perfect tourist destination to enjoy the holiday with your family as well as collages. This tropical paradise has a unique blend of modern tourist facilities combined with wonderful shopping, a rich past as well as heritage sites.</p>
    <p class="mb-6 text-base/8">The Balinese people are proud of having preserved their unique Hindu culture against the advance of Islam, the dominant religion throughout Indonesia. It is also the Balinese festivals in a magnificent temple as well as palaces.</p>
    <p class="mb-6 text-base/8">We can find some best surfing spots on the island on the western side. Meanwhile, the eastern side is a wonderful haven for families, with beautiful white sand beaches and gentle seas. Once you explore the Indonesian tourism please do not miss to visit Bali.</p>
  </div>
</section>

<section class="flex items-center py-8 lg:h-screen lg:py-0">
  <div class="w-5/6 mx-auto text-justify lg:w-3/4">
    <h2 class="text-5xl font-bold text-green-600 mb-8">
      Top Destinations
    </h2>
    <div class="flex flex-col justify-around gap-6 lg:flex-row">
      <!-- cards -->
      <?php
      $destinations = array(
        array(
          "img" => "./assets/img/gwk_cultural_park.png",
          "alt" => "GWK Cultural Park",
          "title" => "GWK Cultural Park",
          "description" => "Witness with your very own eyes the beautiful dances like the haunting Kecak.",
        ),
        array(
          "img" => "./assets/img/ulun_danu_bratan_temple.png",
          "alt" => "Ulun Danu Bratan Temple",
          "title" => "Ulun Danu Bratan Temple",
          "description" => "the Ulun Danu Bratan Temple is a popular attraction among both tourists and locals.",
        ),
        array(
          "img" => "./assets/img/tanah_lot.png",
          "alt" => "Tanah Lot",
          "title" => "Tanah Lot",
          "description" => "Tanah Lot is an exotic ancient Hindu shrine perched on top of an outcrop amidst constantly crashing waves.",
        ),
      );

      foreach ($destinations as $d):
      ?>
        <div class="max-w-xs bg-white rounded-lg shadow-md overflow-hidden">
          <img src="<?= $d['img'] ?>" alt="<?= $d['alt'] ?>" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2"><?= $d['title'] ?></h3>
            <p class="text-gray-600 mb-4"><?= $d['description'] ?></p>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="text-center mt-12">
      <a href="destinations.php" class="py-2 px-4 bg-green-500 text-white font-semibold rounded transition hover:bg-green-600">Learn More</a>
    </div>
  </div>
</section>


<?php include_once 'components/footer.php' ?>