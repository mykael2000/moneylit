<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Lit Africa - Financial Empowerment for the Continent</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        /* Custom styles for professional feel and smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f8; /* Very light, inviting background */
        }
        /* Creative Color Palette based on a refined African theme */
        .color-primary { color: #065F46; /* Deep Emerald Green */ }
        .bg-primary { background-color: #065F46; }
        .bg-secondary { background-color: #FBBF24; /* Vibrant Amber Gold */ }
        
        /* Custom Shadow for a premium, floating look */
        .custom-shadow {
            box-shadow: 0 15px 30px -10px rgba(6, 95, 70, 0.2), 0 6px 15px -4px rgba(6, 95, 70, 0.1);
            transition: all 0.3s ease;
        }
        .custom-shadow:hover {
            box-shadow: 0 20px 40px -10px rgba(6, 95, 70, 0.35), 0 8px 20px -5px rgba(6, 95, 70, 0.2);
            transform: translateY(-4px);
        }

        /* Gradient for the Hero Section */
        .hero-gradient {
            background: linear-gradient(135deg, #f8f8f8 50%, #E0F2F1 100%);
        }

        /* Playfair Display for headers */
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="text-gray-900">

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm shadow-lg">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-20">
            <a href="#home" class="text-3xl font-black color-primary tracking-tight">
                Money Lit Africa
            </a>
            <div class="hidden md:flex space-x-8 text-base font-semibold">
                <a href="onfinance.moneylitafrica.com" 
                    class="bg-emerald-100 text-emerald-900 px-4 py-2 rounded-lg 
                            transition-colors duration-300 hover:bg-amber-400 hover:text-emerald-900 font-semibold shadow-sm">
                    ON FINANCE
                </a>
                <a href="#about" class="hover:text-amber-500 transition duration-300">About Omoefe</a>
                <a href="educators.php" class="hover:text-amber-500 transition duration-300">Educators</a>
                <a href="#vision" class="hover:text-amber-500 transition duration-300">Vision</a>
                <a href="#gallery" class="hover:text-amber-500 transition duration-300">Highlights</a>
                <a href="#contact" class="px-5 py-2 rounded-full bg-primary text-white font-bold hover:bg-emerald-900 transition duration-300 custom-shadow">Collaborate</a>
            </div>
            <!-- Mobile Menu Button (Hamburger) -->
            <button class="md:hidden p-2 text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-xl py-4 absolute w-full">
            <a href="#about" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">About Omoefe</a>
            <a href="#events" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">Events & Impact</a>
            <a href="#vision" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">Vision</a>
            <a href="#gallery" class="block px-6 py-2 text-base text-gray-700 hover:bg-emerald-50 border-b border-gray-100">Highlights</a>
            <a href="#contact" class="block px-6 py-3 text-base text-white bg-primary mx-4 my-3 rounded-xl text-center font-bold">Collaborate Now</a>
        </div>
    </header>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">