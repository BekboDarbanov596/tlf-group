
import os

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"
with open(path, 'r', encoding='utf-8') as f:
    content = f.read()

# I will use regex or structured replacement to flat-out the sections
# The goal is to have:
# <section id="hero">...</section>
# <section id="capabilities">...</section>
# <section id="how-it-works">...</section>
# <section id="results">...</section>
# <footer>...</footer>

# First, remove the problematic line 470 and surrounding mess
import re

# Clean up the trailing section mess before footer
content = re.sub(r'</section>\s*</section>\s*</section>\s*</section>\s*</section>', '</section>', content)
content = re.sub(r'</section>\s*</section>', '</section>', content)

# Also check for any py-20 that might have survived or been re-introduced
content = content.replace('py-20', 'py-4')
content = content.replace('py-8', 'py-4')
content = content.replace('mb-12', 'mb-2')
content = content.replace('mb-16', 'mb-2')
content = content.replace('mb-20', 'mb-2')

# Look for any 'h-screen' that might be outside hero
# hero should be h-screen, others should not
# I'll check if how-it-works or capabilities have it by mistake

# Let's ensure sections are NOT nested.
# I'll find start of sections and ensure they are preceded by a closing tag if it's not the first one.

sections = [
    'hero',
    'capabilities',
    'how-it-works',
    'results'
]

# This is a bit risky to do with strings if there are nested divs. 
# But since I have the line numbers, I can be more targeted.

# Actually, the simplest way is to ensure each section ID block is clean.

# Fix Step 10: Capabilities
# Fix Step 11: How It Works
# Fix Step 12: Results

# I will just write a very clean version of the section separators.

# Capabilities start
content = re.sub(r'<!-- Step 10: Capabilities.*?<section id="capabilities"', '<!-- Step 10: Capabilities -->\\n<section id="capabilities"', content, flags=re.DOTALL)

# How It Works start (ensure capabilities is closed before)
content = re.sub(r'</section>\s*<!-- Step 11: How It Works.*?<section id="how-it-works"', '</section>\\n<!-- Step 11: How It Works -->\\n<section id="how-it-works"', content, flags=re.DOTALL)

# Results start (ensure how-it-works is closed before)
content = re.sub(r'</section>\s*<!-- Step 12: Results.*?<section id="results"', '</section>\\n<!-- Step 12: Results -->\\n<section id="results"', content, flags=re.DOTALL)

# Footer start (ensure results is closed before)
content = re.sub(r'</section>\s*<!-- Step 13: Footer', '</section>\\n<!-- Step 13: Footer', content, flags=re.DOTALL)

with open(path, 'w', encoding='utf-8') as f:
    f.write(content)

print("Flattened sections and removed redundant closing tags.")
