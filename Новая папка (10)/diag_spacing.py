
import os
import re

path = r"c:\Users\bekbo\Desktop\Новая папка (10)\src\Views\home.php"

with open(path, 'r', encoding='utf-8') as f:
    lines = f.readlines()

print(f"Total lines: {len(lines)}")
for i, line in enumerate(lines):
    l = line.strip()
    if '<section' in l or '</section>' in l or 'bg-' in l or 'h-' in l or 'min-h' in l:
        # Check if it has an ID
        id_match = re.search(r'id="([^"]+)"', l)
        class_match = re.search(r'class="([^"]+)"', l)
        id_str = f"ID:{id_match.group(1)}" if id_match else ""
        class_str = f"CLASS:{class_match.group(1)}" if class_match else ""
        
        # Only print first few chars of class to keep it clean
        print(f"{i+1:4}: {l[:100]} | {id_str}")

print("\n--- Structural Analysis Done ---")
