<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $user_name; ?> - Premium Links</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        
        body {
            background-color: #050811; 
            font-family: 'Inter', sans-serif;
            color: white;
            padding-bottom: 50px;
        }

        /* Background Glow Animation */
        .bg-glow {
            position: fixed;
            width: 400px;
            height: 400px;
            filter: blur(100px);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.25;
            animation: pulseBg 10s infinite alternate;
        }

        @keyframes pulseBg {
            0% { transform: scale(1) translate(0, 0); }
            100% { transform: scale(1.4) translate(100px, 50px); }
        }

        .premium-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .premium-card:hover {
            background: rgba(255, 255, 255, 0.07);
            transform: translateY(-2px);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .profile-container {
            margin-top: -50px;
            padding-left: 24px;
        }
    </style>
</head>
<body class="flex flex-col items-center min-h-screen p-4">

    <div class="bg-glow bg-blue-600 top-[-50px] left-[-100px]"></div>
    <div class="bg-glow bg-purple-600 bottom-[-100px] right-[-100px]"></div>

    <div class="max-w-md w-full mt-4">
        
        <div class="bg-[#111827] rounded-2xl shadow-2xl overflow-hidden border border-white/10">
            <div class="h-44 w-full">
                <img src="<?php echo $cover_img; ?>" alt="Cover" class="w-full h-full object-cover">
            </div>

            <div class="profile-container">
                <img src="<?php echo $profile_img; ?>" alt="Profile" class="w-24 h-24 rounded-full border-4 border-[#111827] shadow-xl object-cover">
                
                <div class="mt-3">
                    <h1 class="text-2xl font-bold text-white tracking-tight"><?php echo $user_name; ?></h1>
                    <p class="text-gray-400 text-sm font-medium mt-0.5">
                        <?php echo $user_followers; ?> • <?php echo $user_posts; ?>
                    </p>
                </div>
            </div>

            <div class="px-6 py-6 text-gray-300 text-sm leading-relaxed border-t border-white/5 mt-4">
                <p class="mb-4"><?php echo $about_text; ?></p>
                
                <div class="space-y-2 text-gray-400">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-map-marker-alt text-gray-500 w-4"></i>
                        <span><?php echo $location; ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-briefcase text-gray-500 w-4"></i>
                        <span><?php echo $job_title; ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-graduation-cap text-gray-500 w-4"></i>
                        <span><?php echo $education; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 bg-[#111827]/80 p-5 rounded-2xl border border-white/10 backdrop-blur-md">
            <div class="space-y-3">
                <?php foreach ($social_links as $link): ?>
                    <a href="<?php echo $link['url']; ?>" target="_blank" class="premium-card flex items-center p-3.5 rounded-xl group">
                        <div class="<?php echo $link['bg']; ?> w-11 h-11 flex items-center justify-center rounded-xl shadow-lg">
                            <i class="<?php echo $link['icon']; ?> text-lg text-white"></i>
                        </div>
                        
                        <div class="ml-4 flex-grow">
                            <h3 class="text-white font-semibold"><?php echo $link['name']; ?></h3>
                            <p class="text-[10px] text-gray-500 uppercase tracking-widest">Connect with me</p>
                        </div>

                        <i class="fas fa-chevron-right text-xs text-gray-600 group-hover:text-white transition-colors mr-2"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-8 text-center opacity-40">
            <p class="text-[10px] uppercase tracking-widest font-bold">Verified Portfolio • 2026</p>
        </div>
    </div>

</body>
</html>