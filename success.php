<?php
// Optional: If user lands here without submitting the form, redirect them
if (!isset($_GET['sent'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent Successfully</title>

    <!-- Tailwind CDN (remove this if Tailwind is already included globally) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(135deg, #0f766e, #064e3b);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center px-6">

    <div class="bg-white p-10 rounded-3xl shadow-2xl max-w-lg text-center">
        
        <div class="flex justify-center mb-6">
            <svg class="w-20 h-20 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Message Sent!</h1>

        <p class="text-lg text-gray-700 mb-6">
            Thank you for reaching out. Your message has been successfully delivered, and we will get back to you shortly.
        </p>

        <a href="index.php" 
            class="inline-block mt-4 px-8 py-3 bg-emerald-700 text-white font-bold rounded-xl hover:bg-emerald-800 transition">
            Return to Home
        </a>
    </div>

</body>
</html>
