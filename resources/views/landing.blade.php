<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ACL Treatment in Nagpur | Dr. Amit Saoji — Sports Medicine & Arthroscopy</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
    <meta name="description" content="Recover from ACL tears in weeks, not months. Advanced arthroscopic ACL reconstruction by Dr. Amit Saoji, ISAKOS fellow & sports medicine specialist in Nagpur." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ filemtime(public_path('css/landing.css')) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar" style="display:none;">
    <div class="container topbar-inner">
        <span class="tb-addr"><i class="fa-solid fa-location-dot"></i> Ramdaspeth, Nagpur</span>
        <span class="sep tb-addr">|</span>
        <a class="tb-mail" href="mailto:dramitsaojinagpur@gmail.com"><i class="fa-solid fa-envelope"></i> dramitsaojinagpur@gmail.com</a>
        <span class="push"></span>
        <a class="top-call" href="tel:+919860380444"><i class="fa-solid fa-phone"></i> +91 98603 80444</a>
    </div>
</div>

<!-- NAV -->
<header class="site-nav" style="display:none;">
    <div class="container nav-inner">
        <a href="#" class="brand">
            <img src="https://www.drsaojisorthocare.com/wp-content/uploads/2022/06/Logo-1.png" alt="Dr. Amit Saoji — Ortho Care" class="brand-logo">
        </a>
        <nav>
            <a href="#about">About</a>
            <a href="#technique">Technique</a>
            <a href="#why">Why Us</a>
            <a href="#journey">Journey</a>
            <a href="#faq">FAQ</a>
            <a href="#contact">Contact</a>
        </nav>
        @auth
            <div style="display:flex;gap:8px;align-items:center;">
                @if(auth()->user()->is_admin)
                    <a href="{{ route('admin.appointments') }}" class="btn btn-primary btn-sm">Admin Panel</a>
                @endif
                <form method="POST" action="{{ route('logout') }}" style="margin:0;">@csrf
                    <button type="submit" class="btn btn-primary btn-sm" style="border:none;cursor:pointer;">Logout</button>
                </form>
                <a href="#appointment" class="btn btn-primary btn-sm">Book Appointment</a>
            </div>
        @else
            <a href="#appointment" class="btn btn-primary btn-sm">Book Appointment</a>
        @endauth
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="container hero-inner">
        <div class="hero-copy">
            <span class="eyebrow"><i class="fa-solid fa-medal"></i> ISAKOS Certified Sports Medicine Specialist</span>
            <h1>Recover From Your <span class="hl">ACL Tear</span> In Weeks — Not Months.</h1>
            <p class="lede">Advanced arthroscopic ACL reconstruction with the latest InternalBrace augmented technique. Get back to the sport and life you love — faster, stronger, safer.</p>
            <div class="hero-cta">
                <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-calendar-check"></i> Book Free Consultation</a>
                <a href="tel:+919860380444" class="btn btn-ghost"><i class="fa-solid fa-phone"></i> Call an Ortho Expert</a>
            </div>
            <div class="hero-stats">
                <div><strong>15+</strong><span>Years Experience</span></div>
                <div><strong>2000+</strong><span>Arthroscopies</span></div>
                <div><strong>98%</strong><span>Success Rate</span></div>
            </div>
        </div>
        <div class="hero-visual" style="display:none;">
            <div class="hero-img">
                <img src="https://images.unsplash.com/photo-1638202993928-7267aad84c31?auto=format&fit=crop&w=900&q=80" alt="ACL Treatment" />
            </div>
        </div>
    </div>
    <div class="hero-bg"></div>
</section>

<!-- TRUST STRIP -->
<section class="trust-strip">
    <div class="container">
        <p>Trusted training & affiliations</p>
        <div class="logos">
            <span>JNMC Wardha</span>
            <span>Ruby Hall Clinic Pune</span>
            <span>Fortis Chandigarh</span>
            <span>ISAKOS Fellowship</span>
            <span>Sports Medicine Diploma</span>
        </div>
    </div>
</section>

