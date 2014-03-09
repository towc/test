	</head>
		<body>
					<header>
                        <a id="txtheader"href="/matei">t1wc\s custom website</a><br>
                        <aside>
                            <a id="account" href="/matei/account">Account</a>
                            <a href="/matei/tests">InDev</a>
                            <a href="http://www.freelancer.com/u/t1wc.html?ext=1&action=hireme" title="Professional Web Developer at Freelancer | 5$/hr">Hire Me</a>
                        </aside>
                    </header>
                    <div id="body">
                        <nav>
                            <div id="open-nav">
                                <div class="sideFlex">
                                    <span id="sheader">Follow me on:</span>
                                    <ul><section>
                                        <a href="https://www.facebook.com/logic.guy.9"><li>Facebook</li></a>
                                        <a href="https://plus.google.com/105593967985810927293/"><li>Google+</li></a>
                                        <a href="https://www.youtube.com/channel/UCmhx_1Y44tVZjd10tHD5HTw"><li>Youtube</li></a>
                                        <a href="https://twitter.com/MateiCopot"><li>Twitter</li></a>
                                        <a href="mailto:matei@copot.eu"><li>E mail</li></a>
                                        <a href="https://github.com/Cicada3301"><li>Github</li></a>
                                        <a href="http://chat.stackoverflow.com/users/3161092/cicada3301"><li>Stack Overflow</li></a>
                                    </section></ul>
                                </div>
                                <div class="sideFlex">
                                    <span id="sheader">Other pages:</span>
                                    <ul><section>
                                        <a href="http://www.copot.eu/matei/news"><li>News</li></a>
                                        <a href="http://www.copot.eu/matei/supportme"><li>Support Me</li></a>
                                        <a href="http://www.copot.eu/matei/assets"><li>Assets</li></a>
                                        <a href="http://www.copot.eu/matei/bugs"><li>Bugs</li></a>
                                        <a href="http://www.copot.eu/matei/credits"><li>Credits</li></a>
                                        <a href="http://www.copot.eu/matei/mail"><li>Mail me</li></a>
                                        <a href="http://www.copot.eu/matei/french"><li>Hd french-T</li></a>
                                        <a href="http://www.copot.eu/matei/feedback"><li>Feedback</li></a>
                                        <a href="http://www.copot.eu/matei/games"><li>Games</li></a>
                                        <a href="http://www.copot.eu/matei/canvas"><li>Canvas</li></a>
                                    </section></ul>
                                </div>
                            </div>
                            <div id="closed-nav">
                                <div>N</div>
                                <div>A</div>
                                <div>V</div>
                                <div>I</div>
                                <div>G</div>
                                <div>A</div>
                                <div>T</div>
                                <div>I</div>
                                <div>O</div>
                                <div>N</div>
                            </div>
                        </nav>
                    <main>
    <div id="chat" ng-controller='greet'>
                        <div id="closeChat">
                            <div>C</div>
                            <div>H</div>
                            <div>A</div>
                            <div>T</div>
                        </div>
                        <div id="openChat">
                            <div id="insertChat">
                                <form action="?savedata=1" method="post">
                                    <input type="text" name="name" value='{{userName}}' style='display:none'>
                                    <textarea name="message" rows="5" cols="30" placeholder="Message"></textarea>
                                    <input type="submit" name="submit" value="Submit">
                                </form>
                                 <?php
      $x='<a href="http://www.copot.eu/matei/feedback" style="color:red; font-family:Courier"> [X]</a>';
      if(isset($_REQUEST['savedata'])){
        $test=$_POST['name'].$_POST['message'];
        if(strlen($_POST['name'])<4){
          $message = "Make sure your name has more than 3 characters".$x;
          echo $message;
        }elseif(strlen($_POST['message'])<10){
          $message = "Make sure your message has more than 10 characters (right now it is ".strlen($_POST['message'])." characters long)".$x;
          echo $message;
        }elseif(strpos($test, '-..--..-..---.-')==true){
          $message = "Cheater!".$x;
          echo $message;
        }elseif(strlen($test)>749){
          $message='The text needs to have less than 750 characters'.$x;
          echo $message;
        }else{
          $now = time();
          $num = date("w");
          if ($num == 0){
           $sub = 6; 
          } else { 
          $sub = ($num-1);
          }
          $WeekMon  = mktime(0, 0, 0, date("m", $now)  , date("d", $now)-$sub, date("Y", $now));    //monday week begin calculation
          $todayh = getdate($WeekMon); //monday week begin reconvert

          $current_time = ($todayh[mday]).'/'.$todayh[mon].'/'.$todayh[year];
          $data ="<article class='chat' title='".$current_time."''><span class='chatName'>" . htmlentities($_POST['name']) . "</span>";
          $data .= "<span class='chatMessage'>".htmlentities($_POST['message'])."</span></article>-..--..-..---.-";
          $file = 'D:\inetpub\webs\copoteu\matei/feedback/feedback_file-of_awesomeness.txt';

          $fp = fopen($file, "a") or die("Couldn't open $file for writing!");
          fwrite($fp, $data) or die("Couldn't write values to file!"); 

          fclose($fp);
          header('Location: http://www.copot.eu/matei',true);
        }
      }
      ?>
      </div>
      <div id="contentChat">
      </div>
      <span id='load-more' class='clickable'>load more</span> | <span id='load-less' class='clickable'>load less</span> | <span id='load-reset'  class='clickable'>reset load</span>
    </div>
  </div>
  <div ng-controller='greet' class='centerText'>
    <h1>Welcome {{first}}<span class='clickable' id='name' ng-click='addUserName()' title='click to change name'>{{userName}}</span>! This is the <span class='clickable' id='number' ng-click='resetNumber()' ng-attr-title='if you ask, it {{isPrimeNumberView}} a prime number. Click to reset'>{{number}}{{th}}</span> time you visit this page</h1>
  </div>
                    