/**
 * Created by Свет on 05.08.2016.
 */
function buttonClicked () {
    var newUrl = document.getElementById('inptUrl').value;

    if(checkUrl(newUrl)) {

        new Ajax.Updater('browser', "php/get_site.php", {
            method: 'get',
            parameters: {
                newUrl: newUrl
            },
            onLoading: function () {
                document.getElementById('browser').innerHTML = "Loading...";
            },
            onComplete: function () {

            }
        });

    }
    else{
        document.getElementById('browser').innerHTML = "Wrong url";

    }

}

function addNewUrl() {

    var newUrl = document.getElementById('inptUrl').value;
    if(checkUrl(newUrl)) {

        new Ajax.Updater('list_urls', "application/views/list_view.php", {
            method: 'get',
            parameters: {
                newUrl: newUrl
            },
            onLoading: function () {

            }
        });

    }
    else{
        document.getElementById('browser').innerHTML = "error";

    }

}

function checkUrl(str) {

    if(str.match("^(https?:\/\/)([a-zA-Z0-9]([a-zA-ZäöüÄÖÜ0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$")) {
        return true;
    }
    return false;

}

function optionChoosed(str) {

    document.getElementById('inptUrl').value = "http://" + str;

}