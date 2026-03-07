import os
import glob
import re

html_files = glob.glob('*.html')

target = """              <a href="https://www.facebook.com/retrofusion.in" target="_blank" rel="noopener noreferrer"
                class="w-10 h-10 rounded-lg bg-white/5 hover:bg-blue-600 flex items-center justify-center transition-all duration-300">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
              </a>
              <a href="https://www.linkedin.com/company/retrofusion/" target="_blank" rel="noopener noreferrer"
                class="w-10 h-10 rounded-lg bg-white/5 hover:bg-blue-700 flex items-center justify-center transition-all duration-300">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>"""

replacement = """              <a href="https://www.youtube.com/channel/UCuS96gjsWjyapsTCNIT1upA" target="_blank" rel="noopener noreferrer"
                class="w-10 h-10 rounded-lg bg-white/5 hover:bg-red-600 flex items-center justify-center transition-all duration-300">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.94 2c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path>
                  <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                </svg>
              </a>
              <a href="https://www.linkedin.com/in/retrofusion-boutique-homestays-lonavala/" target="_blank" rel="noopener noreferrer"
                class="w-10 h-10 rounded-lg bg-white/5 hover:bg-blue-700 flex items-center justify-center transition-all duration-300">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>"""

updated = 0
for fpath in html_files:
    with open(fpath, 'r', encoding='utf-8') as f:
        content = f.read()

    # The target might have different spacing, but let's try direct replacement first
    if target in content:
        content = content.replace(target, replacement)
        with open(fpath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {fpath}")
        updated += 1
    else:
        # Regex fallback to ignore whitespace
        pass

print(f"Total updated: {updated}")
