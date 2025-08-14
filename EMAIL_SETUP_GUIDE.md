# Setup Email untuk CV Contact Form

## Metode 1: Menggunakan Gmail SMTP (Recommended)

### 1. Install PHPMailer
Download PHPMailer dari: https://github.com/PHPMailer/PHPMailer
Atau gunakan Composer: `composer require phpmailer/phpmailer`

### 2. Buat file smtp_config.php
```php
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php'; // Jika menggunakan Composer
// Atau include manual jika download manual

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-email@gmail.com'; // Ganti dengan email Anda
    $mail->Password   = 'your-app-password';     // App password, bukan password Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('your-email@gmail.com', 'CV Website');
    $mail->addAddress('hanif.sandi.wardana@gmail.com');

    // Content
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    return true;
} catch (Exception $e) {
    return false;
}
?>
```

### 3. Setup App Password di Gmail
1. Buka Google Account Settings
2. Security → 2-Step Verification (harus diaktifkan)
3. App passwords → Generate password untuk "Mail"
4. Gunakan password ini di konfigurasi SMTP

## Metode 2: Konfigurasi Sendmail di XAMPP (Windows)

### 1. Download Sendmail
Download dari: https://www.glob.com.au/sendmail/

### 2. Ekstrak ke C:\xampp\sendmail\

### 3. Edit php.ini (C:\xampp\php\php.ini)
```ini
[mail function]
SMTP = localhost
smtp_port = 25
sendmail_from = your-email@gmail.com
sendmail_path = "C:\xampp\sendmail\sendmail.exe -t"
```

### 4. Edit sendmail.ini (C:\xampp\sendmail\sendmail.ini)
```ini
[sendmail]
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=your-email@gmail.com
auth_password=your-app-password
force_sender=your-email@gmail.com
```

### 5. Restart Apache di XAMPP

## Metode 3: Menggunakan Email Service (Easiest)

### Menggunakan EmailJS (Client-side)
1. Daftar di https://www.emailjs.com/
2. Setup email service
3. Ganti form dengan JavaScript EmailJS

### Menggunakan Formspree
1. Daftar di https://formspree.io/
2. Ganti action form dengan endpoint Formspree

## Testing

1. Pastikan email sudah dikonfigurasi di `email_config.php`
2. Test dengan mengisi form kontak
3. Cek email masuk di Gmail
4. Cek juga folder Spam/Promotions

## Troubleshooting

### Email tidak masuk:
- Cek konfigurasi SMTP
- Cek App Password Gmail
- Cek log error Apache/PHP
- Cek folder Spam

### Error "mail() function":
- Install/konfigurasi sendmail
- Atau gunakan PHPMailer dengan SMTP

### Gmail menolak koneksi:
- Pastikan 2FA aktif
- Gunakan App Password
- Cek less secure apps (tidak recommended)

## Security Notes

1. Jangan commit email config dengan password ke Git
2. Gunakan environment variables untuk production
3. Validasi input dengan baik
4. Implementasi rate limiting untuk prevent spam
5. Gunakan HTTPS di production

## Alternative Solutions

Jika masih sulit setup email, bisa gunakan:
1. Contact form service (Formspree, Netlify Forms)
2. WhatsApp link langsung
3. Telegram bot
4. Google Forms embed

## File yang perlu diedit:

1. `email_config.php` - Ganti email tujuan
2. `index.php` - Sudah siap, tidak perlu diubah
3. Setup salah satu metode di atas

Good luck! 🚀
