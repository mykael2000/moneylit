<?php include("header.php"); ?>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 1. Home Page (Hero Section) - Visually Creative and Bold -->
        <section id="home" class="hero-gradient pt-24 pb-24 md:pt-32 md:pb-40 grid md:grid-cols-2 gap-16 items-center rounded-b-[4rem]">
            <div class="space-y-8">
                <h1 class="text-6xl md:text-7xl lg:text-8xl font-black leading-none text-gray-900">
                    Empowering Africans to take control of their finances — <span class="text-amber-500">one intentional decision at a time.</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-lg font-medium">
                    Through education, community, and conversations, Money Lit Africa is helping people across the continent rewrite their financial stories.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6 pt-6">
                    <a href="#contact" class="inline-block px-10 py-4 text-xl font-extrabold text-gray-900 bg-secondary rounded-xl hover:bg-amber-400 transition duration-300 custom-shadow shadow-amber-300/50 text-center">
                        Join the Community
                    </a>
                    <a href="#about" class="inline-block px-10 py-4 text-xl font-bold color-primary border-2 border-primary rounded-xl hover:bg-primary hover:text-white transition duration-300 text-center">
                        Learn from Omoefe
                    </a>
                </div>
            </div>
            <!-- Professional Photo Placeholder with Bolder Treatment -->
            <div class="relative flex justify-center md:justify-end">
                <div class="w-full max-w-md h-[400px] bg-primary rounded-[3rem] overflow-hidden shadow-2xl custom-shadow relative">
                    <!-- Placeholder Image - Replace with actual professional photo URL -->
                    <img src="img/about/money3.jpg" onerror="this.onerror=null;this.src='img/about/money3.jpg'" alt="Professional photo of Omoefe Orobator, Financial Educator" class="w-full h-full object-cover opacity-80">
                    <div class="absolute inset-0 flex items-end p-8 bg-black/30">
                        <h2 class="text-white text-4xl font-black tracking-widest uppercase leading-snug">
                            Financial <br> Literacy <br> Expert
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- 5. Gallery / Highlights - Focused Grid Layout -->
        <section id="gallery" class="py-24 md:py-36">
            <h2 class="text-5xl font-extrabold text-center mb-16 color-primary">Gallery & Highlights</h2>

            <div class="space-y-16">
                <!-- Educators from Our Events -->
                <div>
                    <h3 class="text-3xl font-bold color-primary mb-8 border-b-2 border-amber-300 inline-block pb-1">Our Educators</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                        <div class="flex flex-col items-center">
                            <img src="educators/AbisolaAdeniji.jpg" onerror="this.onerror=null;this.src='educators/AbisolaAdeniji.jpg'" alt="Abisola Adeniji" class="w-full max-h-full object-contain rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <span class="mt-2 text-center text-lg font-semibold">Abisola Adeniji</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="educators/BiyiMomoh.jpg" onerror="this.onerror=null;this.src='educators/BiyiMomoh.jpg'" alt="Biyi Momoh" class="w-full max-h-full object-contain rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <span class="mt-2 text-center text-lg font-semibold">Biyi Momoh</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="educators/HenryAliemeke.jpg" onerror="this.onerror=null;this.src='educators/HenryAliemeke.jpg'" alt="Henry Aliemeke" class="w-full max-h-full object-contain rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <span class="mt-2 text-center text-lg font-semibold">Henry Aliemeke</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
<?php include("footer.php"); ?>