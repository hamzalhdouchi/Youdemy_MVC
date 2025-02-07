<?php

require_once __DIR__ . "/../../controllers/Etudiant.php";

$Etudant = new Etudiant();
$idE = $_SESSION['user_id'];
$result = $Etudant->myCours($idE);

?>



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Grid| Edurock - Education LMS Template</title>
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
        class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5">
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
          <div class="text-center">
            <h1
              class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3">
            My Cours
            </h1>
            <ul class="flex gap-1 justify-center">
              <li>
                <a
                  href="./HOME.php"
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark">Home <i class="icofont-simple-right"></i></a>
              </li>
              <li>
                <span
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark">Courses List</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- courses section -->
    <div>
      <div class="container tab py-10 md:py-50px lg:py-60px 2xl:py-100px">
        <!-- courses header -->
        <div
          class="courses-header flex justify-between items-center flex-wrap px-13px py-10px border border-borderColor dark:border-borderColor-dark mb-30px gap-y-5"
          data-aos="fade-up">


          <div class="flex items-center">
            <div
              class="tab-links transition-all duraton-300 text-contentColor dark:text-contentColor-dark flex gap-11px">
              <button class="inline-block hover:text-primaryColor active">
                <i class="icofont-layout"></i>
              </button>
              <button class="inline-block hover:text-primaryColor">
                <i class="icofont-listine-dots"></i>
              </button>
            </div>

          </div>
        </div>
        <!-- courses -->
        <div class="tab-contents">
          <!-- grid ordered cards -->
          <div class="transition-all duration-300">
            <div
              class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px">
              <!-- card 1 -->

              <!-- card 2 -->
              <?php
              foreach ($result as $course) {
                $cour = $course['Cours'];
                $Tage = $course['Tags'];
                $Inscription = $course['Inscription'];
                $user = $course['User'];
              ?>
              <div class="group">
                <div class="tab-content-wrapper" data-aos="fade-up">
                  <div
                    class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                    <!-- card image -->
                    <div class="relative mb-4 overflow-hidden">
                      <a href="./course-details.php?id=<?= $cour->getId() ?>" class="w-full">
                        <img
                          src="../assets/images/grid/grid_2.png"
                          alt=""
                          class="w-full transition-all duration-300 group-hover:scale-110">
                      </a>
                      <div
                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                        <div>
                          <p
                            class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold">
                            <?= $Tage->getName()?>
                          </p>
                        </div>
                        <a
                          class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                          href="#"><i
                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                      </div>
                    </div>
                    <!-- card content -->
                    <div>
                      <div class="grid grid-cols-2 mb-15px">
                      
                      </div>
                      <a
                        href="course.html"
                        class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                        <?= $cour->getTitre()?>
                      </a>
                      <!-- price -->
                      <div
                          class="text-lg font-semibold text-primaryColor font-inter mb-4">
                          <?= $cour->getSlgun() ?>

                        </div>
                      <!-- author and rating-->
                      <div
                        class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                        <div>
                          <a
                            href="instructor-details.html"
                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                              class="w-[30px] h-[30px] rounded-full mr-15px"
                              src="../assets/images/grid/grid_small_2.jpg"
                              alt=""><?= $user->getName() ?> <?= $user->getUsername() ?> 
                          </a>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>

          <!-- list ordered cards -->
          <div class="hidden opacity-0 transition-all duration-300">
            <div class="flex flex-col gap-30px">
              <!-- card 1 -->
              <!-- card 1 -->
            
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php include "../layouts/footer.php" ?>
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

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:36 GMT -->

</html>