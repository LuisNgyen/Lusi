<?php
session_start();
?>
<div class="menu">
    <ul>
        <li><a href="index.php?quanly=loaitin&ac=them">Quản lý loại tin</a></li>
        <li><a href="index.php?quanly=baiviet&ac=them">Quản lý bài viết</a></li>
        <li><a href="#">Quản lý quảng cáo</a></li>
        <?php
        if (isset($_SESSION['loginadmin'])){
            echo "<li><a href='logout.php'>Thoát</a></li>";
        }
        ?>
    </ul>
</div>