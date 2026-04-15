<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Grant Writing Master Class</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
        body { font-family: 'Inter', sans-serif; }
        @keyframes popIn {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .pop-in { animation: popIn 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .glass { background: rgba(255,255,255,.04); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,.08); }
        .gradient-text { background: linear-gradient(135deg,#6b8c42,#96b55a,#b5cd82); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="bg-dark-950 text-white min-h-screen flex items-center justify-center p-6 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-olive-500/10 rounded-full blur-[120px]"></div>
    <div class="max-w-lg w-full glass rounded-[2.5rem] p-10 md:p-16 text-center relative z-10 pop-in">
        <div class="w-24 h-24 bg-olive-500/20 rounded-full flex items-center justify-center mx-auto mb-8">
            <svg class="w-12 h-12 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-black mb-6">Success!</h1>
        <p class="text-stone-300 text-lg mb-10 leading-relaxed">
            We have received your payment request. We're currently verifying it and we'll get in contact with you shortly.
        </p>

        <a href="index.php" class="inline-flex items-center gap-3 bg-white text-dark-950 px-8 py-4 rounded-2xl font-bold hover:bg-olive-500 hover:text-white transition-all duration-300">
            Back to Home
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>
</body>
</html>
