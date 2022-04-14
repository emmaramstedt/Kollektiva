require('./bootstrap');

//freshchat API:
window.fcSettings = {
    token: "a49d0cf4-2447-45d9-af63-e62cf3ea6b6d",
    host: "https://wchat.eu.freshchat.com",
    locale: "sv",
    config: {
        headerProperty: {
            hideChatButton: true
        }
    },
    onInit: function() {
        window.fcWidget.on("widget:loaded", function() {
            document.getElementById('custom_fc_button').style.visibility = 'visible';
            window.fcWidget.on("unreadCount:notify", function(resp) {
                console.log(resp);
                test = resp;
            });
            window.fcWidget.on("widget:closed", function() {
                document.getElementById('fc_frame').style.visibility = 'hidden';
                document.getElementById('open_fc_widget').style.visibility = 'visible';
            });
            window.fcWidget.on("widget:opened", function(resp) {
                document.getElementById('open_fc_widget').style.visibility = 'hidden';
            });
        });
    }
};


var openWidget = function() {
    document.getElementById('fc_frame').style.visibility = 'visible';
    window.fcWidget.open();
};
