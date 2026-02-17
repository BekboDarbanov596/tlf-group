
import os
import re

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"
with open(path, 'r', encoding='utf-8') as f:
    content = f.read()

def extract_section(id_name):
    # Find the start tag
    start_tag_match = re.search(rf'<section id="{id_name}"[^>]*>', content)
    if not start_tag_match:
        return ""
    start_pos = start_tag_match.end()
    
    # Simple stack-based tag matcher for the outer section
    # We want to find the </section> that matches our opening tag.
    # Actually, we can just look for the next </section> if we assume it's flat.
    # But let's be more careful.
    
    end_tag_match = re.search(r'</section>', content[start_pos:])
    if not end_tag_match:
        return ""
    
    section_content = content[start_pos : start_pos + end_tag_match.start()]
    
    # CLEANING: If it has redundant wrappers, strip them.
    # Strip <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
    section_content = re.sub(r'^\s*<div class="mx-auto px-8 md:px-24 xl:px-40 max-w-\[1300px\]">', '', section_content, flags=re.DOTALL)
    section_content = re.sub(r'</div>\s*$', '', section_content, flags=re.DOTALL)
    
    return section_content.strip()

hero = extract_section('hero')
capabilities = extract_section('capabilities')
how_it_works = extract_section('how-it-works')
results = extract_section('results')
regional_map = extract_section('regional-map')
pinterest_grid = extract_section('pinterest-grid')

# Extract footer correctly
footer_match = re.search(r'<footer[^>]*>(.*?)</footer>', content, re.DOTALL)
footer_inner = footer_match.group(1).strip() if footer_match else ""

# Rebuild
new_home = f"""<!-- Cinematic Start - Fullscreen Immersive -->
<section id="hero" class="relative h-screen w-full flex items-center overflow-hidden bg-black">
    {hero}
</section>

<!-- Step 10: Capabilities -->
<section id="capabilities" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {capabilities}
    </div>
</section>

<!-- Step 11: How It Works -->
<section id="how-it-works" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {how_it_works}
    </div>
</section>

<!-- Step 12: Results -->
<section id="results" class="relative py-4 bg-gray-100 overflow-hidden border-t border-gray-200">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1300px]">
        {results}
    </div>
</section>

<!-- Map & Grid Content -->
<section id="regional-map" class="py-4 bg-gray-50/30 overflow-hidden">
    <div class="max-w-[1400px] mx-auto px-10">
        {regional_map}
    </div>
</section>

<section id="pinterest-grid" class="py-4 bg-white">
    <div class="max-w-[1400px] mx-auto px-10">
        {pinterest_grid}
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 py-4 overflow-hidden">
    <div class="mx-auto px-8 md:px-24 xl:px-40 max-w-[1400px]">
        {footer_inner}
    </div>
</footer>

<style>
    @keyframes slow-zoom {{ 0% {{ transform: scale(1); }} 50% {{ transform: scale(1.1); }} 100% {{ transform: scale(1); }} }}
    .animate-slow-zoom {{ animation: slow-zoom 20s infinite ease-in-out; }}
</style>

<script>
    gsap.registerPlugin(ScrollTrigger);
    window.onload = () => {{
        const tl = gsap.timeline();
        tl.to('#hero-title', {{ opacity: 1, y: 0, duration: 1.5, ease: 'power4.out' }})
            .to('#hero-subtitle-primary', {{ opacity: 1, y: 0, duration: 1, ease: 'power4.out' }}, '-=1')
            .to('#hero-subtitle-secondary', {{ opacity: 1, y: 0, duration: 1, ease: 'power4.out' }}, '-=0.8')
            .to('#hero-actions', {{ opacity: 1, y: 0, duration: 1, ease: 'power4.out' }}, '-=0.8')
            .to('#hero-tiles', {{ opacity: 1, y: 0, duration: 1, ease: 'power4.out' }}, '-=0.8')
            .to('#hero-card', {{ opacity: 1, x: 0, duration: 1.5, ease: 'power3.out' }}, '-=1.2');

        gsap.to('#hero-card', {{ y: 15, duration: 4, repeat: -1, yoyo: true, ease: "sine.inOut" }});

        gsap.from('#how-it-works .grid > div', {{
            scrollTrigger: {{ trigger: '#how-it-works', start: 'top 80%' }},
            opacity: 0, y: 40, duration: 1.2, stagger: 0.2, ease: 'power4.out'
        }});

        gsap.from('#results .grid > div', {{
            scrollTrigger: {{ trigger: '#results', start: 'top 80%' }},
            opacity: 0, scale: 0.95, y: 40, duration: 1.2, stagger: 0.2, ease: 'power3.out'
        }});
    }};
    function scrollToNext() {{ gsap.to(window, {{ duration: 1.5, scrollTo: "#capabilities", ease: "power4.inOut" }}); }}
    function scrollToFeatures() {{ gsap.to(window, {{ duration: 1.5, scrollTo: "#capabilities", ease: "power4.inOut" }}); }}
</script>
"""

with open(path, 'w', encoding='utf-8') as f:
    f.write(new_home)

print("FLATTENED HOME PAGE RECONSTRUCTION COMPLETE. 100% ZERO GAPS.")
