import os

pages_to_generate = [
    "homestay near mumbai with bbq",
    "homestay near pune with bbq",
    "4bhk villa near mumbai with bbq",
    "4bhk villa near pune with bbq",
    "villa for 10 people near mumbai with bbq",
    "villa for 10 people near pune with bbq",
    "villa for 5 people near mumbai with bbq",
    "villa for 5 people near pune with bbq",

    "4bhk villa near pune with caretaker",
    "villa for 10 people near mumbai with caretaker",
    "villa for 10 people near pune with caretaker",
    "villa for 5 people near mumbai with caretaker",
    "villa for 5 people near pune with caretaker",

    "homestay near mumbai with power backup",
    "homestay near pune with power backup",
    "4bhk villa near mumbai with power backup",
    "4bhk villa near pune with power backup",
    "villa for 10 people near mumbai with power backup",
    "villa for 10 people near pune with power backup",

    "pet friendly homestay near mumbai",
    "pet friendly homestay near pune",
    "pet friendly homestay near navi mumbai",
    "pet friendly 4bhk villa near mumbai",
    "pet friendly 4bhk villa near pune",
    "pet friendly villa for 10 people near mumbai",
    "pet friendly villa for 10 people near pune",
    "pet friendly villa for 5 people near mumbai",
    "pet friendly villa for 5 people near pune"
]

template_file = "homestay-near-mumbai-with-wifi.php"

with open(template_file, "r", encoding="utf-8") as f:
    template_content = f.read()

def generate_content(keyword):
    # Capitalized words for titles
    title_case_keyword = " ".join(word.capitalize() for word in keyword.split())
    # URL friendly keyword
    url_keyword = keyword.replace(" ", "-")
    
    content = template_content
    
    # Simple replacements
    content = content.replace("Premium Homestay Near Mumbai with Wifi | Workcation Stays", f"Premium {title_case_keyword} | Retrofusion")
    content = content.replace("Homestay Near Mumbai with Wifi", title_case_keyword)
    content = content.replace("homestay-near-mumbai-with-wifi", url_keyword)
    content = content.replace("Homestay near mumbai with wifi", keyword.capitalize())
    content = content.replace("homestay near Mumbai with wifi", keyword)
    
    # Update H1 specifically
    content = content.replace("Homestay Near <br>Mumbai With Wifi", title_case_keyword)
    
    return content

for keyword in pages_to_generate:
    filename = keyword.replace(" ", "-") + ".php"
    if not os.path.exists(filename):
        content = generate_content(keyword)
        with open(filename, "w", encoding="utf-8") as f:
            f.write(content)
        print(f"Generated: {filename}")
    else:
        print(f"Skipped (already exists): {filename}")
