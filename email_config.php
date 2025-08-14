<?php
/*
 * Konfigurasi Email untuk CV Contact Form
 * 
 * INSTRUKSI SETUP:
 * 1. Ganti email di bawah dengan Gmail Anda
 * 2. Pastikan PHP mail() function sudah dikonfigurasi di server
 * 3. Untuk XAMPP, konfigurasikan sendmail atau gunakan SMTP
 */

// EMAIL TUJUAN - GANTI DENGAN EMAIL ANDA
$config = [
    'receiving_email' => 'hanifsandi32@gmail.com', // Ganti dengan email Anda
    'website_name' => 'CV Hanif Sandi Wardana',
    'admin_name' => 'Hanif Sandi Wardana',
    
    // Email settings
    'email_prefix' => '[CV Contact]',
    'auto_reply' => true, // Set false jika tidak ingin auto reply
    'save_messages' => false, // Set true jika ingin menyimpan pesan ke file
];

// AUTO REPLY MESSAGE
$auto_reply_message = "
Halo {NAME},

Terima kasih telah menghubungi saya melalui website CV. 

Pesan Anda telah saya terima dengan detail:
- Subjek: {SUBJECT}
- Waktu: {DATE}

Saya akan membalas pesan Anda secepatnya, biasanya dalam 1-2 hari kerja.

Salam,
Hanif Sandi Wardana

---
Pesan ini dikirim otomatis. Mohon jangan membalas email ini.
";

return $config;
?>
