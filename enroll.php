<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $location = $_POST['location'] ?? '';
    $phone = $_POST['phone'] ?? '';
    
    // Server-side validation
    if (empty($name) || empty($email) || empty($location) || empty($phone) || empty($_FILES['receipt']['name'])) {
        $error = "All fields are required.";
    } else {
        $env = parse_ini_file('.env'); 
        // --- 1. Cloudinary Upload ---
        $cloudinary_cloud_name = $env['CLOUDINARY_CLOUD_NAME'];
        $cloudinary_api_key = $env['CLOUDINARY_API_KEY'];
        $cloudinary_api_secret = $env['CLOUDINARY_API_SECRET'];
        
        $timestamp = time();
        $params_to_sign = "timestamp=" . $timestamp . $cloudinary_api_secret;
        $signature = sha1($params_to_sign);

        $cloudinary_url = "https://api.cloudinary.com/v1_1/$cloudinary_cloud_name/image/upload";
        
        $ch_cloud = curl_init($cloudinary_url);
        curl_setopt($ch_cloud, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_cloud, CURLOPT_POST, true);
        curl_setopt($ch_cloud, CURLOPT_POSTFIELDS, [
            'file' => new CURLFile($_FILES['receipt']['tmp_name']),
            'api_key' => $cloudinary_api_key,
            'timestamp' => $timestamp,
            'signature' => $signature
        ]);
        
        $cloud_response = curl_exec($ch_cloud);
        $cloud_data = json_decode($cloud_response, true);
        curl_close($ch_cloud);

        $receipt_url = $cloud_data['secure_url'] ?? "https://res.cloudinary.com/demo/image/upload/v123456789/upload_error.jpg";
        
        // --- 2. Google Sheets Integration ---
        $postData = json_encode([
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "location" => $location,
            "imageUrl" => $receipt_url
        ]);

        $ch = curl_init($env['GOOGLE_SHEETS_DEPLOYMENT_URL']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $gas_response = curl_exec($ch);
        curl_close($ch);

        // --- 3. Email Admin ---
        $admin_email = $env['ADMIN_EMAIL'];
        $subject = "New Enrollment: $name";
        $message = "New enrollment details:\n\n" .
                   "Name: $name\n" .
                   "Email: $email\n" .
                   "Phone: $phone\n" .
                   "Location: $location\n" .
                   "Receipt: $receipt_url\n";
        $headers = "From: no-reply@growwestafrica.com";
        
        @mail($admin_email, $subject, $message, $headers);

        // --- 4. Success Redirect ---
        header("Location: thankyou.php");
        exit();
    }
}
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
      <!-- Pricing & Payment Info -->
      <div class="glass rounded-[2rem] p-6 mb-8 border-olive-500/20 relative overflow-hidden group">
        <div class="absolute top-0 right-0 w-32 h-32 bg-olive-500/10 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-olive-500/20 transition-all duration-500"></div>
        
        <div class="flex justify-between items-start mb-6">
          <div>
            <p class="text-stone-500 text-xs uppercase tracking-widest font-bold mb-1">Investment</p>
            <div class="flex items-baseline gap-2">
              <span class="text-3xl font-black text-white">GHS 1,000</span>
              <span class="text-sm text-stone-500 line-through">GHS 5,000</span>
            </div>
          </div>
          <div class="bg-olive-500/20 text-olive-400 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-tight border border-olive-500/30">
            80% OFF TODAY
          </div>
        </div>

        <div class="space-y-4">
          <div class="bg-white/5 rounded-2xl p-4 border border-white/5">
            <p class="text-[10px] text-stone-500 uppercase font-bold mb-2 tracking-wider">Bank Transfer</p>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sm font-bold text-white">Access Bank</p>
                <p class="text-xs text-stone-400">Account: 0123456789</p>
              </div>
              <button onclick="copyToClipboard('0123456789', this)" class="text-olive-400 hover:text-olive-300 p-2 rounded-lg hover:bg-olive-500/10 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
              </button>
            </div>
          </div>

          <div class="bg-white/5 rounded-2xl p-4 border border-white/5">
            <p class="text-[10px] text-stone-500 uppercase font-bold mb-2 tracking-wider">Mobile Money (MoMo)</p>
            <div class="flex justify-between items-center">
              <div>
                <p class="text-sm font-bold text-white">MTN Mobile Money</p>
                <p class="text-xs text-stone-400">Number: 0540000000</p>
              </div>
              <button onclick="copyToClipboard('0540000000', this)" class="text-olive-400 hover:text-olive-300 p-2 rounded-lg hover:bg-olive-500/10 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
        <div class="space-y-2">
          <label for="name" class="text-sm font-semibold text-stone-300 ml-1">Full Name</label>
          <input type="text" id="name" name="name" placeholder="John Doe" 
                 class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600 transition-all">
          <p id="name-error" class="text-red-400 text-[10px] ml-1 hidden font-medium">Please enter your full name</p>
        </div>

        <div class="space-y-2">
          <label for="email" class="text-sm font-semibold text-stone-300 ml-1">Email Address</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" 
                 class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600 transition-all">
          <p id="email-error" class="text-red-400 text-[10px] ml-1 hidden font-medium">Please enter a valid email address</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          <div class="space-y-2">
            <label for="location" class="text-sm font-semibold text-stone-300 ml-1">Location</label>
            <input type="text" id="location" name="location" placeholder="Accra, Ghana" 
                   class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600 transition-all">
            <p id="location-error" class="text-red-400 text-[10px] ml-1 hidden font-medium">Please enter your location</p>
          </div>
          <div class="space-y-2">
            <label for="phone" class="text-sm font-semibold text-stone-300 ml-1">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+233..." 
                   class="w-full px-5 py-4 rounded-2xl input-field text-white placeholder:text-stone-600 transition-all">
            <p id="phone-error" class="text-red-400 text-[10px] ml-1 hidden font-medium">Please enter your phone number</p>
          </div>
        </div>

        <div class="space-y-2">
          <label for="receipt" class="text-sm font-semibold text-stone-300 ml-1">Payment Receipt (Image)</label>
          <div class="relative">
            <input type="file" id="receipt" name="receipt" accept="image/*" class="hidden">
            <label for="receipt" id="receipt-label" class="flex items-center justify-between w-full px-5 py-4 rounded-2xl input-field text-stone-500 cursor-pointer hover:bg-white/5 transition-all">
              <span id="file-name">Upload Screenshot</span>
              <svg class="w-5 h-5 text-olive-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
            </label>
          </div>
          <p id="receipt-error" class="text-red-400 text-[10px] ml-1 hidden font-medium">Please upload your payment receipt image</p>
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
  document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-up');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

    // Custom Validation & UI Logic
    const form = document.querySelector('form');
    const fileInput = document.getElementById('receipt');
    const fileNameDisplay = document.getElementById('file-name');
    const receiptLabel = document.getElementById('receipt-label');

    if (fileInput) {
      fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
          fileNameDisplay.textContent = e.target.files[0].name;
          fileNameDisplay.classList.remove('text-stone-500');
          fileNameDisplay.classList.add('text-white');
          receiptLabel.classList.remove('border-red-500/50');
          document.getElementById('receipt-error').classList.add('hidden');
        }
      });
    }

    if (form) {
      form.addEventListener('submit', (e) => {
        let isValid = true;
        const inputs = [
          { id: 'name', error: 'name-error', validate: (val) => val && val.trim().length > 0 },
          { id: 'email', error: 'email-error', validate: (val) => val && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val) },
          { id: 'location', error: 'location-error', validate: (val) => val && val.trim().length > 0 },
          { id: 'phone', error: 'phone-error', validate: (val) => val && val.trim().length >= 10 },
          { id: 'receipt', error: 'receipt-error', validate: () => fileInput && fileInput.files && fileInput.files.length > 0, isFile: true }
        ];

        inputs.forEach(input => {
          const field = document.getElementById(input.id);
          const errorMsg = document.getElementById(input.error);
          if (!field || !errorMsg) return;

          const isFieldValid = input.isFile ? input.validate() : input.validate(field.value);

          if (!isFieldValid) {
            errorMsg.classList.remove('hidden');
            if (input.isFile) {
              receiptLabel.classList.add('border-red-500/50');
            } else {
              field.classList.add('border-red-500/50');
            }
            isValid = false;
          } else {
            errorMsg.classList.add('hidden');
            if (input.isFile) {
              receiptLabel.classList.remove('border-red-500/50');
            } else {
              field.classList.remove('border-red-500/50');
            }
          }
        });

        if (!isValid) {
          e.preventDefault();
          e.stopPropagation();
          const firstError = document.querySelector('.text-red-400:not(.hidden)');
          if (firstError) {
            firstError.parentElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
          return false;
        }
      });
    }
  });

  window.copyToClipboard = (text, element) => {
    navigator.clipboard.writeText(text).then(() => {
      const original = element.innerHTML;
      element.innerHTML = '<svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
      setTimeout(() => {
        element.innerHTML = original;
      }, 2000);
    });
  };
</script>

</body>
</html>
