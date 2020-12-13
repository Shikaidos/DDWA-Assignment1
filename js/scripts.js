//validate login on index page 
function validate(){
    
    if($("#userInput").val() == "student" && $("#userPassword").val() == "studentPwd"){
        document.location.href='student-view.php';
    }
    else if($("#userInput").val() == "staff" && $("#userPassword").val() == "staffPwd"){
        document.location.href='staff-view.php';
    }
    else if($("#userInput").val() == "admin" && $("#userPassword").val() == "adminPwd"){
        document.location.href='student-view.php';
    }
    else if($("#userInput").val() == "" || $("#userPassword").val() == ""){
        alert("There are missing fields that are needed to be filled");
    }
    else{
        alert("You have entered either the wrong username or password. Please try again");
    }
    
}
