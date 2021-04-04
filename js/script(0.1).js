function checkPass(password) 
{
    let regExpDigit = new RegExp('[0-9]');
    let regExpUppercase = new RegExp('[A-ZА-Я]');
    let regExpLowercase = new RegExp('[a-zа-я]');
    let passString = ''+password;
    console.log('Pass length is '+passString.length );
    let result = {
        msg:'',
        error:false
    }
    if (!regExpDigit.test(password)){
        result.error = true;
        result.msg+='<p><b>Пароль должен содержать цифры</b></p>'
    }
    if (!regExpUppercase.test(password)||!regExpLowercase.test(password)){
        result.error = true;
        result.msg+='<p><b>Пароль должен содержать буквы нижнего и верхнего регистра</b></p>'
    }
    if (password.length<6){
        result.error = true;
        result.msg+='<p><b>Пароль должен быть не короче 6 символов</b></p>'
    }
    return result;

}

document.getElementById('submit').onclick = function(){
    /* let login = document.getElementById('login').value;
    let pass = document.getElementById('pass').value;

    let xhr = new XMLHttpRequest();
    let rareGetData = "?login="+encodeURIComponent(login)+"&password="+encodeURIComponent(pass);
    
    xhr.open('GET','study.php'+rareGetData);
    
    xhr.send();
    
    if (xhr.status != 200) {
        alert( xhr.status + ': ' + xhr.statusText );
    } else {
        alert( xhr.responseText.result ); 
    } */
    let login = document.getElementById('login').value;
    let pass = document.getElementById('pass').value;
    let checkPassword = checkPass(pass);
    if (checkPassword.error){
        alert(checkPassword.msg);
    }
    else{
        alert('Everything is success!');
    }

};