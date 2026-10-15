<?php
$script_dir = trim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
$script_segments = $script_dir === '' ? [] : explode('/', $script_dir);
$base_path = str_repeat('../', max(0, count($script_segments) - 1));
$home_url = $base_path . 'index.php';
?>
<footer class="mhc-public-footer">
    <div class="mhc-public-footer-inner">
        <p class="mhc-public-copyright">&copy; <?php echo date('Y'); ?> Munali Hills College. All rights reserved.</p>
        <a class="mhc-public-home" href="<?php echo htmlspecialchars($home_url, ENT_QUOTES, 'UTF-8'); ?>">Back to Home</a>
        <nav class="mhc-public-socials" aria-label="Contact and social media">
            <a href="https://www.facebook.com/munalihills" target="_blank" rel="noopener noreferrer" aria-label="Facebook" title="Facebook">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 21v-8.2h2.8l.4-3.2h-3.2v-2c0-.9.3-1.6 1.6-1.6h1.7V3.1c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.2v2.4H7.7v3.2h2.7V21h3.1z"/></svg>
            </a>
            <a href="https://wa.me/260774069095" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" title="WhatsApp">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a9.7 9.7 0 0 0-8.3 14.7L2.4 22l5.5-1.4A9.7 9.7 0 1 0 12 2zm0 17.7a8 8 0 0 1-4.1-1.1l-.3-.2-3.3.9.9-3.2-.2-.3A8 8 0 1 1 12 19.7zm4.4-6c-.2-.1-1.3-.7-1.5-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.8.9-.1.2-.3.2-.5.1-.2-.1-.9-.3-1.8-1.1-.7-.6-1.1-1.3-1.3-1.5-.1-.2 0-.3.1-.5l.4-.4.2-.4c.1-.1 0-.3 0-.4l-.7-1.7c-.2-.4-.3-.4-.5-.4h-.4c-.2 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2.9 2.4c.1.2 1.6 2.5 3.9 3.4.5.2.9.3 1.2.4.5.1.9.1 1.3.1.4-.1 1.3-.5 1.5-1 .2-.5.2-.9.2-1 0-.1-.2-.2-.4-.3z"/></svg>
            </a>
            <a href="mailto:munalihills@gmail.com" aria-label="Email Munali Hills College" title="Email">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 5h18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2zm9 7.2L20.4 7H3.6l8.4 5.2zm-9 4.9h18V8.8l-9 5.5-9-5.5v8.3z"/></svg>
            </a>
        </nav>
    </div>
</footer>
