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
    $tk_hola = $_POST['tk_hola'];
    $doi1 = $_POST['doi-vo-dich'];
    $tyso = $_POST['ty-so'];

    $message  = "Dự đoán đội vô địch và tỷ số thứ $stt\n\n";
    $message .= "Tk hola: $tk_hola\n";
    $message .= "Đội vô địch: $doi1\n";
    $message .= "Tỷ số: $tyso";
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
