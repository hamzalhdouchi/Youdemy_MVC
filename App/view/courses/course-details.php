<?php
// session_start();
// require_once __DIR__ . ("/../../controllers/CoursDocument.php");
// require_once __DIR__ . ("/../../controllers/CoursVideo.php");
// require_once __DIR__ . ("/../../controllers/Etudiant.php");
// require_once __DIR__ . ("/../../controllers/Inscription.php");

// $id_Cours = $_GET["id"];
// $id_user = $_SESSION['user_id'];
// $coursDocument = new CoursDocument();
// $Etudant = new Etudiant();
// $inscription = new Inscription();

// $cours = $coursDocument->AffecherCoursByCategorei($id_Cours);
// if ($cours == null) {
//   header("Location: ../courses/course-details_Video.php?id=$id_Cours");
//       exit;
// }
// $inscription->setIdEtudiant($id_user);
// $inscription->setIdCours($id_Cours);
// $result = $inscription->afficherInscription();
// if (isset($_POST["inscription"])) {
//   $inscription->setIdEtudiant($id_user);
// $inscription->setIdCours($id_Cours);
//   $coursDocument->setcategorie_id(intval($_POST["Cours"]));
//   $id_user = $_POST["id_user"];
//   $inscription->Inscription();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Details | Edurock - Education LMS Template</title>
  <link
    rel="shortcut icon"
    type="image/x-icon"
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
  <div
    class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700">
    <!-- spinner -->
    <div
      class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"></div>
    <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
      <img src="../assets/images/pre.png" alt="Preloader" class="h-10 w-10 block">
    </div>
  </div>
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


  <!-- main body -->
  <main class="bg-transparent">
    <!-- banner section -->
    <section>
      <!-- banner section -->
      <div
        class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px">
        <!-- animated icons -->
        <div>
          <img
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
                  class="text-sm text-whiteColor bg-secondaryColor border border-secondaryColor px-22px py-0.5 leading-23px font-semibold hover:text-secondaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-secondaryColor">
                  <?= 
                  $cours['Tags']->getName()
                  ?> 
</div>
              </div>
              <!-- titile -->
              <h4
                class="text-size-32 md:text-4xl font-bold text-blackColor dark:text-blackColor-dark mb-15px leading-43px md:leading-14.5"
                data-aos="fade-up">
                <?= $cours['Cours']->getTitre() ?>
              </h4>
              <!-- price and rating -->
              <div
                class="flex gap-5 flex-wrap items-center mb-30px"
                data-aos="fade-up">
                <div class="flex items-center">
                  <div>
                  </div>
                  <div>

                  </div>
                </div>
                <div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--course details section -->
    <section>
      <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
          <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
            <!-- course 1 -->
            <div data-aos="fade-up">
              <!-- course content -->
              <div>
                <!-- course tab -->
                <div data-aos="fade-up" class="tab course-details-tab">
                  <div
                    class="tab-links flex flex-wrap md:flex-nowrap mb-30px rounded gap-0.5">
                  </div>

                  <div class="tab-contents">

                    <!-- description -->
                    <?php
                    if ($_SESSION['user_name'] && $result == null) {

                    ?>
                      <div class="h-[50vh]">
                        <div class="h-[50vh] flex flex-col items-center justify-center bg-gray-100 rounded-lg shadow-md p-8">
                          <h2 class="text-2xl font-bold text-gray-800 mb-4">
                            Inscrivez-vous pour accéder au contenu PDF
                          </h2>
                          <p class="text-gray-600 text-lg mb-6 text-center">
                            Veuillez vous inscrire et vous connecter pour consulter le contenu complet de ce document PDF.
                          </p>

                          <div class="flex space-x-4">

                            <form action="/inscrire/<?= $cours["Cours"]->getId()?>" method="POST">
                              <input type="hidden" name="id_user" value="<?= $_SESSION['user_id'] ?>">
                              <button type="submit" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition duration-200">
                                S'inscrire
                              </button>
                            </form>
                          <?php
                        } elseif (!$_SESSION['user_name']) {
                          ?>
                            <div class="h-[50vh]">
                              <div class="h-[50vh] flex flex-col items-center justify-center bg-gray-100 rounded-lg shadow-md p-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                                  Inscrivez-vous pour accéder au contenu PDF
                                </h2>
                                <p class="text-gray-600 text-lg mb-6 text-center">
                                  Veuillez vous inscrire et vous connecter pour consulter le contenu complet de ce document PDF.
                                </p>

                                <div class="flex space-x-4">
                                  <a href="../auth/login.php" class="px-6 py-3 h-14 bg-gray-200 text-gray-800 font-semibold rounded-lg shadow hover:bg-gray-300 transition duration-200">
                                    Se connecter
                                  </a>
                                </div>
                              </div>
                            </div>
                          <?php
                        }
                          ?>

                          </div>
                        </div>

                      </div>
                      <?php

                      if ($result == true) {

                      ?>
                        <div class=" bg-gray-100 font-sans leading-normal tracking-normal">

                          <div class="container mx-auto px-4 py-10">
                            <!-- Card Wrapper -->
                            <div class="bg-white shadow-lg rounded-lg p-8 max-w-4xl mx-auto">
                              <!-- Title -->
                              <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">
                                Document PDF
                              </h1>

                              <!-- Description -->
                              <p class="text-gray-600 text-lg mb-8 text-center">
                                Consultez le contenu de votre document PDF ci-dessous.
                              </p>

                              <!-- PDF Viewer -->
                              <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                                <iframe
                                  src="<?= $cours['Cours']->getDocument() ?>"
                                  class="w-full h-96"
                                  frameborder="0">
                                </iframe>
                              </div>

                              <!-- Footer Text -->
                              <p class="text-sm text-gray-500 mt-6 text-center">
                                Vous pouvez télécharger ce document en cliquant avec le bouton droit ou utiliser les options intégrées du navigateur.
                              </p>
                            </div>
                          </div>

                        </div>
                      <?php
                      }
                      ?>


                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
    </section>
  </main>

  <div class=" h-60 w-[30vw] absolute right-0 top-[550px] ">
    <div class="flex flex-col">
      <!-- enroll section -->
      <div
        class="py-33px px-25px shadow-event mb-30px bg-whiteColor dark:bg-whiteColor-dark rounded-md"
        data-aos="fade-up">
        <!-- meeting thumbnail -->
        <div class="overflow-hidden relative mb-5">
          <img
            src="../coursContnu/assets/img/6788e208c435a_Capture d'écran 2024-10-18 181757.png"

            alt=""
            class="w-full">
        </div>



      </div>
      <!-- social area -->


    </div>
  </div>
  <?php include __DIR__. '/../layouts/footer.php' ?>
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

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:39 GMT -->

</html>