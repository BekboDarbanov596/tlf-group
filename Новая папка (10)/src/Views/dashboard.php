<!-- Intelligence Overview / Report Header - Balanced Pro -->
<div class="p-12 md:p-24 border-b border-gray-100 mb-20 bg-white">
    <div class="flex flex-col xl:flex-row xl:items-end justify-between gap-12">
        <div class="flex-1">
            <div
                class="inline-flex items-center gap-3 px-3 py-1 bg-black text-white text-[10px] font-black uppercase tracking-[0.4em] mb-10 rounded-md">
                <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                Strategic Intel v4.1
            </div>
            <h1 class="text-6xl md:text-7xl font-black tracking-tighter text-gray-900 leading-[0.9]">
                План развития<br />
                <span class="text-accent italic font-light lowercase">хозяйства</span> 2026
            </h1>
            <p class="text-2xl text-gray-400 font-light mt-10 max-w-3xl leading-relaxed">
                Комплексный анализ активов на основе спутниковой интерферометрии и прогноза климатических паттернов
                Чуйского региона.
            </p>
        </div>
        <div class="xl:text-right space-y-4">
            <div class="text-[11px] text-gray-400 uppercase tracking-widest font-black">Generated for</div>
            <div class="text-3xl font-black text-gray-900 italic underline decoration-accent/30 decoration-4">
                <?= \App\Core\View::escape($user_name) ?>
            </div>
            <div class="text-sm text-gray-400 font-bold uppercase tracking-tighter"><?= date('F d, Y') ?> • AG-4451-X
            </div>
        </div>
    </div>
</div>

