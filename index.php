<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Grant Writing Master Class | Grow West Africa Academy</title>
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
      <img src="images/logo.png" alt="Grow West Africa Academy" class="h-12 brightness-125 contrast-110">
    </a>
    <div class="hidden md:flex items-center gap-8">
      <a href="#why" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Why Us</a>
      <a href="#outcomes" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Outcomes</a>
      <a href="#curriculum" class="text-stone-300 hover:text-olive-400 transition text-sm font-medium">Curriculum</a>
      <a href="enroll.php" class="btn-primary px-6 py-2.5 rounded-full text-white font-semibold text-sm"><span>Enroll Now</span></a>
    </div>
    <button id="mobile-toggle" class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-4">
    <a href="#why" class="block text-stone-300 hover:text-olive-400">Why Us</a>
    <a href="#outcomes" class="block text-stone-300 hover:text-olive-400">Outcomes</a>
    <a href="#curriculum" class="block text-stone-300 hover:text-olive-400">Curriculum</a>
    <a href="#instructor" class="block text-stone-300 hover:text-olive-400">Instructor</a>
    <a href="enroll.php" class="block btn-primary px-6 py-2.5 rounded-full text-white font-semibold text-center text-sm"><span>Enroll Now</span></a>
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
        <span class="text-olive-400 text-sm font-medium">Grant Writing Masterclass</span>
      </div>
      <h1 class="fade-up delay-1 text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6">
        Secure Grants, Scholarships & Business Funding —<br/><span class="gradient-text">Even If You've Never Written a Proposal Before</span>
      </h1>
      <p class="fade-up delay-2 text-stone-400 text-lg md:text-xl max-w-lg mb-4 leading-relaxed">
        Learn how to access <strong class="text-white">$5,000 – $100,000</strong> funding opportunities step-by-step.
      </p>
      <div class="fade-up delay-2 flex items-center gap-3 mb-8 text-stone-400 text-sm">
        <svg class="w-5 h-5 text-olive-400 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
        Used by aspiring entrepreneurs, students, and NGO leaders across Africa
      </div>
      <div class="fade-up delay-3 flex flex-wrap gap-4 mb-12">
        <a href="enroll.php" class="btn-primary px-8 py-4 rounded-full text-white font-bold text-lg glow"><span>Join the Grant Writing Masterclass</span></a>
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
            <span class="text-lg font-bold text-olive-400">$10M+</span>
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

<!-- Curriculum -->
<section id="curriculum" class="py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-olive-900/5 to-dark-950"></div>
  <div class="relative max-w-4xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">5-Day Training</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">Course <span class="gradient-text">Curriculum</span></h2>
      <p class="text-stone-400 max-w-2xl mx-auto text-lg">A comprehensive 5-day program designed to take you from beginner to confident grant writer.</p>
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

<!-- Problem Section -->
<section id="problem" class="py-24 relative">
  <div class="absolute inset-0 bg-dark-950"></div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-red-400 font-semibold text-sm uppercase tracking-widest">The Challenge</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">Why Most People <span class="text-red-400">Never</span> Get Funding</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6 mb-12">
      <div class="glass rounded-2xl p-8 card-hover group" style="border-color:rgba(239,68,68,.15)">
        <div class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center mb-5 text-red-400">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <p class="text-stone-300 text-lg">You don't know where to find real opportunities</p>
      </div>
      <div class="glass rounded-2xl p-8 card-hover group" style="border-color:rgba(239,68,68,.15)">
        <div class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center mb-5 text-red-400">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        </div>
        <p class="text-stone-300 text-lg">You write proposals that get ignored</p>
      </div>
      <div class="glass rounded-2xl p-8 card-hover group" style="border-color:rgba(239,68,68,.15)">
        <div class="w-12 h-12 bg-red-500/10 rounded-xl flex items-center justify-center mb-5 text-red-400">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <p class="text-stone-300 text-lg">You don't understand what funders want</p>
      </div>
    </div>
    <div class="glass rounded-2xl p-6 text-center max-w-2xl mx-auto flex items-center justify-center gap-4" style="background:rgba(239,68,68,.06);border-color:rgba(239,68,68,.2)">
      <svg class="w-8 h-8 text-red-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      <h3 class="text-xl font-bold text-white">Result: Rejection after rejection</h3>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Solution Section -->
