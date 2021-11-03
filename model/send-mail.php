<?php
session_start();
if (isset($_SESSION['currentUser'])) {

?>
    <div>
        <!-- chỉ dùng được tài khoản mặc định -->
        <div class="mb-3">
            <label class="form-label">Gửi đến</label>
            <input id="emailAddress" type="email" class="form-control" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Chủ đề</label>
            <input id="emailSubject" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nội dung</label>
            <textarea class="form-control" id="emailContent" rows="3"></textarea>
        </div>
        <button id="send" type="submit" class="btn btn-primary">Gửi</button>
    </div>
<?php
} else header('location:login.php');
?>
<script>
    $(document).ready(function() {
        //? truyền địa chỉ email
        $("#emailAddress").val($email);

        $('#send').click(function() {
            $emailSubject = $('#emailSubject').val();
            $emailContent = $('#emailContent').val();

            if ($emailSubject == '' || $emailContent == '') {
                alert("Vui lòng nhập đầy đủ chủ đề và nội dung");
            } else {
                $.ajax({
                    type: "post",
                    url: "./mail/send.php",
                    data: {
                        emailAddress: $email,
                        emailSubject: $emailSubject,
                        emailContent: $emailContent,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            alert("Đã gửi")
                        } else if (response == 'error') {
                            alert("Gửi không thành công")
                        }
                    }
                });
            }

        });
    })
</script>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>