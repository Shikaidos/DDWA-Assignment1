function validate(){
    
    if($("#userInput").val() == "student" && $("#userPassword").val() == "studentPwd"){
        console.log("student");
    }
    else if($("#userInput").val() == "staff" && $("#userPassword").val() == "staffPwd"){
        console.log("staff");
    }
    else if($("#userInput").val() == "admin" && $("#userPassword").val() == "adminPwd"){
        console.log("admin");
    }
    console.log("test");
}