<section id="solution" class="py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-dark-900/30 to-dark-950"></div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">The Transformation</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">This Program <span class="gradient-text">Changes Everything</span></h2>
      <p class="text-stone-400 max-w-2xl mx-auto text-lg">Inside this masterclass, you will learn:</p>
    </div>
    <div class="glass rounded-3xl p-8 md:p-12 max-w-3xl mx-auto" style="border-color:rgba(107,140,66,.25)">
      <div class="space-y-6">
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 bg-olive-500/20 rounded-lg flex items-center justify-center shrink-0 mt-1">
            <svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
          </div>
          <p class="text-lg text-white font-medium mt-2">How to find real grant opportunities</p>
        </div>
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 bg-olive-500/20 rounded-lg flex items-center justify-center shrink-0 mt-1">
            <svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
          </div>
          <p class="text-lg text-white font-medium mt-2">How to write winning proposals</p>
        </div>
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 bg-olive-500/20 rounded-lg flex items-center justify-center shrink-0 mt-1">
            <svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
          </div>
          <p class="text-lg text-white font-medium mt-2">How to position yourself for selection</p>
        </div>
        <div class="flex items-start gap-4">
          <div class="w-10 h-10 bg-olive-500/20 rounded-lg flex items-center justify-center shrink-0 mt-1">
            <svg class="w-5 h-5 text-olive-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
          </div>
          <p class="text-lg text-white font-medium mt-2">How to secure scholarships and business funding</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- What You Get Section -->
<section class="py-24 relative">
  <div class="absolute inset-0 bg-dark-950"></div>
  <div class="relative max-w-5xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">Everything Included</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">What You <span class="gradient-text">Get</span></h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
        </div>
        <p class="font-semibold text-white">Full Grant Writing Training</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        </div>
        <p class="font-semibold text-white">Proposal Templates</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/></svg>
        </div>
        <p class="font-semibold text-white">Scholarship Guide</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
        <p class="font-semibold text-white">50 Active Grant Opportunities</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
        </div>
        <p class="font-semibold text-white">Live Proposal Review Session</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z"/></svg>
        </div>
        <p class="font-semibold text-white">Business Funding Templates</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
        </div>
        <p class="font-semibold text-white">WhatsApp Support Group</p>
      </div>
      <div class="glass rounded-2xl p-6 text-center card-hover group">
        <div class="w-12 h-12 bg-olive-500/15 rounded-xl flex items-center justify-center mb-4 mx-auto group-hover:bg-olive-500/25 transition">
          <svg class="w-6 h-6 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
        </div>
        <p class="font-semibold text-white">Certificate from Grow West Africa</p>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Results Section -->
<section class="py-24 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 to-olive-900/5"></div>
  <div class="relative max-w-5xl mx-auto px-6">
    <div class="text-center mb-16">
      <span class="text-olive-400 font-semibold text-sm uppercase tracking-widest">Real Impact</span>
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">What This Skill Can Do <span class="gradient-text">For You</span></h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="glass rounded-3xl p-10 text-center card-hover group">
        <div class="w-16 h-16 bg-olive-500/15 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-olive-500/25 transition">
          <svg class="w-8 h-8 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Secure funding for your business</h3>
        <div class="mt-4 h-1 w-0 group-hover:w-full bg-gradient-to-r from-olive-600 to-olive-400 rounded transition-all duration-500 mx-auto"></div>
      </div>
      <div class="glass rounded-3xl p-10 text-center card-hover group" style="border-color:rgba(107,140,66,.25)">
        <div class="w-16 h-16 bg-olive-500/15 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-olive-500/25 transition">
          <svg class="w-8 h-8 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Study abroad with scholarships</h3>
        <div class="mt-4 h-1 w-0 group-hover:w-full bg-gradient-to-r from-olive-600 to-olive-400 rounded transition-all duration-500 mx-auto"></div>
      </div>
      <div class="glass rounded-3xl p-10 text-center card-hover group">
        <div class="w-16 h-16 bg-olive-500/15 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-olive-500/25 transition">
          <svg class="w-8 h-8 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Earn income as a grant writer</h3>
        <div class="mt-4 h-1 w-0 group-hover:w-full bg-gradient-to-r from-olive-600 to-olive-400 rounded transition-all duration-500 mx-auto"></div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Pricing & Urgency Section -->
