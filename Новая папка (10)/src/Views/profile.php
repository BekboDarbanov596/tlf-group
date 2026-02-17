<div class="mb-24 border-b-2 border-gray-900/5 pb-16">
    <div class="flex items-center gap-8">
        <div class="w-20 h-20 bg-black rounded-[32px] flex items-center justify-center text-white shadow-2xl">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
        </div>
        <div>
            <h2 class="text-6xl font-black tracking-tighter text-gray-900 leading-none">Профиль пользователя</h2>
            <p class="text-2xl text-gray-400 font-light mt-4 italic">Центр управления цифровой идентичностью AgroCare
                Pro</p>
        </div>
    </div>
</div>

<form action="/profile" method="POST" class="space-y-16">
    <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-16">
        <!-- Primary Settings Module -->
        <div class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm relative overflow-hidden group">
            <h3 class="text-3xl font-black text-gray-900 mb-12 flex items-center gap-4">
                <span class="w-2 h-8 bg-accent rounded-full"></span>
                Основные данные
            </h3>

            <div class="space-y-10">
                <div class="space-y-4">
                    <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Полное имя
                        (ФИО)</label>
                    <input type="text" name="full_name" value="<?= \App\Core\View::escape($user['full_name']) ?>"
                        required
                        class="w-full bg-gray-50 border-2 border-transparent rounded-[32px] px-8 py-6 text-xl font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 shadow-inner">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-4">
                        <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Регион
                            дислокации</label>
                        <input type="text" name="region" value="<?= \App\Core\View::escape($user['region']) ?>" required
                            class="w-full bg-gray-50 border-2 border-transparent rounded-[24px] px-8 py-5 text-lg font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 shadow-inner">
                    </div>

                    <div class="space-y-4">
                        <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Род
                            деятельности</label>
                        <div class="relative">
                            <select name="activity_type"
                                class="w-full bg-gray-50 border-2 border-transparent rounded-[24px] px-8 py-5 text-lg font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 appearance-none cursor-pointer shadow-inner">
                                <option value="farmer" <?= $user['activity_type'] == 'farmer' ? 'selected' : '' ?>>Фермер
                                </option>
                                <option value="vet" <?= $user['activity_type'] == 'vet' ? 'selected' : '' ?>>Ветеринар
                                </option>
                                <option value="agronomist" <?= $user['activity_type'] == 'agronomist' ? 'selected' : '' ?>>
                                    Агроном</option>
                                <option value="other" <?= $user['activity_type'] == 'other' ? 'selected' : '' ?>>Другое
                                </option>
                            </select>
                            <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-accent/5 rounded-full blur-3xl"></div>
        </div>

        <!-- Contact & Security Module -->
        <div class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm relative overflow-hidden group">
            <h3 class="text-3xl font-black text-gray-900 mb-12 flex items-center gap-4">
                <span class="w-2 h-8 bg-black rounded-full"></span>
                Связь и Конфиденциальность
            </h3>

            <div class="space-y-10">
                <div class="space-y-4">
                    <label class="block text-[12px] font-black text-gray-400 uppercase tracking-widest ml-1">Контактный
                        номер телефона</label>
                    <input type="text" name="phone" value="<?= \App\Core\View::escape($user['phone']) ?>"
                        placeholder="+996 (___) ___-__-__"
                        class="w-full bg-gray-50 border-2 border-transparent rounded-[32px] px-8 py-6 text-xl font-bold focus:bg-white focus:border-accent focus:outline-none transition-all duration-300 text-gray-900 shadow-inner">
                </div>

                <div
                    class="p-8 bg-gray-50 rounded-[40px] border-2 border-transparent hover:border-accent/10 transition-all duration-500 cursor-pointer group">
                    <label class="flex items-start gap-8 cursor-pointer">
                        <div class="relative flex items-center mt-1">
                            <input type="checkbox" name="show_phone" value="1" <?= $user['show_phone'] ? 'checked' : '' ?>
                                class="peer w-8 h-8 rounded-xl bg-white border-gray-200 text-accent focus:ring-accent focus:ring-offset-0 transition-all cursor-pointer">
                        </div>
                        <div class="space-y-2">
                            <span class="block text-xl font-black text-gray-900 uppercase tracking-tight">Публичный
                                доступ к контакту</span>
                            <p class="text-lg text-gray-400 font-light leading-relaxed">
                                Активируйте, чтобы другие пользователи и ветеринары в вашем регионе могли связаться с
                                вами для оперативной работы.
                            </p>
                        </div>
                    </label>
                </div>
            </div>

            <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-black/5 rounded-full blur-3xl"></div>
        </div>
    </div>

    <div class="flex justify-end">
        <button type="submit"
            class="group relative px-20 py-8 rounded-[32px] font-black text-2xl text-white bg-gray-900 overflow-hidden shadow-2xl transition-all duration-500 hover:-translate-y-2 hover:bg-accent ring-offset-4 active:scale-95">
            <span class="relative z-10 flex items-center gap-6">
                Применить конфигурацию
                <svg class="w-8 h-8 group-hover:translate-x-3 transition-transform duration-500" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </span>
            <div
                class="absolute top-0 -left-[100%] w-[50%] h-full bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12 group-hover:animate-shine">
            </div>
        </button>
    </div>
</form>