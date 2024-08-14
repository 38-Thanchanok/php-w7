<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>38-Thanchanok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-light rounded-3 mb-4 py-3">
        <form action="opt.php" method="POST">
        <h1>ข้อมูล</h1>
        <div class="mb-2">
            <label class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="name" value="นางสาวธัญชนก สุดธง">
        </div>
        <div class="mb-2">
            <label class="form-label">ชั้น</label>
            <input type="text" class="form-control" name="class" value="ม. 6/10">
        </div>
        <div class="mb-2">
            <label class="form-label">เลขที่</label>
            <input type="text" class="form-control" name="number" value="38">
        </div>
        <div class="mb-2">
            <label class="form-label">เพศ</label>
            <select class="form-select" name="gender">
                <option value="1">ชาย</option>
                <option selected value="2">หญิง</option>
                <option value="3">อื่น ๆ</option>
            </select>
        </div>
        <button type="submit" class="btn btn-secondary px-4">ส่งข้อมูล</button>
        </form>
    </div>
</body>
</html>