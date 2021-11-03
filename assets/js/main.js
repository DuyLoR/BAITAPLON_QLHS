document.addEventListener("DOMContentLoaded", function(event) {

    // sidebar
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Đổi page
    $("#contents").load('./model/dashboard.php'); //Trang đầu tiên xuất hiện

    $("#dashboard").click(function() {
        $("#contents").load('./model/dashboard.php');
    });

    $("#classes").click(function() {
        $("#contents").load('./model/classes.php');
    });

    $("#accounts").click(function() {
        $("#contents").load('./model/accounts.php');
    });

    $("#subjects").click(function() {
        $("#contents").load('./model/subjects.php');
    });

    $("#teachers").click(function() {
        $("#contents").load('./model/teachers.php');
    });
    $("#students").click(function() {
        $("#contents").load('./model/students.php');
    });
    $("#results").click(function() {
        $("#contents").load('./model/marks.php');
    });

    // data table
    // $('#list').dataTable()

    // //thêm 
    // $('.newResult').click(function() {
    //     $('#contents').load("add-mark.php")
    // })


    // $('.newTeacher').click(function() {
    //     $('#contents').load("add-teacher.php")
    // })


    // $('.newSubject').click(function() {
    //     $('#contents').load("add-subject.php")
    // })

    // $('.newStudent').click(function() {
    //     $('#contents').load("add-student.php")
    // })

    // $('.newClass').click(function() {
    //     $('#contents').load("add-class.php")
    // })
    
    });