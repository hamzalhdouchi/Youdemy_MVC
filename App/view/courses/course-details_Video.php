<?php
require_once __DIR__ . "/../../controllers/CoursVideo.php";
require_once __DIR__ . "/../../controllers/Etudiant.php";
require_once __DIR__ . "/../../controllers/Inscription.php";
$id_Cours = $_GET['id'];
$id_user = $_SESSION['user_id'];

$coursVideo = new coursVideo();
$Etudant = new Etudiant();
$Inscription = new Inscription();
$coursVideo->setid($id_Cours);
$cours = $coursVideo->AffecherCoursByCours();
$Inscription->setIdCours($id_Cours);
$Inscription->setIdEtudiant($id_user);
$result = $Inscription->afficherInscription();
if (isset($_POST['inscription'])) {
  $Inscription->setIdCours($id_Cours);
  $Inscription->setIdEtudiant($id_user);
  $Inscription->Inscription();
}

var_dump($cours['Cours']->getVideo());
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Details 3 | Edurock - Education LMS Template</title>
  <link
    rel="../shortcut icon"
    type="../image/x-icon"
    href="../assets/images/favicon.ico">
  <!-- link stylesheet -->
  <link rel="stylesheet" href="../assets/css/icofont.min.css">
  <link rel="stylesheet" href="../assets/css/popup.css">

  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../assets/css/video-modal.css">
  <link rel="stylesheet" href="../assets/css/aos.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
  class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark">
  <!-- preloader -->
  <!-- <div
    class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700">
    
    <div
      class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"></div>
    <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
      <img src="../assets/images/pre.png" alt="Preloader" class="h-10 w-10 block">
    </div>
  </div> -->
  <!-- theme fixed shadow -->
  <div>
    <div class="fixed-shadow left-[-250px]"></div>
    <div class="fixed-shadow right-[-250px]"></div>
  </div>

  <!-- theme controller -->
  <div
    class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl">
    <button
      class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller">
      <!-- dark -->
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="mr-10px w-5 block dark:hidden"
        viewBox="0 0 512 512">
        <path
          d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="32"></path>
      </svg>
      <span class="text-base block dark:hidden">Dark</span>
      <!-- light -->
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="hidden mr-10px w-5 dark:block"
        viewBox="0 0 512 512">
        <path
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-miterlimit="10"
          stroke-width="32"
          d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"></path>
        <circle
          cx="256"
          cy="256"
          r="80"
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-miterlimit="10"
          stroke-width="32"></circle>
      </svg>
      <span class="text-base hidden dark:block">Light</span>
    </button>
  </div>
  <!-- scroll up button -->
  <div>
    <button
      class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden">
      <i class="icofont-rounded-up"></i>
    </button>
  </div>
  <?php include '../layouts/header.php' ?>

  <!-- main body -->
  <main class="bg-transparent">
    <!-- banner section -->
    <section>
      <!-- banner section -->
      <div
        class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible pt-50px">
        <!-- animated icons -->
        <div>
          <img
            class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
            src="../assets/images/herobanner/herobanner__1.png"
            alt=""><img
            class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
            src="../assets/images/herobanner/herobanner__2.png"
            alt=""><img
            class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
            src="../assets/images/herobanner/herobanner__3.png"
            alt="">

          <img
            class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
            src="../assets/images/herobanner/herobanner__5.png"
            alt="">
        </div>
        <div class="container">
          <div>
            <ul class="flex gap-1">
              <li>
                <a
                  href="./HOME.php"
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark">Home <i class="icofont-simple-right"></i></a>
              </li>
              <li>
                <span
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark">Course-Details</span>
              </li>
            </ul>
            <div class="pt-70px">
              <div class="flex items center gap-6 mb-30px" data-aos="fade-up">
                <div
                  class="text-sm text-whiteColor bg-primaryColor border border-primaryColor px-26px py-0.5 leading-23px font-semibold hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                  <?= $cours['Tags']->getName() ?>
                </div>

              </div>
              <!-- titile -->
              <h4
                class="text-size-32 md:text-4xl font-bold text-blackColor dark:text-blackColor-dark mb-15px leading-43px md:leading-14.5"
                data-aos="fade-up">
                <?= $cours['Cours']->getTitre() ?>
              </h4>


            </div>
          </div>
        </div>
      </div>

    </section>

    <!--course details section -->
    <div class="w-[80vw] h-[70vh] mb-20 ml-28">
      <div>
        
      </div>
      <?php
      if ($result != null) {
      ?>
        <!-- meeting thumbnail -->
        <div class="overflow-hidden relative">
          <img
            src="../views/coursContnu/assets/img/sample_image_4.png"
            alt=""
            class="w-full">
          <div
            class="absolute top-0 right-0 left-0 bottom-0 flex items-center justify-center z-10">
            <div>
              <button
                data-url="<?= $cours['Cours']->getVideo() ?>"
                class="lvideo relative w-15 h-15 md:h-20 md:w-20 lg:w-15 lg:h-15 2xl:h-70px 2xl:w-70px 3xl:h-20 3xl:w-20 bg-secondaryColor rounded-full flex items-center justify-center">
                <span
                  class="animate-buble absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"></span><span
                  class="animate-buble2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"></span>
                <img src="../assets/images/icon/video.png" alt="">
              </button>
            </div>
          </div>
        </div>
      <?php
      } else {
      ?>
        <div class="overflow-hidden relative">
          <img
            src="../views/coursContnu/assets/img/sample_image_4.png"
            alt=""
            class="w-full">
          <div
            class="absolute top-0 right-0 left-0 bottom-0 flex items-center justify-center z-10">

          </div>
        </div>
      <?php
      }
      ?>
      <?php
      if ($result == null) {
      ?>
        <section>
          <div class=" absolute z-30 container py-10 md:py-50px lg:py-60px 2xl:py-100px">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">

              <!-- course sidebar -->
              <div class="lg:col-start-9 lg:col-span-4 relative lg:top-[-340px]">
                <div class="flex flex-col">
                  <!-- enroll section -->
                  <div
                    class="py-33px px-25px shadow-event mb-30px bg-whiteColor dark:bg-whiteColor-dark rounded-md"
                    data-aos="fade-up">

                    <div class="mb-5" data-aos="fade-up">
                      <form action="" method="post">
                        <button
                          type="submit"
                          name="inscription"
                          class="w-full text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px mb-10px leading-1.8 border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-secondaryColor dark:hover:bg-whiteColor-dark">
                          Inscription
                        </button>
                      </form>

                      <span
                        class="text-size-30 text-contentColor dark:text-contentColor-dark leading-1.8">
                        <?= $cours['Cours']->getDescription() ?></span>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
      <?php
      }
      ?>
    </div>

  </main>
  <?php include '../layouts/footer.php' ?>
  <script src="../assets/js/swiper-bundle.min.js"></script>
  <script src="../assets/js/isotope.pkgd.min.js"></script>
  <script src="../assets/js/accordion.js"></script>
  <script src="../assets/js/chart.js"></script>
  <script src="../assets/js/count.js"></script>
  <script src="../assets/js/countdown.js"></script>
  <script src="../assets/js/counterup.js"></script>
  <script src="../assets/js/dropdown.js"></script>
  <script src="../assets/js/filter.js"></script>
  <script src="../assets/js/mobileMenu.js"></script>
  <script src="../assets/js/modal.js"></script>
  <script src="../assets/js/popup.js"></script>
  <script src="../assets/js/preloader.js"></script>
  <script src="../assets/js/scrollUp.js"></script>
  <script src="../assets/js/slider.js"></script>
  <script src="../assets/js/smoothScroll.js"></script>
  <script src="../assets/js/stickyHeader.js"></script>
  <script src="../assets/js/tabs.js"></script>
  <script src="../assets/js/theme.js"></script>
  <script src="../assets/js/videoModal.js"></script>
  <script src="../assets/js/vanilla-tilt.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-details-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:40 GMT -->

</html>