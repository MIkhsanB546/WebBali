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
  <div class="w-3/4 mx-auto text-justify">
    <div class="mb-24 leading-7">
      <h2 class="text-3xl font-bold text-green-600 mb-8">
        Popular Destinations
      </h2>
      <div class="flex flex-wrap justify-around space-x-6 space-y-6">
        <!-- cards -->
        <div class="max-w-xs bg-white rounded-lg shadow-md overflow-hidden shadow-lg">
          <img src="./assets/img/pic1.png" alt="GWK Cultural Park" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">GWK Cultural Park</h3>
            <p class="text-gray-600 mb-4">Witness with your very own eyes the beautiful dances like the haunting Kecak.</p>
          </div>
        </div>
        <div class="max-w-xs bg-white rounded-lg shadow-md overflow-hidden shadow-lg">
          <img src="./assets/img/pic2.png" alt="Ulun Danu Bratan Temple" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Ulun Danu Bratan Temple</h3>
            <p class="text-gray-600 mb-4">The Ulun Danu Bratan Temple is a popular attraction among both tourists and locals.</p>
          </div>
        </div>
        <div class="max-w-xs bg-white rounded-lg shadow-md overflow-hidden shadow-lg">
          <img src="./assets/img/pic3.png" alt="Tanah Lot" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Tanah Lot</h3>
            <p class="text-gray-600 mb-4">Tanah Lot is an exotic ancient Hindu shrine perched on top of an outcrop amidst constantly crashing waves.</p>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        <a href="contact.php" class="py-2 px-4 bg-green-500 text-white font-semibold rounded transition hover:bg-green-600">Contact Us for More Info</a>
      </div>
    </div>
  </div>
</section>

<?php include_once 'components/footer.php' ?>