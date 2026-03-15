<?php
$pageTitle = "Contact Us - Retrofusion Boutique Homestays";
$pageDescription = "Contact Retrofusion - Book your luxury villa stay in Lonavala today.";
include 'includes/header.php';
?>

    <!-- ===== CONTACT CONTENT ===== -->
    <div class="bg-[#F4EFEA] overflow-hidden">
      <!-- Hero Section -->
      <section class="relative h-[68vh] md:h-[85vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
          <img loading="lazy"
            src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1768230663/a613a1b2-edef-4242-8ee3-79ce77bae0e1_yi24hq.avif"
            alt="Contact Us" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/20 to-black/50"></div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto scroll-reveal">
          <div>
            <span class="text-white uppercase tracking-[0.4em] text-sm md:text-base mb-6 block font-light">
              Contact Us
            </span>
            <h1 class="text-5xl md:text-7xl lg:text-8xl text-white font-bold mb-8 leading-[0.9] font-display">
              Get in Touch
            </h1>
            <p class="text-stone-300 text-lg md:text-xl font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
              Ready to experience luxury and comfort at Retrofusion?<br> We're here to help you plan the perfect
              getaway.
            </p>
          </div>
        </div>
      </section>


      <!-- Main Contact Section with Form & Image -->
      <section class="py-20 bg-[#e5dfd8] scroll-reveal">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Contact Form -->
            <div class="bg-white p-8 lg:p-10 rounded-3xl shadow-xl">
              <div class="mb-8">
                <span class="text-amber-600 uppercase tracking-[0.3em] text-xs font-medium">Book Your Stay</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-stone-900 mt-2 font-display">
                  Send Us a Message
                </h2>
              </div>

              <form action="#" method="POST" class="space-y-5"
                onsubmit="event.preventDefault(); alert('In a real environment, this form would be submitted!');">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div>
                    <label class="block text-stone-600 text-sm font-medium mb-2">
                      Full Name *
                    </label>
                    <input type="text" name="name" id="name" required
                      class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none"
                      placeholder="Your name" />
                  </div>
                  <div>
                    <label class="block text-stone-600 text-sm font-medium mb-2">
                      Email Address *
                    </label>
                    <input type="email" name="email" required
                      class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none"
                      placeholder="your@email.com" />
                  </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div>
                    <label class="block text-stone-600 text-sm font-medium mb-2">
                      Phone Number
                    </label>
                    <input type="tel" name="phone"
                      class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none"
                      placeholder="+91 98765 43210" />
                  </div>
                  <div>
                    <label class="block text-stone-600 text-sm font-medium mb-2">
                      Number of Guests
                    </label>
                    <select name="guests"
                      class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none">
                      <option value="">Select guests</option>
                      <option value="2-4">2-4 Guests</option>
                      <option value="5-8">5-8 Guests</option>
                      <option value="9-12">9-12 Guests</option>
                      <option value="13+">13+ Guests</option>
                    </select>
                  </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div>
                    <label class="block text-stone-600 text-sm font-medium mb-2">
                      Check-in Date
                    </label>
                    <input type="date" name="checkIn"
                      class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none" />
                  </div>
                  <div>
                    <label class="block text-stone-600 text-sm font-medium mb-2">
                      Check-out Date
                    </label>
                    <input type="date" name="checkOut"
                      class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none" />
                  </div>
                </div>

                <div>
                  <label class="block text-stone-600 text-sm font-medium mb-2">
                    Preferred Villa
                  </label>
                  <select name="villa"
                    class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none">
                    <option value="">Any villa</option>
                    <option value="retro-villa">Retro Villa</option>
                    <option value="neo-retro">Neo Retro</option>
                    <option value="retro-viswa">Retro Visawa</option>
                  </select>
                </div>

                <div>
                  <label class="block text-stone-600 text-sm font-medium mb-2">
                    Message
                  </label>
                  <textarea name="message" rows="4"
                    class="w-full px-4 py-3 bg-[#F4EFEA] border border-stone-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all outline-none resize-none"
                    placeholder="Tell us about your requirements..."></textarea>
                </div>

                <button type="submit"
                  class="w-full bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white py-4 rounded-xl font-semibold transition-all flex items-center justify-center gap-2 shadow-lg hover:shadow-amber-500/25 transform hover:-translate-y-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                  </svg>
                  <span>Send Message</span>
                </button>
              </form>
            </div>

            <!-- Right Side - Info Grid & Quick Contact -->
            <div class="space-y-6">
              <!-- Perfect Getaway Image (Mobile Only) -->
              <div class="relative rounded-3xl overflow-hidden h-72 lg:h-80 shadow-xl block lg:hidden">
                <img loading="lazy"
                  src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1768230664/91a15ba5-b5da-4618-b585-5d7f92fa5df3_yqcadt.avif"
                  alt="Retrofusion Villa"
                  class="w-full h-full object-cover transition-transform duration-700 hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                  <h3 class="text-white text-xl font-bold mb-1 font-display">
                    Experience Luxury in Lonavala
                  </h3>
                  <p class="text-stone-300 text-sm">Your perfect getaway awaits</p>
                </div>
              </div>

              <!-- Contact Info Grid (Moved from Top Strip) -->
              <div class="bg-[#F4EFEA] rounded-3xl shadow-sm border border-stone-200 p-8">
                <div class="grid grid-cols-2 gap-8">
                  <!-- Phone -->
                  <div class="group">
                    <div
                      class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-amber-200 transition-colors">
                      <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                      </svg>
                    </div>
                    <h3 class="text-stone-900 font-semibold mb-1 font-display">Phone</h3>
                    <a href="tel:+918999036644"
                      class="text-stone-600 hover:text-amber-600 transition-colors text-sm break-all">+91 89990
                      36644</a>
                  </div>
                  <!-- Email -->
                  <div class="group">
                    <div
                      class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-amber-200 transition-colors">
                      <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                    </div>
                    <h3 class="text-stone-900 font-semibold mb-1 font-display">Email</h3>
                    <a href="mailto:contact@retrofusion.in"
                      class="text-stone-600 hover:text-amber-600 transition-colors text-sm break-all">contact@retrofusion.in</a>
                  </div>
                  <!-- Location -->
                  <div class="group">
                    <div
                      class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-amber-200 transition-colors">
                      <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                    </div>
                    <h3 class="text-stone-900 font-semibold mb-1 font-display">Location</h3>
                    <p class="text-stone-600 text-sm break-words">Lonavala, Maharashtra</p>
                  </div>
                  <!-- Hours -->
                  <div class="group">
                    <div
                      class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-amber-200 transition-colors">
                      <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </div>
                    <h3 class="text-stone-900 font-semibold mb-1 font-display">Hours</h3>
                    <p class="text-stone-600 text-sm">24/7 Support</p>
                  </div>
                </div>
              </div>

              <!-- Quick Contact Card -->
              <div class="bg-stone-900 p-8 rounded-3xl shadow-xl">
                <h3 class="text-2xl font-bold text-white mb-4 font-display">
                  Quick Booking
                </h3>
                <p class="text-stone-400 mb-6 text-sm leading-relaxed">
                  For immediate bookings or urgent queries, call us directly. We're available to assist you with your
                  stay.
                </p>
                <div class="space-y-3">
                  <a href="tel:+918999036644"
                    class="flex items-center justify-center gap-3 w-full bg-amber-500 hover:bg-amber-600 text-white py-4 px-5 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="text-xl md:text-2xl tracking-wide">+91 89990 36644</span>
                  </a>
                </div>
              </div>

              <!-- Location Highlights -->
              <!-- <div class="bg-white p-6 rounded-3xl shadow-lg border border-stone-100">
                <h3 class="text-xl font-bold text-stone-900 mb-4 font-display">
                  Location Highlights
                </h3>
                <ul class="space-y-3 text-stone-600 text-sm">
                  <li class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    10 minutes from Lonavala Railway Station
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    5 minutes from Tiger's Leap
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    15 minutes from Bhushi Dam
                  </li>
                  <li class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    Peaceful residential area
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </section>

      <!-- Map Section -->
      <!-- <section class="relative">
        <div class="h-80 md:h-96 w-full grayscale hover:grayscale-0 transition-all duration-500">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15109.873760341943!2d73.38454500000002!3d18.777266000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be801aa57c6135d%3A0x824b8eb6beb6dd96!2sRetro!5e0!3m2!1sen!2sin!4v1768252896855!5m2!1sen!2sin"
            width="100%" height="100%" style="border: 0" allowFullScreen="" loading="lazy"
            referrerPolicy="no-referrer-when-downgrade" title="Retrofusion Location"></iframe>
        </div>
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-white px-6 py-3 rounded-full shadow-lg">
          <p class="text-stone-900 font-medium text-sm flex items-center gap-2">
            <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Lonavala, Maharashtra, India
          </p>
        </div>
      </section> -->

      <!-- CTA Section -->
      <!-- <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
          <img loading="lazy"
            src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1768230663/5d93e66d-23b4-4578-bb58-35032b8b39b8_cftv5v.avif"
            alt="Villa Experience" class="w-full h-full object-cover" />
          <div class="absolute inset-0 bg-stone-900/80"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center scroll-reveal">
          <div>
            <span class="text-amber-400 uppercase tracking-[0.4em] text-sm mb-4 block">
              Ready to Experience
            </span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 font-display">
              Your Perfect Getaway Awaits
            </h2>
            <p class="text-stone-300 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
              Book your stay at one of our luxurious villas and experience the perfect blend of vintage charm and modern
              comfort.
            </p>
            <a href="tel:+918999036644"
              class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg hover:shadow-amber-500/25 transform hover:-translate-y-1">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Book Now: +91 89990 36644
            </a>
          </div>
        </div>
      </section> -->
    </div>


    <!-- ===== FOLLOW US SECTION ===== -->
    <section class="py-20 bg-[#0F2A24] relative overflow-hidden flex flex-col items-center justify-center">
      <!-- Decorative Background Elements -->
      <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-amber-900/10 blur-3xl"></div>
        <div class="absolute -bottom-[20%] -right-[10%] w-[50%] h-[50%] rounded-full bg-emerald-900/20 blur-3xl"></div>
      </div>

      <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center w-full">
        <!-- Title -->
        <h2 class="text-6xl md:text-8xl text-[#F4EFEA] mb-12 tracking-wide drop-shadow-md"
          style="font-family: 'Dancing Script', cursive;">
          Follow us!
        </h2>

        <!-- Main Content Area -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-12 lg:gap-20 w-full max-w-6xl mx-auto">
          <!-- Phone Mockup Container (Left on Desktop, Center on Mobile) -->
          <div class="relative w-[280px] sm:w-[320px] md:w-[360px] mx-auto md:mx-0 group mt-4 md:mt-0 flex-shrink-0">
            <!-- vibrant gradient border mimicking the Instagram story/post border from user design -->
            <div
              class="absolute -inset-[3px] md:-inset-1.5 bg-gradient-to-tr from-amber-400 via-orange-500 to-purple-600 rounded-[2.8rem] md:rounded-[3rem] opacity-90 blur-[2px] group-hover:blur-[6px] transition-all duration-300">
            </div>

            <!-- Phone Body -->
            <div
              class="bg-black rounded-[2.5rem] md:rounded-[2.8rem] overflow-hidden relative shadow-2xl h-[560px] sm:h-[650px] flex flex-col border-[5px] md:border-[6px] border-black/90 z-10 w-full transform transition-transform duration-500 group-hover:scale-[1.01]">

              <!-- Dynamic Island/Notch -->
              <div class="absolute top-2 inset-x-0 z-20 flex justify-center w-full">
                <div class="w-24 sm:w-28 h-6 sm:h-7 bg-black rounded-full flex items-center justify-between px-2">
                  <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/20"></div>
                  <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/10"></div>
                </div>
              </div>

              <!-- Phone Screen -->
              <div
                class="w-full h-full bg-[#121212] relative rounded-[2rem] md:rounded-[2.2rem] overflow-x-hidden overflow-y-auto group/screen cursor-pointer hide-scrollbar-custom"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                <style>
                  .hide-scrollbar-custom::-webkit-scrollbar {
                    display: none;
                  }
                </style>
                <!-- Screenshot uploaded by user -->
                <div class="pt-9 sm:pt-11 w-full flex flex-col items-center">
                  <a href="https://www.instagram.com/retrofusion.in/" target="_blank" class="w-full">
                    <img loading="lazy"
                      src="https://res.cloudinary.com/damfndmrm/image/upload/f_auto,q_auto/v1772471878/Screenshot_2026-03-02_at_10.47.42_PM_wo3toj.png"
                      alt="Instagram Profile Screenshot"
                      class="w-full h-auto block opacity-95 transition-opacity duration-300 group-hover/screen:opacity-100" />
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Desktop Instagram Grid (Right side) -->
          <div class="hidden md:grid grid-cols-2 gap-6 w-full max-w-[540px]">

            <!-- Post 1 -->
            <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
              class="group block transform hover:-translate-y-2 transition-all duration-500">
              <div
                class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
                <!-- Header -->
                <div class="flex items-center justify-between px-3 py-2.5">
                  <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                        class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                      </svg></div>
                    <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
                  </div>
                  <span
                    class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
                </div>
                <!-- Image with amber border -->
                <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
                  <img loading="lazy"
                    src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1772473164/Screenshot_2026-03-02_at_11.08.01_PM_a5g0vs.png"
                    alt="Instagram Post"
                    class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>
                <!-- Actions -->
                <div class="px-3 pb-2.5">
                  <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-3">
                      <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                      </svg>
                    </div>
                    <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                  </div>
                  <p class="text-[#0F2A24] text-[10px] font-bold">❤ 143 likes</p>
                </div>
              </div>
            </a>

            <!-- Post 2 -->
            <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
              class="group block transform hover:-translate-y-2 transition-all duration-500 mt-6">
              <div
                class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center justify-between px-3 py-2.5">
                  <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                        class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                      </svg></div>
                    <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
                  </div>
                  <span
                    class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
                </div>
                <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
                  <img loading="lazy"
                    src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1772473164/Screenshot_2026-03-02_at_11.07.23_PM_sbgs0f.png"
                    alt="Instagram Post"
                    class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>
                <div class="px-3 pb-2.5">
                  <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-3">
                      <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                      </svg>
                    </div>
                    <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                  </div>
                  <p class="text-[#0F2A24] text-[10px] font-bold">❤ 98 likes</p>
                </div>
              </div>
            </a>

            <!-- Post 3 -->
            <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
              class="group block transform hover:-translate-y-2 transition-all duration-500">
              <div
                class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center justify-between px-3 py-2.5">
                  <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                        class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                      </svg></div>
                    <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
                  </div>
                  <span
                    class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
                </div>
                <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
                  <img loading="lazy"
                    src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1772473163/Screenshot_2026-03-02_at_11.07.36_PM_ftkdee.png"
                    alt="Instagram Post"
                    class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>
                <div class="px-3 pb-2.5">
                  <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-3">
                      <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                      </svg>
                    </div>
                    <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                  </div>
                  <p class="text-[#0F2A24] text-[10px] font-bold">❤ 217 likes</p>
                </div>
              </div>
            </a>

            <!-- Post 4 -->
            <a href="https://www.instagram.com/retrofusion.in/" target="_blank"
              class="group block transform hover:-translate-y-2 transition-all duration-500 mt-6">
              <div
                class="bg-[#F4EFEA] rounded-2xl overflow-hidden shadow-xl group-hover:shadow-2xl transition-shadow duration-300">
                <div class="flex items-center justify-between px-3 py-2.5">
                  <div class="flex items-center gap-2">
                    <div class="w-7 h-7 rounded-full bg-amber-600 flex items-center justify-center"><svg
                        class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                      </svg></div>
                    <span class="text-[#0F2A24] text-xs font-semibold">retrofusion.in</span>
                  </div>
                  <span
                    class="text-[10px] font-bold text-amber-600 border border-amber-600 rounded px-1.5 py-0.5">FOLLOW</span>
                </div>
                <div class="mx-2.5 mb-2 border-[3px] border-amber-600 rounded-lg overflow-hidden">
                  <img loading="lazy"
                    src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1772473163/Screenshot_2026-03-02_at_11.07.51_PM_yzseuz.png"
                    alt="Instagram Post"
                    class="w-full aspect-square object-cover transition-transform duration-700 group-hover:scale-105" />
                </div>
                <div class="px-3 pb-2.5">
                  <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-3">
                      <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                          d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9-7-9-7v14zM3 12l9-7v14l-9-7z" />
                      </svg>
                    </div>
                    <svg class="w-5 h-5 text-[#0F2A24]" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                  </div>
                  <p class="text-[#0F2A24] text-[10px] font-bold">❤ 175 likes</p>
                </div>
              </div>
            </a>

          </div>
        </div>

        <!-- Removed Follow Button per user request -->

      </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <!-- ===== FOOTER ===== -->
    
<?php include 'includes/footer.php'; ?>


  </div><!-- end min-h-screen -->
  <script src="js/main.js"></script>
</body>

</html>