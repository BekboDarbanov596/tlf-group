<div class="max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold mb-8 font-outfit">Генерация плана участка</h2>

    <div class="glass p-8">
        <form action="/analysis/plan" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

            <div>
                <label class="block text-sm text-slate-400 mb-2">Выберите участок для анализа</label>
                <select name="plot_id" required
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none transition appearance-none text-white">
                    <?php if (empty($plots)): ?>
                        <option disabled>Сначала добавьте участок в панели</option>
                    <?php else: ?>
                        <?php foreach ($plots as $plot): ?>
                            <option value="<?= $plot['id'] ?>">
                                <?= $plot['title'] ?> (
                                <?= $plot['area'] ?> га)
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>

            <p class="text-sm text-slate-500 italic">
                Система проанализирует историю посевов за последние 3-5 лет, тип почвы и региональные особенности для
                составления оптимального плана.
            </p>

            <button type="submit" <?= empty($plots) ? 'disabled' : '' ?> class="btn-premium w-full py-4 rounded-xl
                font-bold text-lg disabled:opacity-50">
                Сгенерировать план
            </button>
        </form>
    </div>
</div>