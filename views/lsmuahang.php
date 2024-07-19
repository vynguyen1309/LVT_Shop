<div class="small-container cart-page">
    </link>
    <style>
        #search {
            display: none;
        }

        #huy {
            width: auto;
            background: none;
            border: none;
            font-size: 18px;
            color: orange;
        }

        #huy:hover {
            color: orangered;
            cursor: pointer;
        }

        #ma_don {
            display: none;
        }

        table img {
            width: 25px;
            height: 35px;
        }

        .frmcontent {
            width: 20%;
            height: 200px;
            background: white;
            border: 1px solid black;
            border-radius: 10px;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }


        .frmcontent #role {
            display: none;
        }

        .frmcontent button {
            width: 70px;
            height: 40px;
            background: rgb(218, 230, 222);
            position: relative;
            margin: 0 10px;
            left: 28%;
            /* transform: translate(120%, -120%); */
            cursor: pointer;
            border: none;
            border-radius: 10px;
        }

        .frmcontent input:nth-child(3) {
            background: rgb(124, 222, 124);
            width: 75px;
            height: 40px;
            position: relative;
            margin: 0 10px;
            left: 28%;
            /* transform: translate(120%, -120%); */
            cursor: pointer;
            border: none;
            border-radius: 10px;
        }

        .frmcontent p {
            margin: 20px 0 60px 20px;
        }

        .frmcontent button:hover {
            cursor: pointer;
            background: gray;
            color: white;
        }

        .frmcontent input:hover {
            cursor: pointer;
            background: gray;
            color: white;
        }

        /*
        .box button {
            width: 70px;
            height: 40px;
            background: rgb(218, 230, 222);
            position: relative;
            margin: 0 10px;
            top: 50%;
            left: 50%;
            transform: translate(-120%, -120%);
            cursor: pointer;
            border: none;
            border-radius: 10px;
        }

        .box button:nth-child(3) {
            background: rgb(124, 222, 124);
        }

        .box button:hover {
            background: orange;
        } */
    </style>
    <!-- <select name="" id="">
        <option value="2">Đã hủy</option>
    </select> -->
    <?php
    if (isset($_SESSION['username'])) {
        echo '
    <table>
        <h1>ĐƠN HÀNG ĐÃ ĐẶT</h1>
        <br>
        <tr>
            <th>STT</th>
            <th>MÃ ĐƠN HÀNG</th>
            <th>SỐ LƯỢNG MẶT HÀNG</th>
            <th>TỔNG TIỀN ĐƠN HÀNG</th>
            <th>NGÀY ĐẶT HÀNG</th>
            <th>TRẠNG THÁI</th>
            <th></th>
            <th>CHI TIẾT</th>
        </tr>';
        $i = 0;
        if (is_array($listdh)) {
            foreach ($listdh as $dh) {
                extract($dh);
                // print_r($arr);
                // }
                // $status = get_status($dh['status']);
                if ($status === 0) {
                    $role_dh = 'Chưa xác nhận';
                } else if ($status === 1) {
                    $role_dh = 'Đã xác nhận';
                } else if ($status == 2) {
                    $role_dh = 'Hủy đơn';
                } else if ($status == 3) {
                    $role_dh = 'Giao hàng thành công';
                } else {
                    $role_dh = 'Đang giao';
                }
                $countsp =  loadall_sp_cart($id_donhang);
                $xemchitiet = "index.php?act=xemchitiet&id_donhang=" . $id_donhang;

                if ($role_dh == 'Hủy đơn') {
                    echo '
                    <tr>
                    <td>' . ($i + 1) . '</td>
                    <td>' . $madh . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . number_format($tongdonhang, 0, '.', '.') . 'đ</td>
                    <td>' . $ngaydathang . '</td>
                    <td id="role">' . $role_dh . '</td>
                    <td id="ma_don">' . $id_donhang . '</td>
                    <td></td>   
                    </tr>';
                } else if ($role_dh == 'Giao hàng thành công') {
                    echo '
                    <tr>
                    <td>' . ($i + 1) . '</td>
                    <td>' . $madh . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . number_format($tongdonhang, 0, '.', '.') . 'đ</td>
                    <td>' . $ngaydathang . '</td>
                    <td id="role">' . $role_dh . '</td>
                    <td></td>
                    <td id="ma_don">' . $id_donhang . '</td>
                    <td id="chitiet" ><a href="' . $xemchitiet . '">Xem chi tiết</a></td>
                    </tr>';
                } else {
                    echo '
                    <tr>
                    <td>' . ($i + 1) . '</td>
                    <td>' . $madh . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . number_format($tongdonhang, 0, '.', '.') . 'đ</td>
                    <td>' . $ngaydathang . '</td>
                    <td id="role">' . $role_dh . '</td>
                    <td id="huy" onclick="huy_don()">
                    Hủy
                    </td>
                    <td id="ma_don">' . $id_donhang . '</td>
                    <td id="chitiet" ><a href="' . $xemchitiet . '">Xem chi tiết</a></td>
                    </tr>';
                }
                $i++;
            }
        }
    } else {
        echo '</div>
        <div class="small-container cart-page">
        <table>
        <h1>ĐƠN HÀNG ĐÃ ĐẶT</h1>
        <br>
        <tr>
            <th>STT</th>
            <th>MÃ ĐƠN HÀNG</th>
            <th>SỐ LƯỢNG MẶT HÀNG</th>
            <th>TỔNG TIỀN ĐƠN HÀNG</th>
            <th>NGÀY ĐẶT HÀNG</th>
            <th>TRẠNG THÁI</th>
        </tr>
            </table> <br>
            Bạn không có đơn hàng nào! <br>          
           </div>';
    }
    ?>
    </table>
    <div class="row frmcontent ">
        <p>Bạn có chắc chắn hủy đơn hàng không ?</p>
        <form action="index.php?act=lsmuahang" method="POST">
            <div class="row mb10" id="role">
                <select name="role" id="">
                    <option value="2">Hủy đơn</option>
                </select>
            </div>
            <div class="row mb10 ">
                <input id="id_donhang" type="hidden" name="id" value=" ">
                <button id="reset" type="reset">Hủy</button>
                <!-- <button type="submit" name="capnhat">Xác nhận</button> -->
                <input type="submit" name="capnhat" value="Xác Nhận">
            </div>
            <span></span>
        </form>
    </div>
    <!-- <div class="box">
        <p style="text-align: center;">Bạn có chắc chắn muốn hủy đơn hàng này không ?</p>
        <button onclick="no_confirm()">Hủy</button>
        <button onclick="confirm()">Xác nhận</button>
    </div> -->

    <script>
        // var box = document.querySelector('.box');
        // // console.log(box);
        // var body = document.querySelector('table');
        // // console.log(body);
        // var dele = document.querySelectorAll('#dele');
        // console.log(role.innerText);
        // if (role.innerHTML == 'Hủy đơn') {
        //     console.log(role);
        // }
        // console.log(auto_submit);
        // var susces = function autoSubmit() {
        //     alert('Đã hủy thành công đơn hàng');
        // }
        var box = document.querySelector('.frmcontent');
        // console.log(box);
        var reset = document.querySelector('#reset');
        // console.log(reset);
        // console.log(document.querySelectorAll('span'));
        var previous = 1;
        var id_don = document.querySelector('#id_donhang');

        function huy_don() {
            // console.log(1);
            box.style.display = 'block';
            reset.addEventListener('click', () => {
                box.style.display = 'none';
            });
            previous = parseInt(event.target.nextElementSibling.innerText);
            console.log(previous);
            id_don.value = previous;
        }



        // box.style.display = 'block';
        // body.style.opacity = '0.3';

        // function no_confirm() {
        //     box.style.display = 'none';
        //     body.style.opacity = '1';
        // }

        // function confirm() {
        //     box.style.display = 'none';
        //     body.style.opacity = '1';
        //     for (var i = 0; i < dele.length; i++) {
        //         // console.log(dele[i]);
        //         dele[i] = event.target.parentElement;
        //         console.log(dele[i] = event.target.parentElement.previousSibling);
        //     }
        // let text = 'Xác nhận hủy đơn hàng ?';
        //     if (confirm(text) == true) {
        //         // event.target.parentElement.style.display = "none";
        //         var previous = event.target.previousElementSibling;
        //         var next = event.target.nextElementSibling;
        //         // console.log(previous.innerText);
        //         // console.log(role);
        //         previous.innerText = 'Hủy đơn';
        //         next.innerText = ' ';
        //         next.removeAttribute('a');

        //         // function autoSubmit() {
        //         //     alert('Đã hủy thành công đơn hàng');
        //         // }
        //         // auto_submit.click();
        //     }
        // }
    </script>