<?php
include('./components/header.php')
?>
<section class="relative min-h-screen flex justify-center bg-gray-900"
  data-aos="fade">
  <img src=" ./img/home.png" alt="Home"
    class="fixed top-0 left-0 w-full h-screen object-cover opacity-50 ">
  <div class="text-center mt-34 text-white" data-aos="zoom-out">
    <h1 class="text-8xl mb-8 font-bold rellax" data-rellax-speed="-4">
      Welcome<br><span class="text-yellow-500">To</span> <span class="text-green-500">Bali</span>
    </h1>
    <h3 class="text-3xl font-bold rellax" data-rellax-speed="-2">The best tourist destination in Indonesia</h3>
  </div>
</section>


<section class="relative pt-32 bg-emerald-950">
  <h3 class="text-center text-5xl font-bold sticky mb-32 top-60 text-white z-10"
    data-aos="fade" data-aos-anchor-placement="bottom-bottom">
    Filled with wonderfull sights
  </h3>
  <div class="columns-3 gap-8 px-8 pb-64">
    <?php
    $pictures = glob('./img/home2/*.jpg');
    foreach ($pictures as $x):
    ?>
      <img src="<?php echo $x; ?>" alt="<?php echo $x; ?>" class="mb-8 rounded opacity-75">
    <?php endforeach; ?>
  </div>
</section>

<section class="h-screen bg-gray-300">

</section>
<?php
include('./components/footer.php')
?>