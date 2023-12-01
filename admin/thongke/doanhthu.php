<div class="container">
    <div class="products">


        <div class="product">
            <h4>Biểu đồ thống kê doanh thu theo tháng</h4>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <canvas id="lineChart"></canvas>

            <?php
            $rows = doanhthutheothang();

            if ($rows) {
                // Tạo mảng để chứa dữ liệu
                $data = [];

                foreach ($rows as $row) {
                    $data[] = [
                        'thang' => $row['thang'],
                        'doanhThu' => $row['tongDoanhThu']
                    ];
                }
                usort($data, function ($a, $b) {
                    return $a['thang'] - $b['thang'];
                });
            }
            ?>

            <script>
                var ctxL = document.getElementById("lineChart").getContext('2d');

                var hasData = <?php echo isset($data) && !empty($data) ? 'true' : 'false'; ?>;

                if (hasData) {
                    var labels = <?php echo json_encode(array_column($data, 'thang')); ?>;

                    var doanhThu = <?php echo json_encode(array_column($data, 'doanhThu')); ?>;

                    var myLineChart = new Chart(ctxL, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: "Doanh thu",
                                data: doanhThu,
                                backgroundColor: ['rgba(105, 0, 132, .2)'],
                                borderColor: ['rgba(200, 99, 132, .7)'],
                                borderWidth: 2
                            }]
                        },
                        options: {
                            responsive: true
                        }
                    });
                }
            </script>
        </div>

        <div class="top5-banchay">
            <h4>Top sản phẩm bán chạy</h4>

            <?php $top5_sanpham = top5_sanpham_banchay_theothang();
            $thang = $top5_sanpham[0]['thang'];
            $nam = $top5_sanpham[0]['nam'];
            echo  ' <p class="p">Tháng ' . $thang . '/' . $nam . '</p>';
            foreach ($top5_sanpham as $top5_sp) {
                extract($top5_sp);
                // var_dump($top5_sanpham);


                echo '
                <div class="sanpham">
                    
                <div class="noidung">
                    <img src="/upload/' . $hinhAnh . ' " alt="">
                    <div class="noidung-sp">
                        <h5>' . $luotMua . ' Lượt mua </h5>
                        <p>Tên sản phẩm: ' . $tenSanPham . ' </p>
                    </div>
                    
                </div>
            </div>
                ';
            }


            ?>
        </div>
    </div>
    <div class="top">
        <div class="top5-sanpham">
            <h4>Top sản phẩm doanh thu cao nhất</h4>

            <?php $top5_doanhthu = top5_sanpham_doanhthu_caonhat_thang();
            $thang = $top5_doanhthu[0]['thang'];
            $nam = $top5_doanhthu[0]['nam'];
            echo  ' <p class="p">Tháng ' . $thang . '/' . $nam . '</p>';
            foreach ($top5_doanhthu as $top5_dt) {
                extract($top5_dt);
                // var_dump($top5_sanpham);


                echo '
                <div class="sanpham">
                    
                <div class="noidung">
                    <img src="/upload/' . $hinhAnh . ' " alt="">
                    <div class="noidung-sp">
                        <h5>Tổng doanh thu: ' . number_format($doanhThu) . '₫ </h5>
                        <p>Tên sản phẩm: ' . $tenSanPham . ' </p>
                    </div>
                    
                </div>
            </div>
                ';
            }


            ?>
        </div>
    </div>
</div>