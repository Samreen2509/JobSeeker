<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Contact Us</title>
</head>
<body>
    <!--This page is for uploading cV-->
    <nav id="navigationBar">
    <ul>
    <li><b>JobSeeker</b></li>
    <li>
    <div class="right">
           <img src="../icons/accountLogo.png" alt="user"  id="userIcon">
           <div class="dropdown">
           <a href="">Profile</a><a href="">Notifications(10)</a><a href="../partials/logout.php">Logout</a>
         </div>
    </div>
    </li>
    <!--<li><a href="../partials/logout.php">Logout</a></li>-->
    </ul>
</nav>
    
<div id="middleArea1">
    <h2>Find A Job at India's No.1 Job Site</h2>
            <form action="/" method="get">
            <div id="middleArea1a"><img src="../icons/graySearchIcon.png" alt="image Not Loaded"><input type="text" name="searchSkillsDesignationCompanies" placeholder="Skills,Companies,Designations"></div>
            <div id="middleArea1b"><img src="../icons/grayLocationIcon.png" alt="image not Loaded"><input type="text" name="searchLocation"placeholder="Enter Location"></div>
            <button>Search</button>
            </form>
        <hr>
        <div id="middleArea1d">
            <div id="middleArea1d1"><img src="../icons/job.jpg" alt="Icon"> Jobs</div>
            <div id="middleArea1d2"><img src="../icons/companyBuilding.png" alt="Icon">Companies</div>
            <div id="middleArea1d3"><img src="../icons/salary.png" alt="Icon">Salaries</div>
        </div>
</div><hr><br>
<div id="middleArea2"><h1>Contact Us...!</h1><br><p>Please fill in the form below so we can respond to your inquiry</p></div><br>
<form action="" method="Post">
    <div id="middleArea3">
<h3>What is your question about?</h3><br>
                <select name="gender" id="reset"> 
                <option value="Please_Select">Please select a topic</option>
                <option value="feedback">Employer help & feedback</option>
                <option value="salary">Employer Salary Estimates Enqueries</option>
                <option value="award">Award Enquery</option>
                <option value="feedback">Help & Feedback</option>
                <option value="other">Other</option>
                </select><br><br></div>
<div id="middleArea4">
	<h3>Enter your name</h3>
		<input type="text" name="name" placeholder="Your answer" required>
</div>

<div id="middleArea5">
	<h3>Email</h3>
		<input type="text" name="name" placeholder="Your answer" required >
</div>

<div id="middleArea6">
	<h3>Phone number</h3>
		<input type="text" name="name" placeholder="Your answer"required >
</div>
<div id="middleArea7">
	<h3>File Upload(PDF only)</h3>
		<input type="file" name="name" placeholder="Add File" >
</div>
</form>
<div id="middleArea8">
    <h2>Message</h2><br>
    <textarea name="Message" id="" cols="125" rows="4">PLease describe your issue</textarea>
</div>
<div id="middleArea9">
    <h3>Please verify that you are not a robot by completing the field below</h3><br>
<form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LeSQ00bAAAAALJUai3cD1Wbtne5xGTePS7IYcVM"></div>
      <br/>
    </form>
</div>
<div id="middleArea10"><button>Submit</button></div>
<br> <br> <br>
<div id="middleArea11">
    <p>Are you an employer? Check out our Talent Solutions Blog.</p>
    <div id="middleArea11a"><hr></div>
    <div id="middleArea11b">
        <div class="middleArea11b1">
               <h2>About The Blog</h2>
               <p>Thanks for finding us! We cover everything from career advice to the latest company headlines.
                  <br><br> And if you’re looking for the latest in employer solutions and advice, we recommend our Talent Solutions Blog.</p>
        </div>
        <div class="middleArea11b1">
               <h2>Free Employer Account</h2>
               <p>It only takes a second – see who’s viewing your profile and monitor your reputation.</p>
               <a href="/">Get Started</a>
        </div>
        <div class="middleArea11b1">
               <h2>More From JobSeeker</h2>
               <p>*Best Places to Work
                  <br> *Top CEOs
                  <br> *JobSeeker Press Center
                  <br> *JobSeeker Economic Research</p>
        </div>
    </div>
    <div id="middleArea11c">
          <a href="/" id="facebookIcon"><img src="../icons/facebookIcon.png" alt="Icon Facebook"></a>
          <a href="/" id="instagramIcon"><img src="../icons/instagramIcon.png" alt="Icon Instagram"></a>
          <a href="/" id="twitterIcon"><img src="../icons/twitterIcon.png" alt="Icon Twitter"></a>
          <a href="/" id="youtubeIcon"><img src="../icons/youtubeIcon.png" alt="Icon YouTube"></a>
    </div>
</div>
<hr>
    <footer id="copyright">
        <p>Copyright © 2021-2030,JobSeeker, Inc. "JobSeeker" and logo are registered trademarks of JobSeeker, Inc</p>
    </footer>

</body>
</html>