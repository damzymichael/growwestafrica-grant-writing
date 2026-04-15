<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Submission Error | Grant Writing Master Class</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { inter: ['Inter', 'sans-serif'] },
          colors: {
            olive: { 50:'#f6f9f0',100:'#e9f0d9',200:'#d4e2b5',300:'#b5cd82',400:'#96b55a',500:'#6b8c42',600:'#5b7b32',700:'#4a6428',800:'#3d5123',900:'#344521' },
            dark: { 800:'#1e1e24',900:'#141418',950:'#0c0c0f' }
          }
        }
      }
    }
  </script>
  <style>
    body{font-family:'Inter',sans-serif}
    .glass{background:rgba(255,255,255,.04);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,.08)}
    .btn-primary{background:linear-gradient(135deg,#5b7b32,#6b8c42);transition:all .3s ease}
    .btn-primary:hover{transform:translateY(-2px);box-shadow:0 10px 20px rgba(107,140,66,0.2)}
    .gradient-text{background:linear-gradient(135deg,#ff6b6b,#ee5253);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }
    .shake { animation: shake 0.5s ease-in-out infinite; }
  </style>
</head>
<body class="bg-dark-950 text-white min-h-screen flex flex-col items-center justify-center p-6">
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-red-500/5 rounded-full blur-[120px]"></div>
  
  <div class="max-w-md w-full glass rounded-3xl p-10 text-center relative z-10 border-red-500/20">
    <div class="w-20 h-20 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-8 border border-red-500/20">
      <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
      </svg>
    </div>

    <h1 class="text-3xl font-black mb-4">Something went <span class="gradient-text">wrong</span></h1>
    <p class="text-stone-400 mb-8 leading-relaxed">
      We encountered an error while processing your enrollment. Please try again or reach out if the issue persists.
    </p>

    <div class="space-y-4">
      <a href="enroll.php" class="block w-full btn-primary py-4 rounded-2xl font-bold text-lg transition-all">
        Try Again
      </a>
      
      <div class="pt-4 border-t border-white/5 mt-6">
        <p class="text-stone-500 text-sm mb-4">If error persists, send a direct message to us:</p>
        <a href="https://wa.me/233540000000" target="_blank" class="inline-flex items-center gap-2 text-olive-400 hover:text-olive-300 font-semibold transition-colors">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
          Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>

  <footer class="mt-12 text-stone-600 text-sm">
    &copy; 2026 Grow West Africa. Secure Enrollment System.
  </footer>
</body>
</html>
