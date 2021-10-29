$(document).ready(function(){
    $('.btn-login').click(function () { 
        $userName=$('#userName').val();
        $password=$('#password').val();
        
        if($userName=='' || $password ==''){
            alert("Vui lòng nhập đầy đủ TK và MK");
        }else{
            $.ajax({
                url: "process-login.php",
                method: "POST",
                data:
                {
                    do_login:"do_login",
                    userName: $userName,
                    password: $password
                },
                success : function(response){
                    if (response == "admin") {
                        window.location.href="admin-index.php";
                    }else if(response=="teacher"){
                        window.location.href="teacher-index.php";
                    }else if(response=="wrong"){
                        alert("Mật khẩu không chính xác !");
                    }else {
                        alert("Tài khoản không tồn tại")
                    }
                }
              });
           

        }
        
    });
})