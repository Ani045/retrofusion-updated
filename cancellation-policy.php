<?php
$pageTitle = "Reservation & Cancellation Policy - Retrofusion Boutique Homestays";
$pageDescription = "Retrofusion Reservation, Cancellation & Stay Policy - Information regarding booking confirmations, security deposits, cancellations, and guest conduct.";
include 'includes/header.php';
?>

    <!-- ===== CANCELLATION POLICY CONTENT ===== -->

    <!-- Hero Section -->
    <section class="relative h-[40vh] md:h-[50vh] flex items-center justify-center overflow-hidden">
      <div class="absolute inset-0 z-0">
        <img loading="lazy" src="https://res.cloudinary.com/dprafk917/image/upload/f_auto,q_auto/v1769863039/01_qwhl8a.jpg" alt="Cancellation Policy"
          class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/40 to-black/60"></div>
      </div>

      <div class="relative z-10 text-center px-4 max-w-4xl mx-auto scroll-reveal">
        <div>
          <span class="text-white uppercase tracking-[0.3em] text-sm mb-4 block font-light">
            Retrofusion Boutique Homestays
          </span>
          <h1 class="text-3xl md:text-5xl text-white font-bold mb-4 font-display leading-tight">
            Reservation, Cancellation & Stay Policy
          </h1>
          <p class="text-stone-300 text-lg font-light max-w-xl mx-auto">
            Clear guidelines for a seamless stay experience
          </p>
        </div>
      </div>
    </section>

    <!-- Introductory Notice -->
    <section class="py-8 bg-amber-50 border-y border-amber-100">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center">
            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-stone-900 mb-1">Welcome to Our Homes</h3>
            <p class="text-stone-600 text-sm leading-relaxed">
              Our homes are prepared with care for every guest. The following policies help ensure a smooth and pleasant
              experience for both our guests and our team.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 md:py-24">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-8">

          <!-- 1. Booking Confirmation -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">1. Booking Confirmation</h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">A reservation is confirmed upon receipt of a 50%
                      advance payment of the total rental amount.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">The remaining 50% balance is payable at the time of
                      check-in, along with the security deposit.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 2. Security Deposit -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">2. Security Deposit</h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">A refundable security deposit of ₹10,000 or 50% of the
                      rent (whichever is lower) is payable at the time of check-in.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">The deposit will be returned at check-out once the
                      property has been fully vacated, after adjustments for any breakage, damages, or missing items, if
                      applicable.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 3. Cancellation Policy -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">3. Cancellation Policy</h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Cancellations are accepted up to 4 weeks prior to the
                      scheduled arrival date, in which case the advance payment will be fully refunded.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Cancellations made within 4 weeks of the arrival date
                      will be treated as non-refundable, and the advance amount will not be refunded.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 4. Postponement Policy -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">4. Postponement Policy</h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Bookings cannot be postponed to another weekend
                      date.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">However, in case of a genuine emergency, the stay may
                      be rescheduled to a weekday during the off-season, subject to availability. The original booking
                      tariff will remain applicable.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 5. Unforeseen Circumstances -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">5. Unforeseen Circumstances
                </h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">In rare cases of natural calamities, technical issues,
                      government restrictions, or other situations beyond our control, we reserve the right to cancel
                      the booking.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">In such situations, the entire advance payment will be
                      refunded, and no further liabilities shall apply.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 6. Guest Conduct -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">6. Guest Conduct</h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">We strive to maintain a peaceful and respectful
                      environment for all guests.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">The hosts reserve the right to cancel a booking without
                      prior notice in the event of bullying, misconduct, illegal activities, or inappropriate behaviour
                      by any guest.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 7. Check-in and Check-out -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">7. Check-in and Check-out
                </h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Check-in: Any time after 2:00 PM on the day of
                      arrival</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Check-out: By 11:00 AM on the day of departure</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Early check-in before 1:30 PM and late check-out after
                      11:30 AM may be available subject to availability and will be chargeable at ₹2,000 per 1–60
                      minutes.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">As the property often has back-to-back reservations,
                      especially around weekends, early check-in and late check-out may not always be possible. This
                      allows us adequate time to clean, prepare, and thoughtfully ready the space for incoming
                      guests.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- 8. Terms & Conditions -->
          <div
            class="bg-white rounded-2xl shadow-lg border border-stone-100 p-8 md:p-10 hover:shadow-xl transition-shadow duration-300 scroll-reveal">
            <div class="flex items-start gap-5">
              <div
                class="flex-shrink-0 w-12 h-12 rounded-xl bg-gradient-to-br from-amber-50 to-amber-100 flex items-center justify-center">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div class="flex-1">
                <h2 class="text-xl md:text-2xl font-bold text-stone-900 mb-4 font-display">8. Terms & Conditions</h2>
                <ul class="space-y-3">
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">Retrofusion Boutique Homestays will process any owed
                      refunds within 5–7 working days, with a 5% cancellation fee for covering gateway charges and
                      minimal processing fees (wherever applicable).</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">GST at applicable rates will be charged on the
                      cancellation fee.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">A reservation is officially deemed "cancelled" when
                      both the guest and reservations personnel confirm it through direct communication.</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></span>
                    <span class="text-stone-600 leading-relaxed">For early check-outs, the accommodation and cleaning
                      fee refund will be determined by Retrofusion Boutique Homestays.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact for Questions -->
        <div
          class="mt-12 bg-gradient-to-br from-stone-800 to-stone-900 rounded-2xl p-8 md:p-10 text-center scroll-reveal">
          <h3 class="text-2xl font-bold text-white mb-3 font-display">Have Questions?</h3>
          <p class="text-stone-300 mb-6">Our team is here to help with any questions about our policies.</p>
          <a href="contact.php"
            class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold rounded-full transition-all duration-300 shadow-lg hover:shadow-amber-500/25">Contact
            Us</a>
        </div>

      </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <!-- ===== FOOTER ===== -->
    <!-- ===== FOOTER ===== -->
    
<?php include 'includes/footer.php'; ?>


  </div><!-- end min-h-screen -->
  <script src="js/main.js"></script>
</body>

</html>