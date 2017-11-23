window.fbAsyncInit = function() {
    FB.init({
        appId      : '242073786322976',
        cookie     : false,
        xfbml      : true,
        version    : 'v2.11'
    });
    FB.AppEvents.logPageView();

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function statusChangeCallback(response){
    if(response.status === 'connected'){
        console.log('Logged in and authenticated');
        sendToserver();
    } else {
        console.log('Not authenticated');

    }
}
function checkLoginState() {
    FB.login(function(response){
        statusChangeCallback(response);
    });

}
function sendToserver(){
    FB.api('/me?fields=name,email,birthday', function(response){
        if(response && !response.error){
            console.log(response);
            console.log("Все окей");
            SendFormWithDateAboutUser(response);
        }
    });
}


function SendFormWithDateAboutUser(response){
    $(document).ready(function(){
        let data = response;
        $.ajax({
            url: "/DOCtor/public_html/site/ajax",
            dataType : "json",
            type: 'POST',
            data: data,
            success: function(res) {
                console.log("Json obj send right");
            },
            error: function () {
                console.log("Errror but i don't ");
                console.log(data);
            }
        });
    });
}