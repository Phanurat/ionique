<?php include('../layouts/header.php'); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders</h1>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">เพิ่มรายการ</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-warning">Export</button>
            </div>
        </div>
        <table class="table table-bordered">
                    <thead>
                        <tr class="bg-secondary">
                            <th scope="col" class="text-center"><input type="checkbox" class="form-check-input" id="exampleCheck1"></th>
                            <th scope="col">เลขที่</th>
                            <th scope="col">สาขา</th>
                            <th scope="col">ชื่อสาขา</th>
                            <th scope="col">เลขที่ Order</th>
                            <th scope="col">วันที่ต้องการสินค้า</th>
                            <th scope="col">กลุ่มลูกค้า</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">Last Update</th>
                            <th scope="col" class="text-center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row" class="text-center"><input type="checkbox" class="form-check-input" id="exampleCheck1"></th>
                            <th scope="row">1</th>
                            <td>HM</td>
                            <td>บางแค</td>
                            <td>HMO-123456</td>
                            <td>13/06/2567</td>
                            <td>Lazada</td>
                            <td>ออกใบเสนอราคาแล้ว</td>
                            <td>12/06/2567 11:36.13</td>
                            <td class="text1 text-center"><a href="#">แก้ไข</a></td>
                        </tr>
                        <tr>
                        <tr>
                        <th scope="row" class="text-center"><input type="checkbox" class="form-check-input" id="exampleCheck1"></th>
                            <th scope="row">2</th>
                            <td>MR</td>
                            <td>ปิ่นเกล้า</td>
                            <td>MRO-35421554</td>
                            <td>16/06/2567</td>
                            <td>shopee</td>
                            <td>พร้อมตัดขาย</td>
                            <td>12/06/2567 16:12.03</td>
                            <td class="text1 text-center"><a href="#">แก้ไข</a></td>
                        </tr>
                        <tr>
                        <tr>
                    </tbody>
                    </table>
                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

<?php include('../layouts/footer.php'); ?>