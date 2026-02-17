
import os

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"
with open(path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

new_content = """<!-- Step 11: How It Works (3-Step Pipeline Redesign - Option 1) -->
<section id="how-it-works" class="relative py-32 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-gray-800 tracking-tighter uppercase mb-6 font-outfit">3 шага до результата</h2>
            <p class="text-gray-500 text-lg font-medium leading-relaxed max-w-[600px] mx-auto">От ввода данных до готового решения за 24 часа. Прямо в вашем смартфоне.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-gray-200 rounded-[40px] overflow-hidden bg-gray-50 shadow-sm">
            <!-- Step 1: Input -->
            <div class="group relative p-10 md:p-12 border-b md:border-b-0 md:border-r border-gray-200 hover:bg-white transition-all duration-500">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-black text-accent uppercase tracking-[0.2em] mb-1">Шаг 01</span>
                            <h4 class="text-2xl font-black text-gray-800 uppercase tracking-tight font-outfit">Добавьте данные</h4>
                        </div>
                        <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center border border-gray-200 text-gray-400 group-hover:bg-accent group-hover:text-white transition-all shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"></path></svg>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span> Регион
                        </li>
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span> Участок
                        </li>
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-accent"></span> История / Симптомы
                        </li>
                    </ul>

                    <div class="flex items-center gap-2 pt-4 border-t border-gray-100">
                        <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
                            <div class="w-1/3 h-full bg-accent"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Analysis -->
            <div class="group relative p-10 md:p-12 border-b md:border-b-0 md:border-r border-gray-200 hover:bg-white transition-all duration-500 bg-white shadow-xl shadow-gray-200/50 z-10">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-black text-blue-500 uppercase tracking-[0.2em] mb-1">Шаг 02</span>
                            <h4 class="text-2xl font-black text-gray-800 uppercase tracking-tight font-outfit">Анализ ИИ</h4>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center border border-blue-100 text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-all shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> План сезона
                        </li>
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Риски
                        </li>
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Рекомендации
                        </li>
                    </ul>

                    <div class="flex items-center gap-2 pt-4 border-t border-gray-100">
                        <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
                            <div class="w-2/3 h-full bg-blue-500"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Action -->
            <div class="group relative p-10 md:p-12 hover:bg-white transition-all duration-500">
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-black text-emerald-500 uppercase tracking-[0.2em] mb-1">Шаг 03</span>
                            <h4 class="text-2xl font-black text-gray-800 uppercase tracking-tight font-outfit">Действуйте</h4>
                        </div>
                        <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center border border-gray-200 text-gray-400 group-hover:bg-emerald-500 group-hover:text-white transition-all shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Сохранить в историю
                        </li>
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Специалисту
                        </li>
                        <li class="flex items-center gap-3 text-gray-500 font-bold text-base">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Повторный контроль
                        </li>
                    </ul>

                    <div class="flex items-center gap-2 pt-4 border-t border-gray-100">
                        <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
                            <div class="w-full h-full bg-emerald-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>"""

# Find the start and end indices
start_idx = -1
end_idx = -1
for i, line in enumerate(lines):
    if "Step 11: Algorithm" in line:
        start_idx = i
    if "Step 12: Results" in line:
        end_idx = i
        break

if start_idx != -1 and end_idx != -1:
    lines[start_idx:end_idx] = [new_content + "\\n"]
    with open(path, 'w', encoding='utf-8') as f:
        f.writelines(lines)
    print("Successfully replaced.")
else:
    print(f"Could not find indices: {start_idx}, {end_idx}")
