<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Agro Care</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#1A2F23',
                        'accent': '#10b981',
                        'surface': '#F9FAF9',
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        :root {
            --bg-color: #FFFFFF;
            --text-primary: #1A1A1A;
            --text-secondary: #666666;
            --accent: #10b981;
            --border: #EEEEEE;
        }

        body {
            background: var(--bg-color);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        .font-outfit {
            font-family: 'Outfit', sans-serif;
            letter-spacing: -0.02em;
        }

        .nav-link {
            position: relative;
            color: var(--text-secondary);
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--text-primary);
        }

        .btn-clean {
            padding: 10px 24px;
            border-radius: 99px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background: var(--text-primary);
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text-primary);
        }

        .btn-secondary:hover {
            background: #F9F9F9;
        }

        /* Minimalist Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #DDD;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #CCC;
        }

        /* Smartphone Showcase Styles */
        @media (min-width: 1024px) {
            body {
                background-color: #020c0a !important;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                padding: 40px;
                overflow: hidden;
            }

            .phone-frame {
                position: relative;
                width: 390px;
                height: 844px;
                background: #000;
                padding: 12px;
                border-radius: 60px;
                box-shadow:
                    0 0 0 4px #1a1a1a,
                    0 30px 60px -12px rgba(0, 0, 0, 0.5),
                    0 18px 36px -18px rgba(0, 0, 0, 0.5),
                    inset 0 0 4px 2px rgba(255, 255, 255, 0.1);
                border: 2px solid #333;
                z-index: 1000;
            }

            /* Dynamic Island */
            .phone-frame::before {
                content: '';
                position: absolute;
                top: 25px;
                left: 50%;
                transform: translateX(-50%);
                width: 100px;
                height: 28px;
                background: #000;
                border-radius: 20px;
                z-index: 1100;
            }

            .phone-content {
                width: 100%;
                height: 100%;
                background: #031411;
                border-radius: 48px;
                overflow-x: hidden;
                overflow-y: auto;
                position: relative;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .phone-content::-webkit-scrollbar {
                display: none;
            }

            /* Hardware Buttons */
            .buttons {
                position: absolute;
                left: -4px;
                top: 120px;
                width: 4px;
                height: 160px;
            }

            .button-silent {
                position: absolute;
                left: 0;
                top: 0;
                width: 3px;
                height: 26px;
                background: #222;
                border-radius: 2px 0 0 2px;
            }

            .button-vol-up {
                position: absolute;
                left: 0;
                top: 46px;
                width: 3px;
                height: 50px;
                background: #222;
                border-radius: 2px 0 0 2px;
            }

            .button-vol-down {
                position: absolute;
                left: 0;
                top: 106px;
                width: 3px;
                height: 50px;
                background: #222;
                border-radius: 2px 0 0 2px;
            }

            .button-power {
                position: absolute;
                right: -4px;
                top: 180px;
                width: 3px;
                height: 80px;
                background: #222;
                border-radius: 0 2px 2px 0;
            }

            /* Reflection Layer */
            .phone-frame::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                border-radius: 60px;
                pointer-events: none;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, transparent 40%, transparent 60%, rgba(255, 255, 255, 0.02) 100%);
                z-index: 1050;
            }

            /* Showcase "Mock-Mobile" Overrides */
            /* This forces mobile-first layouts even when the desktop viewport is active */
            .phone-content .grid-cols-1.md\:grid-cols-3,
            .phone-content .grid-cols-1.md\:grid-cols-2 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            }

            .phone-content .md\:text-6xl {
                font-size: 2.25rem !important;
                /* 36px/4xl fallback */
                line-height: 2.5rem !important;
            }

            .phone-content .text-4xl.md\:text-6xl {
                font-size: 2.25rem !important;
            }

            .phone-content .xl\:px-40,
            .phone-content .md\:px-24,
            .phone-content .lg\:px-24,
            .phone-content .md\:px-12 {
                padding-left: 1.5rem !important;
                /* px-6 */
                padding-right: 1.5rem !important;
            }

            .phone-content aside {
                display: none !important;
                /* Always hide sidebar in phone frame */
            }

            .phone-content #guest-nav {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .phone-content #nav-inner {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .phone-content .hidden.lg\:flex {
                display: none !important;
                /* Hide desktop nav links */
            }

            /* Hero Polish Inside Frame */
            .phone-content #hero-title {
                font-size: 2.2rem !important;
                line-height: 0.85 !important;
                letter-spacing: -0.06em !important;
                transform: none !important;
                opacity: 1 !important;
                margin-bottom: 2.5rem !important;
                text-align: left !important;
            }

            .phone-content #hero-subtitle-primary {
                font-size: 1.3rem !important;
                line-height: 1.2 !important;
                transform: none !important;
                opacity: 0.8 !important;
                max-width: 100% !important;
                margin-bottom: 1.5rem !important;
            }

            .phone-content #hero-subtitle-secondary {
                font-size: 0.75rem !important;
                letter-spacing: 0.2em !important;
                transform: none !important;
                opacity: 0.8 !important;
                margin-bottom: 2.5rem !important;
            }

            .phone-content #hero-actions {
                flex-direction: row !important;
                justify-content: flex-start !important;
                gap: 0.6rem !important;
                transform: none !important;
                opacity: 1 !important;
                width: 100% !important;
            }

            .phone-content #hero-actions button {
                width: auto !important;
                flex: 1 !important;
                padding: 1.1rem 0.6rem !important;
                white-space: nowrap !important;
                font-size: 10px !important;
                border-radius: 14px !important;
            }

            /* Hide some 3D items inside phone for clarity */
            .phone-content .hero-3d-item {
                transform: scale(0.6) !important;
                opacity: 0.5 !important;
            }

            .phone-content #hero-tiles {
                display: none !important;
                /* Hide hero tiles for cleaner look */
            }

            .phone-content #hero-card-container {
                display: none !important;
                /* Hide the dashboard card entirely */
            }

            .phone-content main section:not(#hero) {
                display: none !important;
                /* Hide all sections except hero */
            }

            .phone-content footer {
                display: none !important;
                /* Hide footer for ultra-minimalist app feel */
            }

            .phone-content #hero {
                height: 100% !important;
                min-height: 100% !important;
                padding-top: 5rem !important;
                padding-bottom: 8rem !important;
                display: flex !important;
                flex-direction: column !important;
                justify-content: center !important;
                align-items: flex-start !important;
            }

            .phone-content #guest-nav {
                height: 5rem !important;
            }

            .phone-content #nav-inner #nav-logo-text {
                font-size: 1.125rem !important;
            }

            /* Fix grid layout issues in phone content */
            .phone-content .grid {
                display: block !important;
            }
        }
    </style>
