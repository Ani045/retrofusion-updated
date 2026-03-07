import glob
import re

files = glob.glob('/Users/aniketsharma/Downloads/ret-homestay-website-redesign/ret-homestay-static/*.html')

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # We want to replace href="contact.html" with href="contact.html#name" only for the Enquire Now buttons
    # Both Desktop and Mobile variants
    new_content = re.sub(r'href="contact\.html"([^>]*>)\s*Enquire\s*Now', r'href="contact.html#name"\1Enquire Now', content, flags=re.IGNORECASE)
    
    if new_content != content:
        with open(f, 'w') as file:
            file.write(new_content)
        print(f"Updated Enquire Now links in {f}")
