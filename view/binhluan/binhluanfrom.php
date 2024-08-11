<?php
session_start(); // đảm bảo phiên làm việc được bắt đầu
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>

<div class="detail__comment">
    <div class="comment__title">BÌNH LUẬN</div>
    <div class="comment__table">
        <?php
        foreach ($dsbl as $bl) {
            extract($bl);
            echo '<div class="comment__item">
                <p>Nội dung: ' . htmlspecialchars($noidung) . '</p>
                <p>ID: ' . htmlspecialchars($iduser) . '</p>
                <p>Ngày: ' . htmlspecialchars($ngaybinhluan) . '</p>
            </div>';
        }
        ?>
    </div>
    <div class="comment__form">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkLogin();">
            <input type="hidden" name="idpro" value="<?= htmlspecialchars($idpro) ?>">
            <div class="input-container">
                <input class="input-field" placeholder="Nhập bình luận..." type="text" name="noidung" required>
                <span class="input-highlight"></span>
            </div>
            <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
    </div>
    <script>
        function checkLogin() {
            <?php if (!isset($_SESSION['user'])) { ?>
                alert("Vui lòng đăng nhập để bình luận.");
                return false; // Ngăn chặn form gửi
            <?php } ?>
            return true; // Cho phép form gửi
        }
    </script>
    <?php
    if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
        if (isset($_SESSION['user'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            echo "<script>alert('Vui lòng đăng nhập để bình luận.');</script>";
        }
    }
    ?>
</div>