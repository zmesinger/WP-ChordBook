function linkToRegisterForm(){
    window.location='../view/register.php';
}

function linkToLoginForm(){
    window.location='../view/login_register.php';
}

function linkToAllChords(){
    window.location='../view/all_chords.php';
}

function checkIfEmail(){
    var email = document.getElementById('email');
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(email.value.match(mailformat)){

        return true;
        
    }else{
        alert("Invalid email");
        return false;
    }
}

