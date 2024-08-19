<?php
$currentPage = basename($_SERVER['REQUEST_URI'], "");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M Ship Management</title>
    <link rel="stylesheet" href="/dist/css/styles.css">
    <style>
        body {
            padding-top: 4rem;
        }
    </style>
</head>

<body>
    <header class="bg-white navbar">
        <nav class="flex items-center justify-between max-w-screen-xl px-6 py-4 mx-auto">
            <!-- Logo and Texts (Left Side) -->
            <div class="flex items-center space-x-4">
                <a href="/" class="flex items-center space-x-3">
                    <img src="/dist/images/logo.png" alt="Logo" class="navbar-logo">
                    <div class="hidden md:block space-y-0.5">
                        <p class="uppercase navbar-logo-text text-[20px] lg:text-[24px] leading-tight">M Ship Management</p>
                        <p class="navbar-logo-text text-[12px] lg:text-[14px] leading-tight">Seafarers Recruitment and Placement Services</p>
                    </div>
                </a>
            </div>

            <!-- Navigation Links (Right Side) -->
            <div class="hidden space-x-6 md:flex">
                <a href="/" class="navbar-link <?= $currentPage == '' ? 'navbar-link-current' : 'navbar-link-default' ?>">Home</a>
                <a href="/services" class="navbar-link <?= $currentPage == 'services' ? 'navbar-link-current' : 'navbar-link-default' ?>">Services</a>
                <a href="/activities" class="navbar-link <?= $currentPage == 'activities' ? 'navbar-link-current' : 'navbar-link-default' ?>">Activities</a>
                <a href="/contact-us" class="navbar-link <?= $currentPage == 'contact-us' ? 'navbar-link-current' : 'navbar-link-default' ?>">Contact Us</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="text-gray-600 md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-white shadow-md md:hidden">
            <a href="/" class="block px-4 py-2 text-lg transition-all duration-150 ease-linear <?= $currentPage == '' ? 'navbar-link-current' : 'navbar-link-default' ?> hover:bg-gray-300">Home</a>
            <a href="/services" class="block px-4 py-2 text-lg transition-all duration-150 ease-linear <?= $currentPage == 'services' ? 'navbar-link-current' : 'navbar-link-default' ?> hover:bg-gray-300">Services</a>
            <a href="/activities" class="block px-4 py-2 text-lg transition-all duration-150 ease-linear <?= $currentPage == 'activities' ? 'navbar-link-current' : 'navbar-link-default' ?> hover:bg-gray-300">Activities</a>
            <a href="/contact-us" class="block px-4 py-2 text-lg transition-all duration-150 ease-linear <?= $currentPage == 'contact-us' ? 'navbar-link-current' : 'navbar-link-default' ?> hover:bg-gray-300">Contact Us</a>
        </div>
    </header>