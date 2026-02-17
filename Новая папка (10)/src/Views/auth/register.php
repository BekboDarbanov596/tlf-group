<div class="flex items-center justify-center min-h-[85vh] relative px-4 py-12 md:py-20">
    <!-- Background elements -->
    <div class="absolute top-[10%] left-[5%] w-96 h-96 bg-[#1A2F23]/5 rounded-full blur-3xl z-[-1]"></div>
    <div
        class="absolute bottom-[10%] right-[5%] w-[500px] h-[500px] bg-[#EAE7DC] rounded-full blur-3xl opacity-50 z-[-1]">
    </div>

    <div class="glass p-8 md:p-12 w-full max-w-2xl shadow-2xl relative overflow-hidden">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold font-display text-[#0A1F18] mb-3">Присоединяйтесь</h2>
            <p class="text-[#3A4A40] font-light">Начните свой путь в точном земледелии сегодня</p>
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

        <form action="/register" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Full Name -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">ФИО</label>
                    <input type="text" name="full_name" required placeholder="Иванов Иван Иванович"
                        class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-3.5 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
                </div>

                <!-- Email -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Email</label>
                    <input type="email" name="email" required placeholder="ivan@agro.ru"
                        class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-3.5 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
                </div>

                <!-- Region -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Регион</label>
                    <input type="text" name="region" required placeholder="Напр. Алматы"
                        class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-3.5 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
                </div>

                <!-- Activity -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Деятельность</label>
                    <div class="relative">
                        <select name="activity_type"
                            class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-3.5 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] appearance-none cursor-pointer shadow-inner">
                            <option value="farmer">Фермер</option>
                            <option value="vet">Ветеринар</option>
                            <option value="agronomist">Агроном</option>
                            <option value="other">Другое</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-[#1A2F23]/40">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Пароль</label>
                    <input type="password" name="password" required placeholder="••••••••"
                        class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-3.5 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-[#1A2F23]/60 ml-1">Подтверждение</label>
                    <input type="password" name="password_confirm" required placeholder="••••••••"
                        class="w-full bg-[#EAE7DC]/30 border border-[#1A2F23]/10 rounded-2xl px-5 py-3.5 focus:bg-white focus:border-[#10b981] focus:outline-none transition-all duration-300 text-[#0A1F18] placeholder-[#1A2F23]/30 shadow-inner">
                </div>
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="relative w-full py-4 rounded-2xl font-bold text-lg text-white bg-[#1A2F23] overflow-hidden group shadow-lg hover:shadow-xl hover:shadow-[#1A2F23]/20 transition-all duration-300 hover:-translate-y-1">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        Создать аккаунт
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                            </path>
                        </svg>
                    </span>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#2C4035] to-[#1A2F23] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute top-0 -left-[100%] w-[50%] h-full bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12 group-hover:animate-shine">
                    </div>
                </button>
            </div>
        </form>

        <div class="mt-10 pt-8 border-t border-[#1A2F23]/5 text-center">
            <p class="text-[#3A4A40] text-sm">
                Уже есть аккаунт? <a href="/login"
                    class="text-[#10b981] font-bold hover:underline transition-all">Войти</a>
            </p>
        </div>
    </div>
</div>