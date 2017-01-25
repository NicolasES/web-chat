<!DOCTYPE html>
<html>
    <head>
        <title>web-chat</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div  class="col-xs-12 col-sm-12">
                    <div id="chat-dialog" class="panel panel-primary">
                        <div class="panel-body">

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Chat</h3>
                                </div>
                                <div class="panel-body">
                                    Chat iniciado...
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Mensagem..." rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send" class="btn btn-primary pull-right">ENVIAR</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src='{{asset('js/jquery-3.1.1.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
    <script src='{{asset('js/main.js')}}'></script>
</html>
