 
<?php
//1. إنشاء ملف وكتابة نص داخله
$file = fopen("data.txt", "w");   // إنشاء ملف
fwrite($file, "Hello, this is a test file.\n");  // كتابة نص
fclose($file);  // إغلاق الملف
echo "تم إنشاء الملف وكتابة البيانات بنجاح";
// 2. قراءة محتوى ملف
$content = file_get_contents("data.txt");
echo $content;
//طريقه اخرى 
$file = fopen("data.txt", "r");
$size = filesize("data.txt");
$content = fread($file, $size);
fclose($file);
echo $content;
# 3. إضافة نص إلى ملف موجود
$file = fopen("data.txt", "a");  
fwrite($file, "New line added.\n");
fclose($file);
# 4. حذف ملف
if (file_exists("data.txt")) {
    unlink("data.txt");
    echo "تم حذف الملف";
} else {
    echo "الملف غير موجود";
}
//5. ضبط المنطقة الزمنية 
date_default_timezone_set("Asia/Riyadh");
echo date("Y-m-d H:i:s");
//6.استخدام DateTime مع منطقة زمنية
$date = new DateTime("now", new DateTimeZone("Asia/Aden"));
echo $date->format("Y-m-d H:i:s");
?>