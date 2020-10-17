(function () {
    var options = {
        whatsapp: "+55 (071) 98851-9487",
        call_to_action: "Faça sua reserva por aqui!",
        position: "right",
    };

    var protocol = document.location.protocol;
    var host = "getbutton.io";
    var url = protocol + "//static." + host;
    // http(s)://static.getbutton.io

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = url + '/widget-send-button/js/init.js';
    // http(s)://static.getbutton.io/widget-send-button/js/init.js

    script.onload = function () {
        WhWidgetSendButton.init(host, protocol, options);
    };

    var destination = document.getElementsByTagName('script')[0];
    destination.parentNode.insertBefore(script, destination);
})();
