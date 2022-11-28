<?php

$customerList = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983/08/20",
        "address" => "Hà Nội",
        "profile" => "images/img1.jpg"],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "day_of_birth" => "1983/08/21",
        "address" => "Bắc Giang",
        "profile" => "images/img2.jpg"],
    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "day_of_birth" => "1983/08/22",
        "address" => "Nam Định",
        "profile" => "images/img3.jpg"],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "day_of_birth" => "1983/08/17",
        "address" => "Hà Tây",
        "profile" => "images/img4.jpg"],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "day_of_birth" => "1983/08/19",
        "address" => "Hà Nội",
        "profile" => "images/img5.jpg"]
];
    function searchByDate($customers, $fromDate, $toDate){
    {
        if (empty($fromDate) || empty($toDate)) {
            return $customers;
        }
    
        $filteredCustomers = [];
        foreach ($customers as $customer) {
            if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
                continue;
            if (strtotime($customer['day_of_birth']) > strtotime($toDate))
                continue;
            $filteredCustomers[] = $customer;
        }
        return $filteredCustomers;
    }
};
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Chọn ngày sinh từ <input type="date" name="" id="">
        đến <input type="text" name="" id="">
        <input type="submit" value="Lọc">
    </form>
</body>
</html>