<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Grant Writing Master Class | Grow West Africa</title>
  <meta name="description" content="Master the art of winning grant proposals. Learn proven strategies that have helped secure over $100k+ in grants."/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { inter: ['Inter', 'sans-serif'] },
          colors: {
            olive: { 50:'#f6f9f0',100:'#e9f0d9',200:'#d4e2b5',300:'#b5cd82',400:'#96b55a',500:'#6b8c42',600:'#5b7b32',700:'#4a6428',800:'#3d5123',900:'#344521' },
            stone: { 50:'#fafaf9',100:'#f0efed',200:'#d9d7d2',300:'#b8b5ae',400:'#9e9a92',500:'#848078',600:'#6e6b64',700:'#5a5852',800:'#4b4945',900:'#41403c' },
            dark: { 800:'#1e1e24',900:'#141418',950:'#0c0c0f' }
          }
        }
      }
    }
  </script>
  <style>
    html{scroll-behavior:smooth}
    body{font-family:'Inter',sans-serif}
    @keyframes fadeUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
    @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
    @keyframes pulse-glow{0%,100%{box-shadow:0 0 20px rgba(107,140,66,.25)}50%{box-shadow:0 0 40px rgba(107,140,66,.5)}}
    .fade-up{animation:fadeUp .8s ease forwards;opacity:0}
    .delay-1{animation-delay:.2s}.delay-2{animation-delay:.4s}.delay-3{animation-delay:.6s}.delay-4{animation-delay:.8s}
    .float-anim{animation:float 3s ease-in-out infinite}
    .glow{animation:pulse-glow 2s ease-in-out infinite}
    .glass{background:rgba(255,255,255,.04);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,.08)}
    .olive-glass{background:rgba(107,140,66,.08);backdrop-filter:blur(10px);border:1px solid rgba(107,140,66,.2)}
    .gradient-text{background:linear-gradient(135deg,#6b8c42,#96b55a,#b5cd82);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
    .card-hover{transition:all .4s cubic-bezier(.25,.8,.25,1)}
    .card-hover:hover{transform:translateY(-6px);box-shadow:0 20px 60px rgba(107,140,66,.15)}
    .btn-primary{background:linear-gradient(135deg,#5b7b32,#6b8c42);transition:all .3s ease;position:relative;overflow:hidden}
    .btn-primary::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,#6b8c42,#96b55a);opacity:0;transition:opacity .3s}
    .btn-primary:hover::after{opacity:1}
    .btn-primary span{position:relative;z-index:1}
    .progress-ring{background:conic-gradient(#6b8c42 0deg,#6b8c42 342deg,rgba(255,255,255,.08) 342deg)}
    .section-divider{height:1px;background:linear-gradient(90deg,transparent,rgba(107,140,66,.3),transparent)}
  </style>
</head>
<body class="bg-dark-950 text-white overflow-x-hidden">

<!-- Nav -->
<nav class="sticky top-0 w-full z-50 glass">
  <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
    <a href="#" class="flex items-center gap-3">
      <img src="images/logo.png" alt="" class="h-12">
    </a>
    <div class="hidden md:flex items-center gap-8">
      <a href="#why" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Why Us</a>
      <a href="#outcomes" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Outcomes</a>
      <a href="#curriculum" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Curriculum</a>
      <a href="#instructor" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Instructor</a>
      <a href="#cta" class="btn-primary px-6 py-2.5 rounded-full text-white font-semibold text-sm"><span>Enroll Now</span></a>
    </div>
    <button id="mobile-toggle" class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-3">
    <a href="#why" class="block text-stone-300 hover:text-olive-400">Why Us</a>
    <a href="#outcomes" class="block text-stone-300 hover:text-olive-400">Outcomes</a>
    <a href="#curriculum" class="block text-stone-300 hover:text-olive-400">Curriculum</a>
    <a href="#instructor" class="block text-stone-300 hover:text-olive-400">Instructor</a>
    <a href="#cta" class="block btn-primary px-6 py-2.5 rounded-full text-white font-semibold text-center text-sm"><span>Enroll Now</span></a>
  </div>
</nav>

<!-- Hero -->
<section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-dark-950 via-dark-900 to-olive-900/10"></div>
  <div class="absolute top-20 right-0 w-[500px] h-[500px] bg-olive-500/5 rounded-full blur-[100px]"></div>
  <div class="absolute bottom-10 left-10 w-72 h-72 bg-olive-600/5 rounded-full blur-[80px]"></div>
  <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
    <div>
      <div class="fade-up inline-flex items-center gap-2 olive-glass rounded-full px-4 py-2 mb-6">
        <span class="w-2 h-2 bg-olive-400 rounded-full animate-pulse"></span>
        <span class="text-olive-400 text-sm font-medium">Enrollment Now Open</span>
      </div>
      <h1 class="fade-up delay-1 text-4xl md:text-6xl font-black leading-tight mb-6">
        Grant Writing<br/><span class="gradient-text">Master Class</span>
      </h1>
      <p class="fade-up delay-2 text-stone-400 text-lg md:text-xl max-w-lg mb-8 leading-relaxed">
        Master the art of winning grant proposals. Transform your writing skills and secure the funding you need. Learn proven strategies that have helped secure over <strong class="text-white">$100k+</strong> in grants.
      </p>
      <div class="fade-up delay-3 flex flex-wrap gap-4 mb-12">
        <a href="#cta" class="btn-primary px-8 py-4 rounded-full text-white font-bold text-lg glow"><span>Start Your Journey →</span></a>
        <a href="#curriculum" class="glass px-8 py-4 rounded-full text-white font-semibold hover:bg-white/10 transition">View Curriculum</a>
      </div>
      <!-- Stats Row -->
      <div class="fade-up delay-4 grid grid-cols-3 gap-6">
        <div class="text-center">
          <div class="relative w-20 h-20 mx-auto mb-2 rounded-full progress-ring flex items-center justify-center">
            <div class="w-16 h-16 bg-dark-950 rounded-full flex items-center justify-center">
              <span class="text-xl font-bold text-olive-400">95%</span>
            </div>
          </div>
          <p class="text-stone-500 text-sm">Success Rate</p>
        </div>
        <div class="text-center">
          <div class="w-20 h-20 mx-auto mb-2 olive-glass rounded-full flex items-center justify-center">
            <span class="text-lg font-bold text-olive-400">$100k+</span>
          </div>
          <p class="text-stone-500 text-sm">Grants Secured</p>
        </div>
        <div class="text-center">
          <div class="w-20 h-20 mx-auto mb-2 olive-glass rounded-full flex items-center justify-center">
            <span class="text-xl font-bold text-olive-400">60+</span>
          </div>
          <p class="text-stone-500 text-sm">Students Trained</p>
        </div>
      </div>
    </div>
    <div class="relative hidden lg:block">
      <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl float-anim">
        <img src="images/hero.png" alt="Grant Writing Professional" class="w-full h-[550px] object-cover"/>
        <div class="absolute inset-0 bg-gradient-to-t from-dark-950/80 via-transparent to-transparent"></div>
      </div>
      <div class="absolute -bottom-6 -left-6 glass rounded-2xl p-4 fade-up delay-3">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-olive-500/20 rounded-full flex items-center justify-center">
            <svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          </div>
          <div>
            <p class="text-white font-semibold text-sm">Highly Rated</p>
            <p class="text-olive-400 text-xs">★★★★★ 5.0</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Why Section -->
<section id="why" class="py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-dark-900/30 to-dark-950"></div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">Our Methodology</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">Why Our Training <span class="gradient-text">Works</span></h2>
      <p class="text-stone-400 max-w-2xl mx-auto text-lg">Our comprehensive approach combines proven methodologies with practical tools to give you everything you need to write winning grant proposals.</p>
    </div>
    <!-- Feature Card Large -->
    <div class="glass rounded-3xl p-8 md:p-12 mb-8 card-hover grid md:grid-cols-2 gap-8 items-center">
      <div>
        <div class="w-14 h-14 bg-olive-500/15 rounded-2xl flex items-center justify-center mb-6">
          <svg class="w-7 h-7 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
        </div>
        <h3 class="text-2xl font-bold mb-3">Data-Driven Approach</h3>
        <p class="text-stone-400 leading-relaxed">Master the art of presenting compelling data and metrics that donors can't ignore. Learn to back every claim with evidence that builds credibility and trust.</p>
      </div>
      <div class="rounded-2xl overflow-hidden border border-white/10">
        <img src="images/writing.png" alt="Data Driven Grant Writing" class="w-full h-64 object-cover"/>
      </div>
    </div>
    <!-- Feature Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="glass rounded-2xl p-8 card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-5 group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Proven Framework</h3>
        <p class="text-stone-400">Learn the exact 7-step framework used by successful grant writers to craft compelling proposals.</p>
      </div>
      <div class="glass rounded-2xl p-8 card-hover group">
        <div class="w-12 h-12 bg-olive-300/15 rounded-xl flex items-center justify-center mb-5 group-hover:bg-olive-300/25 transition">
          <svg class="w-6 h-6 text-olive-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Story Selling Mastery</h3>
        <p class="text-stone-400">Transform dry facts into compelling narratives that connect emotionally with funders.</p>
      </div>
      <div class="glass rounded-2xl p-8 card-hover group">
        <div class="w-12 h-12 bg-stone-400/15 rounded-xl flex items-center justify-center mb-5 group-hover:bg-stone-400/25 transition">
          <svg class="w-6 h-6 text-stone-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Funder Research</h3>
        <p class="text-stone-400">Discover how to identify and research the perfect funders for your specific project.</p>
      </div>
      <div class="glass rounded-2xl p-8 card-hover group">
        <div class="w-12 h-12 bg-olive-400/15 rounded-xl flex items-center justify-center mb-5 group-hover:bg-olive-400/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Writing Excellence</h3>
        <p class="text-stone-400">Develop crystal-clear, persuasive writing that communicates your vision effectively.</p>
      </div>
      <div class="glass rounded-2xl p-8 card-hover group md:col-span-2 lg:col-span-1">
        <div class="w-12 h-12 bg-olive-200/15 rounded-xl flex items-center justify-center mb-5 group-hover:bg-olive-200/25 transition">
          <svg class="w-6 h-6 text-olive-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Templates &amp; Tools</h3>
        <p class="text-stone-400">Get access to proven templates, checklists and tools that streamline your process.</p>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Outcomes -->
<section id="outcomes" class="py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 to-olive-900/5"></div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">Results That Speak</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">Expected <span class="gradient-text">Outcomes</span></h2>
      <p class="text-stone-400 max-w-2xl mx-auto text-lg">Be among the first to experience this transformative training and achieve these results.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="glass rounded-3xl p-10 text-center card-hover group">
        <div class="text-6xl font-black gradient-text mb-2">300%</div>
        <h3 class="text-xl font-bold mb-3">Higher Success Rate</h3>
        <p class="text-stone-400">Learn proven strategies that increase your grant approval rate by up to 300%.</p>
        <div class="mt-6 h-1 w-0 group-hover:w-full bg-gradient-to-r from-olive-600 to-olive-400 rounded transition-all duration-500 mx-auto"></div>
      </div>
      <div class="relative glass rounded-3xl p-10 text-center card-hover group" style="border-color:rgba(107,140,66,.25)">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-olive-600 text-white text-xs font-bold px-4 py-1 rounded-full">Most Impactful</div>
        <div class="text-6xl font-black gradient-text mb-2 mt-2">50%</div>
        <h3 class="text-xl font-bold mb-3">Faster Writing</h3>
        <p class="text-stone-400">Master templates and frameworks that cut your proposal writing time in half.</p>
        <div class="mt-6 h-1 w-0 group-hover:w-full bg-gradient-to-r from-olive-600 to-olive-400 rounded transition-all duration-500 mx-auto"></div>
      </div>
      <div class="glass rounded-3xl p-10 text-center card-hover group">
        <div class="text-6xl font-black gradient-text mb-2">2x</div>
        <h3 class="text-xl font-bold mb-3">Bigger Grants</h3>
        <p class="text-stone-400">Discover how to craft compelling cases for larger funding amounts.</p>
        <div class="mt-6 h-1 w-0 group-hover:w-full bg-gradient-to-r from-olive-600 to-olive-400 rounded transition-all duration-500 mx-auto"></div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Instructor -->
<section id="instructor" class="py-24 relative">
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="glass rounded-3xl p-8 md:p-16 grid md:grid-cols-2 gap-12 items-center">
      <div class="relative">
        <div class="rounded-3xl overflow-hidden" style="border:2px solid rgba(107,140,66,.3)">
          <img src="images/instructor.png" alt="Expert Instructor" class="w-full h-[450px] object-cover"/>
        </div>
        <div class="absolute -bottom-4 -right-4 bg-olive-600 rounded-2xl px-6 py-3 shadow-lg">
          <p class="text-white font-bold text-sm">$100k+ Secured</p>
        </div>
      </div>
      <div>
        <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">Meet Your Mentor</span>
        <h2 class="text-3xl md:text-4xl font-bold mt-3 mb-6">Your Expert <span class="gradient-text">Instructor</span></h2>
        <p class="text-stone-400 text-lg leading-relaxed mb-8">Led by a seasoned grant writer with over 15 years of experience and $100k+ in successful funding secured.</p>
        <div class="space-y-4">
          <div class="flex items-center gap-4"><div class="w-10 h-10 bg-olive-500/15 rounded-full flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></div><span class="text-stone-300">5+ Years of Grant Writing Experience</span></div>
          <div class="flex items-center gap-4"><div class="w-10 h-10 bg-olive-500/15 rounded-full flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></div><span class="text-stone-300">$100k+ in Grants Successfully Secured</span></div>
          <div class="flex items-center gap-4"><div class="w-10 h-10 bg-olive-500/15 rounded-full flex items-center justify-center shrink-0"><svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg></div><span class="text-stone-300">60+ Students Successfully Trained</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Curriculum -->
<section id="curriculum" class="py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-olive-900/5 to-dark-950"></div>
  <div class="relative max-w-4xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">5-Day Intensive Program</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">Course <span class="gradient-text">Curriculum</span></h2>
      <p class="text-stone-400 max-w-2xl mx-auto text-lg">A comprehensive 3-day lecture + 2-day activity program designed to take you from beginner to confident grant writer.</p>
    </div>
    <div class="space-y-6">
      <!-- Day 1 -->
      <div class="glass rounded-2xl p-8 card-hover">
        <div class="flex flex-wrap items-center justify-between mb-4">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-olive-600 rounded-2xl flex items-center justify-center text-white font-bold text-lg shrink-0">01</div>
            <div><h3 class="text-xl font-bold">Foundation &amp; Strategy</h3><p class="text-olive-400 text-sm font-medium">Day 1 — Lecture</p></div>
          </div>
          <span class="olive-glass px-4 py-1.5 rounded-full text-olive-400 text-sm font-medium mt-2 md:mt-0">2 Hours</span>
        </div>
        <div class="pl-0 md:pl-[4.5rem] space-y-3">
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Understanding grants &amp; funding sources</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Grant readiness assessment</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Researching grant opportunities</span></div>
        </div>
      </div>
      <!-- Day 2 -->
      <div class="glass rounded-2xl p-8 card-hover">
        <div class="flex flex-wrap items-center justify-between mb-4">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-olive-500 rounded-2xl flex items-center justify-center text-white font-bold text-lg shrink-0">02</div>
            <div><h3 class="text-xl font-bold">Writing a Winning Proposal</h3><p class="text-olive-400 text-sm font-medium">Day 2 — Lecture</p></div>
          </div>
          <span class="olive-glass px-4 py-1.5 rounded-full text-olive-400 text-sm font-medium mt-2 md:mt-0">2 Hours</span>
        </div>
        <div class="pl-0 md:pl-[4.5rem] space-y-3">
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Key components of a grant proposal</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Writing a compelling narrative</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Budget development</span></div>
        </div>
      </div>
      <!-- Day 3 -->
      <div class="glass rounded-2xl p-8 card-hover">
        <div class="flex flex-wrap items-center justify-between mb-4">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-olive-400 rounded-2xl flex items-center justify-center text-dark-950 font-bold text-lg shrink-0">03</div>
            <div><h3 class="text-xl font-bold">Submission &amp; Best Practices</h3><p class="text-olive-300 text-sm font-medium">Day 3 — Lecture</p></div>
          </div>
          <span class="olive-glass px-4 py-1.5 rounded-full text-olive-400 text-sm font-medium mt-2 md:mt-0">2 Hours</span>
        </div>
        <div class="pl-0 md:pl-[4.5rem] space-y-3">
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-300 rounded-full"></span><span class="text-stone-300">Finalizing the proposal</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-300 rounded-full"></span><span class="text-stone-300">Letters of support &amp; attachments</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-300 rounded-full"></span><span class="text-stone-300">Submission process</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-300 rounded-full"></span><span class="text-stone-300">Post-submission strategies</span></div>
        </div>
      </div>
      <!-- Days 4-5 -->
      <div class="glass rounded-2xl p-8 card-hover" style="border-color:rgba(107,140,66,.2)">
        <div class="flex flex-wrap items-center justify-between mb-4">
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-white font-bold text-sm shrink-0" style="background:linear-gradient(135deg,#5b7b32,#96b55a)">4-5</div>
            <div><h3 class="text-xl font-bold">Hands-On Activities</h3><p class="text-olive-400 text-sm font-medium">Days 4–5 — Workshop</p></div>
          </div>
          <span class="olive-glass px-4 py-1.5 rounded-full text-olive-400 text-sm font-medium mt-2 md:mt-0">Practical</span>
        </div>
        <div class="pl-0 md:pl-[4.5rem] space-y-3">
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Guided exercises &amp; real-world practice</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Homework assignments with feedback</span></div>
          <div class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-olive-400 rounded-full"></span><span class="text-stone-300">Peer review &amp; instructor critique</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- CTA -->
<section id="cta" class="py-24 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-olive-900/10 to-dark-950"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-olive-500/8 rounded-full blur-[120px]"></div>
  <div class="relative max-w-3xl mx-auto px-6 text-center">
    <div class="glass rounded-3xl p-12 md:p-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">Limited Spots Available</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-4 mb-6">Ready to Transform Your <span class="gradient-text">Grant Writing?</span></h2>
      <p class="text-stone-400 text-lg mb-10 max-w-xl mx-auto">Join the next cohort and start writing winning proposals that secure the funding your projects deserve.</p>
      <a href="#" class="inline-block btn-primary px-12 py-5 rounded-full text-white font-bold text-xl glow"><span>Enroll Now — Start Your Journey</span></a>
      <div class="flex flex-wrap justify-center gap-8 mt-10 text-stone-400 text-sm">
        <div class="flex items-center gap-2"><svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>5-Day Intensive</div>
        <div class="flex items-center gap-2"><svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Templates Included</div>
        <div class="flex items-center gap-2"><svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Certificate</div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-12 border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
          <img src="images/logo.png" alt="" class="h-12">
    <p class="text-stone-600 text-sm">&copy; 2026 Grow West Africa. All rights reserved.</p>
  </div>
</footer>

<script>
const observer=new IntersectionObserver(e=>{e.forEach(el=>{if(el.isIntersecting){el.target.classList.add('fade-up');observer.unobserve(el.target)}})},{threshold:.1});
document.querySelectorAll('section > div > *').forEach(el=>observer.observe(el));
document.querySelectorAll('a[href^="#"]').forEach(a=>{a.addEventListener('click',e=>{e.preventDefault();const t=document.querySelector(a.getAttribute('href'));if(t){t.scrollIntoView({behavior:'smooth'});document.getElementById('mobile-menu').classList.add('hidden')}})});
</script>
</body>
</html>
