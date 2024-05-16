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
    $doi1 = $_POST['8-doi-1'];
    $doi2 = $_POST['8-doi-2'];
    $doi3 = $_POST['8-doi-3'];
    $doi4 = $_POST['8-doi-4'];
    $doi5 = $_POST['8-doi-5'];
    $doi6 = $_POST['8-doi-6'];
    $doi7 = $_POST['8-doi-7'];
    $doi8 = $_POST['8-doi-8'];

    $message  = "Dự đoán 8 đội vào bán kết thứ $stt\n\n";
    $message .= "  Tk hola: $tk_hola\n";
    $message .= "├Đội thứ 1: $doi1\n";
    $message .= "├Đội thứ 2: $doi2\n";
    $message .= "├Đội thứ 3: $doi3\n";
    $message .= "├Đội thứ 4: $doi4\n";
    $message .= "├Đội thứ 5: $doi5\n";
    $message .= "├Đội thứ 6: $doi6\n";
    $message .= "├Đội thứ 7: $doi7\n";
    $message .= "├Đội thứ 8: $doi8\n";
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
