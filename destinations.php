<?php include_once 'components/header.php' ?>

<header class="h-96 bg-[url(./assets/img/hero.jpg)] bg-cover bg-center bg-fixed" id="hero">
  <div class="flex justify-center items-center h-full bg-black/50">
    <div class="text-center text-white rellax">
      <h1 class="mb-4 text-5xl font-bold">Destinations</h1>
      <p class="mb-8 text-lg">Explore the best places to visit in Bali</p>
    </div>
  </div>
</header>

<section class="py-16">
  <div class="max-w-3/4 mx-auto text-justify">
    <div class="mb-24 leading-7">
      <h2 class="text-3xl font-bold text-green-600 mb-8">
        Popular Destinations
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
        <a href="contact.php" class="py-2 px-4 bg-green-500 text-white font-semibold rounded transition hover:bg-green-600">Contact Us for More Info</a>
      </div>
    </div>
  </div>
</section>


<?php include_once 'components/footer.php' ?>