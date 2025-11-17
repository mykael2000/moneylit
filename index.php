<?php include("header.php"); ?>

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

        <!-- 2. About Omoefe - Clean, Separated Layout -->
        <section id="about" class="py-24 md:py-36">
            <div class="grid md:grid-cols-12 gap-16">
                <div class="md:col-span-4 space-y-8">
                    <h2 class="text-5xl font-extrabold color-primary mb-4">Meet Omoefe Orobator</h2>
                    <!-- Credentials List Card -->
                    <div class="p-6 bg-white rounded-2xl custom-shadow">
                         <h3 class="text-xl font-bold text-gray-800 mb-4">Credentials:</h3>
                         <ul class="text-lg font-medium text-gray-700 space-y-2 list-none p-0">
                            <li class="flex items-center"><span class="text-amber-500 mr-2 text-2xl">•</span> Certified Finance Analyst</li>
                            <li class="flex items-center"><span class="text-amber-500 mr-2 text-2xl">•</span> Chartered Accountant</li>
                            <li class="flex items-center"><span class="text-amber-500 mr-2 text-2xl">•</span> Wealth Manager</li>
                            <li class="flex items-center"><span class="text-amber-500 mr-2 text-2xl">•</span> Speaker & Educator</li>
                         </ul>
                    </div>
                </div>
                <div class="md:col-span-8 space-y-10">
                    <div class="text-xl leading-relaxed text-gray-700 space-y-6">
                        <p>Omoefe Orobator is a Certified Finance Analyst, Wealth Manager and Chartered Accountant passionate about transforming how Africans think about money. With over five years of experience in finance and wealth management, she helps individuals and business owners build intentional, income-generating portfolios.</p>
                        <p>Omoefe combines professional expertise with a heart for impact. She has shared her insights across platforms in Nigeria, the U.S., and Kenya — simplifying finance and making it relatable to everyday people. Through <bold>Money Lit Africa</bold>, she's building a movement that bridges financial literacy gaps and inspires people to make smarter financial decisions.</p>
                    </div>

                    <!-- Quote Section - Prominent Design -->
                    <div class="p-8 bg-emerald-50 border-t-8 border-secondary rounded-2xl shadow-xl">
                        <blockquote class="text-2xl italic font-medium text-gray-700">
                            "Financial freedom begins when you decide to get literate about money — that's the heartbeat of Money Lit Africa."
                        </blockquote>
                        <footer class="mt-6 text-right text-lg font-extrabold color-primary">— Omoefe Orobator</footer>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Events & Initiatives - Creative Card Styling -->
        <section id="events" class="py-24 md:py-36 bg-gray-50 rounded-3xl p-8">
            <h2 class="text-5xl font-extrabold text-center mb-16 color-primary">Our Impact in Action</h2>

            <div class="grid gap-12 lg:grid-cols-3">

                <!-- Digital Professional Fair (2025) -->
                <div class="bg-white p-8 rounded-3xl shadow-xl border-t-4 border-blue-500 custom-shadow">
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-4xl">💡</span>
                        <h3 class="text-2xl font-bold text-blue-600">Digital Professional Fair (2025)</h3>
                    </div>
                    <p class="text-lg font-semibold text-gray-700 mb-6">Focus: Finances Beyond Income for Digital Pros</p>
                    <div class="space-y-4 text-gray-600 text-base">
                        <p>I shared practical strategies to help digital professionals take control of their finances and build sustainable wealth streams.</p>
                        <h4 class="text-lg font-extrabold color-primary pt-2">We Explored:</h4>
                        <ul class="list-none space-y-2 text-sm ml-0">
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>Managing business cash flow</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>Sustainable pricing models</li>
                            <li class="flex items-center"><svg class="w-4 h-4 mr-2 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>Separating business and personal finances</li>
                        </ul>
                        <a href="#contact" class="mt-4 block w-full text-center px-4 py-3 bg-blue-500 text-white font-semibold rounded-xl hover:bg-blue-600 transition duration-300">
                            Request a Workshop
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- 4. Money Lit Africa Vision - Separated and Clear -->
        <section id="vision" class="py-24 md:py-36">
            <h2 class="text-5xl font-extrabold text-center mb-16 color-primary">Changing Africa’s Financial Story</h2>
            <div class="grid md:grid-cols-2 gap-12 bg-primary rounded-3xl p-10 md:p-16 text-white custom-shadow">
                <div class="space-y-8">
                    <h3 class="text-3xl font-bold text-secondary">Our Purpose</h3>
                    <div class="text-lg leading-relaxed opacity-95">
                        <p>Money Lit Africa is a platform dedicated to educating, empowering, and connecting Africans who are ready to take control of their finances.</p>
                    </div>
                    <div class="space-y-4 pt-4">
                        <h3 class="text-3xl font-bold text-secondary">Mission & Vision</h3>
                        <!-- Mission Statement -->
                        <div class="text-lg">
                            <p class="font-extrabold mb-1">Mission Statement:</p>
                            <p class="italic opacity-85">To make financial literacy accessible to every African through education, mentorship, and community engagement.</p>
                        </div>
                        <!-- Vision Statement -->
                        <div class="text-lg">
                            <p class="font-extrabold mb-1">Vision Statement:</p>
                            <p class="italic opacity-85">A financially literate Africa, where everyone — regardless of background — can make informed money decisions and build lasting wealth.</p>
                        </div>
                    </div>
                </div>
                
                <!-- We Believe list with icons -->
                <div class="space-y-6 bg-white/10 p-6 rounded-2xl">
                    <h3 class="text-3xl font-bold text-secondary">We Believe:</h3>
                    <ul class="space-y-5 text-xl font-medium">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                            Financial education is a right, not a privilege.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9 12l2-2 4.01 4L12 17l-4-4 4.01-4zm1.99-10A10 10 0 1010 20 10 10 0 0011.99 2zM10 18a8 8 0 110-16 8 8 0 010 16z"></path></svg>
                            Building wealth should be simple, transparent, and accessible.
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 mr-3 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                            Empowering one person creates a ripple effect that transforms communities.
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 5. Gallery / Highlights - Focused Grid Layout -->
        <section id="gallery" class="py-24 md:py-36">
            <h2 class="text-5xl font-extrabold text-center mb-16 color-primary">Gallery & Highlights</h2>

            <div class="space-y-16">

                <!-- Moments from Our Events -->
                <div>
                    <h3 class="text-3xl font-bold color-primary mb-8 border-b-2 border-amber-300 inline-block pb-1">Moments from Our Events</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                        <img src="img/about/Money3LitImage.jpg" onerror="this.onerror=null;this.src='img/about/Money3LitImage.jpg'" alt="Event highlight photo 1" class="w-full h-48 object-cover rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                        <img src="img/about/MoneyLitImage.jpg" onerror="this.onerror=null;this.src='img/about/MoneyLitImage.jpg'" alt="Event highlight photo 2" class="w-full h-48 object-cover rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                        <img src="img/about/MoneyLit6.jpg" onerror="this.onerror=null;this.src='img/about/MoneyLit6.jpg'" alt="Event highlight photo 3" class="w-full h-48 object-cover rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                        <img src="img/about/Moneylit5.jpg" onerror="this.onerror=null;this.src='img/about/Moneylit5.jpg'" alt="Event highlight photo 4" class="w-full h-48 object-cover rounded-xl shadow-lg transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    </div>
                </div>

                <!-- Speaking Engagements -->
                <div>
                    <h3 class="text-3xl font-bold color-primary mb-8 border-b-2 border-amber-300 inline-block pb-1">Speaking Engagements</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Video 1 -->
                        <div class="flex flex-col items-center rounded-xl shadow-lg overflow-hidden transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <video controls class="w-full h-48 object-cover">
                                <source src="img/speaking/SpeakingGig.mp4" type="video/mp4" />
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <!-- <span class="mt-2 text-center text-lg font-semibold">Speaker 1</span> -->
                        </div>

                        <!-- Image -->
                        <div class="flex flex-col items-center rounded-xl shadow-lg overflow-hidden transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <img src="img/speaking/MumFundEvent.jpg" alt="Speaking engagement photo 2" class="w-full h-48 object-cover" />
                            <!-- <span class="mt-2 text-center text-lg font-semibold">Speaker 2</span> -->
                        </div>

                        <!-- Video 2 -->
                        <div class="flex flex-col items-center rounded-xl shadow-lg overflow-hidden transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <video controls class="w-full h-48 object-cover">
                                <source src="img/speaking/SpeakingGig2.mp4" type="video/mp4" />
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <!-- <span class="mt-2 text-center text-lg font-semibold">Community Impact</span> -->
                        </div>

                        <!-- Video 3 -->
                        <div class="flex flex-col items-center rounded-xl shadow-lg overflow-hidden transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <video controls class="w-full h-48 object-cover">
                                <source src="img/speaking/SpeakingGig3.mp4" type="video/mp4" />
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <!-- <span class="mt-2 text-center text-lg font-semibold">Community Impact</span> -->
                        </div>

                        <!-- Video 4 -->
                        <div class="flex flex-col items-center rounded-xl shadow-lg overflow-hidden transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <video controls class="w-full h-48 object-cover">
                                <source src="img/speaking/SpeakingGig4.mp4" type="video/mp4" />
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <!-- <span class="mt-2 text-center text-lg font-semibold">Community Impact</span> -->
                        </div>

                        <!-- Video 5 -->
                        <div class="flex flex-col items-center rounded-xl shadow-lg overflow-hidden transition duration-300 hover:scale-[1.02] hover:shadow-2xl">
                            <video controls class="w-full h-48 object-cover">
                                <source src="img/speaking/SpeakingGig5.mp4" type="video/mp4" />
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <!-- <span class="mt-2 text-center text-lg font-semibold">Community Impact</span> -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- 6. Contact & Footer - Distinct, High Contrast Block -->
        <section id="contact" class="py-24 md:py-36 bg-gray-800 rounded-t-[4rem] text-white">
            <div class="grid md:grid-cols-12 gap-16 px-8">
                <div class="md:col-span-5 space-y-8">
                    <h2 class="text-5xl font-extrabold text-secondary">Let’s Build Financial Freedom Together</h2>
                    <p class="text-xl opacity-90">For collaborations, speaking engagements, or partnerships, reach out below. I look forward to partnering with you to drive financial literacy across Africa.</p>

                    <!-- Social Links -->
                    <div class="pt-4 space-x-6 text-2xl font-semibold">
                        <a href="#" class="hover:text-secondary transition duration-300">Instagram</a>
                        <span class="opacity-30">|</span>
                        <a href="#" class="hover:text-secondary transition duration-300">LinkedIn</a>
                        <span class="opacity-30">|</span>
                        <a href="#" class="hover:text-secondary transition duration-300">X (Twitter)</a>
                    </div>

                    <!-- Newsletter Signup (Optional Addition) -->
                    <div class="pt-8 bg-gray-900 p-6 rounded-xl custom-shadow">
                        <h3 class="text-2xl font-bold text-secondary mb-3">Weekly Financial Insights</h3>
                        <p class="text-sm opacity-80 mb-4">Get curated insights on building wealth and financial confidence straight to your inbox.</p>
                        <form id="newsletter-form" class="flex max-w-sm">
                            <input type="email" placeholder="Your Email Address" required class="w-full p-3 rounded-l-lg text-gray-900 focus:outline-none focus:ring-4 focus:ring-secondary/50">
                            <button type="submit" class="p-3 bg-secondary text-gray-900 font-bold rounded-r-lg hover:bg-amber-400 transition duration-300">Sign Up</button>
                        </form>
                        <p id="newsletter-message" class="mt-2 text-sm text-yellow-300 hidden"></p>
                    </div>

                </div>

                <!-- Contact Form - High Contrast Card -->
                <div class="md:col-span-7">
                    <form id="contact-form" class="space-y-6 bg-white p-8 rounded-3xl shadow-2xl custom-shadow">
                        <h3 class="text-3xl font-bold color-primary mb-4">Send a Message</h3>
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                            <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-3 border-2 border-gray-200 rounded-lg shadow-inner focus:border-primary focus:ring-2 focus:ring-primary/20 text-gray-900 transition duration-150">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-3 border-2 border-gray-200 rounded-lg shadow-inner focus:border-primary focus:ring-2 focus:ring-primary/20 text-gray-900 transition duration-150">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="5" required class="mt-1 block w-full px-4 py-3 border-2 border-gray-200 rounded-lg shadow-inner focus:border-primary focus:ring-2 focus:ring-primary/20 text-gray-900 transition duration-150"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-4 border border-transparent rounded-xl shadow-lg text-lg font-extrabold text-white bg-primary hover:bg-emerald-900 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-secondary/50 transition duration-300 custom-shadow">
                            Send Message
                        </button>
                        <p id="contact-message" class="mt-4 text-center text-sm font-bold text-gray-800 hidden"></p>
                    </form>
                </div>
            </div>
        </section>

        <!-- Optional: Blog Section Teaser - Clean and inviting -->
        <section class="py-20 md:py-32 bg-gray-100 rounded-b-3xl">
            <h2 class="text-4xl font-extrabold text-center mb-10 color-primary">Omoefe’s Thoughts (Blog)</h2>
            <p class="text-center text-xl text-gray-600 mb-16 max-w-3xl mx-auto">Dive into weekly insights on investing, saving, and money mindset to keep your financial journey on track.</p>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Blog Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-amber-500 hover:shadow-2xl transition duration-300 hover:scale-[1.01]">
                    <h3 class="font-black text-xl mb-2 text-gray-900">3 Essential Rules for Beginning Investors</h3>
                    <p class="text-sm text-gray-600 mb-4">Learn the foundational steps to start building your wealth portfolio today...</p>
                    <a href="#" class="text-sm font-extrabold color-primary hover:text-amber-500">Read More &rarr;</a>
                </div>
                <!-- Blog Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-emerald-500 hover:shadow-2xl transition duration-300 hover:scale-[1.01]">
                    <h3 class="font-black text-xl mb-2 text-gray-900">The Power of Intentional Budgeting in African Economies</h3>
                    <p class="text-sm text-gray-600 mb-4">How to manage cash flow effectively regardless of currency volatility...</p>
                    <a href="#" class="text-sm font-extrabold color-primary hover:text-amber-500">Read More &rarr;</a>
                </div>
                <!-- Blog Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-pink-500 hover:shadow-2xl transition duration-300 hover:scale-[1.01]">
                    <h3 class="font-black text-xl mb-2 text-gray-900">Mindset Matters: Overcoming Scarcity Thinking</h3>
                    <p class="text-sm text-gray-600 mb-4">Shift your perspective to attract and sustain long-term financial growth...</p>
                    <a href="#" class="text-sm font-extrabold color-primary hover:text-amber-500">Read More &rarr;</a>
                </div>
            </div>
        </section>
<?php include("footer.php"); ?>