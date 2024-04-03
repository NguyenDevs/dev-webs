let firstQuestion = prompt("10 + 10 bằng mấy?");
while (firstQuestion != "20") {
    firstQuestion = prompt("Sai rồi, hãy thử lại. 10 + 10 bằng mấy?");
}
let secondQuestion = prompt("Đúng rồi! Câu hỏi tiếp theo: 10 * 10 bằng mấy?");
while (secondQuestion != "100") {
    secondQuestion = prompt("Sai rồi, hãy thử lại. 10 * 10 bằng mấy?");
}
alert("Xuất sắc! Bạn đã trả lời đúng cả hai câu hỏi.");