<section id="pricing" class="py-24 relative overflow-hidden">
  <div class="absolute inset-0 bg-dark-950"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-olive-500/8 rounded-full blur-[120px]"></div>
  <div class="relative max-w-lg mx-auto px-6">
    <div class="glass rounded-3xl p-10 text-center shadow-2xl" style="border-color:rgba(107,140,66,.3)">
      <div class="mb-6">
        <span class="text-stone-500 text-xs uppercase tracking-widest font-bold">Investment</span>
        <div class="text-5xl font-black text-white mt-2">GHS 2,000</div>
      </div>
      <div class="olive-glass rounded-xl p-4 mb-8 text-left">
        <div class="flex items-center gap-3 mb-2">
          <svg class="w-5 h-5 text-olive-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>
          <h4 class="font-bold text-olive-400">Bonuses Included</h4>
        </div>
        <p class="text-sm text-stone-300 ml-8">Templates, scholarship guide, 50 active opportunities list, WhatsApp community & official certificate.</p>
      </div>
      <div class="space-y-3 mb-8">
        <div class="flex items-center gap-3 text-red-400 bg-red-400/10 p-3 rounded-lg border border-red-400/20">
          <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          <p class="text-sm font-medium">Limited slots available</p>
        </div>
        <div class="flex items-center gap-3 text-red-400 bg-red-400/10 p-3 rounded-lg border border-red-400/20">
          <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <p class="text-sm font-medium">Enrollment closes soon</p>
        </div>
      </div>
      <a href="enroll.php" class="w-full inline-block btn-primary py-4 rounded-full text-white font-bold text-lg glow"><span>Register Now</span></a>
      <p class="mt-4 text-xs text-stone-500 font-medium">Don't miss this opportunity</p>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- FAQ Section -->
<section id="faq" class="py-24 relative">
  <div class="absolute inset-0 bg-dark-950"></div>
  <div class="relative max-w-3xl mx-auto px-6">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-bold mt-3 mb-4">Frequently Asked <span class="gradient-text">Questions</span></h2>
    </div>
    <div class="space-y-6">
      <div class="glass rounded-2xl p-6">
        <h3 class="text-lg font-bold text-white flex gap-3 items-center mb-2">
          <svg class="w-5 h-5 text-olive-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Do I need experience?
        </h3>
        <p class="text-stone-400 ml-8">No — beginners are welcome</p>
      </div>
      <div class="glass rounded-2xl p-6">
        <h3 class="text-lg font-bold text-white flex gap-3 items-center mb-2">
          <svg class="w-5 h-5 text-olive-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Is this only for NGOs?
        </h3>
        <p class="text-stone-400 ml-8">No — students & entrepreneurs can apply</p>
      </div>
      <div class="glass rounded-2xl p-6">
        <h3 class="text-lg font-bold text-white flex gap-3 items-center mb-2">
          <svg class="w-5 h-5 text-olive-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Will I write a real proposal?
        </h3>
        <p class="text-stone-400 ml-8">Yes — during the training</p>
      </div>
    </div>
  </div>
</section>

<div class="section-divider max-w-7xl mx-auto"></div>

<!-- Final CTA -->
<section id="cta" class="py-24 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-b from-dark-950 via-olive-900/10 to-dark-950"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-olive-500/8 rounded-full blur-[120px]"></div>
  <div class="relative max-w-3xl mx-auto px-6 text-center">
    <div class="glass rounded-3xl p-12 md:p-16">
      <h2 class="text-3xl md:text-5xl font-bold mb-6">Click below to <span class="gradient-text">secure your spot</span> now</h2>
      <a href="enroll.php" class="inline-block btn-primary px-12 py-5 rounded-full text-white font-bold text-lg sm:text-xl glow"><span>Enroll Now</span></a>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="py-12 border-t border-white/5">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
          <img src="images/logo.png" alt="Grow West Africa Academy" class="h-12 brightness-125 contrast-110">
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
