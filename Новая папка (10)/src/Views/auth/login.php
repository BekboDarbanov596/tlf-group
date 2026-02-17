<div class="flex items-center justify-center min-h-[75vh] relative px-4">
    <!-- Background elements for depth -->
    <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#EAE7DC] rounded-full blur-3xl opacity-50 z-[-1]">
    </div>
    <div class="absolute top-[20%] right-[10%] w-64 h-64 bg-[#C5B358]/10 rounded-full blur-3xl z-[-1]"></div>

    <div class="glass p-10 md:p-12 w-full max-w-md shadow-2xl relative overflow-hidden group">
        <!-- Inner glow -->
        <div
            class="absolute top-0 right-0 w-32 h-32 bg-emerald-500/5 rounded-full blur-2xl -translate-y-1/2 translate-x-1/2">
        </div>

        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold font-display text-[#0A1F18] mb-3">С возвращением</h2>
            <p class="text-[#3A4A40] font-light">Войдите в свою цифровую ферму</p>
        </div>

        <?php if (isset($error)): ?>
            <div
                class="bg-red-500/5 border border-red-500/20 text-red-600 p-4 rounded-2xl mb-8 text-sm flex items-center gap-3 animate-shake">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

            <div class="space-y-2">
                <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Email</label>
                <div class="relative group">
                    <input type="email" name="email" required placeholder="example@mail.com"
                        class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-4 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
                </div>
            </div>

            <div class="space-y-2">
                <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Пароль</label>
                <input type="password" name="password" required placeholder="••••••••"
                    class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-4 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
            </div>

            <button type="submit"
                class="relative w-full py-4 rounded-2xl font-bold text-lg text-white bg-[#1A2F23] overflow-hidden group shadow-lg hover:shadow-xl hover:shadow-[#1A2F23]/20 transition-all duration-300 hover:-translate-y-1">
                <span class="relative z-10 flex items-center justify-center gap-2">
                    Войти
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
                <div
                    class="absolute inset-0 bg-gradient-to-r from-[#2C4035] to-[#1A2F23] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <!-- Shimmer effect -->
                <div
                    class="absolute top-0 -left-[100%] w-[50%] h-full bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12 group-hover:animate-shine">
                </div>
            </button>
        </form>

        <div class="mt-10 pt-8 border-t border-[#1A2F23]/5 text-center">
            <p class="text-[#3A4A40] text-sm">
                Нет аккаунта? <a href="/register"
                    class="text-[#10b981] font-bold hover:underline transition-all">Создать бесплатно</a>
            </p>
        </div>
    </div>
</div>