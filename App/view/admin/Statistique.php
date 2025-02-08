<?php
// require_once __DIR__ . "/../../controllers/AdminController.php";

// $Statistique = new Admin();
// $Top3Techers = $Statistique->Top3Techers();
// $totalStaff = $Statistique->totalStaff();
// $totalEtudiant = $Statistique->totalEtudient();
// $totalUser = $Statistique->totalUsers();
// $totalInactif = $Statistique->totalInactive();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-announcments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:53 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instructor Announcement | Edurock - Education LMS Template</title>
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
      <img src="../assets/images/pre.png" alt="" class="h-10 w-10 block">
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
      <div class="mt-10 container-fluid-2">
        <div
          class="bg-naveBlue p-5 md:p-10 rounded-5 flex justify-center md:justify-between items-center flex-wrap gap-2">
          <div
            class="flex items-center flex-wrap justify-center sm:justify-start">
            <div class="mr-5">
              <img
                src="../views/assets/img/<?= $_SESSION['user_profile']  ?>"
                alt=""
                class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content">
            </div>
            <div class="text-whiteColor font-bold text-center sm:text-start">
              <h5 class="text-xl leading-1.2 mb-5px">Hello</h5>
              <h2 class="text-2xl leading-1.24"><?= $_SESSION['user_name'] ?> <?= $_SESSION['prenom'] ?></h2>

            </div>
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
                <?= $_SESSION['user_name'] ?> <?= $_SESSION['prenom'] ?>
              </h5>
              <ul>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <a
                    href="./Statistique.php"
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
                      class="feather feather-home">
                      <path
                        d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                      <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Statistique</a>
                </li>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <a
                    href="./Users.php"
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
                      class="feather feather-user">
                      <path
                        d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Users</a>
                </li>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                  <a
                    href="./categorei.PHP"
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
                      class="feather feather-book-open">
                      <path
                        d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                      <path
                        d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    Categorei
                  </a>
                </li>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <a
                    href="./Tags.PHP"
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
                    Tage</a>
                </li>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <a
                    href="./ActionAdmin.PHP"
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
                      class="feather feather-message-square">
                      <path
                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Teachers Rquest</a>
                </li>
                <li
                  class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                  <a
                    href="./aprovCours.php"
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
                      class="feather feather-message-square">
                      <path
                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Cours</a>
                </li>
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
            <!-- review area -->
            <div
              class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
              <!-- heading -->
              <div
                class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                <h2
                  class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                  Announcements
                </h2>
              </div>
              <!-- Stats Section -->
              <section class="bg-gray-100 p-6">
                <!-- Stats Container -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">

                  <!-- Stat Card 1 - Total Étudiants -->
                  <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                      <div>
                        <p class="text-sm text-gray-500">Total Étudiants</p>
                        <p class="text-2xl font-semibold mt-1"><?= $totalEtudiant ?></p>
                      </div>
                      <div class="bg-emerald-500 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path d="M12 14l9-5-9-5-9 5 9 5z" />
                          <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                      </div>
                    </div>
                    <div class="mt-4 bg-gray-100 rounded-full h-2">
                      <div class="bg-emerald-500 rounded-full h-full w-3/4"></div>
                    </div>
                  </div>

                  <!-- Stat Card 2 - Total Staff -->
                  <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-around">
                      <div>
                        <p class="text-sm text-gray-500">Total Staff</p>
                        <p class="text-2xl font-semibold mt-1"><?= $totalStaff ?></p>
                      </div>
                      <div class="bg-blue-500 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                      </div>
                    </div>
                    <div class="mt-4 bg-gray-100 rounded-full h-2">
                      <div class="bg-blue-500 rounded-full h-full w-2/3"></div>
                    </div>
                  </div>

                  <!-- Stat Card 3 - Total Users -->
                  <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                      <div>
                        <p class="text-sm text-gray-500">Total Users</p>
                        <p class="text-2xl font-semibold mt-1"><?= $totalUser ?></p>
                      </div>
                      <div class="bg-yellow-500 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                      </div>
                    </div>
                    <div class="mt-4 bg-gray-100 rounded-full h-2">
                      <div class="bg-yellow-500 rounded-full h-full w-4/5"></div>
                    </div>
                  </div>

                  <!-- Stat Card 4 - Total Inactive -->
                  <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center justify-between">
                      <div>
                        <p class="text-sm text-gray-500">Total Inactive</p>
                        <?php if ($totalInactif == null) {
                        ?>
                          <p class="text-2xl font-semibold mt-1">0</p>

                        <?php
                        } else {
                        ?>
                          <p class="text-2xl font-semibold mt-1"><?= $totalInactif ?></p>
                        <?php
                        }
                        ?>
                      </div>
                      <div class="bg-red-500 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
                        </svg>
                      </div>
                    </div>
                    <div class="mt-4 bg-gray-100 rounded-full h-2">
                      <div class="bg-red-500 rounded-full h-full w-1/4"></div>
                    </div>
                  </div>

                </div>
              </section>
              <hr class="my-4 border-contentColor opacity-35">
              <div>
                <div class="overflow-auto">
                  <table class="w-full text-left">
                    <thead
                      class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                      <tr>
                        <th class="px-5px py-10px md:px-5">#Id</th>
                        <th class="px-5px py-10px md:px-5">Name</th>
                        <th class="px-5px py-10px md:px-5">Prenom</th>
                        <th class="px-5px py-10px md:px-5">Total d'Etudiant</th>
                      </tr>
                    </thead>
                    <tbody
                      class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                      <?php
                      foreach ($Top3Techers as $row) {
                      ?>

                        <tr
                          class="leading-1.8 md:leading-1.8 bg-lightGrey1 dark:bg-whiteColor-dark">
                          <th
                            class="px-5px py-10px md:px-5 font-normal text-wrap">
                            <span
                              class="text-blackColor dark:text-blackColor-dark font-bold">
                              <?= $row->getId() ?></span>

                          </th>
                          <th
                            class="px-5px py-10px md:px-5 font-normal text-wrap">
                            <span
                              class="text-blackColor dark:text-blackColor-dark font-bold">
                              <?= $row->getName() ?></span>

                          </th>
                          <th
                            class="px-5px py-10px md:px-5 font-normal text-wrap">
                            <span
                              class="text-blackColor dark:text-blackColor-dark font-bold">
                              <?= $row->getUsername() ?></span>

                          </th>
                          <th
                            class="px-5px py-10px md:px-5 font-normal text-wrap">
                            <span
                              class="text-blackColor dark:text-blackColor-dark font-bold">
                              <?= $row->getUserImage() ?></span>

                          </th>
                        <?php
                      }
                        ?>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg-darkblack">
    <div class="container pt-65px">
      <!-- footer top or subscription -->
      <div>
        <div
          class="grid grid-cols-1 md:grid-cols-2 gap-y-5 md:gap-y-0 items-center pb-45px border-b border-darkcolor">
          <div data-aos="fade-up">
            <a href="#"><img src="../assets/images/logo/logo_2.png" alt=""></a>
          </div>
          <div>
            <form
              class="max-w-form-xl md:max-w-form-md lg:max-w-form-lg xl:max-w-form-xl 2xl:max-w-form-2xl bg-deepgray ml-auto rounded relative"
              data-aos="fade-up">
              <input
                type="email"
                placeholder="Enter your email here"
                class="text-whiteColor h-62px pl-15px focus:outline-none border border-deepgray focus:border-whitegrey bg-transparent rounded w-full">
              <button
                type="submit"
                class="px-3 md:px-10px lg:px-5 bg-primaryColor hover:bg-deepgray text-xs lg:text-size-15 text-whiteColor border border-primaryColor block rounded absolute right-0 top-0 h-full">
                Subscribe Now
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- footer main -->
      <section>
        <div
          class="grid grid-cols-12 gap-30px md:gap-y-5 lg:gap-y-0 pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px lg:pb-20 mb-5">
          <!-- left -->
          <div
            class="col-start-1 col-span-12 md:col-span-6 lg:col-span-4 mr-30px"
            data-aos="fade-up">
            <h4 class="text-size-22 font-bold text-whiteColor mb-3">
              About us
            </h4>
            <p
              class="text-base lg:text-sm 2xl:text-base text-darkgray mb-30px leading-1.8 2xl:leading-1.8">
              orporate clients and leisure travelers has been relying on
              Groundlink for dependable safe, and professional chauffeured car
              end service in major cities across World.
            </p>
            <ul class="flex gap-3 lg:gap-2 2xl:gap-3" data-aos="fade-up">
              <li>
                <a
                  href="#"
                  class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"><i class="icofont-facebook"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"><i class="icofont-twitter"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"><i class="icofont-vimeo"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"><i class="icofont-linkedin"></i></a>
              </li>
              <li>
                <a
                  href="#"
                  class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"><i class="icofont-skype"></i></a>
              </li>
            </ul>
          </div>
          <!-- middle 1 -->
          <div
            class="col-start-1 col-span-12 md:col-start-7 lg:col-start-5 md:col-span-6 lg:col-span-2"
            data-aos="fade-up">
            <h4 class="text-size-22 font-bold text-whiteColor mb-3">
              Usefull Links
            </h4>
            <ul class="flex flex-col gap-y-3">
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">About Us</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Teachers</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Partner</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Room-Details</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Gallery</a>
              </li>
            </ul>
          </div>
          <!-- middle 2 -->
          <div
            class="col-start-1 col-span-12 md:col-start-1 lg:col-start-7 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-60px"
            data-aos="fade-up">
            <h4 class="text-size-22 font-bold text-whiteColor mb-3">
              Course
            </h4>
            <ul class="flex flex-col gap-y-3">
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Ui Ux Design</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Web Development</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Business Strategy</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Softwere Development</a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Business English</a>
              </li>
            </ul>
          </div>
          <!-- right -->
          <div
            class="col-start-1 col-span-12 md:col-start-7 lg:col-start-10 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-50px"
            data-aos="fade-up">
            <h4 class="text-size-22 font-bold text-whiteColor mb-3">
              Recent Post
            </h4>
            <ul class="flex flex-col gap-y-5">
              <li>
                <a class="flex items-center gap-3 group cursor-pointer">
                  <div>
                    <img
                      src="../assets/images/footer/footer__1.png"
                      alt=""
                      class="w-61px h-54px">
                  </div>
                  <div>
                    <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                    <h6
                      class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300">
                      Best Your Business
                    </h6>
                  </div>
                </a>
              </li>

              <li>
                <a class="flex items-center gap-3 group cursor-pointer">
                  <div>
                    <img
                      src="../assets/images/footer/footer__2.png"
                      alt=""
                      class="w-61px h-54px">
                  </div>
                  <div>
                    <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                    <h6
                      class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300">
                      Keep Your Business
                    </h6>
                  </div>
                </a>
              </li>
              <li>
                <a class="flex items-center gap-3 group cursor-pointer">
                  <div>
                    <img
                      src="../assets/images/footer/footer__3.png"
                      alt=""
                      class="w-61px h-54px">
                  </div>
                  <div>
                    <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                    <h6
                      class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300">
                      Nice Your Business
                    </h6>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- footer copyright  -->
      <div>
        <div
          class="grid grid-cols-1 sm:grid-cols-2 gap-5 py-5 lg:py-10 items-center border-t border-darkcolor">
          <div>
            <p class="text-base text-darkgray">
              © 2024 Powered by
              <a href="#" class="hover:text-primaryColor">Edurock</a>. All
              Rights Reserved.
            </p>
          </div>

          <div>
            <ul class="flex items-center justify-end">
              <li>
                <a
                  href="#"
                  class="text-base text-darkgray hover:text-primaryColor pr-4 border-r border-darkgray leading-1">Terms of Use
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="text-base text-darkgray hover:text-primaryColor pl-4">
                  Privacy Policy
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
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

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-announcments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:54 GMT -->

</html>