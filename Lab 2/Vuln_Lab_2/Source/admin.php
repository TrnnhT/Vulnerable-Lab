<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['username'] !== 'admin') {
    header("Location: login.php");
    exit();
}

require_once 'layout.php';

$previewResult = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['image_url'])) {
    $url = $_POST['image_url'];

    // Intentionally unsafe for lab purposes
    $previewResult = @file_get_contents($url);
}

startLayout("Admin Panel - Lab 2");
?>

<div style="background: white; padding: 25px 30px; border-radius: 12px; box-shadow: 0 0 12px rgba(0,0,0,0.1); max-width: 600px; width: 100%;">
    <h2 style="color: #1877f2; margin-top: 0;">Welcome, Admin</h2>

    <h3 style="margin-top: 20px;">Image Preview Tool</h3>

    <form method="POST" style="margin-top: 15px;">
        <label for="image_url" style="font-weight: bold;">Enter an image URL to preview:</label><br>
        <input type="text" name="image_url" id="image_url" placeholder="e.g. http://127.0.0.1/test.jpg" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; margin-top: 10px;">
        <button type="submit" style="margin-top: 12px; background-color: #28a745; color: white; padding: 8px 16px; border: none; border-radius: 6px; cursor: pointer;">🔍 Preview</button>
    </form>

    <?php if ($previewResult): ?>
        <div style="margin-top: 25px;">
            <h4 style="color: #333;">Preview Result:</h4>
            <pre style="background: #f6f8fa; padding: 15px; border-left: 4px solid #1877f2; border-radius: 6px; max-height: 300px; overflow: auto;">
<?= htmlspecialchars($previewResult) ?>
            </pre>
        </div>
    <?php endif; ?>
</div>

<?php endLayout(); ?>
