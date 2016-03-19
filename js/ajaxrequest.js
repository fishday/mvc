function createrequest()
{
    params = "url=google.com";
    request = new ajaxRequest();
    request.open("POST", "/mvc.xx/application/models/Model_ButtonX_2.php", true);
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    request.setRequestHeader("Content-length", params.length);
    request.setRequestHeader("Connection", "close");
    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
        {
            if (this.status == 200)
            {
                if (this.responseText != null)
                {
                    document.getElementById('info').innerHTML = this.responseText;
                }
                else alert("Ошибка AJAX: Данные не получены")
            }
            else alert( "Ошибка AJAX: " + this.statusText)
        }
    }
    request.send(params);
}

function checkUniqueName()
{
    request = new ajaxRequest();
    request.open("POST", "/mvc.xx/application/models/Model_ButtonX_2.php", true);
    request.send();
    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
        {
            if (this.status == 200)
            {
                if (this.responseText != null)
                {
                    document.getElementById('ajax').innerHTML = this.responseText;
                }
                else alert("Ошибка AJAX: Данные не получены")
            }
            else alert( "Ошибка AJAX: " + this.statusText)
        }
    }
}

function ajaxRequest()
{
    try
    {
        var request = new XMLHttpRequest()
    }
    catch(e1)
    {
        try
        {
            request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch(e2)
        {
            try
            {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3)
            {
                request = false
            }
        }
    }
    return request
}


