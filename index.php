<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Hanif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#64748b',
                    },
                    animation: {
                        'fadeInUp': 'fadeInUp 0.6s ease-out',
                        'fadeInLeft': 'fadeInLeft 0.6s ease-out',
                        'fadeInRight': 'fadeInRight 0.6s ease-out',
                        'slideDown': 'slideDown 0.4s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'float': 'float 3s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'typewriter': 'typewriter 3s steps(30) 1s 1 normal both',
                        'blinkCursor': 'blinkCursor 1s infinite',
                        'gradientShift': 'gradientShift 3s ease infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        slideDown: {
                            '0%': { transform: 'translateY(-100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px rgba(59, 130, 246, 0.5)' },
                            '100%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.8), 0 0 30px rgba(59, 130, 246, 0.6)' }
                        },
                        typewriter: {
                            '0%': { width: '0' },
                            '100%': { width: '100%' }
                        },
                        blinkCursor: {
                            '0%, 50%': { borderColor: 'transparent' },
                            '51%, 100%': { borderColor: 'white' }
                        },
                        gradientShift: {
                            '0%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                            '100%': { backgroundPosition: '0% 50%' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Particle Background */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .particle:nth-child(odd) {
            animation-delay: -2s;
            animation-duration: 8s;
        }
        
        .particle:nth-child(even) {
            animation-delay: -4s;
            animation-duration: 10s;
        }
        
        /* Typewriter Effect */
        .typewriter {
            overflow: hidden;
            border-right: 3px solid white;
            white-space: nowrap;
            animation: typewriter 3s steps(30) 1s 1 normal both, blinkCursor 1s infinite;
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #06b6d4);
            background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 3s ease infinite;
        }
        
        /* Card Hover Effects */
        .card-hover {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .card-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .card-hover:hover::before {
            left: 100%;
        }
        
        .card-hover:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        /* Skill Badge Animation */
        .skill-badge {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .skill-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        /* Progress Bar Animation */
        .progress-bar {
            position: relative;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 8px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            border-radius: 10px;
            transition: width 2s ease-in-out;
            position: relative;
        }
        
        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        /* Additional Animation Classes */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-text-white {
            background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .skill-badge {
            transition: all 0.3s ease;
        }
        
        .skill-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .icon-bounce {
            animation: iconBounce 2s ease-in-out infinite;
        }
        
        @keyframes iconBounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            transform: translateY(-2px);
        }
        
        .contact-item {
            transition: all 0.3s ease;
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        /* Glowing Border */
        .glow-border {
            position: relative;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6);
            border-radius: 50%;
            padding: 4px;
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        /* Loading Spinner */
        .spinner {
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-top: 3px solid white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Navigation Animation */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #a855f7, #06b6d4);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Scroll Reveal Animation */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Background Gradient Animation */
        .animated-gradient {
            background: linear-gradient(-45deg, #1a1a2e, #16213e, #0f3460, #533483, #2c1810, #1f1f1f);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
        }
        
        .gradient-bg-1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .gradient-bg-2 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        
        .gradient-bg-3 {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        .gradient-bg-4 {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }
        
        .gradient-bg-5 {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }
        
        .gradient-overlay {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
        }
        
        /* Icon Bounce */
        .icon-bounce:hover {
            animation: bounce 0.5s ease;
        }
        
        /* Photo Frame Effect */
        .photo-frame {
            position: relative;
            border-radius: 50%;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #06b6d4);
            padding: 6px;
            animation: glow 3s ease-in-out infinite alternate;
        }
        
        .photo-frame::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #06b6d4);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.3;
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* Modal Styles */
        .modal-overlay {
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        
        .modal-image {
            transition: all 0.3s ease;
        }
        
        .modal-image img {
            max-height: 400px;
            object-fit: contain;
            width: 100%;
        }
        
        /* Modal Animation */
        .modal-overlay:not(.hidden) .bg-white {
            animation: modalSlideIn 0.3s ease-out;
        }
        
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        /* Modal Button Hover Effects */
        .modal-overlay button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        /* Responsive Modal */
        @media (max-width: 768px) {
            .modal-overlay .bg-white {
                margin: 1rem;
                max-height: calc(100vh - 2rem);
            }
            
            .modal-image img {
                max-height: 250px;
            }
        }
    </style>
</head>
<body class="bg-gray-900 font-sans text-white">

    <?php
    // Load email configuration
    $config = include 'email_config.php';
    
    $message_sent = false;
    $error_message = '';
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send_message'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $subject = trim($_POST['subject']);
        $message = trim($_POST['message']);
        
        // Validasi input
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $error_message = 'Semua field harus diisi!';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = 'Format email tidak valid!';
        } else {
            $email_sent = false;
            
            try {
                // Setup email ke admin
                $to_admin = $config['receiving_email'];
                $admin_subject = $config['email_prefix'] . " " . $subject;
                
                // Create email content untuk admin
                $admin_content = "Pesan baru dari CV Website:\n\n";
                $admin_content .= "=================================\n";
                $admin_content .= "INFORMASI PENGIRIM\n";
                $admin_content .= "=================================\n";
                $admin_content .= "Nama: " . $name . "\n";
                $admin_content .= "Email: " . $email . "\n";
                $admin_content .= "Subjek: " . $subject . "\n";
                $admin_content .= "Waktu: " . date('d/m/Y H:i:s') . "\n\n";
                $admin_content .= "=================================\n";
                $admin_content .= "PESAN\n";
                $admin_content .= "=================================\n";
                $admin_content .= $message . "\n\n";
                $admin_content .= "=================================\n";
                $admin_content .= "INFORMASI TEKNIS\n";
                $admin_content .= "=================================\n";
                $admin_content .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
                $admin_content .= "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n";
                $admin_content .= "Referrer: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Direct') . "\n";
                
                // Email headers untuk admin
                $admin_headers = "From: " . $config['website_name'] . " <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
                $admin_headers .= "Reply-To: " . $name . " <" . $email . ">\r\n";
                $admin_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                $admin_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                $admin_headers .= "X-Priority: 1\r\n";
                
                // Send email to admin
                if (mail($to_admin, $admin_subject, $admin_content, $admin_headers)) {
                    $email_sent = true;
                    
                    // Send auto-reply if enabled
                    if ($config['auto_reply']) {
                        $reply_subject = "Re: " . $subject . " - Terima kasih atas pesan Anda";
                        $reply_content = str_replace(
                            ['{NAME}', '{SUBJECT}', '{DATE}'],
                            [$name, $subject, date('d/m/Y H:i:s')],
                            $config['auto_reply_message']
                        );
                        
                        $reply_headers = "From: " . $config['admin_name'] . " <" . $config['receiving_email'] . ">\r\n";
                        $reply_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                        $reply_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                        
                        mail($email, $reply_subject, $reply_content, $reply_headers);
                    }
                    
                    // Save message to file if enabled
                    if ($config['save_messages']) {
                        $log_content = "\n" . date('Y-m-d H:i:s') . " | " . $name . " | " . $email . " | " . $subject . "\n";
                        $log_content .= "Message: " . $message . "\n";
                        $log_content .= "---\n";
                        file_put_contents('messages.log', $log_content, FILE_APPEND | LOCK_EX);
                    }
                }
                
            } catch (Exception $e) {
                $error_message = 'Terjadi kesalahan sistem. Silakan coba lagi atau hubungi langsung via email.';
            }
            
            if ($email_sent) {
                $message_sent = true;
                // Clear form data
                $_POST = array();
            } else {
                $error_message = 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi atau hubungi langsung via email: ' . $config['receiving_email'];
            }
        }
    }
    ?>
    <!-- Header/Navigation -->
    <nav class="bg-gray-900/95 backdrop-blur-sm shadow-2xl fixed w-full top-0 z-50 transition-all duration-300 border-b border-gray-700" id="navbar">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-white animate-fadeInLeft">
                    <i class="fas fa-user-circle mr-2 icon-bounce text-purple-400"></i>
                    <span class="gradient-text-white">CV Hanif Sandi Wardana</span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#profil" class="nav-link text-gray-300 hover:text-purple-400 transition duration-300">Profil</a>
                    <a href="#pendidikan" class="nav-link text-gray-300 hover:text-purple-400 transition duration-300">Pendidikan</a>
                    <a href="#pengalaman" class="nav-link text-gray-300 hover:text-purple-400 transition duration-300">Pengalaman</a>
                    <a href="#kontak" class="nav-link text-gray-300 hover:text-purple-400 transition duration-300">Kontak</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-purple-400 transition-all duration-300 transform hover:scale-110">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 animate-slideDown">
                <a href="#profil" class="block py-2 text-gray-300 hover:text-purple-400 transition duration-300">Profil</a>
                <a href="#pendidikan" class="block py-2 text-gray-300 hover:text-purple-400 transition duration-300">Pendidikan</a>
                <a href="#pengalaman" class="block py-2 text-gray-300 hover:text-purple-400 transition duration-300">Pengalaman</a>
                <a href="#kontak" class="block py-2 text-gray-300 hover:text-purple-400 transition duration-300">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        <!-- Profil Section -->
        <section id="profil" class="py-16 animated-gradient text-white relative overflow-hidden">
            <!-- Particle Background -->
            <div class="particles">
                <div class="particle" style="left: 10%; width: 4px; height: 4px; animation-delay: 0s;"></div>
                <div class="particle" style="left: 20%; width: 6px; height: 6px; animation-delay: 1s;"></div>
                <div class="particle" style="left: 30%; width: 3px; height: 3px; animation-delay: 2s;"></div>
                <div class="particle" style="left: 40%; width: 5px; height: 5px; animation-delay: 0.5s;"></div>
                <div class="particle" style="left: 50%; width: 4px; height: 4px; animation-delay: 1.5s;"></div>
                <div class="particle" style="left: 60%; width: 6px; height: 6px; animation-delay: 2.5s;"></div>
                <div class="particle" style="left: 70%; width: 3px; height: 3px; animation-delay: 3s;"></div>
                <div class="particle" style="left: 80%; width: 5px; height: 5px; animation-delay: 0.8s;"></div>
                <div class="particle" style="left: 90%; width: 4px; height: 4px; animation-delay: 1.8s;"></div>
            </div>
            
            <div class="max-w-6xl mx-auto px-4 relative z-10">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/3 mb-8 md:mb-0 animate-fadeInLeft">
                        <div class="relative">
                            <div class="photo-frame mx-auto">
                                <?php
                                // Check for uploaded profile photo
                                $profilePhoto = null;
                                $photoExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                                foreach ($photoExtensions as $ext) {
                                    if (file_exists("assets/images/profile.$ext")) {
                                        $profilePhoto = "assets/images/profile.$ext";
                                        break;
                                    }
                                }
                                
                                if ($profilePhoto) {
                                    echo '<img src="' . $profilePhoto . '" alt="Foto Profil Hanif Sandi Wardana" class="w-64 h-64 rounded-full shadow-2xl mx-auto object-cover animate-float">';
                                } else {
                                    // Use a better default avatar
                                    echo '<img src="https://ui-avatars.com/api/?name=Hanif+Sandi+Wardana&size=300&background=4F46E5&color=ffffff&bold=true&format=png" alt="Foto Profil Default" class="w-64 h-64 rounded-full shadow-2xl mx-auto animate-float">';
                                }
                                ?>
                            </div>
                            <div class="absolute bottom-4 right-4 bg-green-500 w-8 h-8 rounded-full border-4 border-white animate-pulse-slow"></div>
                            <!-- Admin link for photo upload -->
                            <div class="absolute top-2 right-2">
                                <a href="admin.php" 
                                   class="bg-white/90 hover:bg-white text-gray-700 p-2 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110 hover:rotate-12"
                                   title="Upload Foto Profil">
                                    <i class="fas fa-camera text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/3 md:pl-12 text-center md:text-left animate-fadeInRight">
                        <h1 class="text-5xl font-bold mb-4 animate-fadeInUp" style="animation-delay: 0.2s;">
                            Hanif Sandi Wardana
                        </h1>
                        <h2 class="text-2xl text-blue-200 mb-6 typewriter" style="animation-delay: 0.4s;">
                            Junior Developer & Operator Produksi
                        </h2>
                        <p class="text-lg leading-relaxed mb-8 animate-fadeInUp" style="animation-delay: 0.6s;">
                            Seorang developer passionate dengan pengalaman dalam pengembangan aplikasi web dan mobile. 
                            Memiliki keahlian dalam berbagai teknologi modern dan selalu eager to learn hal-hal baru 
                            dalam dunia teknologi dan Memiliki pengalaman kerja selama kurang lebih 3 tahun di bidang operasional sebagai Operator Pabrik di PT Indonesia Polyurethane Industri. Terbiasa bekerja dalam sistem shift, memahami alur produksi, serta memiliki kedisiplinan dan tanggung jawab yang tinggi dalam menjalankan tugas.
                        </p>
                        <div class="flex flex-wrap justify-center md:justify-start gap-4 animate-fadeInUp" style="animation-delay: 0.8s;">
                            <span class="skill-badge bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm border border-white/20">
                                <i class="fab fa-php mr-2"></i>PHP
                            </span>
                            <span class="skill-badge bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm border border-white/20">
                                <i class="fab fa-js mr-2"></i>JavaScript
                            </span>
                            <span class="skill-badge bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm border border-white/20">
                                <i class="fab fa-css3-alt mr-2"></i>CSS
                            </span>
                            <span class="skill-badge bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm border border-white/20">
                                <i class="fab fa-html5 mr-2"></i>HTML
                            </span>
                            <span class="skill-badge bg-white/20 px-4 py-2 rounded-full text-sm backdrop-blur-sm border border-white/20">
                                <i class="fas fa-database mr-2"></i>MySQL
                            </span>
                        </div>
                        
                        <!-- Progress Bars for Skills -->
                        <div class="mt-8 space-y-4 animate-fadeInUp" style="animation-delay: 1s;">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">PHP</span>
                                    <span class="text-sm">75%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" data-width="75" style="width: 0%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">JavaScript</span>
                                    <span class="text-sm">70%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" data-width="70" style="width: 0%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm font-medium">Operations</span>
                                    <span class="text-sm">90%</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" data-width="90" style="width: 0%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pendidikan Section -->
        <section id="pendidikan" class="py-16 bg-gradient-to-br from-gray-900 via-slate-800 to-gray-900 text-white relative overflow-hidden">
            <!-- Animated Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/20 via-blue-900/20 to-indigo-900/20 animate-pulse"></div>
            
            <!-- Floating Icons Background -->
            <div class="absolute inset-0 overflow-hidden">
                <i class="fas fa-graduation-cap absolute text-6xl text-purple-400 opacity-20 animate-float" style="top: 10%; left: 80%; animation-delay: 0s;"></i>
                <i class="fas fa-book absolute text-4xl text-blue-400 opacity-20 animate-float" style="top: 20%; left: 10%; animation-delay: 1s;"></i>
                <i class="fas fa-award absolute text-5xl text-pink-400 opacity-20 animate-float" style="top: 60%; left: 85%; animation-delay: 2s;"></i>
                <i class="fas fa-certificate absolute text-3xl text-indigo-400 opacity-20 animate-float" style="top: 80%; left: 15%; animation-delay: 1.5s;"></i>
            </div>
            
            <div class="max-w-6xl mx-auto px-4 relative z-10">
                <div class="text-center mb-12 scroll-reveal">
                    <h2 class="text-4xl font-bold text-white mb-4">
                        <i class="fas fa-graduation-cap text-purple-400 mr-3 icon-bounce"></i>
                        <span class="gradient-text-white">Pendidikan</span>
                    </h2>
                    <p class="text-gray-300 text-lg">Perjalanan akademis dan pembelajaran</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-blue-500 mx-auto mt-4 rounded-full"></div>
                </div>
                
                <div class="space-y-8">
                    <!-- Pendidikan Item 1 -->
                    <div class="card-hover bg-gray-800/80 backdrop-blur-sm rounded-lg p-8 shadow-xl transition duration-300 border border-gray-700 scroll-reveal">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="md:w-3/4">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full flex items-center justify-center mr-4 animate-pulse-slow">
                                        <i class="fas fa-university text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-1">Mahasiswa Teknik Informatika Smt Akhir</h3>
                                        <h4 class="text-xl text-purple-400">Universitas Pamulang</h4>
                                    </div>
                                </div>
                                <p class="text-gray-300 leading-relaxed mb-4">
                                    Fokus pada pengembangan software, database management, dan pemrograman web. 
                                    Aktif dalam berbagai proyek.
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="skill-badge bg-purple-900/50 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-600/30">
                                        <i class="fas fa-chart-line mr-1"></i>GPA: 3.20
                                    </span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 md:text-right">
                                <div class="glow-border inline-block">
                                    <div class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-4 py-2 rounded-lg">
                                        <i class="fas fa-calendar mr-2"></i>2021 - 2025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pendidikan Item 2 -->
                    <div class="card-hover bg-gray-800/80 backdrop-blur-sm rounded-lg p-8 shadow-xl transition duration-300 border border-gray-700 scroll-reveal">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="md:w-3/4">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-gradient-to-r from-emerald-600 to-cyan-600 rounded-full flex items-center justify-center mr-4 animate-pulse-slow">
                                        <i class="fas fa-laptop-code text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-1">SMK Teknik Komputer & Jaringan</h3>
                                        <h4 class="text-xl text-cyan-400">SMK Global Insan</h4>
                                    </div>
                                </div>
                                <p class="text-gray-300 leading-relaxed mb-4">
                                    Fokus pada mata pelajaran eksak dengan prestasi akademik yang konsisten. 
                                    Aktif dalam ekstrakurikuler robotika dan olimpiade matematika.
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="skill-badge bg-cyan-900/50 text-cyan-300 px-3 py-1 rounded-full text-sm border border-cyan-600/30">
                                        <i class="fas fa-trophy mr-1"></i>Nilai Rata Rata: 82
                                    </span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 md:text-right">
                                <div class="glow-border inline-block">
                                    <div class="bg-gradient-to-r from-emerald-600 to-cyan-600 text-white px-4 py-2 rounded-lg">
                                        <i class="fas fa-calendar mr-2"></i>2019 - 2021
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pengalaman Section -->
        <section id="pengalaman" class="py-16 bg-gradient-to-br from-slate-900 via-gray-900 to-slate-900 text-white relative overflow-hidden">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0">
                <!-- Gradient Overlays -->
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/30 via-cyan-900/30 to-blue-900/30 animate-pulse"></div>
                <div class="absolute inset-0 bg-gradient-to-l from-teal-900/20 via-green-900/20 to-blue-900/20" style="animation: gradientShift 15s ease infinite;"></div>
                
                <!-- Floating Elements -->
                <div class="absolute top-10 left-10 w-20 h-20 bg-gradient-to-r from-emerald-600 to-cyan-600 rounded-full opacity-10 animate-float"></div>
                <div class="absolute top-32 right-20 w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full opacity-10 animate-float" style="animation-delay: 1s;"></div>
                <div class="absolute bottom-20 left-1/4 w-24 h-24 bg-gradient-to-r from-teal-600 to-emerald-600 rounded-full opacity-10 animate-float" style="animation-delay: 2s;"></div>
                <div class="absolute bottom-40 right-10 w-12 h-12 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-full opacity-10 animate-float" style="animation-delay: 0.5s;"></div>
            </div>
            
            <div class="max-w-6xl mx-auto px-4 relative z-10">
                <div class="text-center mb-12 scroll-reveal">
                    <h2 class="text-4xl font-bold text-white mb-4">
                        <i class="fas fa-briefcase text-emerald-400 mr-3 icon-bounce"></i>
                        <span class="gradient-text-white">Pengalaman Kerja</span>
                    </h2>
                    <p class="text-gray-300 text-lg">Perjalanan karir dan pencapaian profesional</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-cyan-500 mx-auto mt-4 rounded-full"></div>
                </div>
                
                <div class="space-y-12">
                    <!-- Pengalaman Item 1 -->
                    <div class="card-hover bg-gray-800/80 backdrop-blur-sm rounded-xl p-8 shadow-xl transition duration-300 border-l-4 border-emerald-500 relative scroll-reveal">
                        <!-- Timeline dot -->
                        <div class="absolute -left-6 top-8 w-12 h-12 bg-gradient-to-r from-emerald-600 to-cyan-600 rounded-full flex items-center justify-center animate-pulse-slow">
                            <i class="fas fa-industry text-white"></i>
                        </div>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Content Section -->
                            <div class="lg:col-span-2">
                                <div class="flex items-start justify-between mb-4">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2 animate-fadeInUp">Operator Produksi</h3>
                                        <h4 class="text-xl text-emerald-400 mb-3 animate-fadeInUp" style="animation-delay: 0.1s;">
                                            <i class="fas fa-industry mr-2"></i>PT Indonesia Polyurethane Industri
                                        </h4>
                                    </div>
                                    <div class="text-right">
                                        <div class="glow-border inline-block mb-2">
                                            <div class="bg-gradient-to-r from-emerald-600 to-cyan-600 text-white px-4 py-2 rounded-lg">
                                                <i class="fas fa-calendar mr-2"></i>2021 - 2025
                                            </div>
                                        </div>
                                        <div class="text-sm text-gray-400">
                                            <i class="fas fa-map-marker-alt mr-1"></i>Tangerang, Indonesia
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-300 leading-relaxed mb-4 animate-fadeInUp" style="animation-delay: 0.2s;">
                                    Bertanggung jawab dalam operasional produksi polyurethane dengan sistem kerja shift. 
                                    Memastikan kualitas produk sesuai standar dan mengoptimalkan efisiensi produksi.
                                </p>
                                
                                <ul class="text-gray-300 space-y-2 mb-6">
                                    <li class="flex items-start animate-fadeInLeft" style="animation-delay: 0.3s;">
                                        <i class="fas fa-check-circle text-emerald-400 mr-2 mt-1"></i>
                                       Bertanggung jawab dalam proses produksi awal, mulai dari penyiapan bahan mentah, pencampuran warna dan material, hingga menghasilkan produk setengah jadi melalui mesin casting. Menjamin kualitas hasil cetakan sesuai standar produksi. Selain itu, mengatur pengoperasian mesin casting serta melakukan perawatan rutin (maintenance) untuk menjaga performa dan umur mesin
                                    </li>
                                    <li class="flex items-start animate-fadeInLeft" style="animation-delay: 0.4s;">
                                        <i class="fas fa-check-circle text-emerald-400 mr-2 mt-1"></i>
                                        Mengoperasikan mesin pemotong untuk memproses produk setengah jadi dari bagian casting menjadi ukuran dan bentuk akhir sesuai spesifikasi. Memastikan hasil potongan presisi dan siap untuk tahap produksi selanjutnya. Juga bertanggung jawab dalam pengaturan mesin cutting dan pelaksanaan perawatan rutin guna memastikan mesin tetap berfungsi secara optimal.                                     </li>
                                    <li class="flex items-start animate-fadeInLeft" style="animation-delay: 0.5s;">
                                        <i class="fas fa-check-circle text-emerald-400 mr-2 mt-1"></i>
                                        Bekerja dalam tim shift dengan koordinasi yang baik
                                    </li>
                                    <li class="flex items-start animate-fadeInLeft" style="animation-delay: 0.6s;">
                                        <i class="fas fa-check-circle text-emerald-400 mr-2 mt-1"></i>
                                        Melakukan tahap akhir dari proses produksi dengan memastikan setiap produk telah melalui proses pengecekan kualitas, perapian, dan pembersihan. Bertugas untuk merapikan hasil potongan, menghilangkan cacat produksi, serta memastikan produk siap untuk dikemas dan dikirim ke pelanggan                                    </li>
                                </ul>
                                
                                <div class="flex flex-wrap gap-2 animate-fadeInUp" style="animation-delay: 0.7s;">
                                    <span class="skill-badge bg-blue-900/50 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-600/30">Operasi Mesin</span>
                                    <span class="skill-badge bg-emerald-900/50 text-emerald-300 px-3 py-1 rounded-full text-sm border border-emerald-600/30">Quality Control</span>
                                    <span class="skill-badge bg-purple-900/50 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-600/30">K3</span>
                                    <span class="skill-badge bg-red-900/50 text-red-300 px-3 py-1 rounded-full text-sm border border-red-600/30">Leadership</span>
                                    <span class="skill-badge bg-yellow-900/50 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-600/30">Troubleshooting</span>
                                </div>
                            </div>
                            
                            <!-- Photo Gallery Section -->
                            <div class="lg:col-span-1 animate-fadeInRight" style="animation-delay: 0.8s;">
                                <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-4 border border-gray-700 card-hover">
                                    <h5 class="font-semibold text-white mb-4 flex items-center">
                                        <i class="fas fa-images text-emerald-400 mr-2"></i>
                                        Dokumentasi Kerja
                                    </h5>
                                    
                                    <?php
                                    // Check for experience photos
                                    $experiencePhotos1 = [];
                                    $photoDir1 = 'assets/images/experience/exp1/';
                                    if (is_dir($photoDir1)) {
                                        $files = glob($photoDir1 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                        $experiencePhotos1 = array_slice($files, 0, 4); // Max 4 photos
                                    }
                                    ?>
                                    
                                    <div class="grid grid-cols-2 gap-2 mb-4">
                                        <?php if (!empty($experiencePhotos1)): ?>
                                            <?php foreach ($experiencePhotos1 as $index => $photo): ?>
                                                <div class="relative group cursor-pointer transform hover:scale-105 transition duration-300" onclick="openModal('modal1', <?php echo $index; ?>)">
                                                    <img src="<?php echo $photo; ?>" 
                                                         alt="Dokumentasi Kerja <?php echo $index + 1; ?>" 
                                                         class="w-full h-20 object-cover rounded-lg shadow-sm">
                                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-search-plus text-white opacity-0 group-hover:opacity-100 transition duration-300"></i>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <!-- Default placeholder photos -->
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center hover:bg-gray-300 transition duration-300">
                                                <i class="fas fa-camera text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center hover:bg-gray-300 transition duration-300">
                                                <i class="fas fa-image text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center hover:bg-gray-300 transition duration-300">
                                                <i class="fas fa-file-image text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center hover:bg-gray-300 transition duration-300">
                                                <i class="fas fa-plus text-gray-400"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <a href="admin.php?section=experience&exp=1" 
                                       class="w-full bg-emerald-900/50 hover:bg-emerald-800/50 text-emerald-300 text-sm py-2 px-3 rounded-lg transition duration-300 flex items-center justify-center transform hover:scale-105 border border-emerald-600/30">
                                        <i class="fas fa-plus mr-2"></i>
                                        Kelola Foto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pengalaman Item 2 -->
                    <div class="bg-gray-800/80 backdrop-blur-sm rounded-xl p-8 shadow-xl hover:shadow-2xl transition duration-300 border-l-4 border-cyan-500">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Content Section -->
                            <div class="lg:col-span-2">
                                <div class="flex items-start justify-between mb-4">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Junior Web Developer</h3>
                                        <h4 class="text-xl text-cyan-400 mb-3">
                                            <i class="fas fa-code mr-2"></i>Freelance Projects
                                        </h4>
                                    </div>
                                    <div class="text-right">
                                        <div class="bg-gradient-to-r from-cyan-600 to-blue-600 text-white px-4 py-2 rounded-lg inline-block mb-2">
                                            <i class="fas fa-calendar mr-2"></i>2022 - 2024
                                        </div>
                                        <div class="text-sm text-gray-400">
                                            <i class="fas fa-map-marker-alt mr-1"></i>Remote/Jakarta
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-300 leading-relaxed mb-4">
                                    Mengembangkan website dan aplikasi web untuk berbagai klien selama waktu luang. 
                                    Fokus pada frontend development dengan teknologi modern dan responsive design.
                                </p>
                                
                                <ul class="text-gray-300 space-y-2 mb-6">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-cyan-400 mr-2 mt-1"></i>
                                        Membuat website company profile untuk 5+ klien UMKM
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-cyan-400 mr-2 mt-1"></i>
                                        Implementasi sistem booking dan e-commerce sederhana
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-cyan-400 mr-2 mt-1"></i>
                                        Optimasi SEO dan performa website
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-cyan-400 mr-2 mt-1"></i>
                                        Maintenance dan update website berkala
                                    </li>
                                </ul>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-orange-900/50 text-orange-300 px-3 py-1 rounded-full text-sm border border-orange-600/30">HTML/CSS</span>
                                    <span class="bg-yellow-900/50 text-yellow-300 px-3 py-1 rounded-full text-sm border border-yellow-600/30">JavaScript</span>
                                    <span class="bg-blue-900/50 text-blue-300 px-3 py-1 rounded-full text-sm border border-blue-600/30">Bootstrap</span>
                                    <span class="bg-purple-900/50 text-purple-300 px-3 py-1 rounded-full text-sm border border-purple-600/30">PHP</span>
                                    <span class="bg-green-900/50 text-green-300 px-3 py-1 rounded-full text-sm border border-green-600/30">WordPress</span>
                                </div>
                            </div>
                            
                            <!-- Photo Gallery Section -->
                            <div class="lg:col-span-1">
                                <div class="bg-gray-900/50 backdrop-blur-sm rounded-lg p-4 border border-gray-700">
                                    <h5 class="font-semibold text-white mb-4 flex items-center">
                                        <i class="fas fa-laptop-code text-cyan-400 mr-2"></i>
                                        Portfolio Projects
                                    </h5>
                                    
                                    <?php
                                    // Check for experience photos
                                    $experiencePhotos2 = [];
                                    $photoDir2 = 'assets/images/experience/exp2/';
                                    if (is_dir($photoDir2)) {
                                        $files = glob($photoDir2 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                        $experiencePhotos2 = array_slice($files, 0, 4); // Max 4 photos
                                    }
                                    ?>
                                    
                                    <div class="grid grid-cols-2 gap-2 mb-4">
                                        <?php if (!empty($experiencePhotos2)): ?>
                                            <?php foreach ($experiencePhotos2 as $index => $photo): ?>
                                                <div class="relative group cursor-pointer" onclick="openModal('modal2', <?php echo $index; ?>)">
                                                    <img src="<?php echo $photo; ?>" 
                                                         alt="Portfolio Project <?php echo $index + 1; ?>" 
                                                         class="w-full h-20 object-cover rounded-lg shadow-sm group-hover:shadow-md transition duration-300">
                                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-search-plus text-white opacity-0 group-hover:opacity-100 transition duration-300"></i>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <!-- Default placeholder photos -->
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-desktop text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-mobile-alt text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-code text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-plus text-gray-400"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <a href="admin.php?section=experience&exp=2" 
                                       class="w-full bg-cyan-900/50 hover:bg-cyan-800/50 text-cyan-300 text-sm py-2 px-3 rounded-lg transition duration-300 flex items-center justify-center border border-cyan-600/30">
                                        <i class="fas fa-plus mr-2"></i>
                                        Kelola Foto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pengalaman Item 3 -->
                    <div class="bg-gray-800/80 backdrop-blur-sm rounded-xl p-8 shadow-xl hover:shadow-2xl transition duration-300 border-l-4 border-purple-500">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            <!-- Content Section -->
                            <div class="lg:col-span-2">
                                <div class="flex items-start justify-between mb-4">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-2">Admin Sales Counter</h3>
                                        <h4 class="text-xl text-purple-400 mb-3">
                                            <i class="fas fa-graduation-cap mr-2"></i>JNE PRIMASENA
                                        </h4>
                                    </div>
                                    <div class="text-right">
                                        <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-4 py-2 rounded-lg inline-block mb-2">
                                            <i class="fas fa-calendar mr-2"></i>2021 - 2022
                                        </div>
                                        <div class="text-sm text-gray-400">
                                            <i class="fas fa-map-marker-alt mr-1"></i>Tangerang,indonesia
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="text-gray-300 leading-relaxed mb-4">
                                    Saya merupakan individu yang memiliki pengalaman kerja sebagai Admin Sales Counter di PT Tiki Jalur Nugraha Ekakurir (JNE), di mana saya terbiasa menangani pelayanan pelanggan, pengelolaan administrasi pengiriman, serta penginputan data menggunakan sistem internal perusahaan. Melalui peran tersebut, saya mengembangkan keterampilan komunikasi, ketelitian dalam pengolahan data, serta kemampuan bekerja secara efisien dalam lingkungan yang dinamis dan berorientasi pada pelayanan. Pengalaman ini membentuk saya menjadi pribadi yang profesional, bertanggung jawab, dan mampu menjalankan tugas administratif dengan baik sesuai prosedur perusahaan.
                                </p>
                                
                                <ul class="text-gray-300 space-y-2 mb-6">
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-purple-400 mr-2 mt-1"></i>
Melayani pelanggan secara langsung di counter pengiriman, termasuk proses penerimaan dan input data pengiriman.                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
Mengelola administrasi pengiriman barang secara sistematis dan akurat menggunakan sistem internal JNE.                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
Menangani pertanyaan pelanggan terkait layanan, tarif, dan status pengiriman dengan komunikasi yang baik dan profesional.                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
Bekerja sama dengan tim operasional untuk memastikan kelancaran proses pengiriman dan pelayanan pelanggan.                                    </li>
                                </ul>
                                
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Online Learning</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Practice Projects</span>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Community</span>
                                    <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Self-Development</span>
                                </div>
                            </div>
                            
                            <!-- Photo Gallery Section -->
                            <div class="lg:col-span-1">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <h5 class="font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-book-open text-purple-600 mr-2"></i>
                                        Learning Progress
                                    </h5>
                                    
                                    <?php
                                    // Check for experience photos
                                    $experiencePhotos3 = [];
                                    $photoDir3 = 'assets/images/experience/exp3/';
                                    if (is_dir($photoDir3)) {
                                        $files = glob($photoDir3 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                        $experiencePhotos3 = array_slice($files, 0, 4); // Max 4 photos
                                    }
                                    ?>
                                    
                                    <div class="grid grid-cols-2 gap-2 mb-4">
                                        <?php if (!empty($experiencePhotos3)): ?>
                                            <?php foreach ($experiencePhotos3 as $index => $photo): ?>
                                                <div class="relative group cursor-pointer" onclick="openModal('modal3', <?php echo $index; ?>)">
                                                    <img src="<?php echo $photo; ?>" 
                                                         alt="Learning Progress <?php echo $index + 1; ?>" 
                                                         class="w-full h-20 object-cover rounded-lg shadow-sm group-hover:shadow-md transition duration-300">
                                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition duration-300 rounded-lg flex items-center justify-center">
                                                        <i class="fas fa-search-plus text-white opacity-0 group-hover:opacity-100 transition duration-300"></i>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <!-- Default placeholder photos -->
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-certificate text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-trophy text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-project-diagram text-gray-400"></i>
                                            </div>
                                            <div class="bg-gray-200 rounded-lg h-20 flex items-center justify-center">
                                                <i class="fas fa-plus text-gray-400"></i>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <a href="admin.php?section=experience&exp=3" 
                                       class="w-full bg-purple-900/50 hover:bg-purple-800/50 text-purple-300 text-sm py-2 px-3 rounded-lg transition duration-300 flex items-center justify-center border border-purple-600/30">
                                        <i class="fas fa-plus mr-2"></i>
                                        Kelola Foto
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontak Section -->
        <section id="kontak" class="py-16 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white relative overflow-hidden">
            <!-- Animated Background -->
            <div class="absolute inset-0">
                <!-- Dynamic Gradient Overlays -->
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 via-pink-600/20 to-blue-600/20 animate-pulse"></div>
                <div class="absolute inset-0 bg-gradient-to-l from-indigo-600/10 via-purple-600/10 to-pink-600/10" style="animation: gradientShift 20s ease infinite;"></div>
                
                <!-- Floating particles -->
                <div class="absolute top-20 left-16 w-4 h-4 bg-gradient-to-r from-purple-400 to-pink-400 opacity-30 rounded-full animate-float"></div>
                <div class="absolute top-40 right-20 w-6 h-6 bg-gradient-to-r from-blue-400 to-cyan-400 opacity-40 rounded-full animate-float" style="animation-delay: 1s;"></div>
                <div class="absolute bottom-32 left-1/4 w-3 h-3 bg-gradient-to-r from-pink-400 to-purple-400 opacity-35 rounded-full animate-float" style="animation-delay: 2s;"></div>
                <div class="absolute bottom-20 right-1/3 w-5 h-5 bg-gradient-to-r from-cyan-400 to-blue-400 opacity-30 rounded-full animate-float" style="animation-delay: 0.5s;"></div>
                
                <!-- Additional decorative elements -->
                <div class="absolute top-1/4 left-1/3 w-32 h-32 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-full blur-xl animate-pulse"></div>
                <div class="absolute bottom-1/4 right-1/3 w-40 h-40 bg-gradient-to-r from-blue-500/10 to-cyan-500/10 rounded-full blur-xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            
            <div class="max-w-6xl mx-auto px-4 relative z-10">
                <div class="text-center mb-12 scroll-reveal">
                    <h2 class="text-4xl font-bold mb-4">
                        <i class="fas fa-envelope text-blue-400 mr-3 icon-bounce"></i>
                        <span class="gradient-text-white">Hubungi Saya</span>
                    </h2>
                    <p class="text-gray-300 text-lg">Mari berkolaborasi dalam proyek yang menarik!</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-purple-400 mx-auto mt-4 rounded-full"></div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="space-y-6 scroll-reveal">
                        <h3 class="text-2xl font-bold mb-6 flex items-center">
                            <i class="fas fa-address-card text-blue-400 mr-3"></i>
                            Informasi Kontak
                        </h3>
                        
                        <div class="contact-item flex items-center space-x-4 p-4 bg-white/5 rounded-xl border border-white/10 hover:bg-white/10 transition duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <p class="text-gray-300">hanifsandi32@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-item flex items-center space-x-4 p-4 bg-white/5 rounded-xl border border-white/10 hover:bg-white/10 transition duration-300" style="animation-delay: 0.1s;">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Telepon/WhatsApp</h4>
                                <div class="text-gray-300">
                                    <a href="tel:+6287878869445" class="hover:text-white transition duration-300">
                                        0878 7886 9445
                                    </a>
                                </div>
                                <div class="text-sm mt-1">
                                    <a href="https://wa.me/6287878869445?text=Halo%20Hanif,%20saya%20tertarik%20untuk%20berdiskusi%20lebih%20lanjut" 
                                       target="_blank" 
                                       class="text-green-400 hover:text-green-300 transition duration-300 inline-flex items-center">
                                        <i class="fab fa-whatsapp mr-1"></i>Chat WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item flex items-center space-x-4 p-4 bg-white/5 rounded-xl border border-white/10 hover:bg-white/10 transition duration-300" style="animation-delay: 0.2s;">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Lokasi</h4>
                                <p class="text-gray-300">Tangerang, Indonesia</p>
                            </div>
                        </div>
                        
                        <div class="pt-6">
                            <h4 class="font-semibold mb-4">Media Sosial</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="social-icon bg-blue-600 p-3 rounded-full hover:bg-blue-700 transition duration-300 transform hover:scale-110">
                                    <i class="fab fa-linkedin text-xl"></i>
                                </a>
                                <a href="#" class="social-icon bg-gray-700 p-3 rounded-full hover:bg-gray-600 transition duration-300 transform hover:scale-110" style="animation-delay: 0.1s;">
                                    <i class="fab fa-github text-xl"></i>
                                </a>
                                <a href="#" class="social-icon bg-blue-500 p-3 rounded-full hover:bg-blue-600 transition duration-300 transform hover:scale-110" style="animation-delay: 0.2s;">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="https://www.instagram.com/wrdnhnf/" class="social-icon bg-red-600 p-3 rounded-full hover:bg-red-700 transition duration-300 transform hover:scale-110" style="animation-delay: 0.3s;">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="scroll-reveal" style="animation-delay: 0.3s;">
                        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 card-hover">
                            <h3 class="text-2xl font-bold mb-6 flex items-center">
                                <i class="fas fa-paper-plane text-blue-400 mr-3"></i>
                                Kirim Pesan
                            </h3>
                            
                            <?php if ($message_sent): ?>
                                <div class="mb-6 p-4 bg-green-500/20 border border-green-400/30 text-green-200 rounded-lg animate-fadeInUp">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle mr-2"></i>
                                        <div>
                                            <strong>Pesan Berhasil Dikirim!</strong>
                                            <p class="text-sm mt-1">Terima kasih atas pesan Anda. Saya akan membalas secepatnya.</p>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (!empty($error_message)): ?>
                                <div class="mb-6 p-4 bg-red-500/20 border border-red-400/30 text-red-200 rounded-lg animate-fadeInUp">
                                    <div class="flex items-center">
                                        <i class="fas fa-exclamation-triangle mr-2"></i>
                                        <div>
                                            <strong>Error!</strong>
                                            <p class="text-sm mt-1"><?php echo htmlspecialchars($error_message); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <form method="POST" action="#kontak" class="space-y-4" id="contactForm">
                                <div class="form-group">
                                    <input type="text" 
                                           name="name" 
                                           placeholder="Nama Lengkap" 
                                           value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
                                           required
                                           class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent text-white placeholder-gray-300 backdrop-blur-sm transition duration-300">
                                </div>
                                <div class="form-group">
                                    <input type="email" 
                                           name="email" 
                                           placeholder="Email" 
                                           value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                                           required
                                           class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent text-white placeholder-gray-300 backdrop-blur-sm transition duration-300">
                                </div>
                                <div class="form-group">
                                    <input type="text" 
                                           name="subject" 
                                           placeholder="Subjek" 
                                           value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>"
                                           required
                                           class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent text-white placeholder-gray-300 backdrop-blur-sm transition duration-300">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" 
                                              name="message" 
                                              placeholder="Pesan Anda" 
                                              required
                                              class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent text-white placeholder-gray-300 resize-none backdrop-blur-sm transition duration-300"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                </div>
                                <button type="submit" 
                                        name="send_message"
                                        class="w-full submit-btn bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 active:scale-95"
                                        id="submitBtn">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    <span id="btnText">Kirim Pesan</span>
                                    <i class="fas fa-spinner fa-spin ml-2 hidden" id="loadingIcon"></i>
                                </button>
                                
                                <div class="text-center text-sm text-gray-400 mt-4">
                                    <p class="mb-2">
                                        <i class="fas fa-info-circle mr-1"></i>
                                        Pesan akan dikirim langsung ke email saya
                                    </p>
                                    <div class="flex flex-col sm:flex-row gap-2 justify-center items-center">
                                        <span class="text-xs">Alternatif kontak:</span>
                                        <div class="flex gap-2">
                                            <a href="https://wa.me/6287878869445?text=Halo%20Hanif,%20saya%20ingin%20berdiskusi%20tentang%20kerja%20sama" 
                                               target="_blank"
                                               class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-xs transition duration-300 flex items-center transform hover:scale-105">
                                                <i class="fab fa-whatsapp mr-1"></i>WhatsApp
                                            </a>
                                            <a href="mailto:hanifsandi32@gmail.com?subject=Inquiry%20from%20CV%20Website" 
                                               class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs transition duration-300 flex items-center transform hover:scale-105">
                                                <i class="fas fa-envelope mr-1"></i>Email Langsung
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Photo Modal for Experience Documentation -->
    <div id="modal1" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden modal-overlay">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl transform transition-all duration-300">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 flex justify-between items-center">
                    <div>
                        <h3 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-images mr-3"></i>
                            Dokumentasi Kerja - PT Indonesia Polyurethane Industri
                        </h3>
                        <p class="text-blue-100 mt-1">Operator Produksi (2021 - 2025)</p>
                    </div>
                    <button onclick="closeModal('modal1')" class="text-white hover:text-gray-300 transition-colors duration-200">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                
                <!-- Modal Body -->
                <div class="p-6 overflow-y-auto max-h-[calc(90vh-120px)]">
                    <div class="grid gap-6" id="modal1-content">
                        <?php
                        // Display all photos for experience 1
                        $experiencePhotos1 = [];
                        $photoDir1 = 'assets/images/experience/exp1/';
                        if (is_dir($photoDir1)) {
                            $files = glob($photoDir1 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                            $experiencePhotos1 = $files;
                        }
                        
                        if (!empty($experiencePhotos1)): ?>
                            <?php foreach ($experiencePhotos1 as $index => $photo): ?>
                                <div class="modal-image bg-gray-50 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" <?php echo $index > 0 ? 'style="display: none;"' : ''; ?>>
                                    <img src="<?php echo $photo; ?>" 
                                         alt="Dokumentasi Kerja <?php echo $index + 1; ?>" 
                                         class="w-full h-auto object-cover">
                                    <div class="p-4">
                                        <h4 class="font-semibold text-gray-800 mb-2">
                                            <i class="fas fa-camera text-blue-600 mr-2"></i>
                                            Foto Dokumentasi <?php echo $index + 1; ?>
                                        </h4>
                                        <p class="text-gray-600 text-sm">
                                            Dokumentasi kegiatan operasional di PT Indonesia Polyurethane Industri
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                            <!-- Navigation Controls -->
                            <?php if (count($experiencePhotos1) > 1): ?>
                                <div class="flex justify-between items-center mt-6 pt-4 border-t border-gray-200">
                                    <button onclick="previousImage('modal1')" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center">
                                        <i class="fas fa-chevron-left mr-2"></i>Sebelumnya
                                    </button>
                                    <span id="modal1-counter" class="text-gray-600 font-medium">1 / <?php echo count($experiencePhotos1); ?></span>
                                    <button onclick="nextImage('modal1')" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center">
                                        Selanjutnya<i class="fas fa-chevron-right ml-2"></i>
                                    </button>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="text-center py-12">
                                <i class="fas fa-camera text-gray-400 text-6xl mb-4"></i>
                                <h4 class="text-xl font-semibold text-gray-600 mb-2">Belum Ada Foto</h4>
                                <p class="text-gray-500 mb-6">Foto dokumentasi kerja belum tersedia</p>
                                <a href="admin.php?section=experience&exp=1" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition-colors duration-200 inline-flex items-center">
                                    <i class="fas fa-plus mr-2"></i>Upload Foto
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Photo Modal for Portfolio Projects -->
    <div id="modal2" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden modal-overlay">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl transform transition-all duration-300">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-green-600 to-blue-600 text-white p-6 flex justify-between items-center">
                    <div>
                        <h3 class="text-2xl font-bold flex items-center">
                            <i class="fas fa-laptop-code mr-3"></i>
                            Portfolio Projects - Freelance
                        </h3>
                        <p class="text-green-100 mt-1">Junior Web Developer (2022 - 2024)</p>
                    </div>
                    <button onclick="closeModal('modal2')" class="text-white hover:text-gray-300 transition-colors duration-200">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                
                <!-- Modal Body -->
                <div class="p-6 overflow-y-auto max-h-[calc(90vh-120px)]">
                    <div class="grid gap-6" id="modal2-content">
                        <?php
                        // Display all photos for experience 2
                        $experiencePhotos2 = [];
                        $photoDir2 = 'assets/images/experience/exp2/';
                        if (is_dir($photoDir2)) {
                            $files = glob($photoDir2 . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                            $experiencePhotos2 = $files;
                        }
                        
                        if (!empty($experiencePhotos2)): ?>
                            <?php foreach ($experiencePhotos2 as $index => $photo): ?>
                                <div class="modal-image bg-gray-50 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300" <?php echo $index > 0 ? 'style="display: none;"' : ''; ?>>
                                    <img src="<?php echo $photo; ?>" 
                                         alt="Portfolio Project <?php echo $index + 1; ?>" 
                                         class="w-full h-auto object-cover">
                                    <div class="p-4">
                                        <h4 class="font-semibold text-gray-800 mb-2">
                                            <i class="fas fa-desktop text-green-600 mr-2"></i>
                                            Project <?php echo $index + 1; ?>
                                        </h4>
                                        <p class="text-gray-600 text-sm">
                                            Screenshot project website atau aplikasi yang telah dikembangkan
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                            <!-- Navigation Controls -->
                            <?php if (count($experiencePhotos2) > 1): ?>
                                <div class="flex justify-between items-center mt-6 pt-4 border-t border-gray-200">
                                    <button onclick="previousImage('modal2')" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center">
                                        <i class="fas fa-chevron-left mr-2"></i>Sebelumnya
                                    </button>
                                    <span id="modal2-counter" class="text-gray-600 font-medium">1 / <?php echo count($experiencePhotos2); ?></span>
                                    <button onclick="nextImage('modal2')" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors duration-200 flex items-center">
                                        Selanjutnya<i class="fas fa-chevron-right ml-2"></i>
                                    </button>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="text-center py-12">
                                <i class="fas fa-laptop-code text-gray-400 text-6xl mb-4"></i>
                                <h4 class="text-xl font-semibold text-gray-600 mb-2">Belum Ada Portfolio</h4>
                                <p class="text-gray-500 mb-6">Screenshot project belum tersedia</p>
                                <a href="admin.php?section=experience&exp=2" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg transition-colors duration-200 inline-flex items-center">
                                    <i class="fas fa-plus mr-2"></i>Upload Screenshot
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 via-purple-900 to-gray-900 text-gray-300 py-8 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600/10 via-pink-600/10 to-blue-600/10 animate-pulse"></div>
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500"></div>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 text-center relative z-10">
            <p class="text-gray-300">&copy; 2025 Hanif. All rights reserved. Made with <span class="text-pink-400">❤️</span> using <span class="text-purple-400">Tailwind CSS</span></p>
        </div>
    </footer>

    <!-- Photo Modal -->
    <div id="photoModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
        <div class="relative max-w-4xl max-h-full">
            <button onclick="closeModal()" class="absolute -top-12 right-0 text-white hover:text-gray-300 text-2xl">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalImage" src="" alt="Preview" class="max-w-full max-h-screen object-contain rounded-lg">
            <div class="absolute bottom-4 left-4 right-4 bg-black bg-opacity-50 text-white p-4 rounded-lg">
                <h3 id="modalTitle" class="text-lg font-semibold mb-2"></h3>
                <p id="modalDescription" class="text-sm"></p>
            </div>
            
            <!-- Navigation buttons -->
            <button id="prevBtn" onclick="navigatePhoto(-1)" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition duration-300">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="nextBtn" onclick="navigatePhoto(1)" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-opacity-75 transition duration-300">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Photo Modal functionality
        let currentPhotoIndex = 0;
        let currentPhotoArray = [];
        let currentModalId = '';

        function openModal(modalId, photoIndex) {
            currentModalId = modalId;
            currentPhotoIndex = photoIndex;
            
            // Get the photos array based on modal ID
            if (modalId === 'modal1') {
                currentPhotoArray = <?php echo json_encode($experiencePhotos1 ?? []); ?>;
            } else if (modalId === 'modal2') {
                currentPhotoArray = <?php echo json_encode($experiencePhotos2 ?? []); ?>;
            } else if (modalId === 'modal3') {
                currentPhotoArray = <?php echo json_encode($experiencePhotos3 ?? []); ?>;
            }
            
            if (currentPhotoArray.length > 0) {
                updateModalContent();
                document.getElementById('photoModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal() {
            document.getElementById('photoModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function navigatePhoto(direction) {
            currentPhotoIndex += direction;
            if (currentPhotoIndex >= currentPhotoArray.length) {
                currentPhotoIndex = 0;
            } else if (currentPhotoIndex < 0) {
                currentPhotoIndex = currentPhotoArray.length - 1;
            }
            updateModalContent();
        }

        function updateModalContent() {
            const modal = document.getElementById('photoModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            if (currentPhotoArray.length > 0) {
                modalImage.src = currentPhotoArray[currentPhotoIndex];
                
                // Set title and description based on modal type
                if (currentModalId === 'modal1') {
                    modalTitle.textContent = `Dokumentasi Kerja ${currentPhotoIndex + 1}`;
                    modalDescription.textContent = 'Foto dokumentasi pekerjaan di PT Indonesia Polyurethane Industri';
                } else if (currentModalId === 'modal2') {
                    modalTitle.textContent = `Portfolio Project ${currentPhotoIndex + 1}`;
                    modalDescription.textContent = 'Screenshot website atau aplikasi yang telah dibuat';
                } else if (currentModalId === 'modal3') {
                    modalTitle.textContent = `Learning Progress ${currentPhotoIndex + 1}`;
                    modalDescription.textContent = 'Dokumentasi perjalanan belajar programming';
                }
                
                // Show/hide navigation buttons
                prevBtn.style.display = currentPhotoArray.length > 1 ? 'block' : 'none';
                nextBtn.style.display = currentPhotoArray.length > 1 ? 'block' : 'none';
            }
        }

        // Close modal when clicking outside
        document.getElementById('photoModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('photoModal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeModal();
                } else if (e.key === 'ArrowLeft') {
                    navigatePhoto(-1);
                } else if (e.key === 'ArrowRight') {
                    navigatePhoto(1);
                }
            }
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Enhanced smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });

        // Enhanced navigation active state and scroll effects
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');
            const navbar = document.querySelector('nav');
            
            // Navbar scroll effect
            if (window.scrollY > 100) {
                navbar.classList.add('backdrop-blur-lg', 'bg-white/80');
                navbar.classList.remove('bg-white/90');
            } else {
                navbar.classList.remove('backdrop-blur-lg', 'bg-white/80');
                navbar.classList.add('bg-white/90');
            }
            
            // Active navigation highlighting
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-primary', 'font-semibold');
                link.classList.add('text-gray-600');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('text-primary', 'font-semibold');
                    link.classList.remove('text-gray-600');
                }
            });

            // Scroll reveal animations
            scrollRevealAnimation();
            animateSkillBars();
        });

        // Scroll reveal animation function
        function scrollRevealAnimation() {
            const reveals = document.querySelectorAll('.scroll-reveal');
            const windowHeight = window.innerHeight;
            const elementVisible = 150;

            reveals.forEach(reveal => {
                const elementTop = reveal.getBoundingClientRect().top;

                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add('animate-fadeInUp');
                    reveal.style.opacity = '1';
                    reveal.style.transform = 'translateY(0)';
                }
            });
        }

        // Skill bars animation
        function animateSkillBars() {
            const skillBars = document.querySelectorAll('.skill-progress');
            
            skillBars.forEach(bar => {
                const progress = bar.getAttribute('data-progress');
                const progressBar = bar.querySelector('.progress-fill');
                
                if (progressBar) {
                    const elementTop = bar.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100 && !progressBar.style.width) {
                        setTimeout(() => {
                            progressBar.style.width = progress + '%';
                        }, 200);
                    }
                }
            });
        }

        // Enhanced section observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    
                    // Add staggered animation for children
                    const children = entry.target.querySelectorAll('.stagger-animation');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.style.opacity = '1';
                            child.style.transform = 'translateY(0)';
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);

        // Initialize animations
        function initializeAnimations() {
            // Observe all sections for animation
            document.querySelectorAll('section').forEach(section => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(20px)';
                section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(section);
            });

            // Initialize scroll reveal elements
            const reveals = document.querySelectorAll('.scroll-reveal');
            reveals.forEach(reveal => {
                reveal.style.transition = 'all 0.6s ease-out';
                reveal.style.opacity = '0';
                reveal.style.transform = 'translateY(50px)';
            });

            // Initialize stagger animation elements
            const staggerElements = document.querySelectorAll('.stagger-animation');
            staggerElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.5s ease';
            });
        }

        // Typewriter effect
        function typeWriter(element, text, speed = 100) {
            if (!element) return;
            
            let i = 0;
            element.innerHTML = '';
            
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        // Add interactive hover effects
        function addInteractiveEffects() {
            // Card hover effects
            document.querySelectorAll('.card-hover').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                    this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.1)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '';
                });
            });

            // Button glow effects
            document.querySelectorAll('.submit-btn').forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 0 30px rgba(59, 130, 246, 0.5)';
                });
                
                btn.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '';
                });
            });

            // Social icon animations
            document.querySelectorAll('.social-icon').forEach(icon => {
                icon.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.2) rotate(5deg)';
                });
                
                icon.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1) rotate(0deg)';
                });
            });

            // Contact item animations
            document.querySelectorAll('.contact-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(10px)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize animations
            initializeAnimations();
            
            // Add interactive effects
            addInteractiveEffects();
            
            // Initial scroll reveal
            scrollRevealAnimation();
            
            // Typewriter effect for job title
            const jobTitle = document.querySelector('.job-title');
            if (jobTitle) {
                setTimeout(() => {
                    typeWriter(jobTitle, 'Operator Produksi', 150);
                }, 1500);
            }
            
            // Initialize skill bars
            setTimeout(() => {
                animateSkillBars();
            }, 2000);
            
            // Initialize progress bars animation
            setTimeout(() => {
                const progressBars = document.querySelectorAll('.progress-fill');
                progressBars.forEach(bar => {
                    const width = bar.getAttribute('data-width');
                    if (width) {
                        bar.style.width = width + '%';
                    }
                });
            }, 1000);
        });

        // Modal functions for experience photos
        var modalCurrentId = null;
        var modalCurrentImageIndex = 0;
        var modalTotalImages = 0;

        function openModal(modalId, imageIndex = 0) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modalCurrentId = modalId;
                modalCurrentImageIndex = imageIndex;
                
                // Get all images in this modal
                const images = modal.querySelectorAll('.modal-image');
                modalTotalImages = images.length;
                
                // Show the modal
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                
                // Show the correct image
                showImage(imageIndex);
                
                // Update counter
                updateCounter();
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
                modalCurrentId = null;
            }
        }

        function showImage(index) {
            if (!modalCurrentId) return;
            
            const modal = document.getElementById(modalCurrentId);
            const images = modal.querySelectorAll('.modal-image');
            
            // Hide all images
            images.forEach(img => img.style.display = 'none');
            
            // Show selected image
            if (images[index]) {
                images[index].style.display = 'block';
            }
            
            modalCurrentImageIndex = index;
            updateCounter();
        }

        function previousImage(modalId) {
            if (modalCurrentId !== modalId) return;
            
            modalCurrentImageIndex = modalCurrentImageIndex > 0 ? modalCurrentImageIndex - 1 : modalTotalImages - 1;
            showImage(modalCurrentImageIndex);
        }

        function nextImage(modalId) {
            if (modalCurrentId !== modalId) return;
            
            modalCurrentImageIndex = modalCurrentImageIndex < modalTotalImages - 1 ? modalCurrentImageIndex + 1 : 0;
            showImage(modalCurrentImageIndex);
        }

        function updateCounter() {
            if (!modalCurrentId || modalTotalImages === 0) return;
            
            const counter = document.getElementById(modalCurrentId + '-counter');
            if (counter) {
                counter.textContent = `${modalCurrentImageIndex + 1} / ${modalTotalImages}`;
            }
        }

        // Keyboard navigation for modal
        document.addEventListener('keydown', function(e) {
            if (!modalCurrentId) return;
            
            switch(e.key) {
                case 'Escape':
                    closeModal(modalCurrentId);
                    break;
                case 'ArrowLeft':
                    previousImage(modalCurrentId);
                    break;
                case 'ArrowRight':
                    nextImage(modalCurrentId);
                    break;
            }
        });

        // Close modal when clicking outside
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal-overlay')) {
                const modals = document.querySelectorAll('.modal-overlay');
                modals.forEach(modal => {
                    if (!modal.classList.contains('hidden')) {
                        modal.classList.add('hidden');
                    }
                });
                document.body.style.overflow = 'auto';
                modalCurrentId = null;
            }
        });

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                // Show loading state
                submitBtn.disabled = true;
                btnText.textContent = 'Mengirim...';
                loadingIcon.classList.remove('hidden');
                
                // Form validation
                const name = contactForm.querySelector('input[name="name"]').value.trim();
                const email = contactForm.querySelector('input[name="email"]').value.trim();
                const subject = contactForm.querySelector('input[name="subject"]').value.trim();
                const message = contactForm.querySelector('textarea[name="message"]').value.trim();
                
                if (!name || !email || !subject || !message) {
                    e.preventDefault();
                    showNotification('Semua field harus diisi!', 'error');
                    resetButton();
                    return;
                }
                
                if (!isValidEmail(email)) {
                    e.preventDefault();
                    showNotification('Format email tidak valid!', 'error');
                    resetButton();
                    return;
                }
                
                // If validation passes, form will submit normally
                // The loading state will be reset by page reload
            });
        }

        function resetButton() {
            submitBtn.disabled = false;
            btnText.textContent = 'Kirim Pesan';
            loadingIcon.classList.add('hidden');
        }

        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full ${
                type === 'error' ? 'bg-red-500 text-white' : 'bg-green-500 text-white'
            }`;
            notification.innerHTML = `
                <div class="flex items-center">
                    <i class="fas ${type === 'error' ? 'fa-exclamation-triangle' : 'fa-check-circle'} mr-2"></i>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Animate out and remove
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Auto-clear form success message after 5 seconds
        <?php if ($message_sent): ?>
        setTimeout(() => {
            const successMessage = document.querySelector('.bg-green-100');
            if (successMessage) {
                successMessage.style.opacity = '0';
                successMessage.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 500);
            }
        }, 5000);
        <?php endif; ?>

        // Smooth scroll to contact section if form was submitted
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        window.addEventListener('load', () => {
            const contactSection = document.getElementById('kontak');
            if (contactSection) {
                contactSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
        <?php endif; ?>
    </script>
</body>
</html>