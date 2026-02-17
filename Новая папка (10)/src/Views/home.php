<!-- Cinematic Start - Fullscreen Immersive -->
<section id="hero" class="relative h-screen w-full flex items-center overflow-hidden bg-[#031411]">
    <!-- Background Cinematic Ambient -->
    <div class="absolute inset-0 z-0 scale-[1.05]">
        <!-- Minimal Mesh Base -->
        <div class="absolute inset-0 bg-[#031411] z-0"></div>
        <!-- Sophisticated 3D Gradient Glows -->
        <div
            class="absolute top-[-10%] left-[-10%] w-[50%] h-[50%] bg-emerald-500/10 blur-[120px] rounded-full animate-pulse">
        </div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-emerald-900/20 blur-[150px] rounded-full">
        </div>

        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(16,185,129,0.08)_0%,transparent_60%)] z-10">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#031411]/80 via-transparent to-[#031411]/80 z-20"></div>

        <!-- Background Image with Higher Visibility -->
        <div
            class="w-full h-full opacity-50 grayscale-[0.05] brightness-[0.85] contrast-[1] bg-[url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=2026&auto=format&fit=crop')] bg-cover bg-center animate-slow-zoom">
        </div>

        <!-- Light Vignette -->
        <div class="absolute inset-0 shadow-[inset_0_0_100px_rgba(0,0,0,0.6)] z-30"></div>
    </div>

    <!-- 3D Floating Scene Layer -->
    <div class="absolute inset-0 z-10 pointer-events-none overflow-hidden" id="hero-3d-scene">
        <!-- Glass Element 1: Top Right Float -->
        <div class="absolute top-[15%] right-[5%] w-72 h-96 bg-white/[0.03] backdrop-blur-3xl border border-white/10 rounded-[60px] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] -rotate-12 translate-x-32 hero-3d-item hidden xl:block"
            data-speed="0.05"></div>
        <!-- Glass Element 2: Bottom Left Orb -->
        <div class="absolute bottom-[10%] left-[2%] w-48 h-48 bg-emerald-500/5 backdrop-blur-2xl border border-emerald-500/10 rounded-full shadow-[0_30px_60px_-10px_rgba(0,0,0,0.3)] hero-3d-item hidden lg:block"
            data-speed="0.08"></div>
        <!-- Glass Element 3: Accent Line -->
        <div class="absolute top-[40%] left-[45%] w-[1px] h-64 bg-gradient-to-b from-transparent via-emerald-500/20 to-transparent rotate-45 hero-3d-item"
            data-speed="0.12"></div>
    </div>

    <div class="relative z-20 w-full px-8 md:px-24 xl:px-40">
        <div class="grid lg:grid-cols-[1.2fr_0.8fr] gap-12 xl:gap-24 items-end min-h-[85vh]">

            <!-- Left Column: Content (Product Logic) -->
            <div class="max-w-[850px] space-y-16 pb-20">
                <div class="space-y-10">
                    <div
                        class="inline-flex items-center gap-4 px-5 py-2 bg-emerald-500/5 backdrop-blur-xl rounded-full border border-emerald-500/10 shadow-2xl">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-40"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span
                            class="text-white/40 text-[10px] font-black uppercase tracking-[0.4em] flex items-center gap-2">
                            AI AGRO PLATFORM
                            <span class="w-[1px] h-3 bg-white/10"></span>
                            <span class="text-emerald-500/80">PREMIUM EDITION v4</span>
                        </span>
                    </div>

                    <div class="space-y-8">
                        <h1 class="text-white text-[clamp(3.5rem,8vw,6.5rem)] font-extrabold tracking-[-0.06em] leading-[0.8] select-none font-outfit"
                            id="hero-title">
                            Будущее агробизнеса —<br />
                            <span class="text-emerald-500 font-serif italic font-light lowercase">под управлением</span>
                            <span class="text-white/10">/</span> ИИ
                        </h1>
                        <div class="space-y-6">
                            <p class="text-emerald-100/70 font-medium text-2xl md:text-3xl tracking-tight max-w-[650px] leading-tight"
                                id="hero-subtitle-primary">
                                Глобальный мониторинг, точная диагностика и климатический прогноз в одном интерфейсе.
                            </p>
                            <p class="text-emerald-500/60 text-[11px] font-black uppercase tracking-[0.8em] flex items-center gap-5"
                                id="hero-subtitle-secondary">
                                СТРАТЕГИЯ <span class="w-1.5 h-1.5 rounded-full bg-emerald-500/40"></span> КОНТРОЛЬ
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500/40"></span> РЕЗУЛЬТАТ
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center gap-6 pt-10" id="hero-actions">
                    <button
                        class="magnetic-btn relative group px-12 py-6 bg-emerald-500 text-black text-[12px] font-black uppercase tracking-[0.3em] rounded-2xl transition-all duration-700 overflow-hidden hover:scale-[1.05] hover:shadow-[0_40px_80px_-15px_rgba(16,185,129,0.6)] active:scale-95">
                        <span class="relative z-10">Запустить экосистему</span>
                        <div
                            class="absolute inset-0 bg-white/30 translate-y-full group-hover:translate-y-0 transition-transform duration-700 ease-out">
                        </div>
                        <!-- 3D Interior Glow -->
                        <div class="absolute inset-0 bg-emerald-400 opacity-20 blur-2xl animate-pulse"></div>
                    </button>
                    <button
                        class="magnetic-btn px-12 py-6 bg-white/[0.02] border border-white/5 text-white/60 text-[12px] font-black uppercase tracking-[0.3em] rounded-2xl hover:bg-white/[0.08] hover:text-white transition-all duration-700 backdrop-blur-3xl hover:border-white/20 active:scale-95">
                        Наши технологии
                    </button>
                </div>
            </div>

            <!-- Right Column: Hidden in simple mode -->
            <div class="hidden lg:block"></div>
        </div>
    </div>
