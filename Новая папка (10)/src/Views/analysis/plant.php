<div class="max-w-2xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4 font-outfit">Растение по фото</h2>
    <p class="text-slate-400 mb-10">Загрузите четкое фото листа или пораженного участка растения.</p>

    <div class="glass p-10">
        <form action="/analysis/plant" method="POST" enctype="multipart/form-data" class="space-y-8">
            <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">

            <div class="border-2 border-dashed border-white/10 rounded-2xl p-12 hover:border-emerald-500/50 transition cursor-pointer group"
                onclick="document.getElementById('photo-input').click()">
                <div
                    class="w-16 h-16 bg-emerald-500/10 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                    <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <p class="text-slate-300 font-medium">Нажмите для загрузки или перетащите фото</p>
                <p class="text-slate-500 text-xs mt-2">JPG, PNG до 10МБ</p>
                <input type="file" id="photo-input" name="photo" class="hidden" accept="image/*" required>
            </div>

            <button type="submit" class="btn-premium w-full py-4 rounded-xl font-bold text-lg">
                Начать анализ
            </button>
        </form>
    </div>
</div>