<div class="px-12 md:px-24 pb-32">

    <!-- High-Fidelity Strategy Modules - Massive Gaps -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-20 mb-40">
        <!-- Module 1: Production -->
        <div
            class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm hover:shadow-2xl transition-all duration-1000 group relative overflow-hidden">
            <div class="relative z-10">
                <div
                    class="w-24 h-24 bg-gray-50 rounded-[32px] flex items-center justify-center mb-16 group-hover:bg-black group-hover:text-white transition-all transform group-hover:rotate-12">
                    <span class="text-4xl font-black">01</span>
                </div>
                <h3 class="text-5xl font-black text-gray-900 mb-8 leading-tight">Инновации<br />посева</h3>
                <p class="text-2xl text-gray-500 font-light leading-relaxed mb-16">Внедрение адаптивных зерновых
                    культур.
                    Прогноз прироста урожайности: 22% за цикл.</p>
                <a href="/analysis/plan"
                    class="inline-flex items-center gap-4 text-2xl font-black text-accent hover:gap-8 transition-all">
                    Открыть стратегию <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>
            <div
                class="absolute -top-10 -right-10 w-96 h-96 bg-accent/5 rounded-full blur-[100px] group-hover:bg-accent/10 transition-all">
            </div>
        </div>

        <!-- Module 2: Security -->
        <div
            class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm hover:shadow-2xl transition-all duration-1000 group relative overflow-hidden">
            <div class="relative z-10">
                <div
                    class="w-24 h-24 bg-gray-50 rounded-[32px] flex items-center justify-center mb-16 group-hover:bg-black group-hover:text-white transition-all transform group-hover:rotate-12">
                    <span class="text-4xl font-black">02</span>
                </div>
                <h3 class="text-5xl font-black text-gray-900 mb-8 leading-tight">Био-<br />безопасность</h3>
                <p class="text-2xl text-gray-500 font-light leading-relaxed mb-16">Мониторинг патогенов в реальном
                    времени.
                    Обнаружено 2 критических очага на севере.</p>
                <a href="/analysis/plant"
                    class="inline-flex items-center gap-4 text-2xl font-black text-accent hover:gap-8 transition-all">
                    Сканировать среду <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>
            <div
                class="absolute -top-10 -right-10 w-96 h-96 bg-red-500/5 rounded-full blur-[100px] group-hover:bg-red-500/10 transition-all">
            </div>
        </div>

        <!-- Module 3: Assets -->
        <div
            class="p-16 bg-white border border-gray-100 rounded-[64px] shadow-sm hover:shadow-2xl transition-all duration-1000 group relative overflow-hidden">
            <div class="relative z-10">
                <div
                    class="w-24 h-24 bg-gray-50 rounded-[32px] flex items-center justify-center mb-16 group-hover:bg-black group-hover:text-white transition-all transform group-hover:rotate-12">
                    <span class="text-4xl font-black">03</span>
                </div>
                <h3 class="text-5xl font-black text-gray-900 mb-8 leading-tight">Оптимизация<br />стада</h3>
                <p class="text-2xl text-gray-500 font-light leading-relaxed mb-16">Интеллектуальный трекинг здоровья и
                    перемещений. Средний пульс группы: в норме.</p>
                <a href="/analysis/animal"
                    class="inline-flex items-center gap-4 text-2xl font-black text-accent hover:gap-8 transition-all">
                    Доклад вет-ИИ <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>
            <div
                class="absolute -top-10 -right-10 w-96 h-96 bg-emerald-500/5 rounded-full blur-[100px] group-hover:bg-emerald-500/10 transition-all">
            </div>
        </div>
    </div>

    <!-- Strategic Asset Inventory - Ultra-Wide Fluid -->
    <div class="mb-40">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-24 gap-12">
            <div class="border-l-[12px] border-black pl-12">
                <h2 class="text-6xl font-black text-gray-900 tracking-[-0.03em] leading-none uppercase">Реестр активов
                </h2>
                <p class="text-2xl text-gray-400 font-light mt-4">Инвентаризация и управление земельным фондом в
                    реальном
                    времени.</p>
            </div>
            <a href="/plots/create"
                class="px-16 py-8 bg-black text-white text-xl font-black rounded-[32px] hover:bg-accent hover:scale-105 transition-all shadow-2xl">
                Внести актив в базу
            </a>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-16">
            <?php if (empty($plots)): ?>
                <div
                    class="col-span-full py-40 bg-gray-50 rounded-[80px] border-2 border-dashed border-gray-200 flex flex-col items-center justify-center text-gray-300">
                    <p class="text-3xl font-light italic">Реестр пуст. Ожидание ввода данных агро-активов.</p>
                </div>
            <?php else: ?>
                <?php foreach ($plots as $plot): ?>
                    <div
                        class="p-16 bg-white border border-gray-100 rounded-[80px] hover:border-black transition-all duration-700 group relative overflow-hidden">
                        <div class="flex items-start justify-between relative z-10">
                            <div>
                                <div class="text-[12px] text-gray-400 uppercase tracking-[0.3em] font-black mb-6">REGISTRY ID •
                                    <?= sprintf('%06d', $plot['id']) ?>
                                </div>
                                <h4
                                    class="text-5xl font-black text-gray-900 group-hover:text-accent transition-colors mb-10 leading-tight">
                                    <?= \App\Core\View::escape($plot['title']) ?>
                                </h4>
                                <div class="flex flex-wrap gap-6">
                                    <span
                                        class="px-6 py-2 bg-gray-900 text-white text-[13px] font-black uppercase tracking-widest rounded-full">
                                        <?= $plot['area'] ?> гектар
                                    </span>
                                    <span
                                        class="px-6 py-2 bg-gray-100 text-gray-500 text-[13px] font-black uppercase tracking-widest rounded-full">
                                        Грунт: <?= \App\Core\View::escape($plot['soil_type']) ?>
                                    </span>
                                </div>
                            </div>
                            <div
                                class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center text-gray-200 group-hover:text-black group-hover:bg-white border-2 border-transparent group-hover:border-gray-100 transition-all duration-500">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="mt-20 pt-10 border-t border-gray-50 flex items-center justify-between relative z-10">
                            <div class="flex items-center gap-4">
                                <span class="w-4 h-4 rounded-full bg-accent shadow-[0_0_15px_rgba(16,185,129,0.5)]"></span>
                                <span class="text-md font-black text-gray-900 uppercase tracking-widest">Active Asset</span>
                            </div>
                            <a href="/analysis/plan"
                                class="text-2xl font-black text-accent hover:underline decoration-4">Глубокий
                                анализ →</a>
                        </div>

                        <!-- Atmospheric Watermark -->
                        <div
                            class="absolute -bottom-16 -right-16 text-[240px] font-black text-gray-100/30 leading-none select-none group-hover:text-accent/5 transition-all duration-1000 italic">
                            <?= $plot['id'] ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>