</section>

<style>
    @keyframes slow-zoom {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.15);
        }

        100% {
            transform: scale(1);
        }
    }

    .animate-slow-zoom {
        animation: slow-zoom 25s infinite ease-in-out;
    }

    #hero-title,
    #hero-subtitle-primary,
    #hero-subtitle-secondary,
    #hero-actions {
        opacity: 0;
        transform: translateY(40px) skewY(2deg);
    }
</style>

<script>
    gsap.registerPlugin(ScrollTrigger);

    window.addEventListener('load', () => {
        // Entry Animation Timeline
        const tl = gsap.timeline();
        tl.to('#hero-title', { opacity: 1, y: 0, skewY: 0, duration: 2, ease: 'power4.out' })
            .to('#hero-subtitle-primary', { opacity: 1, y: 0, skewY: 0, duration: 1.5, ease: 'power4.out' }, '-=1.5')
            .to('#hero-subtitle-secondary', { opacity: 1, y: 0, skewY: 0, duration: 1.5, ease: 'power4.out' }, '-=1.2')
            .to('#hero-actions', { opacity: 1, y: 0, skewY: 0, duration: 1.5, ease: 'power4.out' }, '-=1.2')
            .from('.hero-3d-item', { opacity: 0, scale: 0.8, duration: 2, stagger: 0.2, ease: 'power3.out' }, '-=2');

        // Mouse Parallax Effect for 3D Elements
        const scene = document.getElementById('hero');
        scene.addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e;
            const xPos = (clientX / window.innerWidth - 0.5);
            const yPos = (clientY / window.innerHeight - 0.5);

            gsap.to('.hero-3d-item', {
                x: (i, el) => xPos * 100 * parseFloat(el.getAttribute('data-speed')),
                y: (i, el) => yPos * 100 * parseFloat(el.getAttribute('data-speed')),
                rotationX: yPos * 10,
                rotationY: xPos * 10,
                duration: 1.2,
                ease: 'power2.out'
            });

            // Subtle Tilt for buttons
            gsap.to('.magnetic-btn', {
                x: xPos * 20,
                y: yPos * 20,
                rotationX: -yPos * 5,
                rotationY: xPos * 5,
                duration: 0.8,
                ease: 'power2.out'
            });
        });

        scene.addEventListener('mouseleave', () => {
            gsap.to('.hero-3d-item', { x: 0, y: 0, rotationX: 0, rotationY: 0, duration: 2, ease: 'elastic.out(1, 0.3)' });
            gsap.to('.magnetic-btn', { x: 0, y: 0, rotationX: 0, rotationY: 0, duration: 2, ease: 'elastic.out(1, 0.3)' });
        });
    });
</script>