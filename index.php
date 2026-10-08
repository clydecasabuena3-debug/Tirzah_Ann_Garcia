<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday, Tirzah Ann Garcia! 🎉</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter & Outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome for gorgeous icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Canvas Confetti -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        glass: {
                            white: 'rgba(255, 255, 255, 0.1)',
                            border: 'rgba(255, 255, 255, 0.25)',
                        }
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.15)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #311042 100%);
            min-height: 100vh;
            color: #f8fafc;
            overflow-x: hidden;
        }

        .heading-font {
            font-family: 'Outfit', sans-serif;
        }

        /* Glassmorphism card effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .glass-card-hover:hover {
            background: rgba(255, 255, 255, 0.09);
            border: 1px solid rgba(255, 255, 255, 0.25);
            transform: translateY(-4px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Glowing text effects */
        .glow-text {
            text-shadow: 0 0 20px rgba(244, 114, 182, 0.6), 0 0 40px rgba(168, 85, 247, 0.4);
        }

        /* Floating background elements animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .animate-float-slow {
            animation: float 8s ease-in-out infinite;
        }

        .animate-float-fast {
            animation: float 4s ease-in-out infinite;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.4);
        }
    </style>
</head>
<body class="relative selection:bg-pink-500 selection:text-white">

    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-pulse"></div>
        <div class="absolute top-1/3 -right-32 w-96 h-96 bg-pink-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-pulse" style="animation-duration: 4s;"></div>
        <div class="absolute -bottom-32 left-1/4 w-96 h-96 bg-indigo-600 rounded-full mix-blend-multiply filter blur-[128px] opacity-40 animate-pulse" style="animation-duration: 6s;"></div>
    </div>

    <nav class="fixed top-0 left-0 right-0 z-50 px-4 py-4 backdrop-blur-md bg-slate-950/60 border-b border-white/10 transition-all duration-300">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <a href="#" class="flex items-center space-x-2 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-pink-500 to-purple-600 flex items-center justify-center shadow-lg shadow-pink-500/30 group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-cake-candles text-white text-lg"></i>
                </div>
                <span class="heading-font font-bold text-xl tracking-wide bg-gradient-to-r from-pink-400 via-purple-300 to-indigo-400 bg-clip-text text-transparent">
                    Tirzah's Day
                </span>
            </a>
            
            <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-300">
                <a href="#hero" class="hover:text-pink-400 transition-colors">Home</a>
                <a href="#countdown" class="hover:text-pink-400 transition-colors">Countdown</a>
                <a href="#gallery" class="hover:text-pink-400 transition-colors">Memories</a>
                <a href="#wishes" class="hover:text-pink-400 transition-colors">Wishes Wall</a>
                <a href="#gift" class="hover:text-pink-400 transition-colors">Special Gift</a>
            </div>

            <div class="flex items-center space-x-3">
                <button onclick="triggerConfetti()" class="px-4 py-2 rounded-xl bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold text-sm shadow-lg shadow-pink-500/25 hover:shadow-pink-500/40 hover:scale-105 transition-all flex items-center space-x-2">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                    <span>Celebrate!</span>
                </button>
            </div>
        </div>
    </nav>

    <section id="hero" class="relative min-h-screen flex items-center justify-center px-4 pt-24 pb-16 z-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Badge -->
            <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full glass-card mb-8 animate-float-slow border border-pink-500/30 text-pink-300 text-sm font-medium">
                <i class="fa-solid fa-calendar-days text-pink-400"></i>
                <span>Birthday: October 9</span>
            </div>

            <!-- Main Heading -->
            <h1 class="heading-font text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tight mb-6">
                Happy Birthday, <br/>
                <span class="bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-300 bg-clip-text text-transparent glow-text">
                    Tirzah Ann Garcia!
                </span>
            </h1>

            <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto mb-10 leading-relaxed font-light">
                Wishing you a year filled with boundless joy, breathtaking adventures, success, and all the love your magnificent heart can hold. Today we celebrate YOU! ✨
            </p>

            <!-- Call to Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#wishes" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-pink-500 via-purple-600 to-indigo-600 text-white font-bold shadow-xl shadow-purple-500/25 hover:shadow-purple-500/40 hover:scale-105 transition-all flex items-center justify-center space-x-3">
                    <i class="fa-solid fa-heart text-pink-200"></i>
                    <span>Leave a Birthday Wish</span>
                </a>
                <a href="#gallery" class="w-full sm:w-auto px-8 py-4 rounded-2xl glass-card text-white font-semibold hover:bg-white/10 transition-all flex items-center justify-center space-x-3 border border-white/20">
                    <i class="fa-solid fa-images text-indigo-300"></i>
                    <span>Explore Memories</span>
                </a>
            </div>

            <!-- Floating Decorative Element -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto">
                <div class="glass-card p-4 rounded-2xl text-center">
                    <i class="fa-solid fa-face-smile-beam text-pink-400 text-2xl mb-2"></i>
                    <h3 class="font-heading font-bold text-white text-lg">Bright Spirit</h3>
                    <p class="text-xs text-slate-400">Brings light to every room</p>
                </div>
                <div class="glass-card p-4 rounded-2xl text-center">
                    <i class="fa-solid fa-star text-purple-400 text-2xl mb-2"></i>
                    <h3 class="font-heading font-bold text-white text-lg">Inspiration</h3>
                    <p class="text-xs text-slate-400">An inspiration to all</p>
                </div>
                <div class="glass-card p-4 rounded-2xl text-center">
                    <i class="fa-solid fa-gem text-indigo-400 text-2xl mb-2"></i>
                    <h3 class="font-heading font-bold text-white text-lg">Kind Heart</h3>
                    <p class="text-xs text-slate-400">Kindness without limits</p>
                </div>
                <div class="glass-card p-4 rounded-2xl text-center">
                    <i class="fa-solid fa-cake-candles text-pink-400 text-2xl mb-2"></i>
                    <h3 class="font-heading font-bold text-white text-lg">October 9</h3>
                    <p class="text-xs text-slate-400">Your special annual day</p>
                </div>
            </div>
        </div>
    </section>

    <section id="countdown" class="py-20 px-4 relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="glass-card rounded-3xl p-8 md:p-12 text-center relative overflow-hidden border border-white/15">
                <div class="absolute -right-16 -top-16 w-48 h-48 bg-pink-500/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -left-16 -bottom-16 w-48 h-48 bg-purple-500/20 rounded-full blur-3xl pointer-events-none"></div>

                <span class="text-pink-400 font-semibold text-sm tracking-widest uppercase mb-2 block">Countdown to October 9 Birthday</span>
                <h2 class="heading-font text-3xl md:text-4xl font-bold mb-8">Every Moment is Worth Celebrating</h2>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-2xl mx-auto">
                    <div class="glass-card p-6 rounded-2xl">
                        <span id="days" class="heading-font text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">00</span>
                        <p class="text-slate-400 text-sm mt-2 font-medium">Days</p>
                    </div>
                    <div class="glass-card p-6 rounded-2xl">
                        <span id="hours" class="heading-font text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text text-transparent">00</span>
                        <p class="text-slate-400 text-sm mt-2 font-medium">Hours</p>
                    </div>
                    <div class="glass-card p-6 rounded-2xl">
                        <span id="minutes" class="heading-font text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-indigo-400 to-pink-400 bg-clip-text text-transparent">00</span>
                        <p class="text-slate-400 text-sm mt-2 font-medium">Minutes</p>
                    </div>
                    <div class="glass-card p-6 rounded-2xl">
                        <span id="seconds" class="heading-font text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">00</span>
                        <p class="text-slate-400 text-sm mt-2 font-medium">Seconds</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-20 px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-pink-400 font-semibold text-sm tracking-widest uppercase mb-2 block">Photo Album</span>
                <h2 class="heading-font text-4xl md:text-5xl font-bold mb-4">Cherished Memories</h2>
                <p class="text-slate-400 font-light">Snapshots of laughter, unforgettable moments, and beautiful vibes with Tirzah.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Gallery Item 1 -->
                <div class="glass-card glass-card-hover rounded-3xl overflow-hidden group cursor-pointer" onclick="openLightbox('two.jpeg', 'Joyful Moments & Celebration')">
                    <div class="relative h-64 overflow-hidden">
                        <img src="two.jpeg" alt="Celebration" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/800x600/311042/f8fafc?text=Celebration'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-80"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="px-3 py-1 rounded-full bg-pink-500/30 border border-pink-500/50 text-pink-300 text-xs font-semibold mb-2 inline-block">Celebration</span>
                            <h3 class="heading-font font-bold text-lg text-white">Unforgettable Vibes</h3>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="glass-card glass-card-hover rounded-3xl overflow-hidden group cursor-pointer" onclick="openLightbox('three.jpeg', 'Adventures & Good Times')">
                    <div class="relative h-64 overflow-hidden">
                        <img src="three.jpeg" alt="Adventure" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/800x600/311042/f8fafc?text=Adventures'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-80"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="px-3 py-1 rounded-full bg-purple-500/30 border border-purple-500/50 text-purple-300 text-xs font-semibold mb-2 inline-block">Milestones</span>
                            <h3 class="heading-font font-bold text-lg text-white">Endless Smiles</h3>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="glass-card glass-card-hover rounded-3xl overflow-hidden group cursor-pointer" onclick="openLightbox('one.jpeg', 'Birthday Magic')">
                    <div class="relative h-64 overflow-hidden">
                        <img src="one.jpeg" alt="Party" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/800x600/311042/f8fafc?text=Party+Time'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-80"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="px-3 py-1 rounded-full bg-indigo-500/30 border border-indigo-500/50 text-indigo-300 text-xs font-semibold mb-2 inline-block">Adventures</span>
                            <h3 class="heading-font font-bold text-lg text-white">Pure Happiness</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

            
        </div>
    </section>

    <section id="gift" class="py-20 px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <div class="glass-card rounded-3xl p-8 md:p-12 relative overflow-hidden border border-white/15">
                <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-tr from-pink-500 to-purple-600 flex items-center justify-center text-white text-3xl shadow-xl shadow-pink-500/30 mb-6 animate-bounce">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <h2 class="heading-font text-3xl md:text-4xl font-bold mb-4">A Special Surprise for Tirzah</h2>
                <p class="text-slate-300 mb-8 max-w-lg mx-auto font-light">
                    Click the magical button below to trigger a grand celebratory shower of confetti and birthday cheer!
                </p>
                <button onclick="triggerGrandCelebration()" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-pink-500 via-purple-600 to-indigo-600 text-white font-bold text-lg shadow-xl shadow-purple-500/30 hover:scale-105 transition-all inline-flex items-center space-x-3">
                    <i class="fa-solid fa-cake-candles"></i>
                    <span>Blow the Candles!</span>
                </button>
            </div>
        </div>
    </section>

    <footer class="py-8 px-4 border-t border-white/10 text-center text-slate-400 text-sm relative z-10 bg-slate-950/40">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>Made with ❤️ specially for <span class="text-pink-400 font-semibold">Tirzah Ann Garcia</span></p>
            <p class="text-xs text-slate-500">© 2026 Birthday Celebration Website. All rights reserved.</p>
        </div>
    </footer>

    <div id="lightbox" class="fixed inset-0 z-50 bg-slate-950/90 backdrop-blur-md hidden items-center justify-center p-4" onclick="closeLightbox()">
        <div class="relative max-w-2xl w-full glass-card p-4 rounded-3xl" onclick="event.stopPropagation()">
            <button onclick="closeLightbox()" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors z-10">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <img id="lightboxImg" src="" alt="Enlarged view" class="w-full h-80 md:h-96 object-cover rounded-2xl mb-4" onerror="this.src='https://placehold.co/800x600/311042/f8fafc?text=Memory'">
            <h3 id="lightboxTitle" class="heading-font text-xl font-bold text-white text-center"></h3>
        </div>
    </div>

    <script>
        // Confetti trigger functions
        function triggerConfetti() {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }
            });
        }

        function triggerGrandCelebration() {
            var duration = 3 * 1000;
            var animationEnd = Date.now() + duration;
            var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 999 };

            function randomInRange(min, max) {
                return Math.random() * (max - min) + min;
            }

            var interval = setInterval(function() {
                var timeLeft = animationEnd - Date.now();

                if (timeLeft <= 0) {
                    return clearInterval(interval);
                }

                var particleCount = 50 * (timeLeft / duration);
                confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
                confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
            }, 250);
        }

        // Automatic countdown timer targeted specifically to October 9
        function updateCountdown() {
            const now = new Date();
            let targetYear = now.getFullYear();
            // October is month index 9 (January is 0)
            let targetDate = new Date(targetYear, 9, 9, 0, 0, 0); 
            
            // If October 9 has already passed this year, target October 9 of next year
            if (now > targetDate) {
                targetDate = new Date(targetYear + 1, 9, 9, 0, 0, 0);
            }

            const diff = targetDate - now;
            if (diff > 0) {
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                const minutes = Math.floor((diff / 1000 / 60) % 60);
                const seconds = Math.floor((diff / 1000) % 60);

                document.getElementById('days').innerText = String(days).padStart(2, '0');
                document.getElementById('hours').innerText = String(hours).padStart(2, '0');
                document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
                document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
            }
        }
        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Lightbox functionality
        function openLightbox(imgSrc, title) {
            document.getElementById('lightboxImg').src = imgSrc;
            document.getElementById('lightboxTitle').innerText = title;
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('flex');
            lightbox.classList.add('hidden');
        }

        // Add user wishes dynamically
        function addWish(event) {
            event.preventDefault();
            const name = document.getElementById('senderName').value;
            const relation = document.getElementById('senderRelation').value || 'Friend';
            const message = document.getElementById('senderMessage').value;

            const container = document.getElementById('wishesContainer');
            const initialLetter = name.charAt(0).toUpperCase();

            const wishCard = document.createElement('div');
            wishCard.className = 'glass-card p-6 rounded-2xl relative animate-fade-in border border-pink-500/30';
            wishCard.innerHTML = `
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-pink-500 to-purple-600 flex items-center justify-center text-white font-bold">
                            ${initialLetter}
                        </div>
                        <div>
                            <h4 class="heading-font font-bold text-white">${escapeHtml(name)}</h4>
                            <span class="text-xs text-pink-400">${escapeHtml(relation)}</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-quote-right text-white/10 text-2xl"></i>
                </div>
                <p class="text-slate-300 text-sm leading-relaxed">${escapeHtml(message)}</p>
            `;

            container.insertBefore(wishCard, container.firstChild);
            document.getElementById('wishForm').reset();
            triggerConfetti();
        }

        function escapeHtml(text) {
            const map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' };
            return text.replace(/[&<>"']/g, function(m) { return map[m]; });
        }

        // Trigger gentle confetti on load
        window.onload = function() {
            setTimeout(triggerConfetti, 1000);
        };
    </script>
</body>
</html>