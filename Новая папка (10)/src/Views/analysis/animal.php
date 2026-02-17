<div class="max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold mb-4 font-outfit">Помощь животным</h2>
    <p class="text-slate-400 mb-10">Опишите симптомы и поведение животного для получения предварительных рекомендаций.
    </p>

    <div class="glass p-8">
        <form action="/analysis/animal" method="POST" class="space-y-6">
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

            <div>
                <label class="block text-sm text-slate-400 mb-2">Описание симптомов</label>
                <textarea name="symptoms" required rows="4"
                    placeholder="Напр: Корова вялая, отказывается от еды второй день, температура повышена..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:border-emerald-500 focus:outline-none transition text-white"></textarea>
            </div>

            <div class="border-2 border-dashed border-white/10 rounded-2xl p-8 hover:border-emerald-500/50 transition cursor-pointer text-center"
                onclick="document.getElementById('animal-photo').click()">
                <p class="text-slate-300 text-sm">Добавить фото (необязательно)</p>
                <input type="file" id="animal-photo" name="photo" class="hidden" accept="image/*">
            </div>

            <button type="submit" class="btn-premium w-full py-4 rounded-xl font-bold text-lg">
                Получить консультацию
            </button>
        </form>
    </div>
</div>