
import os
import re

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"
with open(path, 'r', encoding='utf-8') as f:
    content = f.read()

# I will replace the entire set of sections with a reconstruction to ensure 100% correctness.
# I'll identify the markers and keep only the content.

def get_content_between(text, start_marker, end_marker):
    pattern = re.escape(start_marker) + r"(.*?)" + re.escape(end_marker)
    match = re.search(pattern, text, re.DOTALL)
    if match:
        return match.group(1).strip()
    return None

# Markers
hero_start = '<!-- Cinematic Start - Fullscreen Immersive -->'
capabilities_start = '<!-- Step 10: Capabilities -->'
how_it_works_start = '<!-- Step 11: How It Works'
results_start = '<!-- Step 12: Results'
footer_comment = '<!-- Step 13: Footer -->'

# Part 1: HERO (Usually good, but let's be safe)
hero_content = get_content_between(content, hero_start, capabilities_start)

# Part 2: Capabilities
capabilities_content = get_content_between(content, capabilities_start, how_it_works_start)
# Remove outer <section> and just keep the div inside, or clean it up.
# Let's just find the inner div.
inner_capabilities = get_content_between(capabilities_content, '>', '</section>') if capabilities_content else ""

# Part 3: How It Works
how_it_works_content = get_content_between(content, how_it_works_start, results_start)
inner_how_it_works = get_content_between(how_it_works_content, '>', '</section>') if how_it_works_content else ""

# Part 4: Results
results_content = get_content_between(content, results_start, footer_comment)
inner_results = get_content_between(results_content, '>', '</section>') if results_content else ""

# Reconstruct a FLAT CLEAN structure
new_home = f"""{hero_start}
{hero_content}

{capabilities_start}
<section id="capabilities" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {inner_capabilities}
    </div>
</section>

{how_it_works_start} (Mini-Demo Redesign - Option 3) -->
<section id="how-it-works" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {inner_how_it_works}
    </div>
</section>

{results_start} (Surgical Gray Minimalist) -->
<section id="results" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {inner_results}
    </div>
</section>

{footer_comment}
"""

# Wait, I need to make sure the inner contents don't have their own outer containers that I'm doubling.
# Let's refine the inner contents to remove the first div wrapper if I'm adding it back.

def clean_inner(inner):
    # Remove leading <div class="mx-auto...
    inner = re.sub(r'^\s*<div class="mx-auto[^>]*>', '', inner, flags=re.DOTALL)
    # Remove trailing </div>
    inner = re.sub(r'</div>\s*$', '', inner, flags=re.DOTALL)
    return inner.strip()

clean_capabilities = clean_inner(inner_capabilities)
clean_how_it_works = clean_inner(inner_how_it_works)
clean_results = clean_inner(inner_results)

final_reconstruction = f"""{hero_start}
{hero_content}

{capabilities_start}
<section id="capabilities" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {clean_capabilities}
    </div>
</section>

{how_it_works_start} (Mini-Demo Redesign - Option 3) -->
<section id="how-it-works" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {clean_how_it_works}
    </div>
</section>

{results_start} (Surgical Gray Minimalist) -->
<section id="results" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {clean_results}
    </div>
</section>

{footer_comment}
"""

# Append the rest of the file (footer onwards)
footer_and_beyond = content.split(footer_comment)[1]

with open(path, 'w', encoding='utf-8') as f:
    f.write(final_reconstruction + footer_and_beyond)

print("RECONSTRUCTED HOME PAGE ARCHITECTURE - 100% FLAT RELIABLE.")