<!-- ABOUT ACL -->
<section class="section" id="about">
    <div class="container two-col about-split">
        <div class="about-copy">
            <span class="tag">What is an ACL Tear?</span>
            <h2>The ACL holds your knee together. <span class="accent-ink">When it tears, everything changes.</span></h2>
            <p>The Anterior Cruciate Ligament (ACL) is one of the four key ligaments stabilising the knee. Sudden pivots, awkward landings or direct impact — common in football, cricket, kabaddi and even daily slips — can tear it. Left untreated, an ACL injury causes instability, cartilage damage and early arthritis.</p>

            <div class="symptom-grid">
                <div class="sym"><i class="fa-solid fa-volume-high"></i><div><strong>Sudden "Pop"</strong><span>Audible at the moment of injury</span></div></div>
                <div class="sym"><i class="fa-solid fa-droplet"></i><div><strong>Swelling & Pain</strong><span>Within hours, worse on weight-bearing</span></div></div>
                <div class="sym"><i class="fa-solid fa-person-falling"></i><div><strong>Knee Gives Way</strong><span>On turning or climbing stairs</span></div></div>
                <div class="sym"><i class="fa-solid fa-person-running"></i><div><strong>Can't Return to Sport</strong><span>Instability limits your activity</span></div></div>
            </div>
        </div>

        <aside class="about-visual">
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=800&q=80" alt="Knee injury">
                <div class="img-badge">
                    <i class="fa-solid fa-bolt"></i>
                    <div><strong>1 in 3</strong><span>sports injuries involve the knee</span></div>
                </div>
            </div>
            <div class="about-card">
                <div class="dyk"><i class="fa-solid fa-lightbulb"></i> Did you know?</div>
                <p>Only <strong>~50%</strong> of ACL tears actually need surgery. A clinical exam + MRI tells us whether physio alone can help, or whether advanced arthroscopic reconstruction is your best route back.</p>
                <a href="#appointment" class="btn btn-primary btn-block">Get Your MRI Reviewed Free</a>
            </div>
        </aside>
    </div>
</section>

<!-- GRADES -->
<section class="section soft" id="grades">
    <div class="container">
        <div class="section-head">
            <span class="tag">Severity</span>
            <h2>Understand Your ACL Injury Grade</h2>
            <p>Not every tear is the same. Here's how we classify — and why it matters for your treatment plan.</p>
        </div>
        <div class="grid-3">
            <div class="card grade">
                <div class="grade-num">Grade 1</div>
                <h4>Mild Sprain</h4>
                <p>Ligament is stretched but intact. Knee remains stable. Usually managed with rest, bracing and guided physiotherapy.</p>
            </div>
            <div class="card grade">
                <div class="grade-num">Grade 2</div>
                <h4>Partial Tear</h4>
                <p>Some fibres are torn. Mild instability. Treated case-by-case — advanced rehab or minimally-invasive repair.</p>
            </div>
            <div class="card grade">
                <div class="grade-num">Grade 3</div>
                <h4>Complete Tear</h4>
                <p>Ligament is fully ruptured. Knee gives way. Arthroscopic ACL reconstruction is usually the best option.</p>
            </div>
        </div>
        <div class="section-cta">
            <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-user-doctor"></i> Consult Dr. Amit Saoji</a>
        </div>
    </div>
</section>

<!-- TECHNIQUE -->
<section class="section" id="technique">
    <div class="container two-col reverse">
        <div class="tech-visual">
            <div class="tech-img">
                <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?auto=format&fit=crop&w=900&q=80" alt="Arthroscopic ACL Knee Surgery" />
                <div class="tech-badge top">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <div><strong>10–14</strong><span>weeks recovery*</span></div>
                </div>
                <div class="tech-badge bottom">
                    <i class="fa-solid fa-shield-halved"></i>
                    <div><strong>InternalBrace</strong><span>protected repair</span></div>
                </div>
            </div>
            <div class="tech-chips">
                <span><i class="fa-solid fa-circle-check"></i> 4K Arthroscopy</span>
                <span><i class="fa-solid fa-circle-check"></i> Keyhole Incisions</span>
                <span><i class="fa-solid fa-circle-check"></i> Day-Care Surgery</span>
            </div>
        </div>
        <div>
            <span class="tag">Groundbreaking Technique</span>
            <h2>Arthroscopic ACL Reconstruction <span class="accent-ink">with InternalBrace Augmentation</span></h2>
            <p>Traditional ACL surgery often means 6–9 months of recovery. With arthroscopic reconstruction augmented by the InternalBrace technique, the repaired ligament is reinforced from day one — allowing earlier weight-bearing, faster rehab, and return to sport in as little as 10–14 weeks for suitable candidates.</p>

            <div class="compare-pro">
                <div class="cp-head">
                    <div class="cp-col old"><i class="fa-solid fa-xmark"></i> Traditional Surgery</div>
                    <div class="cp-col new"><i class="fa-solid fa-check"></i> Our Approach</div>
                </div>
                <div class="cp-row">
                    <div class="cp-label">Recovery Time</div>
                    <div class="cp-old">6–9 months</div>
                    <div class="cp-new">10–14 weeks*</div>
                </div>
                <div class="cp-row">
                    <div class="cp-label">Weight-Bearing</div>
                    <div class="cp-old">Delayed</div>
                    <div class="cp-new">Day one</div>
                </div>
                <div class="cp-row">
                    <div class="cp-label">Incisions</div>
                    <div class="cp-old">Larger, open</div>
                    <div class="cp-new">Keyhole, minimal</div>
                </div>
                <div class="cp-row">
                    <div class="cp-label">Re-Tear Risk</div>
                    <div class="cp-old">Higher</div>
                    <div class="cp-new">Significantly lower</div>
                </div>
            </div>

            <a href="#appointment" class="btn btn-primary">Plan My Treatment</a>
        </div>
    </div>
