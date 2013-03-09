<!DOCTYPE html>
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="user-scalable" content="no">
    <link rel="apple-touch-icon" href="public/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" href="/my-app-icon.png" />
    <link rel="apple-touch-icon" href="touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.png" />

    <title>BRACKET</title>  
    
	<link href="<?=URL::to_asset('css/style.css')?>" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
     <div id="leftPanelWrapper">
        <div id="leftPanel">
            <button class="togglePanel closed">&raquo;</button>
            <ul>   
                <li><a href="<?=URL::to('bracket/tournament')?>">My Bracket</a></li>
                <li><a href="<?=URL::to('bracket/players')?>">Players</a></li>
                <li><a href="<?=URL::to('bracket/teams')?>">Teams</a></li>
            </ul>
        </div>
    </div>

    <div id="stage">

        
        <?php if(Session::has('error')): ?>
            <div class="alert error">
                <button class="close">Close</button>
                <h4>Warning</h4>
                <p><?=Session::get('error')?></p>
            </div>
        <?php endif; ?>

        @yield('content')
        <hr />
        @yield('headerBtn')
    </div>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/libs/swipe.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/libs/jquery.hammer.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/libs/jquery.touchclick.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/app/bracket.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/app/alerts.js')?>"></script>
</html>