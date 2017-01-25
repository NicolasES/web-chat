// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('35ae32195ec82792339a', {
    encrypted: true
});

var channel = pusher.subscribe('my-channel');
channel.bind('chat-event', function(data) {
    var newMessage = "<div class='panel panel-success'><div class='panel-heading'><h3 class='panel-title'>"+data.name+"</h3></div><div class='panel-body'>"+data.message+"</div></div>";
    //console.log(newMessage);
    $('#chat-dialog > div.panel-body').append(newMessage);
});

$(document).ready(function(){

    $('#send').click(function(){
        var name = $('#name').val();
        var message = $('#message').val();

        if(!message){
            return '';
        }

        $.post('send-message',{name:name, message:message}, function(){
            $('#message').val('');
        })
    });

});