</head>

<body class="bg-[#031411] font-inter text-white overflow-x-hidden selection:bg-emerald-500 selection:text-white">
    <!-- Desktop Showcase Frame -->
    <div class="phone-frame lg:block hidden">
        <div class="buttons">
            <div class="button-silent"></div>
            <div class="button-vol-up"></div>
            <div class="button-vol-down"></div>
        </div>
        <div class="button-power"></div>
        <div class="phone-content">
            <div class="flex min-h-screen">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- Professional Sidebar for Native Desktop App -->
                    <aside
                        class="hidden md:flex flex-col w-80 h-screen sticky top-0 bg-white border-r border-gray-100 z-50 transition-all duration-500 overflow-y-auto custom-scrollbar">
                        <div class="p-10 border-b border-gray-50 mb-8">
                            <a href="/dashboard" class="flex items-center gap-4 group">
                                <div
                                    class="w-12 h-12 bg-black rounded-2xl flex items-center justify-center text-white font-black text-xl group-hover:bg-accent transition-all transform group-hover:rotate-6">
                                    A</div>
                                <span class="text-2xl font-black tracking-tighter text-gray-900 uppercase">AgroCare <span
                                        class="text-accent italic font-light lowercase">pro</span></span>
                            </a>
                        </div>

                        <nav class="flex-1 px-6 space-y-3">
                            <a href="/dashboard"
                                class="flex items-center gap-5 px-6 py-5 rounded-[24px] text-lg font-bold transition-all <?= $_SERVER['REQUEST_URI'] === '/dashboard' ? 'bg-gray-900 text-white shadow-xl shadow-gray-200' : 'text-gray-400 hover:bg-gray-50 hover:text-gray-900' ?>">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                Консоль
                            </a>
                            <a href="/plots"
                                class="flex items-center gap-5 px-6 py-5 rounded-[24px] text-lg font-bold transition-all <?= str_starts_with($_SERVER['REQUEST_URI'], '/plots') ? 'bg-gray-900 text-white shadow-xl shadow-gray-200' : 'text-gray-400 hover:bg-gray-50 hover:text-gray-900' ?>">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                    </path>
                                </svg>
                                Активы
                            </a>
                            <a href="/profile"
                                class="flex items-center gap-5 px-6 py-5 rounded-[24px] text-lg font-bold transition-all <?= $_SERVER['REQUEST_URI'] === '/profile' ? 'bg-gray-900 text-white shadow-xl shadow-gray-200' : 'text-gray-400 hover:bg-gray-50 hover:text-gray-900' ?>">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Профиль
                            </a>
                        </nav>

                        <div class="p-8 border-t border-gray-50">
                            <form action="/logout" method="POST">
                                <button type="submit"
                                    class="w-full group flex items-center justify-between p-4 rounded-2xl hover:bg-red-50 transition-all text-gray-400 hover:text-red-500 font-bold">
                                    <span>Завершить сессию</span>
                                    <svg class="w-5 h-5 opacity-40 group-hover:opacity-100" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4-4H7m6 4v1h8V7h-8v1zM9 21h6a2 2 0 002-2V5a2 2 0 00-2-2H9a2 2 0 00-2 2v14a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </aside>
                <?php else: ?>
                    <!-- Premium Fintech "Apple-Class" Navbar (Transparent Overlay) -->
                    <nav id="guest-nav"
                        class="fixed top-0 w-full z-[100] transition-all duration-700 h-24 flex items-center bg-transparent">
                        <div class="w-full px-12 md:px-24 xl:px-40 flex items-center justify-between transition-all duration-500"
                            id="nav-inner">
                            <!-- Brand / Logo -->
                            <a href="/"
                                class="flex items-center gap-4 group text-decoration-none transition-transform active:scale-95">
                                <div class="relative">
                                    <div
                                        class="w-10 h-10 bg-black rounded-xl flex items-center justify-center text-white font-black text-lg shadow-2xl group-hover:bg-accent transition-all duration-500 overflow-hidden">
                                        <span class="relative z-10">A</span>
                                        <div
                                            class="absolute inset-0 bg-gradient-to-tr from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                    </div>
                                    <div
                                        class="absolute -inset-1 bg-accent/20 blur-xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <span
                                        class="text-xl font-black tracking-[-0.04em] uppercase text-white leading-none group-hover:text-emerald-400 transition-colors"
                                        id="nav-logo-text">AgroCare</span>
                                    <span
                                        class="text-[8px] font-black tracking-[0.2em] uppercase text-emerald-500/80 mt-1 pl-0.5">Элит</span>
                                </div>
                            </a>

                            <!-- Navigation Links -->
                            <div class="hidden lg:flex items-center gap-14">
                                <a href="/#features"
                                    class="nav-link-premium relative group text-emerald-100/60 font-bold text-sm uppercase tracking-widest text-decoration-none">
                                    <span class="relative z-10 transition-colors group-hover:text-white">Функции</span>
                                    <span
                                        class="absolute -bottom-1 left-0 w-0 h-[2px] bg-emerald-500 transition-all duration-500 group-hover:w-full"></span>
                                </a>
                                <a href="/#map"
                                    class="nav-link-premium relative group text-emerald-100/60 font-bold text-sm uppercase tracking-widest text-decoration-none">
                                    <span class="relative z-10 transition-colors group-hover:text-white">Карта</span>
                                    <span
                                        class="absolute -bottom-1 left-0 w-0 h-[2px] bg-emerald-500 transition-all duration-500 group-hover:w-full"></span>
                                </a>
                                <a href="/#news"
                                    class="nav-link-premium relative group text-emerald-100/60 font-bold text-sm uppercase tracking-widest text-decoration-none">
                                    <span class="relative z-10 transition-colors group-hover:text-white">События</span>
                                    <span
                                        class="absolute -bottom-1 left-0 w-0 h-[2px] bg-emerald-500 transition-all duration-500 group-hover:w-full"></span>
                                </a>
                            </div>

                            <!-- Action Button -->
                            <div class="flex items-center">
                                <a href="/login"
                                    class="relative group overflow-hidden px-8 py-3.5 bg-emerald-600 text-white rounded-xl font-black text-xs uppercase tracking-widest shadow-xl active:scale-95 transition-all text-decoration-none hover:bg-emerald-500">
                                    <span class="relative z-10">Система</span>
                                </a>
                            </div>
                        </div>
                    </nav>

                    <script>
                        // Handle navbar background on scroll
                        window.addEventListener('scroll', () => {
                            const nav = document.getElementById('guest-nav');
                            const navInner = document.getElementById('nav-inner');
                            const logoText = document.getElementById('nav-logo-text');

                            if (window.scrollY > 50) {
                                nav.classList.add('bg-emerald-950/80', 'backdrop-blur-2xl', 'border-b', 'border-emerald-500/20', 'h-20');
                                nav.classList.remove('h-24');
                            } else {
                                nav.classList.remove('bg-emerald-950/80', 'backdrop-blur-2xl', 'border-b', 'border-emerald-500/20', 'h-20');
                                nav.classList.add('h-24');
                            }
                        });
                    </script>
                <?php endif; ?>

                <div class="flex-1 flex flex-col min-w-0 bg-[#031411]">
                    <!-- Fluid Main Content Area for Ultra-Wide -->
                    <main class="w-full transition-all duration-700">
                        <?= $content ?>
                    </main>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <footer class="mt-auto py-16 px-12 md:px-24 border-t border-gray-100 bg-white/50">
                            <div
                                class="flex flex-col md:flex-row items-center justify-between gap-8 text-gray-400 text-sm font-medium">
                                <div class="flex items-center gap-3">
                                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                                    <span>Корпоративная система v4.0.2 • Активна</span>
                                </div>
                                <div>&copy; <?= date('Y') ?> AgroCare Professional. Kyrgyzstan.</div>
                            </div>
                        </footer>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Mobile Bottom Tab Bar (App-Style) -->
        <div class="phone-only-nav absolute bottom-[22px] left-1/2 -translate-x-1/2 z-[1100] w-[90%] max-w-[400px]">
            <div
                class="flex items-center justify-around p-4 bg-emerald-950/92 backdrop-blur-3xl border border-emerald-500/30 rounded-[32px] shadow-[0_32px_128px_-16px_rgba(0,0,0,1)]">
                <!-- Tab: Home -->
                <div class="flex flex-col items-center gap-1 group cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-2xl flex items-center justify-center bg-emerald-500/10 text-emerald-500 transition-all duration-300 group-hover:bg-emerald-500 group-hover:text-black">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Tab: Analytics -->
                <div class="flex flex-col items-center gap-1 group cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-2xl flex items-center justify-center text-white/40 border border-white/5 transition-all duration-300 group-hover:bg-white/10 group-hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Tab: AI Center -->
                <div class="flex flex-col items-center gap-1 group cursor-pointer -translate-y-4">
                    <div
                        class="w-14 h-14 rounded-full flex items-center justify-center bg-emerald-500 text-black shadow-[0_0_40px_rgba(16,185,129,0.5)] transition-transform duration-500 group-hover:rotate-180">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Tab: Community -->
                <div class="flex flex-col items-center gap-1 group cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-2xl flex items-center justify-center text-white/40 border border-white/5 transition-all duration-300 group-hover:bg-white/10 group-hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Tab: Profile -->
                <div class="flex flex-col items-center gap-1 group cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-2xl flex items-center justify-center text-white/40 border border-white/5 transition-all duration-300 group-hover:bg-white/10 group-hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Indicator (iPhone style) -->
        <div class="absolute bottom-[8px] left-1/2 -translate-x-1/2 w-32 h-[4px] bg-white/20 rounded-full z-[1200]">
        </div>
    </div>

    <!-- Global AI Sync Transition Screen -->
    <div id="ai-sync-overlay"
        class="fixed inset-0 z-[100] bg-[#031411] hidden flex-col items-center justify-center text-center opacity-0 transition-opacity duration-500">
        <div class="space-y-12">
            <!-- Professional Minimalist Loader -->
            <div class="relative w-24 h-24 mx-auto">
                <div class="absolute inset-0 border-4 border-emerald-500/10 rounded-full"></div>
                <div
                    class="absolute inset-0 border-4 border-emerald-500 rounded-full animate-spin border-t-transparent">
                </div>
            </div>

            <div class="space-y-4">
                <h3 id="sync-text" class="text-white text-3xl font-bold tracking-tight">Синхронизация с AI...</h3>
                <p id="sync-subtext" class="text-emerald-500/60 text-sm font-medium uppercase tracking-[0.3em]">
                    Обработка
                    данных вашего региона</p>
            </div>
        </div>
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        window.showGlobalSync = function (message) {
            const overlay = document.getElementById('ai-sync-overlay');
            const text = document.getElementById('sync-text');
            const subtext = document.getElementById('sync-subtext');

            text.innerText = message || 'Синхронизация с AI...';

            const subtexts = [
                'Проверка данных почвы...',
                'Анализ климатических карт...',
                'Синхронизация с ветеринарной базой...',
                'Оптимизация нейросети под ваш регион...'
            ];
            subtext.innerText = subtexts[Math.floor(Math.random() * subtexts.length)];

            overlay.classList.remove('hidden');
            gsap.to(overlay, { opacity: 1, duration: 0.5 });
        };

        // Page transition animation
        gsap.from("main", { opacity: 0, y: 20, duration: 0.8, ease: "power2.out" });

        // Hide sidebar/header on cinematic home hero
        window.addEventListener('scroll', () => {
            const sidebar = document.querySelector('aside');
            const nav = document.querySelector('nav');
            const hero = document.getElementById('hero');

            if (hero) {
                const triggerHeight = window.innerHeight * 0.8;
                if (window.scrollY < triggerHeight) {
                    if (sidebar) sidebar.classList.add('md:opacity-0', 'pointer-events-none');
                    if (nav) nav.classList.add('opacity-0', 'pointer-events-none');
                } else {
                    if (sidebar) sidebar.classList.remove('md:opacity-0', 'pointer-events-none');
                    if (nav) nav.classList.remove('opacity-0', 'pointer-events-none');
                }
            }
        });
    </script>

    <script>
        // Move all content into phone-content on desktop to create the "Smartphone App" experience
        window.addEventListener('load', () => {
            if (window.innerWidth >= 1024) {
                const frameContent = document.querySelector('.phone-content');
                if (frameContent) {
                    // Get all top-level body children except the frame and necessary globals
                    const elements = Array.from(document.body.children).filter(el =>
                        !el.classList.contains('phone-frame') &&
                        el.tagName !== 'SCRIPT' &&
                        el.id !== 'ai-sync-overlay'
                    );
                    elements.forEach(el => frameContent.appendChild(el));
                }
            }
        });
    </script>
</body>

</html>