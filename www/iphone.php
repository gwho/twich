<?php $PORT=8001; 
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo $_SERVER['SERVER_NAME'] ?>/<?php echo $_GET['room']?></title>
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
        <script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="/js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="/js/iscroll.js"></script>
        <script type="text/javascript" src="/js/client_iphone.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/style_iphone.css" />
    </head>
    <body>
        <div id="app">
            <div id="connect">
                <h1 style='color:#aaa'>
                    <?php echo $_SERVER['SERVER_NAME']?>/<span style='color:#fff'><?php echo $_GET['room']?></span>
                </h1>
                <p style='color:#aaa'>
                    Welcome to the <span style='color:#fff'><?php echo $_GET['room']?></span> twich room.<br />
                    Twich is a super-quick way to start chatting with friends.
                </p>

                <form action="#">
                    <fieldset> 
                        <label for="nick">Your Name&nbsp;</label><br />
                        <input id="nickInput" class="text"type="text" name="nick" value=""/> <br />
                        <input id="connectButton" class="button" type="submit" name="" value="Enter" />
                    </fieldset>
                </form>

                <p style='font-size:11px;color:#aaa;font-style:italic'>
                    No pesky signups or registration forms - delight!
                </p>

                <div style='font-size:14px;color:#666;margin-top:20px; font-family: Arial, sans-serif'>
                    <h4>Disclaimer</h4>
                    <p>
                        Please be advised that <span style='color:#aaa'>twich.me</span> is still under active development, so please do not rely on it to launch space shuttles, yet. You have been warned.
                    </p>
                    <p>
                        Some other issues that have come up: (17-May-2010)
                    </p>
                    <ul>
                        <li>Layout does not work well in those Internet Explorer things. <br />
                        (Please use a browser like <a href='http://www.mozilla.com/firefox/'>Firefox</a>, <a href='http://google.com/chrome'>Chrome</a>, or <a href='http://apple.com/safari'>Safari</a>)</li>
                    </ul>

                    <p>
                        twich.me is developed by <span style='color:#aaa'>isaac@pregnate.com.au</span>
                    </p>
                </div>
            </div> <?php // end of connect ?>

            <div id="loading"><p>loading</p></div>

            <div id="log">
                <div id='entries'>
                <table class="message"><tr><td class="date">18:58</td><td valign="top" class="nick">TTilus</td>
                        <td class="msg-text">x6a616e: i think you can, there was some weird #send trick to do that</td>
                </tr></table>
                <table class="message"><tr><td class="date">18:58</td><td valign="top" class="nick">TTilus</td>
                        <td class="msg-text">(or i could just be terribly wrong)</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:02</td><td valign="top" class="nick">x6a616e</td>
                        <td class="msg-text">TTilus: with #send you can invoke private methods</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:03</td><td valign="top" class="nick">x6a616e</td>
                        <td class="msg-text">dunno how to leverage it to access instance var :-/</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:05</td><td valign="top" class="nick">x6a616e</td>
                        <td class="msg-text">i3d: usually I use rspec::mocks</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:05</td><td valign="top" class="nick">dlisboa</td>
                        <td class="msg-text">x6a616e: #instance_variable_get ?</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:06</td><td valign="top" class="nick">x6a616e</td>
                        <td class="msg-text">dlisboa: phew I forgot that ..</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:19</td><td valign="top" class="nick">UrbanVegan</td>
                        <td class="msg-text">How can I use "%" in a string as just another character (meaning "percent")?</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:20</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">"%"</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:20</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">:)</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:20</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">no need to escape it</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:20</td><td valign="top" class="nick">dominikh</td>
                        <td class="msg-text">%%</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">dominikh</td>
                        <td class="msg-text">ddfreyne: if you use something like "%string" % 1</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">dominikh</td>
                        <td class="msg-text">eh</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">dominikh</td>
                        <td class="msg-text">you get the idea</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">"foo %s bar" % [ 'hello' ] # =&gt; "foo hello bar"</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">dominikh</td>
                        <td class="msg-text">lets assume he has some other % stuff he wants to be replaced</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">"foo %% %s bar" % [ 'hello' ] # =&gt; "foo % hello bar"</td>
                </tr></table>
                <table class="message"><tr><td class="date">19:21</td><td valign="top" class="nick">dominikh</td>
                        <td class="msg-text">and some he doesnt want to</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:07</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">docs should be in /usr/share, not /usr/lib/ruby/gems/1.8/doc, too</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:07</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">FHS is OS agnostic.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:08</td><td valign="top" class="nick">drbrain</td>
                        <td class="msg-text">bougyman: FreeBSD doesn't follow the FHS</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:08</td><td valign="top" class="nick">drbrain</td>
                        <td class="msg-text">Apple doesn't follow the FHS, and windows doesn't follow the FHS</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:08</td><td valign="top" class="nick">drbrain</td>
                        <td class="msg-text">I really don't care about people who say "you don't X, Y or Z!" and won't pony up patches</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:11</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">the fbsd list seems split over FHS compliance</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:11</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">some of em want it, some give it the finger.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:11</td><td valign="top" class="nick">drbrain</td>
                        <td class="msg-text">that's because they already have the heir man page</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:12</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">looks like they gave in on mounts to FHS 2.2 (freebsd did)</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:12</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">winFS was said to be FHS compliant.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:12</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">maybe we'll see that in the next MS product.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:13</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">it was supposed to be in Vista, but got scrapped.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:13</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">stuff in /bin should have config stuff in /etc, stuff in /usr/bin should have their configs in 
                            /usr/etc, ... IMO
                        </td>
                </tr></table>
                <table class="message"><tr><td class="date">20:13</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">stuff in ~/bin should have their configs in ~/etc</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:13</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">that would make a lot more sense than it does now</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:13</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">... what kind of names are "etc" and "var" anyway?</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:13</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">"config" and "data" would have made more sense</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:14</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">they make sense to me.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:14</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">even 'etc'? etcetera? "all the rest of the stuff goes here"?</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:14</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">etc. and variable are how I read them.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:14</td><td valign="top" class="nick">catalystmediastu</td>
                        <td class="msg-text">Does anyone know of a gem or Rails plugin that converts rtf documents to HTML? I've </td>
                </tr></table>
                <table class="message"><tr><td class="date">20:15</td><td valign="top" class="nick">wmoxam</td>
                        <td class="msg-text">catalystmediastu: I doubt it, you'll probably have to find a tool that does it, and call the tool</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:15</td><td valign="top" class="nick">ddfreyne</td>
                        <td class="msg-text">bougyman: you can't really say that 'etc' is a better name than 'config'</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:16</td><td valign="top" class="nick">catalystmediastu</td>
                        <td class="msg-text">wmoxam: I'll start looking for a generic tool for linux then. Thanks!</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:16</td><td valign="top" class="nick">wmoxam</td>
                        <td class="msg-text">catalystmediastu: http://sourceforge.net/projects/rtf2html/  &lt;-- might work</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:17</td><td valign="top" class="nick">catalystmediastu</td>
                        <td class="msg-text">wmoxam: Ahh that looks like it might. Thank you!</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:17</td><td valign="top" class="nick">wmoxam</td>
                        <td class="msg-text">np</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:17</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">catalystmediastu: unrtf works well for that.</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:17</td><td valign="top" class="nick">bougyman</td>
                        <td class="msg-text">http://www.gnu.org/software/unrtf/unrtf.html</td>
                </tr></table>
                <table class="message"><tr><td class="date">20:20</td><td valign="top" class="nick">catalystmediastu</td>
                        <td class="msg-text">bougyman: Thanks, that looks like a good tool too. I'll look into them both a little 
                            more.
                        </td>
                </tr></table>
                </div>
            </div> <?php // end of log ?>

            <div id="toolbar">
                <ul id="status">
                    <li class="date" id="currentTime">12:59</li>
                    <li id='currentUsers'><a id="usersLink" href="#">5 users</a></li>
                </ul>
                <input id='entry-btn' type='button' value='Send' />
                <input tabindex="1" type="text" id="entry"/>
            </div> <?php //end of toolbar ?>
        </div> <?php // end of app ?>

        <script type='text/javascript'>
            var myScroll;
            CONFIG.room = '<?php echo $_GET['room']?>';
            CONFIG.host = '<?php echo $_SERVER['SERVER_NAME']?>';
            CONFIG.port = '<?php echo $PORT ?>';
            CONFIG.protocol = '<?php echo 'http://' ;?>';
            CONFIG.node_url = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . ':' . $PORT; ?>';
            $(document).ready(function() { 
                $('#log').hide();
                //document.addEventListener('touchmove', function(e){e.preventDefault();});
            });
            /*function loaded() {
                //document.addEventListener('touchmove', function(e){e.preventDefault();});
            }*/
            //document.addEventListener('DOMContentLoaded',loaded);
        </script>

        <?php if ($_SERVER['SERVER_NAME'] == 'twich.me') { ?>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-246664-21");
                pageTracker._trackPageview();
            } catch(err) {}
        </script>
        <?php } ?>

    </body>
</html>