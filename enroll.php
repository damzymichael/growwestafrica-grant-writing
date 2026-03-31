<?php
// PHP logic here (e.g. form processing, database connections, session management)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Enrollment | Grant Writing Master Class</title>
  <meta name="description" content="Secure your spot in the upcoming Grant Writing Master Class. Fill out the form to begin your journey."/>
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
    .fade-up{animation:fadeUp .8s ease forwards;opacity:0}
    .delay-1{animation-delay:.2s}.delay-2{animation-delay:.4s}.delay-3{animation-delay:.6s}
    .glass{background:rgba(255,255,255,.04);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,.08)}
    .olive-glass{background:rgba(107,140,66,.08);backdrop-filter:blur(10px);border:1px solid rgba(107,140,66,.2)}
    .gradient-text{background:linear-gradient(135deg,#6b8c42,#96b55a,#b5cd82);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
    .btn-primary{background:linear-gradient(135deg,#5b7b32,#6b8c42);transition:all .3s ease;position:relative;overflow:hidden}
    .btn-primary::after{content:'';position:absolute;inset:0;background:linear-gradient(135deg,#6b8c42,#96b55a);opacity:0;transition:opacity .3s}
    .btn-primary:hover::after{opacity:1}
    .btn-primary span{position:relative;z-index:1}
    .input-field{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.1);transition:all .3s ease}
    .input-field:focus{background:rgba(107,140,66,.05);border-color:#6b8c42;outline:none;box-shadow:0 0 15px rgba(107,140,66,.1)}
  </style>
</head>
<body class="bg-dark-950 text-white overflow-x-hidden min-h-screen flex flex-col">

<!-- Nav -->
<nav class="w-full z-50 glass sticky top-0">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <a href="index.php" class="flex items-center gap-3">
      <img src="images/logo.png" alt="Logo" class="h-10">
    </a>
    <a href="index.php" class="text-stone-400 hover:text-white transition text-sm font-medium flex items-center gap-2">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
      Back to Home
    </a>
  </div>
</nav>

<!-- Main Content -->
<main class="flex-grow flex items-center justify-center py-20 px-6 relative overflow-hidden">
  <div class="absolute top-1/4 -left-1/4 w-[500px] h-[500px] bg-olive-500/5 rounded-full blur-[100px]"></div>
  <div class="absolute bottom-1/4 -right-1/4 w-[500px] h-[500px] bg-olive-600/5 rounded-full blur-[100px]"></div>

  <div class="max-w-xl w-full relative">
    <div class="text-center mb-10 fade-up">
      <div class="inline-flex items-center gap-2 olive-glass rounded-full px-4 py-2 mb-4">
        <span class="w-2 h-2 bg-olive-400 rounded-full animate-pulse"></span>
        <span class="text-olive-400 text-sm font-medium">Join the Cohort</span>
      </div>
      <h1 class="text-4xl font-black mb-4">Enroll <span class="gradient-text">Today</span></h1>
      <p class="text-stone-400">Fill out the form below to secure your spot in our specialized master class.</p>
    </div>

    <div class="glass rounded-3xl p-8 md:p-10 fade-up delay-1">
      <form action="#" method="POST" class="space-y-6">
        <div class="space-y-2">
          <label for="name" class="text-sm font-semibold text-stone-300 ml-1">Full Name</label>
          <input type="text" id="name" name="name" required placeholder="John Doe" 
                 class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600">
        </div>

        <div class="space-y-2">
          <label for="email" class="text-sm font-semibold text-stone-300 ml-1">Email Address</label>
          <input type="email" id="email" name="email" required placeholder="john@example.com" 
                 class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600">
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          <div class="space-y-2">
            <label for="location" class="text-sm font-semibold text-stone-300 ml-1">Location</label>
            <input type="text" id="location" name="location" required placeholder="Lagos, Nigeria" 
                   class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600">
          </div>
          <div class="space-y-2">
            <label for="phone" class="text-sm font-semibold text-stone-300 ml-1">Phone Number</label>
            <input type="tel" id="phone" name="phone" required placeholder="+234..." 
                   class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600">
          </div>
        </div>

        <button type="submit" class="w-full btn-primary py-5 rounded-2xl text-white font-bold text-lg shadow-xl shadow-olive-900/20 group">
          <span>Complete Enrollment →</span>
        </button>
      </form>
      
      <p class="text-center text-stone-500 text-xs mt-6">
        By enrolling, you agree to receive communications regarding the master class.
      </p>
    </div>
  </div>
</main>

<!-- Footer -->
<footer class="py-10 border-t border-white/5 text-center">
  <p class="text-stone-600 text-sm">&copy; 2026 Grow West Africa. All rights reserved.</p>
</footer>

<script>
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-up');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  
  document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
</script>

</body>
</html>
