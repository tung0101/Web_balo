<div class="main">
    <main>
        <h2>Danh Sách Sản Phẩm</h2>
        <form action="../controller/indexAdmin.php?act=layout_tim" id="tim" method="POST">
            <input type="text" name="filter" placeholder="Tìm Kiếm sản phẩm">
            <input id="timkiem" type="submit" name="timkiem" value="Tìm kiếm"></i>

        </form>
        <?php

            $query = sanpham_showAll();
                echo "<table >";
                echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
                echo '
                        <tr>
                        <td class="an"></td>
                        <td class="an">
                        
                        </td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        <td class="an"></td>
                        
                        <td class="them"> <a href="../controller/indexAdmin.php?act=themsanpham"><i class="fa-solid fa-circle-plus"></i> Thêm</a> </td>
                        </tr>
                    ';
                echo '
                    <tr>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    <td class="a"></td>
                    </tr>
                ';
                echo '
                                 <tr>
                                    <th>ID</th>
                                    <th>HÌNH ẢNH</th>
                                    <th colspan="3">TÊN SẢN PHẨM</th>
                                    <th colspan="2">GIÁ</th>
                                    <th colspan="2">Phân loại</th>
                                    <th colspan="2"></th>
                                </tr>
                                ';


                foreach ($query as $row) {
                    extract($row);
                    $dellink="../controller/indexAdmin.php?act=sanpham&id=".$id ;
                                

                    echo '
                                <tr>
                                    <td>' . $id . '</td>
                                    <td><img src="../view/images/' . $hinh . '" alt=""></td>
                                    <td colspan="3">' . $tensp . '</td>
                                    <td colspan="2">' . $gia. 'đ</td>
                                    <td colspan="2">' . $iddanhmuc. '</td>
            
                                    <td class="ad"><a href="../controller/indexAdmin.php?act=suasanpham&page_layout=sua&id=' . $id . '"> <i class="fa-solid fa-pen"></i> </a></td>
                                    <td class="ad"><a onclick="return Del()" href="'.$dellink.'"> <i class="fa-solid fa-trash"></i> </a></td>
                                </tr>
                                ';
                }
            

            echo "</table>";

        ?>
    </main>
</div>
<?php
            if(isset($_GET['id'])){
                sanpham_delete($id);
                echo "<script>alert('Xoá Sản Phẩm thành công')</script>";
            }
?>