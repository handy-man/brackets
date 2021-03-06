<!DOCTYPE html>
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="user-scalable" content="no">
    <link rel="apple-touch-icon" sizes="57x57" href="public/img/apple-iphone-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="public/img/apple-ipad-icon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="public/img/apple-iphone-ret-icon.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="public/img/apple-ipad-ret-icon.png" />

    <title>BRACKET</title>  
    
	<link href="<?=URL::to_asset('css/style.css')?>" media="screen" rel="stylesheet" type="text/css" />
</head>
<body class="preload">
     <div id="leftPanelWrapper" class="panel">
        <div class="innerPanel">
            <ul>   
                <li><a href="<?=URL::to('user')?>">User Dashboard</a></li>
                <?php if(Session::get('bracketId')): ?>
                <li><a href="<?=URL::to('bracket/tournament')?>">Current Bracket</a></li>
                <li><a href="<?=URL::to('bracket/players')?>">Players <span class="playerCount">(<?=count($bracket->players)?>)</span></a></li>
                <li><a href="<?=URL::to('bracket/teams')?>">Teams <span class="teamCount">(<?=count($bracket->teams)?>)</span></a></li>
                <?php else: ?>
                <li><a href="<?=URL::to('bracket')?>">Start A Tournament</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
     <div id="rightPanelWrapper" class="panel">
        <div class="innerPanel">
            <ul>   
                <li><a href="<?=URL::to('user/account')?>">My Account</a></li>
                <li><a href="<?=URL::to('user/logout')?>">Sign Out</a></li>
            </ul>
        </div>
    </div>

    <div id="stage">
        <button id="btnNav" class="navBtn">
            <span class="horizBar"></span>
            <span class="horizBar"></span>
            <span class="horizBar"></span>
        </button>
        <button id="btnSettings" class="navBtn"></button>

        <?php if(Session::has('error')): ?>
            <div class="alert error">
                <button class="close">Close</button>
                <h4>Warning</h4>
                <p><?=Session::get('error')?></p>
            </div>
        <?php endif; ?>

        @yield('content')

        @yield('headerBtn')
    </div>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/libs/swipe.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/libs/jquery.hammer.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/libs/jquery.touchclick.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/app/alerts.js')?>"></script>
<script type="text/javascript" src="<?=URL::to_asset('js/app/bracket.js?2')?>"></script>
</html>