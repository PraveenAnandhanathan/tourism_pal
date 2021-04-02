function showpass(){
    var pass = document.getElementById('pass');
    var pass1 = document.getElementById('pass1');
    var sh = document.getElementById('sh');
    if(sh.checked == true ){
        pass.type = "text";
        pass1.type = "text";
    }
    else{
        pass.type = "password";
        pass1.type = "password";
    }
}