import glob
import re

files = glob.glob('/Users/aniketsharma/Downloads/ret-homestay-website-redesign/ret-homestay-static/*.html')
pattern = re.compile(r'<a href="about\.html"\s*class="[^"]*text-amber-600 hover:text-amber-700[^"]*">\s*View\s*all\s*<svg.*?<\/svg><\/a>', re.DOTALL)

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    new_content, count = pattern.subn('', content)
    
    if count > 0:
        with open(f, 'w') as file:
            file.write(new_content)
        print(f"Replaced {count} instances in {f}")
