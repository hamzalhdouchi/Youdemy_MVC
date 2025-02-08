<?php

require __DIR__ . "/../../controllers/CourseController.php";
require __DIR__ . "/../../controllers/categorei.php";
require __DIR__ . "/../../controllers/CoursVideo.php";

$tags = new Tags();

$tag =  $tags->getTags();
$idE = $_SESSION["user_id"];
$idC = $_GET["id"];
$categorei = new Categorie();

$categoreis = $categorei->getCategories();
$coursVideo = new CoursVideo();
$coursDecoment = new CoursDocument();
$coursDecoment->setid($idE);
$coursDecoment->setid($idE);
$resultVideo = $coursVideo->modiferCours($idC);
$Document = $coursDecoment->modiferCours($idC);


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ModiferVidio'])) {

    $title = htmlspecialchars($_POST['Title']);
    $slug = htmlspecialchars($_POST['Slug']);
    $Categorei = $_POST['Categorei'];
    $Tags = $_POST['Tags'];
    $About = htmlspecialchars($_POST['About']);
    $centenu = $_POST['centenu_video'];
    $image = $_FILES['image'];
    $coursVideo->setid($idE);
    $coursVideo->setTitre($title);
    $coursVideo->setSlgun($slug);
    $coursVideo->setDescription($About);
    $coursVideo->setVideo($centenu);
    $coursVideo->setcategorie_id($Categorei);
    $coursVideo->setTags_id($Tags);
    $coursVideo->setimage($image);
    $coursVideo->Modifer($idC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ModifierDocument'])) {

    $title = htmlspecialchars($_POST['Title']);
    $slug = htmlspecialchars($_POST['Slug']);
    $Categorei = $_POST['Categorei'];
    $Tags = $_POST['Tags'];
    $About = htmlspecialchars($_POST['About']);
    $image = $_FILES['image'];

    $centenu = $_FILES['centenu_pdf'];
    $coursDecoment->setid($idE);
    $coursDecoment->setTitre($title);
    $coursDecoment->setSlgun($slug);
    $coursDecoment->setDescription($About);
    $coursDecoment->setDocument($centenu);
    $coursDecoment->setcategorie_id($Categorei);
    $coursDecoment->setTags_id($Tags);
    $coursDecoment->setimage($image);
    $coursDecoment->Modifier($idC);
}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/create-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2025 14:27:41 GMT -->

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

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark">
    <!-- preloader
    <div
        class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700">
        
        <div
            class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"></div>
        <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
            <img src="../assets/images/pre.png" alt="" class="h-10 w-10 block">
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
   <?php include "../layouts/header.php" ?>
    <main class="bg-transparent">
        <!-- banner section -->


        <!--create course section -->
        <section class="relative">
            <div class="container py-100px">
                <div class="tab md:w-2/3 mx-auto">
                    <!-- tab controller -->

                    <div
                        class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0">
                        <button
                            class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                            <span
                                class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                            Modifier as Course Video
                        </button>
                        <button
                            class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
                            <span
                                class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                            Modifier as Course Document
                        </button>
                    </div>

                    <!--  tab contents -->
                    <div
                        class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px">
                        <div class=" tab-contents">
                            <!-- login form-->
                            <div
                                class=" block opacity-100 transition-opacity duration-150 ease-linear">
                                <!-- heading   -->
                                <div class="text-center">
                                    <h3
                                        class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                        Cours Video
                                    </h3>
                                </div>

                                <div class="container pt-100px pb-100px" data-aos="fade-up">
                                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                        <!-- create course left -->
                                        <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-8">
                                            <ul class="accordion-container curriculum create-course">
                                                <!-- accordion -->
                                                <li class="accordion mb-5 active">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-t-md">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-t-md">
                                                                <div>
                                                                    <span>Course Info</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <form
                                                                        method="POST"
                                                                        action=""
                                                                        enctype="multipart/form-data"
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Title</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Title"
                                                                                    value="<?= isset($resultVideo) ? $resultVideo->getTitre() : "" ?>"
                                                                                    placeholder="Course Title"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Slug</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Slug"
                                                                                    value="<?= isset($resultVideo) ? $resultVideo->getSlgun() : "" ?>"
                                                                                    placeholder="Course Slug"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>

                                                                            <div>
                                                                                <div class="file-upload-container">
                                                                                    <label class="file-label" for="course-image">Course image</label>
                                                                                    <input
                                                                                        type="file"
                                                                                        name="image"
                                                                                        id="course-image"
                                                                                        class="file-input">
                                                                                </div>

                                                                                <div
                                                                                    class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">COURSES</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <select
                                                                                                name="Categorei"
                                                                                                class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                                                <option selected="">Categorei</option>
                                                                                                <?php
                                                                                                foreach ($categoreis as $row):
                                                                                                    $categorie = $row[0];
                                                                                                    $cour = $row[1];
                                                                                                ?>
                                                                                                    <option value="<?= $categorie->getIdC() ?>"><?= $categorie->getNomCategorie() ?></option>
                                                                                                <?php
                                                                                                endforeach
                                                                                                ?>
                                                                                            </select>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">SHORT BY OFFER</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <div class="relative w-full">
                                                                                                <div class="w-full">
                                                                                                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-700">Select Tags</label>
                                                                                                    <select
                                                                                                        name="Tags[]"
                                                                                                        id="tags"
                                                                                                        multiple
                                                                                                        class="w-full bg-white text-gray-700 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-3 h-40 overflow-y-auto">
                                                                                                        <option disabled selected class="text-gray-500">Tags</option>
                                                                                                        <?php foreach ($tag as $row): ?>
                                                                                                            <option value="<?= $row->getId() ?>" class="p-2"><?= $row->getName() ?></option>
                                                                                                        <?php endforeach ?>
                                                                                                    </select>
                                                                                                </div>

                                                                                            </div>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-15px">
                                                                            <label class="mb-3 block font-semibold">About Course</label>
                                                                            <textarea
                                                                                name="About"
                                                                                class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"

                                                                                cols="30"
                                                                                rows="10">
                                        <?=                                 isset($resultVideo) ? $resultVideo->getDescription() : "" ?></textarea>
                                                                        </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- accordion -->
                                                <li class="accordion mb-5">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                                                                <div>
                                                                    <span>Course Video</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden h-0">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <div
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">

                                                                            <div>

                                                                                <div>
                                                                                    <label class="mb-3 block font-semibold">Add Your Video URL</label>
                                                                                    <input
                                                                                        type="text"
                                                                                        name="centenu_video"
                                                                                        placeholder="Add your Video URL here"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="mb-3 block">
                                                                                        Example:
                                                                                        <a
                                                                                            class="hover:text-primaryColor"
                                                                                            href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                                <!-- accordion -->

                                            </ul>
                                            <div
                                                class="mt-10 leading-1.8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                                <div data-aos="fade-up" class="lg:col-start-0 lg:col-span-8 w-full">
                                                    <button
                                                        type="submit"
                                                        name="ModiferVidio"
                                                        class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                                                        Course Document
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- sign up form-->
                            <div
                                class="hidden opacity-0 transition-opacity duration-150 ease-linear">
                                <!-- heading   -->
                                <div class="text-center">
                                    <h3
                                        class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                                        Cours Document
                                    </h3>
                                </div>


                                <div class="container pt-100px pb-100px" data-aos="fade-up">
                                    <div class="grid grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                        <!-- create course left -->
                                        <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-8">
                                            <ul class="accordion-container curriculum create-course">
                                                <!-- accordion -->
                                                <li class="accordion mb-5 active">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-t-md">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-t-md">
                                                                <div>
                                                                    <span>Course Info</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <form
                                                                        method="POST"
                                                                        enctype="multipart/form-data"
                                                                        action=""
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Title</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Title"
                                                                                    value="<?= isset($Document) ? $Document->getTitre() : "" ?>"
                                                                                    placeholder="Course Title"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>
                                                                            <div>
                                                                                <label class="mb-3 block font-semibold">Course Slug</label>
                                                                                <input
                                                                                    type="text"
                                                                                    name="Slug"
                                                                                    value="<?= isset($Document) ? $Document->getSlgun() : "" ?>"
                                                                                    placeholder="Course Slug"
                                                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                            </div>
                                                                            <div>
                                                                                <div class="file-upload-container">
                                                                                    <label class="file-label" for="course-image">Course image</label>
                                                                                    <input
                                                                                        type="file"
                                                                                        name="image"

                                                                                        id="course-image"
                                                                                        class="file-input">
                                                                                </div>
                                                                                <div
                                                                                    class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">COURSES</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <select
                                                                                                name="Categorei"
                                                                                                class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                                                                <option selected="">Categorei</option>
                                                                                                <?php
                                                                                                foreach ($categoreis as $row):
                                                                                                    $categorie = $row[0];
                                                                                                    $cour = $row[1];
                                                                                                ?>
                                                                                                    <option value="<?= $categorie->getIdC() ?>"><?= $categorie->getNomCategorie() ?></option>
                                                                                                <?php
                                                                                                endforeach
                                                                                                ?>
                                                                                            </select>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <label
                                                                                            class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">SHORT BY OFFER</label>
                                                                                        <div
                                                                                            class="bg-whiteColor relative rounded-md">
                                                                                            <div class="relative w-full">
                                                                                                <div class="w-full">
                                                                                                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-700">Select Tags</label>
                                                                                                    <select
                                                                                                        name="Tags[]"
                                                                                                        id="tags"
                                                                                                        multiple
                                                                                                        class="w-full bg-white text-gray-700 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-3 h-40 overflow-y-auto">
                                                                                                        <option disabled selected class="text-gray-500">Tags</option>
                                                                                                        <?php foreach ($tag as $row): ?>
                                                                                                            <option value="<?= $row->getId() ?>" class="p-2"><?= htmlspecialchars($row->getName()) ?></option>
                                                                                                        <?php endforeach ?>
                                                                                                    </select>
                                                                                                </div>

                                                                                            </div>
                                                                                            <i
                                                                                                class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-15px">
                                                                            <label class="mb-3 block font-semibold">About Course</label>
                                                                            <textarea
                                                                                name="About"
                                                                                class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"

                                                                                cols="30"
                                                                                rows="10">
                                                                                <?php isset ($Document)? 
                                                                                    $Document->getDescription(): "";
                                                                                 ?></textarea>
                                                                        </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- accordion -->
                                                <li class="accordion mb-5">
                                                    <div
                                                        class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                                                        <!-- controller -->
                                                        <div class="py-5 px-30px">
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                                                                <div>
                                                                    <span>Course decument</span>
                                                                </div>
                                                                <svg
                                                                    class="transition-all duration-500 rotate-0"
                                                                    width="20"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path
                                                                        fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div
                                                            class="accordion-content transition-all duration-500 overflow-hidden h-0">
                                                            <div class="content-wrapper py-4 px-5">
                                                                <div>
                                                                    <div
                                                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                        data-aos="fade-up">
                                                                        <div class="grid grid-cols-1 mb-15px gap-15px">

                                                                            <div>

                                                                                <div>
                                                                                    <label class="mb-3 block font-semibold">Add Your document URL</label>
                                                                                    <input
                                                                                        type="file"
                                                                                        name="centenu_pdf"
                                                                                        placeholder="Add your Document URL here"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                                                </div>
                                                                                <div>
                                                                                    <div class="mb-3 block">
                                                                                        Example:
                                                                                        <a
                                                                                            class="hover:text-primaryColor"
                                                                                            href="">https://www.example.com/path/to/your/file.pdf</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                                <!-- accordion -->

                                            </ul>

                                            <div
                                                class="mt-10 leading-1.8 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-x-30px gap-y-5">
                                                <div data-aos="fade-up" class="lg:col-start-0 lg:col-span-8 w-full">
                                                    <button
                                                        type="submit"
                                                        name="ModifierDocument"
                                                        class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                                                        Create Course
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- animated icons -->
            <div>
                <img
                    loading="lazy"
                    class="absolute right-[14%] top-[30%] animate-move-var"
                    src="../assets/images/education/hero_shape2.png"
                    alt="Shape">
                <img
                    loading="lazy"
                    class="absolute left-[5%] top-1/2 animate-move-hor"
                    src="../assets/images/education/hero_shape3.png"
                    alt="Shape">
                <img
                    loading="lazy"
                    class="absolute left-1/2 bottom-[60px] animate-spin-slow"
                    src="../assets/images/education/hero_shape4.png"
                    alt="Shape">
                <img
                    loading="lazy"
                    class="absolute left-1/2 top-10 animate-spin-slow"
                    src="../assets/images/education/hero_shape5.png"
                    alt="Shape">
            </div>

    </main>
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

</html>