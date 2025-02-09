<?php

// require_once __DIR__ . "/../../controllers/CoursVideo.php";
// require_once __DIR__ . "/../../controllers/CoursDocument.php";
// require_once __DIR__ . "/../../controllers/CoursVideo.php";
// require_once __DIR__ . "/../../controllers/CourseController.php";
// $idE = $_SESSION["user_id"];

// $coursDecoment = new CoursDocument();
// $coursVideo = new CoursVideo();
// $coursDecoment->setid($idE);
// $coursVideo->setid($idE);
// $coursVide = $coursVideo->afficherCours();
// $couess = $coursDecoment->afficherCours();

// if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['deletecorse'])) {
//   $coursVideo->setid($_POST['id_cours']);
//   $coursVideo->deletCours();
// }

// if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['logout'])) {

//   session_destroy();
//   header("Location: ../auth/login.php");
//   exit;
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product-Details | Edurock - Education LMS Template</title>
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
  <!-- <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
     >
      
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="../assets/images/pre.png" alt="" class="h-10 w-10 block" >
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


  <!-- main body -->
  <main class="mt-10 bg-transparent">
    <!-- banner section -->
    <section>
      <div class="container-fluid-2">
        <div
          class="bg-naveBlue p-5 md:p-10 rounded-5 flex justify-center md:justify-between items-center flex-wrap gap-2">
          <div
            class="flex items-center flex-wrap justify-center sm:justify-start">
            <div class="mr-5">
              <img
                src=".<?= $_SESSION['user_profile'] ?>"
                alt=""
                class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content">
            </div>
            <div class="text-whiteColor font-bold text-center sm:text-start">
              <h5 class="text-xl leading-1.2 mb-5px">Hello</h5>
              <h2 class="text-2xl leading-1.24"><?= $_SESSION['user_name'] ?> <?= $_SESSION['prenom'] ?></h2>
            </div>
          </div>

          <div>
            <a
              href="/Create"
              class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded group text-nowrap flex gap-1 items-center">
              Create a New Course
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-arrow-right">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--dashbord menu section -->
    <section>
      <div class="container-fluid-2">
        <div
          class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
          <div class="lg:col-start-1 lg:col-span-3">
            <!-- navigation menu -->
            <div
              class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-lg2 shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark">
              <!-- greeting -->
              <h5
                class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
                <?= $_SESSION['user_name'] ?>
              </h5>
              <ul>

                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center" active>
                  <form
                    action="/afficherCours"
                    method="GET"
                    class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor  text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-book-open">
                      <path
                        d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                      <path
                        d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    <button>

                      Course
                    </button>
                    </form>

                </li>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <form
                    action="Teacher"
                    method="GET"
                    class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-bookmark">
                      <path
                        d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <button>

                      Etudeint
                    </button>
                  </form>
                </li>

              </ul>

              <!-- user -->

              <ul>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <form action="" method="post">
                    <button
                      type="submit"
                      name="logout"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1">
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Logout</button>
                  </form>

                </li>
              </ul>
            </div>
          </div>
          <!-- dashboard content -->
          <div class="lg:col-start-4 lg:col-span-9">
            <!-- courses area -->
            <div
              class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
              <!-- heading -->
              <div
                class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                <h2
                  class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                  Courses
                </h2>
              </div>
              <div class="tab">
                <div
                  class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px">
                  <button
                    class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                    Video
                  </button>

                  <button
                    class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                    Document
                  </button>
                </div>
                <div class="tab-contents">
                  <div class="transition-all duration-300">
                    <div class="flex gap-4 flex-wrap justify-around">
                      <?php foreach ($coursVide as $cours):
                        $cour = $cours['Cours'];
                        $User = $cours['User'];
                        $Tage = $cours['Tags'];
                      ?>
                        <div class="group w-full sm:w-1/3 md:w-1/3 lg:w-1/3 p-4">
                          <div class="tab-content-wrapper bg-whiteColor shadow-lg rounded-lg dark:bg-darkdeep3-dark dark:shadow-lg p-4 transition-all duration-300 hover:scale-105" data-aos="fade-up">
                            <!-- card image -->
                            <div class="relative mb-4 h-36 w-full">
                              <a href="./course-details.php?id=<?= $cour->getId() ?>" class="w-full overflow-hidden rounded-lg">
                                <img src="<?= $cour->getimage() ?>" alt="<?= $cour->getTitre() ?>" class="w-full h-full object-cover transition-all duration-300 group-hover:scale-110">
                              </a>
                              <div class="absolute left-0 top-2 flex justify-between w-full items-center px-2">
                                <div class="flex justify-center gap-4 items-center flex-wrap mt-2">
                                  <?php
                                  $tags = $Tage->getName();
                                  $couleurs = $Tage->getColor();
                                  $tags = $tags ? explode(',', $tags) : []; 
                                  $couleurs = $couleurs ? explode(',', $couleurs) : [];
                                  foreach ($tags as $index => $tag):
                                    $color = trim($couleurs[$index]);
                                  ?>
                                    <p class="text-xs text-white px-4 py-1 rounded font-semibold" style="background-color: <?= $color ?>;">
                                      <?= trim($tag) ?>
                                    </p>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                            </div>

                            <!-- card content -->
                            <div>
                              <a href="./course-details.php?id=<?= $cour->getId() ?>" class="text-xl font-semibold text-blackColor mb-4 dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                <?= $cour->getTitre() ?>
                              </a>
                              <!-- Edit and Delete buttons -->
                              <div class="flex justify-between items-center border-t border-borderColor pt-3">
                                <form  action="/coursEdite/<?= $cour->getId() ?>" method="post" class="flex items-center gap-1 text-sm font-bold text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                  </svg>
                                  <button type="submit">
                                    Edit
                                  </button>
                                  </form>
                                <form action="/DeleteCour" method="post">
                                  <input type="hidden" name="id_cours" value="<?= $cour->getId() ?>">
                                  <button type="submit" name="deletecorse" class="flex items-center gap-1 text-sm font-bold text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                      <polyline points="3 6 5 6 21 6"></polyline>
                                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                      <line x1="10" y1="11" x2="10" y2="17"></line>
                                      <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                    Delete
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>




                  </div>

                  <div class="hidden flex transition-all duration-300">
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                      <!-- card 1 -->
                      <?php foreach ($couess as $courses):
                        $cour = $courses['Cours'];
                        $User = $courses['User'];
                        $Tage = $courses['Tags'];
                      ?>
                        <div class="group bg-white shadow-lg dark:bg-darkdeep3-dark dark:shadow-xl rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105">
                          <div class="tab-content-wrapper p-4" data-aos="fade-up">
                            <!-- card image -->
                            <div class="relative mb-4">
                              <a href="./course-details.php?id=<?= $cour->getId() ?>" class="w-full overflow-hidden rounded">
                                <img src="<?= $cour->getimage() ?>" alt="<?= $cour->getTitre() ?>" class="w-full h-40 object-cover transition-all duration-300 group-hover:scale-110">
                              </a>
                              <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                <div class="mt-4 flex justify-center gap-4 items-center flex-wrap">
                                  <?php
                                  $tags = $Tage->getName();
                                  $colors = $Tage->getColor();
                                  $tagsArray = explode(',', $tags);
                                  $colorsArray = explode(',', $colors);
                                  foreach ($tagsArray as $index => $tag):
                                    $color = trim($colorsArray[$index]);
                                  ?>
                                    <p class="text-xs text-white px-4 py-1 rounded font-semibold" style="background-color: <?= $color ?>;">
                                      <?= trim($tag) ?>
                                    </p>
                                  <?php endforeach; ?>
                                </div>
                              </div>
                            </div>
                            <!-- card content -->
                            <div>
                              <a href="./course-details.php?id=<?= $cour->getId() ?>" class="text-xl font-semibold text-blackColor mb-4 dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                <?= $cour->getTitre() ?>
                              </a>
                              <!-- Edit and Delete buttons -->
                              <div class="flex justify-between items-center border-t border-borderColor pt-3">
                                <a href="./coursEdite.php?id=<?= $cour->getId() ?>" class="flex items-center gap-1 text-sm font-bold text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                  </svg>
                                  Edit
                                </a>
                                <form action="" method="post">
                                  <input type="hidden" name="id_cours" value="<?= $cour->getId() ?>">
                                  <button type="submit" name="deletecorse" class="flex items-center gap-1 text-sm font-bold text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                      <polyline points="3 6 5 6 21 6"></polyline>
                                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                      <line x1="10" y1="11" x2="10" y2="17"></line>
                                      <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                    Delete
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:53 GMT -->

</html>