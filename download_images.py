import os
import re
import urllib.request
import urllib.parse

DIRECTORY = "/Users/bp/Desktop/RF- Update"
IMAGES_DIR = os.path.join(DIRECTORY, "images")

if not os.path.exists(IMAGES_DIR):
    os.makedirs(IMAGES_DIR)

# Find all files to process
extensions = ('.php', '.js', '.cjs', '.html', '.css')
files_to_process = []
for root, dirs, files in os.walk(DIRECTORY):
    if '.git' in root or 'node_modules' in root or 'vendor' in root:
        continue
    for file in files:
        if file.endswith(extensions):
            files_to_process.append(os.path.join(root, file))

# Regex to match cloudinary urls including video/raw
url_pattern = re.compile(r'https://res\.cloudinary\.com/[a-zA-Z0-9_\-]+/[a-zA-Z0-9_\-]+/upload/[^\s"\'<>\)]+')

url_to_local_path = {}

for filepath in files_to_process:
    with open(filepath, 'r', encoding='utf-8') as f:
        try:
            content = f.read()
            matches = url_pattern.findall(content)
            for url in matches:
                # remove any trailing bounds just in case
                clean_url = url.rstrip('.,;')
                if clean_url not in url_to_local_path:
                    parsed = urllib.parse.urlparse(clean_url)
                    path_parts = parsed.path.split('/')
                    filename = path_parts[-1]
                    version = "v0"
                    for part in path_parts:
                        if part.startswith('v') and part[1:].isdigit():
                            version = part
                            break
                    
                    local_filename = f"{version}_{filename}"
                    local_filepath = os.path.join(IMAGES_DIR, local_filename)
                    url_to_local_path[clean_url] = local_filepath
        except Exception as e:
            pass

print(f"Found {len(url_to_local_path)} unique Cloudinary URLs.")

# Download images/videos
downloaded = 0
for url, local_filepath in url_to_local_path.items():
    if not os.path.exists(local_filepath):
        print(f"Downloading {url} to {local_filepath}...")
        try:
            req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
            with urllib.request.urlopen(req, timeout=30) as response, open(local_filepath, 'wb') as out_file:
                out_file.write(response.read())
            downloaded += 1
        except Exception as e:
            print(f"Failed to download {url}: {e}")
    else:
        pass

print(f"Downloaded {downloaded} new media files.")

# Replace URLs in files
changed_files = 0
for filepath in files_to_process:
    with open(filepath, 'r', encoding='utf-8') as f:
        try:
            original_content = f.read()
        except:
            continue
            
    new_content = original_content
    changed = False
    
    # Sort urls by length descending
    sorted_urls = sorted(url_to_local_path.keys(), key=len, reverse=True)
    
    for url in sorted_urls:
        if url in new_content:
            local_filepath = url_to_local_path[url]
            rel_dir = os.path.relpath(DIRECTORY, os.path.dirname(filepath))
            if rel_dir == '.':
                rel_img_path = 'images/' + os.path.basename(local_filepath)
            else:
                rel_img_path = rel_dir + '/images/' + os.path.basename(local_filepath)
                rel_img_path = rel_img_path.replace('\\', '/')
                
            new_content = new_content.replace(url, rel_img_path)
            changed = True
            
    if changed:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        changed_files += 1
        print(f"Updated {filepath}")

print(f"Finished updating {changed_files} files.")