</section>

<!-- WHY -->
<section class="section soft" id="why">
    <div class="container">
        <div class="section-head">
            <span class="tag">Why Trust Us</span>
            <h2>Outcomes You Can Count On</h2>
        </div>
        <div class="grid-3 stats">
            <div class="stat-card"><strong>98%</strong><p>Stability Restoration</p></div>
            <div class="stat-card"><strong>95%</strong><p>Return-to-Sport Function</p></div>
            <div class="stat-card"><strong>60%</strong><p>Faster Recovery Time</p></div>
        </div>
        <div class="grid-4 feature-grid">
            <div class="card feat"><i class="fa-solid fa-user-doctor"></i><h4>ISAKOS Fellow</h4><p>International fellowship in joint arthroscopy & sports medicine.</p></div>
            <div class="card feat"><i class="fa-solid fa-microscope"></i><h4>Latest Tech</h4><p>4K arthroscopy with InternalBrace augmentation.</p></div>
            <div class="card feat"><i class="fa-solid fa-heart-pulse"></i><h4>Personalised Plan</h4><p>Every knee is different. Your plan is built for you.</p></div>
            <div class="card feat"><i class="fa-solid fa-person-running"></i><h4>Sport-Ready Rehab</h4><p>Guided recovery protocols to get you back stronger.</p></div>
        </div>
        <div class="section-cta">
            <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-user-doctor"></i> Consult Dr. Amit Saoji</a>
        </div>
    </div>
</section>

<!-- WHO -->
<section class="section" id="who">
    <div class="container">
        <div class="section-head">
            <span class="tag">Eligibility</span>
            <h2>Who Can Benefit?</h2>
            <p>If you've experienced any of the following, you're a candidate for assessment.</p>
        </div>
        <div class="benefit-grid">
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-futbol"></i></div>
                <h4>Competitive Athletes</h4>
                <p>Football, cricket, kabaddi, badminton and running players needing to return to peak performance.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-bolt"></i></div>
                <h4>Sudden Knee Injury</h4>
                <p>A recent twist or fall with swelling and an audible "pop" — classic ACL tear warning signs.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-person-falling-burst"></i></div>
                <h4>Unstable Knee</h4>
                <p>Your knee "gives way" on turning, climbing stairs, or even on uneven ground.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-rotate"></i></div>
                <h4>Failed Previous ACL</h4>
                <p>Earlier ACL reconstruction that didn't hold, or a re-injury needing revision surgery.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-briefcase-medical"></i></div>
                <h4>Working Professionals</h4>
                <p>Jobs on your feet, long commutes, or field work — you can't afford an unstable knee.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-heart-pulse"></i></div>
                <h4>Active Adults</h4>
                <p>Unwilling to give up the lifestyle you love — hikes, gym, yoga, dance or daily runs.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-medal"></i></div>
                <h4>Recreational Players</h4>
                <p>Weekend warriors aiming to get back on the field without fear of re-tear.</p>
            </div>
            <div class="ben-card">
                <div class="ben-ico"><i class="fa-solid fa-person-hiking"></i></div>
                <h4>Runners & Trekkers</h4>
                <p>Marathoners, trekkers and gym enthusiasts ready for a pain-free comeback.</p>
            </div>
        </div>
        <div class="section-cta">
            <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-circle-check"></i> Check My Eligibility</a>
        </div>
    </div>
</section>

