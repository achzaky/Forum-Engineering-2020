<div class="input-group mb-3">
    <input id="chatMessage" type="text" class="form-control" placeholder="Enter your message"
        aria-label="Enter your message" aria-describedby="button-addon2">
    <div class="input-group-append">
        <button id="sendChat" class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
    </div>
</div>
<div id="chat_body"></div>

<script>
$(document).ready(function() {
    $('#sendChat').click(function() {
        var chatMessage = $('#chatMessage').val();
        console.log(chatMessage);
        $.ajax({
            url: "/sendChat",
            type: "POST",
            contentType: "json",
            data: JSON.stringify({
                chatMessage: chatMessage
            }),
            success: function(data) {
                $('#chatMessage').val("");
                console.log('AJAX SUCCESS');
                console.log(data);
            }
        })
    });

    setInterval(function() {
        loadChat();
    }, 1000);

    function loadChat() {
        $.ajax({
            url: "/loadChat",
            type: "GET",
            contentType: "json",
            success: function(data) {
                data = JSON.parse(data);
                console.log(data);
                var html = '';
                for (var count = 0; count < data.length; count++) {
                    html += '<div class="row" style="margin-left:0; margin-right:0">';
                    html += '<div class="col-md-10 alert alert-warning">';
                    html += data[count].chatMessage + '</div></div>';
                }
                $('#chat_body').html(html);
                $('#chat_body').scrollTop($('#chat_body')[0].scrollHeight);
            }
        })
    }
})
</script>