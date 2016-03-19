function Validate(form) {
    fail = "";
    fail = valLogin(form.lg.value);
    fail += valPassword(form.pw.value);
    fail += valConfirmPassword(form.pw.value, form.confirmpw.value);
    fail += valEmail(form.email.value);
    if (fail == "") return true;
    else {
	alert (fail); 
	return false;
    }
}

function valLogin(str)
{
    var re = /^[a-zA-Z]+$/g; // Имя пользователя содержит только латинские буквы
  	if (str.length < 4)
		return "Имя пользователя не может содержать меньше 4 символов \n";
	else if (re.test(str))
        return "";
    else return "Имя пользователя должно содержать только латинские буквы \n";
}
		
function valPassword(str) {
    var reLittleLetter = /[a-z]+/g;
    var reBigLetter = /[A-Z]+/g;
    var reDigits = /\d+/g;
  	if (str.length < 4)
		return "Пароль не может содержать меньше 4 символов \n";
	else if (reLittleLetter.test(str) && reBigLetter.test(str) && reDigits.test(str)) 
        return ("")
	else return "Пароль должен содержать строчную букву, прописную и цифру \n";
}

function valEmail(str)
{
    var re = /^[\w\.\-]+@([\w\-]+\.)+[a-z]+$/i;
    if (re.test(str))
        return "";
    else return "ВВЕДИТЕ СУЩЕСТВУЮЩУЮ ПОЧТУ \n";
}

function valConfirmPassword(strpw, strconfirm)
{
    if (strpw===strconfirm)
        return "";
    else
        return "ПОДТВЕРДИТЕ ПАРОЛЬ \n";
}
