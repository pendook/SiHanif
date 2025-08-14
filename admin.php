<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kelola CV</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <?php
    $section = $_GET['section'] ?? 'profile';
    $exp = $_GET['exp'] ?? null;
    
    $message = '';
    $messageType = '';

    // Handle profile photo upload
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile_photo'])) {
        $uploadDir = 'assets/images/';
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024; // 5MB

        $file = $_FILES['profile_photo'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileError = $file['error'];

        // Get file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newFileName = 'profile.' . $fileExt;
        $uploadPath = $uploadDir . $newFileName;

        if ($fileError === 0) {
            if (in_array($fileType, $allowedTypes)) {
                if ($fileSize <= $maxFileSize) {
                    // Delete old profile photo if exists
                    $oldFiles = glob($uploadDir . 'profile.*');
                    foreach ($oldFiles as $oldFile) {
                        unlink($oldFile);
                    }

                    if (move_uploaded_file($fileTmpName, $uploadPath)) {
                        $message = 'Foto profil berhasil diupload!';
                        $messageType = 'success';
                    } else {
                        $message = 'Gagal mengupload foto. Coba lagi.';
                        $messageType = 'error';
                    }
                } else {
                    $message = 'Ukuran file terlalu besar. Maksimal 5MB.';
                    $messageType = 'error';
                }
            } else {
                $message = 'Format file tidak didukung. Gunakan JPG, PNG, atau GIF.';
                $messageType = 'error';
            }
        } else {
            $message = 'Terjadi error saat upload. Coba lagi.';
            $messageType = 'error';
        }
    }

    // Handle experience photo upload
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['experience_photos']) && $exp) {
        $uploadDir = "assets/images/experience/exp{$exp}/";
        
        // Create directory if doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
        $maxFileSize = 5 * 1024 * 1024; // 5MB
        $uploadedCount = 0;
        $errors = [];

        foreach ($_FILES['experience_photos']['tmp_name'] as $key => $tmpName) {
            if (!empty($tmpName)) {
                $fileName = $_FILES['experience_photos']['name'][$key];
                $fileSize = $_FILES['experience_photos']['size'][$key];
                $fileType = $_FILES['experience_photos']['type'][$key];
                $fileError = $_FILES['experience_photos']['error'][$key];

                if ($fileError === 0) {
                    if (in_array($fileType, $allowedTypes)) {
                        if ($fileSize <= $maxFileSize) {
                            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                            $newFileName = 'photo_' . time() . '_' . $key . '.' . $fileExt;
                            $uploadPath = $uploadDir . $newFileName;

                            if (move_uploaded_file($tmpName, $uploadPath)) {
                                $uploadedCount++;
                            } else {
                                $errors[] = "Gagal upload {$fileName}";
                            }
                        } else {
                            $errors[] = "{$fileName} terlalu besar (max 5MB)";
                        }
                    } else {
                        $errors[] = "{$fileName} format tidak didukung";
                    }
                }
            }
        }

        if ($uploadedCount > 0) {
            $message = "{$uploadedCount} foto berhasil diupload!";
            $messageType = 'success';
        }
        if (!empty($errors)) {
            $message .= ($message ? ' ' : '') . implode(', ', $errors);
            $messageType = $messageType === 'success' ? 'warning' : 'error';
        }
    }

    // Handle delete photo
    if (isset($_GET['delete']) && isset($_GET['exp'])) {
        $photoPath = $_GET['delete'];
        if (file_exists($photoPath)) {
            unlink($photoPath);
            $message = 'Foto berhasil dihapus!';
            $messageType = 'success';
        }
    }
    ?>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-blue-600">
                    <i class="fas fa-cog mr-2"></i>Admin CV
                </div>
                <div class="flex space-x-4">
                    <a href="?section=profile" 
                       class="px-4 py-2 rounded-lg transition duration-300 <?php echo $section === 'profile' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100'; ?>">
                        <i class="fas fa-user mr-2"></i>Profil
                    </a>
                    <a href="?section=experience" 
                       class="px-4 py-2 rounded-lg transition duration-300 <?php echo $section === 'experience' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100'; ?>">
                        <i class="fas fa-briefcase mr-2"></i>Pengalaman
                    </a>
                    <a href="index.php" 
                       class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition duration-300">
                        <i class="fas fa-eye mr-2"></i>Lihat CV
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <?php if ($message): ?>
            <div class="mb-6 p-4 rounded-lg <?php 
                echo $messageType === 'success' ? 'bg-green-100 text-green-700 border border-green-300' : 
                    ($messageType === 'warning' ? 'bg-yellow-100 text-yellow-700 border border-yellow-300' : 
                    'bg-red-100 text-red-700 border border-red-300'); 
            ?>">
                <i class="fas <?php echo $messageType === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'; ?> mr-2"></i>
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <?php if ($section === 'profile'): ?>
            <!-- Profile Photo Section -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-camera text-blue-600 mr-3"></i>Kelola Foto Profil
                </h2>

                <?php
                // Check if profile photo exists
                $profilePhoto = null;
                $photoExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                foreach ($photoExtensions as $ext) {
                    if (file_exists("assets/images/profile.$ext")) {
                        $profilePhoto = "assets/images/profile.$ext";
                        break;
                    }
                }
                ?>

                <?php if ($profilePhoto): ?>
                    <div class="text-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">Foto Profil Saat Ini:</h3>
                        <img src="<?php echo $profilePhoto; ?>" alt="Foto Profil" 
                             class="w-48 h-48 rounded-full object-cover border-4 border-blue-500 mx-auto shadow-lg">
                    </div>
                <?php endif; ?>

                <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                    <div>
                        <label for="profile_photo" class="block text-sm font-medium text-gray-700 mb-2">
                            Pilih Foto Baru:
                        </label>
                        <input type="file" 
                               id="profile_photo" 
                               name="profile_photo" 
                               accept="image/*" 
                               required
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="text-xs text-gray-500 mt-1">
                            Format yang didukung: JPG, PNG, GIF. Maksimal 5MB.
                        </p>
                    </div>

                    <button type="submit" 
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center">
                        <i class="fas fa-upload mr-2"></i>
                        Upload Foto Profil
                    </button>
                </form>
            </div>

        <?php elseif ($section === 'experience'): ?>
            <?php if ($exp): ?>
                <!-- Experience Photo Management -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-3xl font-bold text-gray-800">
                            <i class="fas fa-images text-blue-600 mr-3"></i>
                            Kelola Foto Pengalaman <?php echo $exp; ?>
                        </h2>
                        <a href="?section=experience" class="text-blue-600 hover:text-blue-800">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali
                        </a>
                    </div>

                    <?php
                    $expPhotoDir = "assets/images/experience/exp{$exp}/";
                    $expPhotos = [];
                    if (is_dir($expPhotoDir)) {
                        $expPhotos = glob($expPhotoDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                    }
                    ?>

                    <!-- Current Photos -->
                    <?php if (!empty($expPhotos)): ?>
                        <div class="mb-8">
                            <h3 class="text-xl font-semibold text-gray-700 mb-4">Foto Saat Ini:</h3>
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                <?php foreach ($expPhotos as $photo): ?>
                                    <div class="relative group">
                                        <img src="<?php echo $photo; ?>" 
                                             alt="Experience Photo" 
                                             class="w-full h-32 object-cover rounded-lg shadow-md">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300 rounded-lg flex items-center justify-center">
                                            <a href="?section=experience&exp=<?php echo $exp; ?>&delete=<?php echo urlencode($photo); ?>" 
                                               onclick="return confirm('Yakin ingin menghapus foto ini?')"
                                               class="bg-red-600 hover:bg-red-700 text-white p-2 rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Upload New Photos -->
                    <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                        <div>
                            <label for="experience_photos" class="block text-sm font-medium text-gray-700 mb-2">
                                Upload Foto Baru (Maksimal 4 foto):
                            </label>
                            <input type="file" 
                                   id="experience_photos" 
                                   name="experience_photos[]" 
                                   accept="image/*" 
                                   multiple
                                   max="4"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <p class="text-xs text-gray-500 mt-1">
                                Format yang didukung: JPG, PNG, GIF. Maksimal 5MB per file. Pilih hingga 4 foto sekaligus.
                            </p>
                        </div>

                        <button type="submit" 
                                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center">
                            <i class="fas fa-upload mr-2"></i>
                            Upload Foto
                        </button>
                    </form>
                </div>

            <?php else: ?>
                <!-- Experience Selection -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">
                        <i class="fas fa-briefcase text-blue-600 mr-3"></i>Kelola Foto Pengalaman
                    </h2>
                    <p class="text-gray-600 mb-8">Pilih pengalaman kerja yang ingin Anda kelola foto-fotonya:</p>

                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Experience 1 -->
                        <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-blue-600">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Operator Produksi</h3>
                            <p class="text-gray-600 mb-4">PT Indonesia Polyurethane Industri</p>
                            <?php
                            $exp1Photos = glob('assets/images/experience/exp1/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                            $exp1Count = count($exp1Photos);
                            ?>
                            <p class="text-sm text-gray-500 mb-4">
                                <i class="fas fa-images mr-1"></i>
                                <?php echo $exp1Count; ?> foto
                            </p>
                            <a href="?section=experience&exp=1" 
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition duration-300 inline-flex items-center">
                                <i class="fas fa-edit mr-2"></i>
                                Kelola Foto
                            </a>
                        </div>

                        <!-- Experience 2 -->
                        <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-green-600">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Junior Web Developer</h3>
                            <p class="text-gray-600 mb-4">Freelance Projects</p>
                            <?php
                            $exp2Photos = glob('assets/images/experience/exp2/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                            $exp2Count = count($exp2Photos);
                            ?>
                            <p class="text-sm text-gray-500 mb-4">
                                <i class="fas fa-images mr-1"></i>
                                <?php echo $exp2Count; ?> foto
                            </p>
                            <a href="?section=experience&exp=2" 
                               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300 inline-flex items-center">
                                <i class="fas fa-edit mr-2"></i>
                                Kelola Foto
                            </a>
                        </div>

                        <!-- Experience 3 -->
                        <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-purple-600">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Learning Journey</h3>
                            <p class="text-gray-600 mb-4">Self-Taught Programming</p>
                            <?php
                            $exp3Photos = glob('assets/images/experience/exp3/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                            $exp3Count = count($exp3Photos);
                            ?>
                            <p class="text-sm text-gray-500 mb-4">
                                <i class="fas fa-images mr-1"></i>
                                <?php echo $exp3Count; ?> foto
                            </p>
                            <a href="?section=experience&exp=3" 
                               class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition duration-300 inline-flex items-center">
                                <i class="fas fa-edit mr-2"></i>
                                Kelola Foto
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Tips Section -->
        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-lg p-6">
            <h4 class="font-semibold text-blue-800 mb-4">
                <i class="fas fa-lightbulb mr-2"></i>Tips untuk Foto yang Baik:
            </h4>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-blue-700">
                <div>
                    <h5 class="font-semibold mb-2">Foto Profil:</h5>
                    <ul class="space-y-1">
                        <li>• Gunakan foto dengan pencahayaan yang baik</li>
                        <li>• Pastikan wajah terlihat jelas</li>
                        <li>• Hindari foto yang terlalu casual</li>
                        <li>• Ukuran ideal: persegi (1:1 ratio)</li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">Foto Pengalaman:</h5>
                    <ul class="space-y-1">
                        <li>• Dokumentasikan hasil kerja nyata</li>
                        <li>• Screenshot website/aplikasi yang dibuat</li>
                        <li>• Foto sertifikat atau penghargaan</li>
                        <li>• Dokumentasi proses kerja</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview image before upload
        document.getElementById('profile_photo')?.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Create preview if doesn't exist
                    let preview = document.getElementById('preview');
                    if (!preview) {
                        preview = document.createElement('div');
                        preview.id = 'preview';
                        preview.className = 'mt-4 text-center';
                        preview.innerHTML = `
                            <h4 class="text-sm font-medium text-gray-700 mb-2">Preview:</h4>
                            <img id="preview-img" class="w-32 h-32 rounded-full object-cover border-2 border-gray-300 mx-auto">
                        `;
                        e.target.parentNode.parentNode.appendChild(preview);
                    }
                    document.getElementById('preview-img').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Preview multiple images for experience photos
        document.getElementById('experience_photos')?.addEventListener('change', function(e) {
            const files = e.target.files;
            let preview = document.getElementById('multi-preview');
            
            if (preview) {
                preview.remove();
            }
            
            if (files.length > 0) {
                preview = document.createElement('div');
                preview.id = 'multi-preview';
                preview.className = 'mt-4';
                preview.innerHTML = '<h4 class="text-sm font-medium text-gray-700 mb-2">Preview:</h4><div id="preview-grid" class="grid grid-cols-2 md:grid-cols-4 gap-2"></div>';
                e.target.parentNode.appendChild(preview);
                
                const previewGrid = document.getElementById('preview-grid');
                
                Array.from(files).slice(0, 4).forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-20 object-cover rounded border';
                        previewGrid.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                });
            }
        });
    </script>
</body>
</html>
