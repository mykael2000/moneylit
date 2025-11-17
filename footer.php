
      </main>
    <!-- Simple Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm">
            <p>&copy; 2025 Money Lit Africa. All Rights Reserved. | Empowering Your Financial Story.</p>
        </div>
    </footer>

    <script>
        // --- JavaScript for Form Handling and Interactivity ---

        // 1. Handle Contact Form Submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = e.target;
            const name = form.name.value;
            const messageDisplay = document.getElementById('contact-message');

            // Log data to console (simulating submission)
            console.log('--- Contact Form Submission (Simulated) ---');
            console.log('Name:', form.name.value);
            console.log('Email:', form.email.value);
            console.log('Message:', form.message.value);

            // Display success message to the user
            messageDisplay.textContent = 'Success! Thank you, ' + name.split(' ')[0] + '! Your message has been received.';
            messageDisplay.classList.remove('hidden', 'text-gray-800');
            messageDisplay.classList.add('text-green-600', 'font-extrabold');
            form.reset();

            // Hide message after 5 seconds
            setTimeout(() => {
                messageDisplay.classList.add('hidden');
            }, 5000);
        });

        // 2. Handle Newsletter Form Submission
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = e.target;
            const email = form.querySelector('input[type="email"]').value;
            const messageDisplay = document.getElementById('newsletter-message');

            console.log('--- Newsletter Subscription (Simulated) ---');
            console.log('Email:', email);

            // Display success message
            messageDisplay.textContent = 'Subscribed! Check your inbox for your first intentional insight.';
            messageDisplay.classList.remove('hidden');
            form.reset();

            // Hide message after 5 seconds
            setTimeout(() => {
                messageDisplay.classList.add('hidden');
            }, 5000);
        });
        
        // 3. Mobile Navigation Toggle (Ensures menu closes after clicking a link)
        document.getElementById('mobile-menu').querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>
