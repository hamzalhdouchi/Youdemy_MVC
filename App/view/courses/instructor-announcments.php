<?php 
require __DIR__."/../../controllers/CourseController.php";

?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-announcments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:53 GMT -->
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Instructor Announcement | Edurock - Education LMS Template</title>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../assets/images/favicon.ico"
    >
    <!-- link stylesheet -->
    <link rel="stylesheet" href="../assets/css/icofont.min.css" >
    <link rel="stylesheet" href="../assets/css/popup.css" >

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" >
    <link rel="stylesheet" href="../assets/css/video-modal.css" >
    <link rel="stylesheet" href="../assets/css/aos.css" >
    <link rel="stylesheet" href="../assets/css/style.css" >
  </head>
  <body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark"
  >
    <!-- preloader -->
    <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
    >
      <!-- spinner -->
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="../assets/images/pre.png" alt="" class="h-10 w-10 block" >
      </div>
    </div>
    <!-- theme fixed shadow -->
    <div>
      <div class="fixed-shadow left-[-250px]"></div>
      <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
      class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl"
    >
      <button
        class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller"
      >
        <!-- dark -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-10px w-5 block dark:hidden"
          viewBox="0 0 512 512"
        >
          <path
            d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="32"
          ></path>
        </svg>
        <span class="text-base block dark:hidden">Dark</span>
        <!-- light -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="hidden mr-10px w-5 dark:block"
          viewBox="0 0 512 512"
        >
          <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
            d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"
          ></path>
          <circle
            cx="256"
            cy="256"
            r="80"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
          ></circle>
        </svg>
        <span class="text-base hidden dark:block">Light</span>
      </button>
    </div>
    <!-- scroll up button -->
    <div>
      <button
        class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden"
      >
        <i class="icofont-rounded-up"></i>
      </button>
    </div>
    <!--======= Header area start =======-->
  

    <!-- main body -->
    <main class="bg-transparent">
      <!-- banner section -->
      <section>
        <div class="container-fluid-2">
          <div
            class="bg-naveBlue p-5 md:p-10 rounded-5 flex justify-center md:justify-between items-center flex-wrap gap-2"
          >
            <div
              class="flex items-center flex-wrap justify-center sm:justify-start"
            >
              <div class="mr-5">
                <img
                  src="../assets/images/dashbord/dashbord__2.jpg"
                  alt=""
                  class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content"
                >
              </div>
              <div class="text-whiteColor font-bold text-center sm:text-start">
                <h5 class="text-xl leading-1.2 mb-5px">Hello</h5>
                <h2 class="text-2xl leading-1.24">Michle Obema</h2>
              </div>
            </div>
            <div class="text-center">
              <div class="text-yellow">
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <i class="icofont-star"></i>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-star inline-block"
                >
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                  ></polygon>
                </svg>
              </div>
              <p class="text-whiteColor">4.0 (120 Reviews)</p>
            </div>
            <div>
              <a
                href="create-course.html"
                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded group text-nowrap flex gap-1 items-center"
              >
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
                  class="feather feather-arrow-right"
                >
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
            class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px"
          >
            <div class="lg:col-start-1 lg:col-span-3">
              <!-- navigation menu -->
              <div
                class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-lg2 shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark"
              >
                <!-- greeting -->
                <h5
                  class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px"
                >
                  MICLE OBEMA
                </h5>
                <ul>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-dashboard.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-home"
                      >
                        <path
                          d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                        ></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      </svg>
                      Dashboard</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-profile.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-user"
                      >
                        <path
                          d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      My Profile</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center"
                  >
                    <a
                      href="instructor-message.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-book-open"
                      >
                        <path
                          d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"
                        ></path>
                        <path
                          d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"
                        ></path>
                      </svg>
                      Message
                    </a>
                    <span
                      class="text-size-10 font-medium text-whiteColor px-9px bg-primaryColor leading-14px rounded-2xl"
                      >12</span
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-wishlist.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-bookmark"
                      >
                        <path
                          d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                        ></path>
                      </svg>
                      Wishlist</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-reviews.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-star"
                      >
                        <polygon
                          points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                        ></polygon>
                      </svg>
                      Reviews</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-my-quiz-attempts.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-help-circle"
                      >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                      </svg>
                      My Quiz Attempts</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-order-history.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-shopping-bag"
                      >
                        <path
                          d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"
                        ></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                      </svg>
                      Order History</a
                    >
                  </li>
                </ul>
                <!-- instructor -->
                <h5
                  class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px"
                >
                  INSTRUCTOR
                </h5>
                <ul>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-course.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-monitor"
                      >
                        <rect
                          x="2"
                          y="3"
                          width="20"
                          height="14"
                          rx="2"
                          ry="2"
                        ></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                      </svg>
                      My Course</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-announcments.html"
                      class="text-primaryColor hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1"
                      >
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"
                        ></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Announcments</a
                    >
                  </li>

                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-quiz-attempts.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-message-square"
                      >
                        <path
                          d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                        ></path>
                      </svg>
                      Quiz Attempt</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-assignments.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1"
                      >
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"
                        ></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Assignments</a
                    >
                  </li>
                </ul>
                <!-- user -->
                <h5
                  class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px"
                >
                  USER
                </h5>
                <ul>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="instructor-settings.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-settings"
                      >
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                          d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
                        ></path>
                      </svg>
                      Settings</a
                    >
                  </li>

                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="#"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1"
                      >
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"
                        ></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Logout</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <!-- dashboard content -->
            <div class="lg:col-start-4 lg:col-span-9">
              <!-- review area -->
              <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5"
              >
                <!-- heading -->
                <div
                  class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark"
                >
                  <h2
                    class="text-2xl font-bold text-blackColor dark:text-blackColor-dark"
                  >
                    Announcements
                  </h2>
                </div>
                <!-- banner  -->
                <div
                  class="mb-60px py-25px px-30px bg-lightGrey7 dark:bg-lightGrey7-dark grid grid-cols-1 md:grid-cols-2 xl:grid-cols-12 rounded-md"
                >
                  <div class="xl:col-start-1 xl:col-span-8">
                    <h2
                      class="text-xl font-bold text-blackColor dark:text-blackColor-dark mb-5px"
                    >
                      <span class="leading-1.2">
                        Notify your all students.
                      </span>
                    </h2>
                    <p
                      class="text-contentColor dark:text-contentColor-dark leading-1.8"
                    >
                      Create Announcement
                    </p>
                  </div>
                  <div class="xl:col-start-9 xl:col-span-4">
                    <div>
                      <a
                        href="#"
                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded group text-nowrap"
                      >
                        Add New Announcement
                      </a>
                    </div>
                  </div>
                </div>
                <!-- filter content -->

                <hr class="my-4 border-contentColor opacity-35" >
                <div>
                  <div class="overflow-auto">
                    <table class="w-full text-left">
                      <thead
                        class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8"
                      >
                        <tr>
                          <th class="px-5px py-10px md:px-5">Date</th>
                          <th class="px-5px py-10px md:px-5">Announcements</th>

                          <th class="px-5px py-10px md:px-5"></th>
                        </tr>
                      </thead>
                      <tbody
                        class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal"
                      >
                        <tr class="leading-1.8 md:leading-1.8">
                          <th
                            class="px-5px py-10px md:px-5 font-normal text-wrap"
                          >
                            <span
                              class="text-blackColor dark:text-blackColor-dark font-bold"
                            >
                              March 16, 2024</span
                            >
                            <p>10.00am</p>
                          </th>
                          <th
                            class="px-5px py-10px md:px-5 font-normal text-wrap"
                          >
                            <span
                              class="text-blackColor dark:text-blackColor-dark font-bold"
                            >
                              Announcement Title</span
                            >
                            <p>Course: Fundamentals 101</p>
                          </th>

                          <td class="px-5px py-10px md:px-5">
                            <div class="flex">
                              <a
                                class="flex items-center gap-1 md:text-sm font-bold text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor px-10px leading-1.8 relative before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300"
                                href="#"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="14"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="feather feather-edit"
                                >
                                  <path
                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
                                  ></path>
                                  <path
                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                                  ></path>
                                </svg>
                                Edit</a
                              >
                              <a
                                class="flex items-center gap-1 md:text-sm font-bold text-blackColor dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor px-10px leading-1.8"
                                href="#"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="14"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="feather feather-trash-2"
                                >
                                  <polyline points="3 6 5 6 21 6"></polyline>
                                  <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                  ></path>
                                  <line x1="10" y1="11" x2="10" y2="17"></line>
                                  <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                                Delete</a
                              >
                            </div>
                          </td>
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
    <?php include '../layouts/footer.php'?>
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
    <script  src="../assets/js/vanilla-tilt.js"></script>
    <script  src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-announcments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:54 GMT -->
</html>
