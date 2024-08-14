<?php
    $name = $_POST['name'];
    $class = $_POST['class'];
    $num = $_POST['number'];
    $gen = $_POST['gender'];

    switch ($gen) {
        case 1:
            $opt = "ชาย";
        break;
        case 2:
            $opt = "หญิง";
        break;
        default:
            $opt = "อื่นๆ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>38-Thanchanok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light rounded-3 mb-5 py-3">
        <form>
            <h2>ข้อมูลคุณ</h2>
                <p class="mb-2">ชื่อ - <?php echo $name;?></p>
                <p class="mb-2">ชั้น - <?php echo $class;?></p>
                <p class="mb-2">เลขที่ - <?php echo $num;?></p>
                <p class="mb-2">เพศ - <?php echo $opt;?></p>
            <a href="index.php" class="btn btn-secondary px-4">หน้าแรก</a>
        </form>
    </div>
</body>
</html>