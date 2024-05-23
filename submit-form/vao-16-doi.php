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
    $tk_hola = $_POST['ban_ket_tk_hola'];
    $doi1 = $_POST['16-doi-1'];
    $doi2 = $_POST['16-doi-2'];
    $doi3 = $_POST['16-doi-3'];
    $doi4 = $_POST['16-doi-4'];
    $doi5 = $_POST['16-doi-5'];
    $doi6 = $_POST['16-doi-6'];
    $doi7 = $_POST['16-doi-7'];
    $doi8 = $_POST['16-doi-8'];
    $doi9 = $_POST['16-doi-9'];
    $doi10 = $_POST['16-doi-10'];
    $doi11 = $_POST['16-doi-11'];
    $doi12 = $_POST['16-doi-12'];
    $doi13 = $_POST['16-doi-13'];
    $doi14 = $_POST['16-doi-14'];
    $doi15 = $_POST['16-doi-15'];
    $doi16 = $_POST['16-doi-16'];

    $message  = "Dự đoán 16 đội vào thứ $stt\n\n";
    $message .= "  Tk hola: $tk_hola\n";
    $message .= "├Đội thứ 1: $doi1\n";
    $message .= "├Đội thứ 2: $doi2\n";
    $message .= "├Đội thứ 3: $doi3\n";
    $message .= "├Đội thứ 4: $doi4\n";
    $message .= "├Đội thứ 5: $doi5\n";
    $message .= "├Đội thứ 6: $doi6\n";
    $message .= "├Đội thứ 7: $doi7\n";
    $message .= "├Đội thứ 8: $doi8\n";
    $message .= "├Đội thứ 9: $doi9\n";
    $message .= "├Đội thứ 10: $doi10\n";
    $message .= "├Đội thứ 11: $doi11\n";
    $message .= "├Đội thứ 12: $doi12\n";
    $message .= "├Đội thứ 13: $doi13\n";
    $message .= "├Đội thứ 14: $doi14\n";
    $message .= "├Đội thứ 15: $doi15\n";
    $message .= "├Đội thứ 16: $doi16\n";
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
