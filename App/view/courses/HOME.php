<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home-3 Marketplace | Edurock - Education LMS Template</title>
  <link
    rel="../shortcut icon"
    type="../image/x-icon"
    href="../assets/images/favicon.ico">
  <!-- link stylesheet -->
  <link rel="stylesheet" href="../assets/css/icofont.min.css">
  <link rel="stylesheet" href="../assets/css/video-modal.css">
  <link rel="stylesheet" href="../assets/css/aos.css">
  <link rel="stylesheet" href="../assets/css/style.css">
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
  <!--======= Header area start =======-->
  <?php include __DIR__. '/../layouts/header.php' ?>

  <!-- main body -->
  <main class="bg-transparent">
    <section>
      <!-- bannaer section -->
      <div
        class="container2-xl bg-darkdeep1 py-50px md:pt-20 md:pb-30 2xl:pt-130px 2xl:pb-50 rounded-2xl relative overflow-hidden shadow-brand">
        <div class="container">
          <div
            class="flex flex-col items-center text-center w-full lg:w-83% xl:w-3/4 mx-auto">
            <!-- banner Left -->
            <div data-aos="fade-up" class="w-4/5">
              <h3
                class="uppercase text-secondaryColor text-size-15 mb-5px md:mb-15px font-inter tracking-5px">
                EDUCATION SOLUTION
              </h3>
              <h1
                class="text-3xl text-whiteColor md:text-6xl lg:text-size-50 2xl:text-6xl leading-10 md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half font-bold mb-15px sm:mb-30px">
                Massive Courses <br>
                Available for Anyone
                <span class="text-secondaryColor">.</span>
              </h1>
            </div>
            <form
              class="bg-whiteColor w-full rounded-full py-1 sm:py-6px pl-30px pr-1 sm:pr-2 flex items-center justify relative z-small">
              <div class="flex items-center text-blackColor text-base">
                <div>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ionicon w-3 md:w-4 mr-0.5 md:mr-1 mt-0.5 sm:mt-0"
                    viewBox="0 0 512 512">
                    <rect
                      x="48"
                      y="48"
                      width="176"
                      height="176"
                      rx="20"
                      ry="20"
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"></rect>
                    <rect
                      x="288"
                      y="48"
                      width="176"
                      height="176"
                      rx="20"
                      ry="20"
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"></rect>
                    <rect
                      x="48"
                      y="288"
                      width="176"
                      height="176"
                      rx="20"
                      ry="20"
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"></rect>
                    <rect
                      x="288"
                      y="288"
                      width="176"
                      height="176"
                      rx="20"
                      ry="20"
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="32"></rect>
                  </svg>
                </div>
                <div>
                  <select
                    onchange="fetchArticles(this.value)"
                    class="w-16 sm:w-20 md:w-28 cursor-pointer text-xs sm:text-sm md:text-base">
                    <option value="1">ALL</option>
                    <?php
                    foreach ($tag as $tags) {
                    ?>
                      <option value="<?= $tags->getId() ?>"><?= $tags->getName() ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div>
                <input
                  oninput="searchArticle(this.value)"
                  type="text"
                  placeholder="Find & Choose your perfect course"
                  class="placeholder:text-darkdeep4 w-full ml-2 md:ml-12 lg:ml-24 text-xs sm:text-sm md:text-base focus:outline-none">
              </div>
              <div class="self-end ml-auto">
                <button
                  type="submit"
                  class="flex gap-x-1 items-center px-3 sm:px-25px py-2 sm:py-10px md:py-3 text-xs sm:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded-full">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ionicon w-3 sm:w-4 md:w-5"
                    viewBox="0 0 512 512">
                    <path
                      d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                      fill="none"
                      stroke="currentColor"
                      stroke-miterlimit="10"
                      stroke-width="32"></path>
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-miterlimit="10"
                      stroke-width="32"
                      d="M338.29 338.29L448 448"></path>
                  </svg>
                  Search
                </button>
              </div>
            </form>

            <ul
              class="flex gap-x-5 flex-wrap justify-center items-center mt-7 md:mt-50px">
              <li>
                <p class="text-whiteColor">
                  <i class="icofont-check-alt"></i><span class="ml-5px">More than 2k Courses</span>
                </p>
              </li>
              <li>
                <p class="text-whiteColor">
                  <i class="icofont-check-alt"></i><span class="ml-5px">1.1k Free Courses</span>
                </p>
              </li>
              <li>
                <p class="text-whiteColor">
                  <i class="icofont-check-alt"></i><span class="ml-5px">150+ Instructors</span>
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div>
          <img
            class="absolute left-1/2 bottom-[15%] animate-spin-slow"
            src="../assets/images/register/register__2.png"
            alt=""><img
            class="absolute left-[42%] sm:left-[65%] md:left-[42%] lg:left-[5%] top-[4%] sm:top-[1%] md:top-[4%] lg:top-[10%] animate-move-hor"
            src="../assets/images/herobanner/herobanner__6.png"
            alt=""><img
            class="absolute right-[5%] bottom-[15%]"
            src="../assets/images/herobanner/herobanner__7.png"
            alt=""><img
            class="absolute top-[5%] left-[45%]"
            src="../assets/images/herobanner/herobanner__7.png"
            alt="">
        </div>
      </div>
    </section>



    <!-- courses section -->
    <section>
      <div
        class="pt-50px pb-10 md:pt-70px md:pb-50px lg:pt-20 2xl:pt-100px 2xl:pb-70px bg-lightGrey7 dark:bg-lightGrey7-dark">
        <div class="filter-container container">
          <!-- courses Heading -->
          <div class="mb-5 md:mb-10" data-aos="fade-up">
            <div class="text-center">
              <span
                class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block">
                Course List
              </span>
            </div>

            <h3
              class="text-3xl md:text-[35px] lg:text-size-38 3xl:text-size-42 leading-10 mf:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark text-center">
              Perfect Online
              <span
                class="relative after:w-full after:h-[7px] z-0 after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5 after:z-[-1]">Course</span>
              <br>
              Your Carrer
            </h3>
          </div>

          <!-- courses tabs -->
          <div data-aos="fade-up">
            <ul
              class="filter-controllers flex flex-wrap md:flex-nowrap justify-center bg-whiteColor dark:bg-whiteColor-dark p-10px 3xl:px-10 py-0 2xl:mx-50px mb-25px rounded button-group filters-button-group">
              <li>

              </li>

            </ul>
          </div>
          <!-- course cards -->

          <div id="Tage_cards" class="container p-0 filter-contents flex flex-wrap sm:-mx-15px" data-aos="fade-up">
  <?php foreach ($courses as $course):
     ?>
    <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter1 filter3">
      <div class="tab-content-wrapper sm:px-15px mb-30px">
        <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
          <!-- card image -->
          <div class="relative mb-4">
            <!--  -->
              <img src="<?= $course['Cours']->getImage() ?>" alt="" class="w-full transition-all duration-300 group-hover:scale-110">
            </a>
            <div class="absolute left-0 top-1 flex flex-wrap gap-2 w-full items-center px-2">
             
                <span class="text-xs text-white px-4 py-1 bg-[<?= $course['Tags']->getColor()?>] rounded font-semibold"><?=  $course['Tags']->getName()?></span>
              
            </div>
          </div>
          <!-- card content -->
          <div>
            <div class="grid grid-cols-2 mb-15px">
              <div class="flex items-center">
                <!-- Add any other content if needed -->
              </div>
              <div class="flex items-center">
                <!-- Add any other content if needed -->
              </div>
            </div>
            <a href="./course-details.php?id=<?= $course['Cours']->getId() ?>" class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
              <?= htmlspecialchars($course['Cours']->getTitre()) ?>
            </a>
            <!-- price -->
            <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
              <?= htmlspecialchars($course['Cours']->getSlgun()) ?>
            </div>
            <!-- author and rating -->
            <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
              <div>
                <a href="instructor-details.html" class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor">
                  <img class="w-[30px] h-[30px] rounded-full mr-15px" src="../assets/images/grid/grid_small_1.jpg" alt="">
                  <span class="flex"><?= htmlspecialchars($course['User']->getName()) ?> <?= htmlspecialchars($course['User']->getUsername()) ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

          <!-- Pagination -->
          <div class="max-w-7xl mx-auto mt-8 px-4 pb-8">
            <div class="flex justify-center gap-4 items-center space-x-2">
              <?php if ($currentPage > 1): ?>
                <button class="px-4 py-2 border rounded-md hover:bg-gray-100">
                  <a href="?page=<?= $currentPage - 1; ?>">Précédent</a>
                </button>
              <?php endif; ?>

              <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <button class="px-4 py-2 border rounded-md <?= $i === $currentPage ? 'bg-blue-600 text-white' : 'hover:bg-gray-100'; ?>">
                  <a href="?page=<?= $i; ?>"><?= $i; ?></a>
                </button>
              <?php endfor; ?>

              <?php if ($currentPage < $totalPages): ?>
                <button class="px-4 py-2 border rounded-md hover:bg-gray-100">
                  <a href="?page=<?= $currentPage + 1; ?>">Suivant</a>
                </button>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular Subject Sectoion-->

    <section class="mt-20">
  <div class="container">
    <div
      class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-30px pt-10 md:pt-0 pb-100px">
      <?php foreach ($categorei as $row): 
        $categorie = $row[0];
        $cour = $row[1];
      ?>
        <form
          action="/course_By_categorei/<?= $categorie->getIdC() ?>"
          method="POST"
          class="pt-5 pb-15px px-30px rounded-5px bg-borderColor text-center hover:bg-secondaryColor dark:bg-borderColor-dark dark:hover:bg-secondaryColor group"
          data-aos="fade-up">
          
          <button type="submit" class="w-full">
            <h4
              class="text-blackColor text-lg font-medium group-hover:text-blackColor-dark dark:text-blackColor-dark">
              <?= $categorie->getNomCategorie() ?>
            </h4>
            <p
              class="text-xs text-contentColor group-hover:text-contentColor-dark dark:text-contentColor-dark">
              <?= $cour->getId() ?> Courses
            </p>
          </button>

        </form>
      <?php endforeach ?>
    </div>
  </div>
</section>









    <!--  counter section -->
    <div>
      <div class="container">
        <div
          class="counter flex flex-wrap py-50px pb-[70px] lg:pb-20 2xl:py-50px gap-y-30px lg:gap-y-0">
          <div
            class="basis-full sm:basis-1/2 lg:basis-1/4"
            data-aos="fade-up">
            <div class="flex gap-4">
              <div>
                <img src="../assets/images/counter/counter__1.png" alt="">
              </div>
              <div>
                <p
                  class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                  <span data-countup-number="27"> 27</span><span>+</span>
                </p>
                <p
                  class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                  Total Acheivment
                </p>
              </div>
            </div>
          </div>
          <div
            class="basis-full sm:basis-1/2 lg:basis-1/4"
            data-aos="fade-up">
            <div class="flex gap-4">
              <div>
                <img src="../assets/images/counter/counter__2.png" alt="">
              </div>
              <div>
                <p
                  class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                  <span data-countup-number="145">145</span><span>+</span>
                </p>
                <p
                  class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                  TOTAL STUDENTS
                </p>
              </div>
            </div>
          </div>
          <div
            class="basis-full sm:basis-1/2 lg:basis-1/4"
            data-aos="fade-up">
            <div class="flex gap-4">
              <div>
                <img src="../assets/images/counter/counter__3.png" alt="">
              </div>
              <div>
                <p
                  class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                  <span data-countup-number="10">10</span><span>k</span>
                </p>
                <p
                  class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                  tOTAL INSTRUCTOR
                </p>
              </div>
            </div>
          </div>
          <div
            class="basis-full sm:basis-1/2 lg:basis-1/4"
            data-aos="fade-up">
            <div class="flex gap-4">
              <div>
                <img src="../assets/images/counter/counter__4.png" alt="">
              </div>
              <div>
                <p
                  class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                  <span data-countup-number="214">214</span><span>+</span>
                </p>
                <p
                  class="uppercase text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                  OVER THE WORLD
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration Sectoion-->
    <section class="bg-register bg-cover bg-center bg-no-repeat lg:mb-150px">
      <!-- registration overlay -->

      <!-- About Instructor Section-->
      <section class="bg-lightGrey10 dark:dark:bg-lightGrey10-dark relative">
        <div>
          <img
            src="../assets/images/about/about_6.png"
            alt=""
            class="absolute top-[110px] left-[216px] animate-move-hor z-1">
          <img
            src="../assets/images/about/about_7.png"
            alt=""
            class="absolute top-[360px] left-[162px] md:left-[262px] lg:left-[318px] 2xl:left-[162px] animate-spin-slow z-1">
          <img
            src="../assets/images/about/about_9.png"
            alt=""
            class="absolute top-[430px] left-[156px] md:top-[630px] md:left-[476px] lg:top-[433px] lg:left-[196px] 2xl:top-[430px] 2xl:left-[156px] animate-move-var z-1">
        </div>
      </section>

  </main>
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
  <script src="../Ajax/reserch.js"></script>
  <script src="../Ajax/filter.js"></script>
</body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:26:43 GMT -->

</html>