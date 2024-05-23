<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
define('BOT_TOKEN', '7190527993:AAFRyHLtdaY5vmpwFF1qJTinjk9QSslAm38'); // token bot để chạy
$botToken = "7190527993:AAFRyHLtdaY5vmpwFF1qJTinjk9QSslAm38";
$chatID = "-1002044060164";

// Gửi tin nhắn bằng cách sử dụng cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, false);
$response = curl_exec($ch);
curl_close($ch);
$stt = 1;
// Kiểm tra nếu là yêu cầu POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['csrf_token'] !== $csrf_token) {
        die("CSRF token không hợp lệ!");
    }
    // Lấy dữ liệu từ form
    $tk_hola = $_POST['tu_ket_tk_hola'];
    $result1 = $_POST['result1'];
    $result2 = $_POST['result2'];
    $result3 = $_POST['result3'];
    if($_POST['result1'] == 'draw1') {
        $result1 = 'Hòa';
    }
    if($_POST['result2'] == 'draw2') {
        $result2 = 'Hòa';
    }
    if($_POST['result3'] == 'draw3') {
        $result3 = 'Hòa';
    }

    $message  = "Dự đoán 3 trận ngày thứ $stt\n\n";
    $message .= "  Tk hola: $tk_hola\n";
    $message .= "├Trận thứ 1: $result1\n";
    $message .= "├Trận thứ 2: $result2\n";
    $message .= "├Trận thứ 3: $result3\n";
    sendMessage($chatID, $message);

    $stt ++;
} else {
    // Nếu không phải là yêu cầu POST, chuyển hướng hoặc xử lý theo cách khác
    // Code ở đây
}
function sendMessage($chatId, $message, $replyToMessageId = null, $parseMode = 'HTML') {

    $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendMessage?chat_id=$chatId&text=" . urlencode($message) . "&parse_mode=$parseMode";
    if ($replyToMessageId !== null) {
        $url .= "&reply_to_message_id=$replyToMessageId";
    }
    $result = file_get_contents($url);
    $resultJson = json_decode($result, true);
    return isset($resultJson['result']['message_id']) ? $resultJson['result']['message_id'] : null;
}
?>
