
import os
import re

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"
with open(path, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Delete the redundant "Choice" cards (Old Capabilities)
# These are the cards with h-[450px] and "Что вас беспокоит сегодня?"
# We search for that header and remove the block until the next section.
content = re.sub(r'<div class="relative z-10 text-center mb-2 max-w-2xl px-6">.*?Что вас беспокоит сегодня?.*?</div>\s*</section>', '', content, flags=re.DOTALL)

# 2. Global py-40 to py-4
content = content.replace('py-40', 'py-4')
content = content.replace('py-32', 'py-4')
content = content.replace('py-24', 'py-4')
content = content.replace('py-20', 'py-4')
content = content.replace('py-16', 'py-4')

# 3. Global mb-24/mb-12 to mb-2
content = content.replace('mb-24', 'mb-2')
content = content.replace('mb-16', 'mb-2')
content = content.replace('mb-12', 'mb-2')
content = content.replace('mb-10', 'mb-2')
content = content.replace('mb-8', 'mb-2')

# 4. Global gap-20/gap-10 to gap-2
content = content.replace('gap-20', 'gap-2')
content = content.replace('gap-10', 'gap-2')
content = content.replace('gap-16', 'gap-2')
content = content.replace('gap-8', 'gap-2')

# 5. Fix card heights if they are fixed
content = content.replace('h-[450px]', 'h-auto')

with open(path, 'w', encoding='utf-8') as f:
    f.write(content)

print("PURGED REDUNDANT CONTENT AND COMPRESSED ALL REMAINING SECTIONS TO PY-4.")
