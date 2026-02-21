const fs = require('fs');
const path = require('path');

const dir = '/Users/aniketsharma/Downloads/ret-homestay-website-redesign/ret-homestay-static';
const files = fs.readdirSync(dir).filter(f => f.endsWith('.html'));

// The one logo used everywhere (footer + header)
const LOGO_URL = 'https://res.cloudinary.com/damfndmrm/image/upload/v1771665559/Retrofusion_logo__20260211_230238_0000_sufgcp.png';

files.forEach(file => {
    const filePath = path.join(dir, file);
    let content = fs.readFileSync(filePath, 'utf8');

    // 1. Ensure nav-logo uses the correct logo URL and has the logo-white class initially
    //    Replace any existing nav-logo src with the correct one
    content = content.replace(
        /(<img\s+id="nav-logo"\s*\n\s*src=")[^"]*(")/g,
        `$1${LOGO_URL}$2`
    );

    // 2. Add logo-white class to nav-logo if not already present
    //    This makes the logo white when the navbar is transparent (not scrolled)
    content = content.replace(
        /(<img\s+id="nav-logo"\s*\n\s*src="[^"]*"\s*\n\s*alt="[^"]*"\s*class=")((?!logo-white)[^"]*")/g,
        '$1logo-white $2'
    );

    // 3. Shrink header logo sizes: make the navbar logo appropriately sized
    //    Target: w-32 sm:w-40 md:w-48 xl:w-56
    content = content.replace(/class="logo-white w-40 sm:w-64 md:w-80 xl:w-\[26rem\]/g, 'class="logo-white w-32 sm:w-40 md:w-48 xl:w-56');

    // 4. Reduce footer padding: `py-8 lg:py-10` -> `py-4 lg:py-6`
    content = content.replace(/py-8 lg:py-10 relative z-10/g, 'py-4 lg:py-6 relative z-10');

    // 5. Reduce footer flex gap: `gap-6 mb-8 pb-6` -> `gap-4 mb-4 pb-4`
    content = content.replace(/gap-6 mb-8 pb-6/g, 'gap-4 mb-4 pb-4');

    // 6. Reduce footer grid gap: `gap-8 lg:gap-12 mb-8` -> `gap-6 lg:gap-8 mb-4`
    content = content.replace(/gap-8 lg:gap-12 mb-8/g, 'gap-6 lg:gap-8 mb-4');

    // 7. Footer locations margin: `mb-8` -> `mb-4`
    content = content.replace(/class="mb-8">\n\s*<h4/g, 'class="mb-4">\n            <h4');

    fs.writeFileSync(filePath, content, 'utf8');
    console.log(`✅ Updated: ${file}`);
});

console.log('\n🎉 Done! Navbar logo set to white (via CSS filter), footer space reduced.');
