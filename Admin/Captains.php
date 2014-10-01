<?php
/*
* Admin/Captains.php
* LHS Math Club Website
*
* Contains information for Captains.
*/

$path_to_root = '../';
require_once '../lib/functions.php';
restrict_access('A');

page_header('Captains Guide');
?>
  <h1>Captains Guide to the Website</h1>
	<p>Welcome! If you're reading this, you must be a new captain for the Lexington High School
	Math Club. LHSMATH.org is designed to make your captaining experience as logistically simple as possible.
	Usually, it's completely self-explanatory, but at times this massive amount of PHP code can exhibit
	rather confusing behavior. Hence, this guide.</p>
	
	[[common things that go wrong]]
  
  
  <h3>Scoring and Test Management.</h3>
	Explore 
	
  
  <h3 id="Emails">Emails</h3>
	Remember that as captain your email will be displayed on the website, to the public. You will also be contactable by captains@lhsmath.org, lmt@lhsmath.org, or a number of other emails depending on how the email filters are set up.
  
  <h3 id="BBCode">BBCode</h3>
  Here is a list of BBCode that you can use in your text formatting for most purposes on the website.
  <pre>
	[b]this is bold[/b]
	[i]this is italic[/i]
	[u]this is underlined[/u]
	[img]url of image[/img]
	[url]url of website[/url]
	[url=url of website]some label[/url]
	[email]email address[/email]
	[heading]title[/heading]
	[subheading]subtitle[/subheading]
	[bullets]
		[item]item 1 of list[/item]
		[item]item 2 of list[/item]
	[/bullets]
	[pi] displays pi symbol
	[sqrt] displays sqrt symbol
  </pre>
  
  which will display as
  <br>
  <br>
  <div style="background-color:white;border:dashed 1px black;">
	<b>this is bold</b><br />
	<i>this is italic</i><br />
	<u>this is underlined</u><br />
	<img src="url of image" alt=""/><br />
	<a href="url of website" rel="external">url of website</a><br />
	<a href="url of website" rel="external">some label</a><br />
	<a href="mailto:email address" rel="external">email address</a><br />
	<h2 class="smbottom">title</h2><br />
	<h3 class="smbottom">subtitle</h3><br />
	<ul><br />
		<li>item 1 of list</li><br />
		<li>item 2 of list</li><br />
	</ul><br />
	&pi; displays pi symbol<br />
	&#8730; displays sqrt symbol
  </div>
  <br>
  <br>
  <p>
	And that's it! Good luck with captainhood, don't mess up, and always, always do math.
  </p>
  <br>
  <h3>Cheers!</h3>
  ~<a href="Webmaster">LHS Math Webmasters</a>
  
  
  
  
  <h3>Introduction</h3>

  
  <h3>Responsibilities</h3>
  <ul>
	<li><span class="b">Back up the website at least monthly.</span> To do this, log
	in and go to the &quot;Database&quot; page. Click <span class="i">Generate Backup</span>,
	then <span class="i">Download All Content</span>. Save upload the ZIP file to the Webmasters' Dropbox 
	(which should have been shared with you when you became webmaster). You may delete old database backups 
	from the website (at the bottom of &quot;Files&quot;), but keep all those ZIP files around for a year. 
	Beyond that, please	retain all year-end backups (the last ones, taken in June).<br /><br /></li>
	
	<li><span class="b">Help out the Captains.</span> The controls on this site are mostly self-explanatory.
	If a captain needs help with something, you can hopefully figure it out.<br /><br /></li>
	
	<li><span class="b">Help out users.</span> The webmaster email address is listed in a lot of places 
	on the website. If people have website problems, they'll contact you.<br /><br /></li>
	
	<li><span class="b">Graduating Alumni.</span> After the end-of-year ceremony, go to "Alumni" and
	click the button. Then back up the site.<br /><br /></li>
	
	<li><span class="b">New Captains/Club Advisors.</span> You are responsible for graduating old captains/advisors and
	elevating new ones. Please notify captains/advisors that their contact information is visible to all
	members, remind them to keep members' email addresses strictly confidential, and set up a mail forwarder
	for them. To do this, log in to Gmail as webmaster@lhsmath.org and edit the mail filters.
	<ul>
		<li>All Captains: <span class="monospace">(name)@lhsmath.org</span>, <span class="monospace">captains@lhsmath.org</span>.</li>
		<li>Some captain (doesn't matter who): <span class="monospace">contact@lhsmath.org</span>, 
			<span class="monospace">lmt@lhsmath.org</span><li>
		<li>Advisor(s): <span class="monospace">(name)@lhsmath.org</span>, <span class="monospace">advisor@lhsmath.org</span>.</li>
		<li>Webmaster(s): <span class="monospace">(name)@lhsmath.org</span>, <span class="monospace">webmaster@lhsmath.org</span>, 
			<span class="monospace">mailbot@lhsmath.org</span>, and perhaps others if you wish.</li>
	</ul>
	
	<li><span class="b">Renewing Payment.</span> You should receive an email alert when the website is
	running low on funds. To load more, log in to the 
	<a href="http://members.nearlyfreespeech.net/">NearlyFreeSpeech.NET control panel</a> and refill the
	account with money via PayPal or other methods (talk to the club advisor about getting money). 
	Please be aware that you will also need to renew the domain name periodically. The site draws between 
	$25 and $35 a year, including domain registration costs.<br /><br /></li>
	
	<li><span class="b">Picking a Successor.</span> When you are in your Senior year, choose someone to be the next admin. 
	They should start to take over and learn their way around the site. Share the Webmasters' Dropbox with them, 
	change the mail forwarders so that they receive webmaster emails, and make sure everything on this page makes sense.<br /><br /></li>
  </ul>
  
  <h3>Dealing with Abuse</h3>
  <p>The site has several features built in to deal with abuse. IP addresses are blocked for 10 minutes
  after 10 incorrect login attempts (per email address). This control is designed to prevent guessing
  while not allowing the school's entire subnet to be locked out at once. You can check the number of
  failed logins per IP and account in &quot;Login Log.&quot; More information is logged to the database
  table <span class="monospace">login_attempts</span>. Banned users are also logged. To block an IP address
  from accessing the site entirely, edit the Config file (see next section).</p>
  
  <h3>Recovering Admin Access</h3>
  <p>If all Admins lose access to the site, you can use the Super-Admin account to restore your account.
  To activate this feature, you will need to edit the Config file. First, log in to the server
  via SFTP (See "Developing the Website"). Then, navigate to
  <span class="monospace">/home/public/lib</span> and edit the file <span class="monospace">CONFIG.php</span>.
  Find the section titled <span class="i">Super-Admin Feature</span> and follow the directions. Your
  User ID is below. Make sure to disable Super-Admin when you're done!</p>
  <p>Your User ID is: <span class="b"><?=$_SESSION['user_id']?></span>.</p>
  
  <h3>Keep in mind...</h3>
  <p>Please follow these guidelines when managing the site:</p>
  <ul>
	<li>Guard the password list very carefully. Share it with as few people as possible.<br /><br /></li>
	
	<li>Respect users' privacy. Never give out anyone's personal information. Don't look at test scores
	unless you have to. Information not accessible to all members should be treated as strictly
	confidential. Also, do your best to prevent the Captains from spamming everyone.<br /><br /></li>
	
	<li>You can play around with the site as long as you take responsibility when you break stuff,
	but <span class="i">please</span>, don't use Math Club hosting to run your own websites or anything.
	Remember, the club advisor is ultimately responsible for all content on this site.<br /><br /></li>
  </ul>
  
  <h3>Developing the Website</h3>
  <p>If you would like to improve upon the Math Club website, awesome!</p>
  <ul>
	<li>We use Git on BitBucket (because private repositories) for source control. Before editing anything you must get 
		<a href="http://git-scm.com/">Git</a> command line, or 
		<a href="https://windows.github.com/">GitHub for Windows</a> beginner UI. 
		Demand some Git help from the previous webmaster.</li>
	<li>Text editor. <a href="http://www.sublimetext.com/">Sublime Text</a> or 
		<a href="http://notepad-plus-plus.org/">Notepad++</a> work excellently. Avoid Vim or Emacs :).</li>
	<li>Local test server. Probably the easiest and most flexible way is to download 
		<a href="https://www.apachefriends.org/index.html">XAMPP</a>. Use <span class="monospace">lib/CONFIG.local.php</span> 
		to override configuration values for local testing (don't upload this). Never test code on the real lhsmath.org server.</li>
	<li>Editing the production copy via SFTP. Try <a href="http://winscp.net/eng/index.php">WinSCP</a> or 
		<a href="https://filezilla-project.org/">FileZilla</a>. Don't upload the <span class="monospace">.git</span> directory.</li>
	<li>A lot of secret and important stuff is on the Dropbox. Ask your predecessor if they haven't 
		already shared it with you. Most of the accounts are fairly self-explanatory.</li>
  </ul>
  <p>The Code</p>
  <ul>
	<li>Examine the code see how the site works - a good starting point is 
	<span class="monospace">Account/Register.php</span>. Note the code at the top - just about every page 
	starts like this. Honestly, the best way to get familiar with the site is through reading the code directly.</li>
	<li>It's a pretty big codebase, and it's pretty complex. You're encouraged to try to improve it 
	and reduce it, as long as you don't break it. You can check the list of Issues on BitBucket to see if 
	the previous webmaster left any known problems unsolved.</li>
  </ul>
  
  <h3>LMT</h3>
  <p>Running the LMT is considerably more involved. The best way to do this is probably to be trained by the last
  Tech Czar. Knowing PHP is a must (just for the Guts round - I can help with this if you need
  me to). Edit <span class="monospace">lib/lmt-scoring.php</span>, and mind the preconditions and posconditions!
  Content on the public part of the LMT website is updated through the web interface (in database rather than files). 
  Please write in <a href="http://validator.w3.org/">valid XHTML 1.0</a> for those pages!</p>
  
  <h3>Help!</h3>
  <p>Webmastering is hard. If anything comes up, we're happy to help. Just email any of us who have listed our emails below.</p>
  
  <p><br /><br /><br /><img src="http://imgs.xkcd.com/comics/devotion_to_duty.png" title="The weird sense of duty really good sysadmins have can border on the sociopathic, but it&#39;s nice to know that it stands between the forces of darkness and your cat blog&#39;s servers." alt="XCDK #705: Devotion to Duty" /></p>
  
  <br />
  <br />
  <h3>Cheers!~</h3>
  <div class="small">
  <p><span class="b">Benjamin Tidor</span> (<a href="mailto:dev@tidor.net">dev@tidor.net</a>): original developer & webmaster to 2012</p>
  <p><span class="b">Peijin Zhang</span>: webmaster 2012-2013</p>
  <p><span class="b">Clive Chan</span> (<a href="mailto:cchan3141@gmail.com">cchan3141@gmail.com</a>): developer & webmaster 2013-2016</p>
  </div>
<?php
	go_home_footer();
?>