<!-- DOCTOR -->
<section class="section soft" id="doctor">
    <div class="container two-col">
        <div class="doctor-visual">
            <div class="doctor-img doctor-placeholder" aria-label="Dr. Amit Saoji photo"><i class="fa-solid fa-user-doctor"></i></div>
        </div>
        <div>
            <span class="tag">Meet Your Surgeon</span>
            <h2>Dr. Amit Saoji</h2>
            <p class="subtitle">Consultant Orthopaedic, Arthroscopy & Sports Medicine Surgeon — Nagpur</p>
            <p>Dr. Amit Saoji is a dedicated orthopaedic surgeon specialising in the shoulder, knee and hip. With advanced fellowships in arthroscopy and sports medicine from leading institutions in India and internationally, he brings world-class care to Nagpur.</p>
            <ul class="creds">
                <li><i class="fa-solid fa-graduation-cap"></i> MBBS — JNMC, Wardha</li>
                <li><i class="fa-solid fa-graduation-cap"></i> DNB Orthopaedics — Ruby Hall Clinic, Pune</li>
                <li><i class="fa-solid fa-award"></i> ISAKOS Fellowship — Joint Arthroscopy & Sports Medicine</li>
                <li><i class="fa-solid fa-award"></i> Shoulder & Knee Arthroscopy Fellowship — Fortis, Chandigarh</li>
                <li><i class="fa-solid fa-award"></i> Diploma in Sports Medicine</li>
            </ul>
            <div style="margin-top:22px;">
                <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-user-doctor"></i> Consult Dr. Amit Saoji</a>
            </div>
        </div>
    </div>
</section>

<!-- JOURNEY -->
<section class="section" id="journey">
    <div class="container">
        <div class="section-head">
            <span class="tag">Patient Journey</span>
            <h2>Your Path Back to the Game — in 5 Steps</h2>
        </div>
        <div class="journey">
            <div class="step"><span>1</span><h4>Share Your MRI</h4><p>WhatsApp your MRI/X-ray for a free initial opinion.</p></div>
            <div class="step"><span>2</span><h4>Clinical Exam</h4><p>In-person assessment with Dr. Saoji to confirm diagnosis.</p></div>
            <div class="step"><span>3</span><h4>Treatment Plan</h4><p>Surgery or rehab — personalised to your body and goals.</p></div>
            <div class="step"><span>4</span><h4>Arthroscopic Surgery</h4><p>Minimally invasive, same-day or overnight stay.</p></div>
            <div class="step"><span>5</span><h4>Return to Sport</h4><p>Guided rehab until you're stronger than before.</p></div>
        </div>
        <div class="section-cta">
            <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-user-doctor"></i> Consult Dr. Amit Saoji</a>
        </div>
    </div>
</section>

<!-- APPOINTMENT -->
<section class="section cta-band" id="appointment">
    <div class="container two-col cta-split">
        <div class="cta-copy">
            <span class="tag light">Book Now</span>
            <h2 class="cta-heading">Get Your <span class="underline-accent">Free ACL Assessment</span> Today</h2>
            <p class="cta-lede">Share your details — our team will call you within a working day to schedule your consultation with Dr. Amit Saoji, ISAKOS-certified sports medicine specialist.</p>

            <div class="cta-perks">
                <div class="perk"><i class="fa-solid fa-file-medical"></i><div><strong>Free MRI Review</strong><span>Upload once, get expert eyes</span></div></div>
                <div class="perk"><i class="fa-solid fa-clipboard-list"></i><div><strong>Transparent Plan</strong><span>No hidden costs or surprises</span></div></div>
                <div class="perk"><i class="fa-solid fa-handshake"></i><div><strong>Zero Obligation</strong><span>Consult first, decide later</span></div></div>
                <div class="perk"><i class="fa-solid fa-shield-halved"></i><div><strong>100% Confidential</strong><span>Your data stays private</span></div></div>
            </div>

            <div class="cta-trust">
                <div class="ct-stat"><strong>2000+</strong><span>Arthroscopies</span></div>
                <div class="ct-sep"></div>
                <div class="ct-stat"><strong>98%</strong><span>Success rate</span></div>
                <div class="ct-sep"></div>
                <div class="ct-stat"><strong>15+</strong><span>Years experience</span></div>
            </div>
        </div>
        <div style="display:none">
            <ul class="tick-list light">
                <li>Free MRI review</li>
                <li>Transparent treatment plan</li>
                <li>No obligation consultation</li>
            </ul>
        </div>
        <form id="appointmentForm" class="appt-form" method="POST" action="{{ route('appointment.store') }}">
            @csrf
            <div class="form-row" style="display:flex;gap:12px;flex-wrap:wrap;">
                <label style="flex:1 1 200px;">Your Name
                    <input type="text" name="name" placeholder="Full name" required>
                </label>
                <label style="flex:1 1 200px;">Email
                    <input type="email" name="email" placeholder="you@example.com" required>
                </label>
            </div>
            <label>Mobile Number
                <input type="tel" name="phone" placeholder="+91 9xxxx xxxxx" required>
            </label>
            <label>Brief Message (optional)
                <textarea name="message" rows="3" placeholder="Tell us briefly about your injury"></textarea>
            </label>
            <button type="submit" class="btn btn-primary btn-block">Book Free Appointment</button>
            <p class="form-note"><i class="fa-solid fa-lock"></i> Your details are confidential.</p>
        </form>
    </div>
