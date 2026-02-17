<div class="max-w-4xl mx-auto">
    <a href="/dashboard" class="inline-flex items-center text-slate-500 hover:text-emerald-500 mb-8 transition gap-2">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
            </path>
        </svg>
        Назад в панель
    </a>

    <div class="glass p-10 mb-12">
        <h2 class="text-3xl font-bold font-outfit mb-8 text-emerald-400">
            <?= $title ?>
        </h2>

        <div class="prose prose-invert max-w-none prose-emerald">
            <!-- Simple markdown decoder simulation for result -->
            <?php
            $formatted = nl2br(\App\Core\View::escape($result));
            $formatted = preg_replace('/^\*\*([^\*]+)\*\*/m', '<strong class="text-emerald-300">$1</strong>', $formatted);
            $formatted = preg_replace('/^## ([^#\n]+)/m', '<h3 class="text-2xl font-bold mt-6 mb-4 font-outfit">$1</h3>', $formatted);
            echo $formatted;
            ?>
        </div>
    </div>

    <?php if (isset($vets)): ?>
        <div class="space-y-6">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-bold font-outfit">Ветеринары в вашем регионе <span class="text-emerald-500">(
                        <?= \App\Core\View::escape($region) ?>)
                    </span></h3>
                <span
                    class="bg-emerald-500/10 text-emerald-500 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Доступно
                    сейчас</span>
            </div>

            <?php if (empty($vets)): ?>
                <div class="glass p-8 text-center text-slate-500">
                    К сожалению, в вашем регионе пока нет зарегистрированных ветеринаров.
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($vets as $vet): ?>
                        <div class="glass p-6 flex items-center justify-between group hover:border-emerald-500/50 transition">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 bg-emerald-500/20 rounded-full flex items-center justify-center font-bold text-emerald-500">
                                    <?= substr($vet['full_name'], 0, 1) ?>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">
                                        <?= \App\Core\View::escape($vet['full_name']) ?>
                                    </h4>
                                    <p class="text-slate-500 text-sm">Квалифицированный ветеринар</p>
                                </div>
                            </div>
                            <a href="tel:<?= $vet['phone'] ?>" class="btn-premium p-3 rounded-xl">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>