<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SE_CAMP | @yield('title', '#12')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('asset/dist/css/adminlte.min.css') }} ">

</head>

<body class="hold-transition sidebar-mini">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">workshop 6</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputfname">ชื่อ</label>
                    <input type="text" class="form-control" id="inputfname" placeholder="ใส่ชื่อ">
                </div>
                <div class="form-group">
                    <label for="inputlname">สกุล</label>
                    <input type="text" class="form-control" id="inputlname" placeholder="ใส่สกุล">
                </div>
                <div class="form-group">
                    <label for="inputdate">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" id="inputdate">
                </div>
                <div class="form-group">
                    <label for="inputnumber">อายุ</label>
                    <input type="number" class="form-control" id="inputnumber" placeholder="ใส่อายุ">
                </div>
                <div class="form-group">
                    <label for="inputdate">เพศ</label>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" name="radio1">
                    <label class="form-check-label">ชาย</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input class="form-check-input" type="radio" name="radio1">
                    <label class="form-check-label">หญิง</label>
                </div>
                <label>รูป</label>
                <div class="input-group">

                    <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">รูป</label>
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="inputnumber">ที่อยู่</label>
                    <br>
                    <textarea rows="2" placeholder="กรุณาป้อนข้อมูล"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>สีที่ชอบ</label>
                    <select name="colour" class="form-control">
                        <option value="red">แดง</option>
                        <option value="blue">ฟ้า</option>
                        <option value="greeen">เขียว</option>
                        <option value="black">ดำ</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>แนวเพลงที่ชอบ</label>
                    <br>

                    <input id="form-check-input" type="radio" name="same_radio" />
                    <label for="form-check-label">เพื่อชีวิต</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="form-check-input" type="radio" name="same_radio" />
                    <label for="form-check-label">ลูกทุ่ง</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="form-check-input" type="radio" name="same_radio" />
                    <label for="form-check-label">อื่นๆ</label>

                </div>
                <br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</body>

</html>
