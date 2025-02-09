<?php

use App\Controller\CategorieController;

// $userName = $_SESSION['user_name'];
// $categorei = new CategorieController();


// $result = $categorei->getCategories();



// if ($_SERVER["REQUEST_METHOD"] === 'POST') {

//   if (isset($_POST['supprimer']) && isset($_POST['supprimerV'])) {
//     $id = intval($_POST['supprimerV']);
//     $categorei->deleteCategory($id);
//   }


//   if (isset($_POST['submitcategorie']) && isset($_POST['id'])) {
//     $cont = intval($_POST['id']);
//     $categorei->ajoutCategorie($cont, $_POST);
//   }
// }


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-my-quiz-attempts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:53 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instructor My Quiz | Edurock - Education LMS Template</title>
  <link
    rel="shortcut icon"
    type="image/x-icon"
    href="../../public/assets/images/favicon.ico">
  <!-- link stylesheet -->
  <link rel="stylesheet" href="../../public/assets/css/icofont.min.css">
  <link rel="stylesheet" href="../../public/assets/css/popup.css">

  <link rel="stylesheet" href="../../public/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="../../public/assets/css/video-modal.css">
  <link rel="stylesheet" href="../../public/assets/css/aos.css">
  <link rel="stylesheet" href="../../public/assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
  class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark">
  <!-- preloader
    <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
    >
      
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="../../public/assets/images/pre.png" alt="" class="h-10 w-10 block" >
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
  <!--======= Header area start =======-->

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
                src="../../public/views/assets/img/<?= $_SESSION['user_profile']  ?>"
                alt=""
                class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content">
            </div>
            <div class="text-whiteColor font-bold text-center sm:text-start">
              <h5 class="text-xl leading-1.2 mb-5px">Hello</h5>
              <h2 class="text-2xl leading-1.24"><?= $ $_SESSION['user_name'] ?> <?= $_SESSION['prenom'] ?></h2>

            </div>
          </div>

          <div>
            <button
              onclick="openModalBtn()"
              class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded group text-nowrap flex gap-1 items-center">
              Create a New Categorei
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
            </button>
          </div>
        </div>
      </div>
    </section>

    <div id="modal" class="fixed hidden inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center z-50">
      <!-- Content of the modal (form) -->
      <div class="bg-gradient-to-br from-gray-100 to-gray-300 p-8 rounded-lg shadow-lg max-w-[50vw] mx-auto">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Add Categorie</h2>
        <!-- Form -->
        <form action="/AjouterCategorie" method="POST" class="space-y-4 w-[40vw] h-[40vh] overflow-y-auto p-4 bg-gray-100 rounded-lg">
          <!-- Tag Name Input -->

          <div id="formTage">
            <input type="hidden" name="id" value="0">
            <!-- Champ "Tag Name" -->
            <div class="relative mb-4">
              <label for="tag_name" class="block text-sm font-medium text-gray-700">
                categorie Name
              </label>
              <input
                type="text"
                name="categorie_name_0"
                id="tag_name"
                class="block w-full mt-2 px-4 py-2 text-sm text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500"
                placeholder="Enter tag name"
                required />
            </div>

            <!-- Champ "Tag Color" -->
            <div class="relative mb-4">
              <label for="tag_color" class="block text-sm font-medium text-gray-700">
                categorie Slogn
              </label>
              <input
                type="text"
                name="categorie_Slgan_0"
                id="tag_color"
                class="block w-full mt-2 h-10 p-1 text-sm border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none focus:border-blue-500 cursor-pointer"
                required />
            </div>
          </div>


          <!-- Submit Button -->
          <div class="flex justify-around items-center">
            <button type="button" onclick="MultiTage()" class="w-[10vw] py-2 text-sm text-white bg-lime-500 rounded-md shadow-md hover:bg-lime-600 focus:ring-2 focus:ring-lime-400 focus:outline-none font-bold"> + </button>
            <button type="submit" name="submitcategorie" class="w-[10vw] py-2 text-sm text-white bg-blue-600 rounded-md shadow-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>

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
                <?=  $_SESSION['user_name'] ?><?= $_SESSION['prenom'] ?>
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
            <!-- quize attempts area -->
            <div
              class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5">
              <!-- heading -->
              <div
                class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                <h2
                  class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                  Categorei
                </h2>
              </div>
              <!-- filter content -->

              <hr class="my-4 border-contentColor opacity-35">
              <!-- main content -->
              <div class="overflow-auto">
                <table class="w-full text-left text-nowrap">
                  <thead
                    class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                    <tr>
                      <th class="px-5px py-10px md:px-5">#id</th>
                      <th class="px-5px py-10px md:px-5">name Catigorie</th>
                      <th class="px-5px py-10px md:px-5">Slgan</th>
                      <th class="px-5px py-10px md:px-5">Result</th>
                      <th class="px-5px py-10px md:px-5"></th>
                    </tr>
                  </thead>
                  <tbody class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                    <?php if (!empty($result)) :
                      foreach ($result as $categoryCoursePair):
                    ?>
                        <tr class="leading-1.8 md:leading-1.8">
                          <td class="px-5px py-10px md:px-5">
                            <p><?= htmlspecialchars($categoryCoursePair->getIdC()) ?></p>
                          </td>
                          <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                            <span class="text-blackColor dark:text-blackColor-dark font-bold">
                              <?= htmlspecialchars($categoryCoursePair->getNomCategorie()) ?>
                            </span>
                          </th>
                          <td class="px-5px py-10px md:px-5">
                            <p><?= htmlspecialchars($categoryCoursePair->getSlogan()) ?> </p>
                          </td>
                          <td class="px-5px py-10px md:px-5">
                            <div class="dashboard__button__group">
                              <!-- Edit Button -->
                              <form action="/edit-categorie/<?= $categoryCoursePair->getIdC() ?>" method="get"
                                class="flex items-center gap-1 text-sm font-bold text-whiteColor hover:text-primaryColor bg-primaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-primaryColor h-30px w-full px-14px leading-30px justify-center rounded-md my-5px">
                                <button type="submit">Edit</button>
                              </form>



                              <!-- Delete Button -->
                              <form action="/Delete/<?= $categoryCoursePair->getIdC()?>" method="POST">
                                
                                <button
                                  class="flex items-center gap-1 text-sm font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor h-30px w-full px-14px leading-30px justify-center rounded-md my-5px"
                                  name="supprimer">
                                  Delete
                                </button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="4" class="text-center">No categories found.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include "../../public/layouts/footer.php" ?>
  <script>
    const modal = document.getElementById('modal');

    function openModalBtn() {


      modal.classList.remove('hidden');
      modal.classList.add('flex');
    };
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
      }
    });
  </script>
  <script src="../../public/js/swiper-bundle.min.js"></script>
  <script src="../../public/assets/js/isotope.pkgd.min.js"></script>
  <script src="../../public/assets/js/accordion.js"></script>
  <script src="../../public/assets/js/chart.js"></script>
  <script src="../../public/assets/js/count.js"></script>
  <script src="../../public/assets/js/countdown.js"></script>
  <script src="../../public/assets/js/counterup.js"></script>
  <script src="../../public/assets/js/dropdown.js"></script>
  <script src="../../public/assets/js/filter.js"></script>
  <script src="../../public/assets/js/mobileMenu.js"></script>
  <script src="../../public/assets/js/modal.js"></script>
  <script src="../../public/assets/js/popup.js"></script>
  <script src="../../public/assets/js/preloader.js"></script>
  <script src="../../public/assets/js/scrollUp.js"></script>
  <script src="../../public/assets/js/slider.js"></script>
  <script src="../../public/assets/js/smoothScroll.js"></script>
  <script src="../../public/assets/js/stickyHeader.js"></script>
  <script src="../../public/assets/js/tabs.js"></script>
  <script src="../../public/assets/js/theme.js"></script>
  <script src="../../public/assets/js/videoModal.js"></script>
  <script src="../../public/assets/js/vanilla-tilt.js"></script>
  <script src="../../public/assets/js/aos.js"></script>
  <script src="../../public/assets/js/main.js"></script>
  <script src="../../public/assets/js/categorei.js"></script>
</body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/instructor-my-quiz-attempts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:53 GMT -->

</html>