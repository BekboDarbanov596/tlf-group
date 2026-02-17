
import os

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"

with open(path, 'rb') as f:
    content = f.read()

# Find the indices of the section IDs
how_it_works_idx = content.find(b'id="how-it-works"')
results_idx = content.find(b'id="results"')

if how_it_works_idx == -1 or results_idx == -1:
    print("Could not find section IDs.")
else:
    # Find the end of how-it-works </section>
    end_how = content.find(b'</section>', how_it_works_idx)
    # Find the start of results <section
    start_results = content.rfind(b'<section', results_idx)
    
    gap_content = content[end_how:start_results]
    print(f"Gap content (hex): {gap_content.hex()}")
    print(f"Gap content (decoded): {gap_content.decode('utf-8', errors='replace')}")

    # Check for anything else
    print(f"\nFull block around gap:\n{content[end_how-50:start_results+50].decode('utf-8', errors='replace')}")