</section>

<!-- FAQ -->
<section class="section soft" id="faq">
    <div class="container narrow">
        <div class="section-head">
            <span class="tag">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq">
            <details open>
                <summary>Does every ACL tear need surgery?</summary>
                <p>No. Around half of ACL tears can be managed with structured physiotherapy alone. Surgery is recommended when the knee remains unstable or when patients want to return to pivoting sports.</p>
            </details>
            <details>
                <summary>How soon can I walk after ACL surgery?</summary>
                <p>With our minimally invasive approach and InternalBrace augmentation, most patients walk with support from day one and progress to independent walking within 2–3 weeks.</p>
            </details>
            <details>
                <summary>When can I return to sport?</summary>
                <p>Return to sport depends on the graft, rehab compliance and sport type — typically 4–6 months for recreational sport and 6–9 months for competitive pivoting sports.</p>
            </details>
            <details>
                <summary>Is the surgery safe?</summary>
                <p>Arthroscopic ACL reconstruction is one of the most established sports surgeries worldwide with excellent safety and success rates in experienced hands.</p>
            </details>
            <details>
                <summary>Do you accept insurance?</summary>
                <p>Yes, most major health insurance plans are accepted. Our team will help with pre-authorisation and paperwork.</p>
            </details>
        </div>
        <div class="section-cta">
            <a href="#appointment" class="btn btn-primary"><i class="fa-solid fa-comments"></i> Still Have Questions? Book Consultation</a>
        </div>
    </div>
</section>

<!-- CONTACT / FOOTER -->
<footer class="site-footer" id="contact">
    <div class="container grid-foot">
        <div>
            <div class="brand">
                <img src="https://www.drsaojisorthocare.com/wp-content/uploads/2022/06/Logo-1.png" alt="Dr. Amit Saoji — Ortho Care" class="brand-logo foot-logo">
            </div>
            <p class="foot-about">Specialist care for ACL, knee, shoulder and hip — bringing world-class arthroscopic surgery to Nagpur.</p>
        </div>
        <div>
            <h5>Visit Us</h5>
            <p><i class="fa-solid fa-location-dot"></i> Shop No. 1, Ground Floor, Meher Prasad Complex, Central Bazar Road, beside Neeti Gaurav Complex, Ramdaspeth, Nagpur — 440010</p>
        </div>
        <div>
            <h5>Contact</h5>
            <p><i class="fa-solid fa-phone"></i> <a href="tel:+919860380444">+91 98603 80444</a></p>
            <p><i class="fa-solid fa-envelope"></i> <a href="mailto:dramitsaojinagpur@gmail.com">dramitsaojinagpur@gmail.com</a></p>
            <p><i class="fa-solid fa-globe"></i> <a href="https://www.drsaojisorthocare.com/" target="_blank">drsaojisorthocare.com</a></p>
        </div>
        <div>
            <h5>Quick Links</h5>
            <ul class="foot-links">
                <li><a href="#about">About ACL</a></li>
                <li><a href="#technique">Technique</a></li>
                <li><a href="#journey">Patient Journey</a></li>
                <li><a href="#appointment">Book Appointment</a></li>
            </ul>
        </div>
    </div>
    <div class="foot-bottom">
        <div class="container">
            <p>&copy; {{ date('Y') }} Dr. Amit Saoji. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- FLOATING CALL -->
<a href="tel:+919860380444" class="fab-call" aria-label="Call Now"><i class="fa-solid fa-phone"></i></a>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "4000"
    };

    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $('#appointmentForm').on('submit', function (e) {
            e.preventDefault();
            var $form = $(this);
            var $btn = $form.find('button[type="submit"]');
            $btn.prop('disabled', true).text('Submitting...');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function (res) {
                    toastr.success(res.message || 'Appointment booked successfully!');
                    $form[0].reset();
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors || {};
                        Object.keys(errors).forEach(function (k) {
                            toastr.error(errors[k][0]);
                        });
                    } else {
                        toastr.error('Something went wrong. Please try again.');
                    }
                },
                complete: function () {
                    $btn.prop('disabled', false).text('Book Free Appointment');
                }
            });
        });
    });
</script>
<a href="https://wa.me/919860380444" target="_blank" class="fab-wa" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>

</body>
</html>
