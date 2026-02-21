const fs = require('fs');
const path = require('path');

const dir = '/Users/aniketsharma/Downloads/ret-homestay-website-redesign/ret-homestay-static';
const files = fs.readdirSync(dir).filter(f => f.endsWith('.html'));

const replacement = `<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20 w-full">
          <div class="flex-shrink-0 flex items-center lg:w-1/3 justify-start">
            <a href="index.html" class="flex items-center">
              <img id="nav-logo"
                src="https://res.cloudinary.com/damfndmrm/image/upload/v1771665559/Retrofusion_logo__20260211_230238_0000_sufgcp.png"
                alt="Retrofusion Logo"
                class="logo-white w-32 sm:w-40 md:w-48 xl:w-56 h-auto object-contain transition-all duration-300 origin-left" />
            </a>
          </div>
          <div class="hidden lg:flex items-center justify-center space-x-6 xl:space-x-8 lg:w-1/3">
            <a href="about.html"
              class="nav-link text-white hover:text-amber-400 transition-colors font-medium text-lg relative group">
              <span class="text-sm sm:text-base lg:text-lg">About</span>
              <span
                class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="contact.html"
              class="nav-link text-white hover:text-amber-400 transition-colors font-medium text-lg relative group">
              <span class="text-sm sm:text-base lg:text-lg">Contact</span>
              <span
                class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-600 transition-all duration-300 group-hover:w-full"></span>
            </a>
            <div id="villas-dropdown-btn" class="relative">
              <button
                class="nav-link text-white hover:text-amber-400 transition-colors font-medium text-lg flex items-center space-x-1 group">
                <span class="text-sm sm:text-base lg:text-lg">Our Villas</span>
                <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
                <span
                  class="absolute -bottom-1 left-0 w-0 h-0.5 bg-amber-600 transition-all duration-300 group-hover:w-full"></span>
              </button>
            </div>
          </div>
          <div class="flex items-center justify-end lg:w-1/3 gap-4">
            <a href="contact.html" class="hidden lg:flex items-center justify-center bg-[#0F2A24] text-[#F4EFEA] px-6 py-2.5 rounded-full font-medium transition-colors duration-300 hover:bg-amber-600 hover:text-white text-sm xl:text-base border border-transparent hover:border-amber-600">Enquire Now</a>
            <div class="lg:hidden">
              <button id="mobile-menu-btn" class="text-white hover:text-amber-600 transition-colors">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile Menu -->`;

files.forEach(file => {
    const filePath = path.join(dir, file);
    let content = fs.readFileSync(filePath, 'utf8');

    const regex = /<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">[\s\S]*?(?=<!-- Mobile Menu -->)<!-- Mobile Menu -->/;
    if (regex.test(content)) {
        content = content.replace(regex, replacement);
        fs.writeFileSync(filePath, content, 'utf8');
        console.log(`Updated ${file}`);
    } else {
        console.log(`Regex did not match in ${file}`);
    }
});
