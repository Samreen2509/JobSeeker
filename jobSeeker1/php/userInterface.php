<!--This page opens when the type is user and provides a user interface-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userInterface.css">
    <title>Login by | <?php session_start(); echo $_SESSION['phoneNumber']; ?></title>
</head>
<body>
<?php
        if(isset($_GET['profileStatus']))
        {
            if($_GET['profileStatus']=='completed')
            {
               $placeholder='Your Profile has been Completed ';
               include '../partials/successStatus.php';
            }
            else{
                $placeholder='Your Profile has not been Completed ';
                include '../partials/successStatus.php';
            }
        }
        
   ?>
     <nav>
     <?php
        $page='userInterface';
        include '../partials/navigation.php';
      ?>
     </nav>
   <?php
       if(isset($_GET['jobSave']))
       {
           $placeholder='Job Has Been Saved successfully';
           include '../partials/successStatus.php';
       }
   ?>
<div id="middleArea1">
    <h2>Find A Job at India's No.1 Job Site</h2>
            <form action="userInterface.php" method="get">
            <div id="middleArea1a"><img src="../icons/graySearchIcon.png" alt="image Not Loaded"><input type="search" name="SkillsDesignationCompanies" placeholder="Skills,Companies,Designations"></div>
            <div id="middleArea1b"><img src="../icons/grayLocationIcon.png" alt="image not Loaded"><input type="search" name="Location"placeholder="Enter Location"></div>
            <input type="hidden" name="search" value="true" >
            <button>Search</button>
            </form>
            <!--area for last search-->
            <div id="middleArea1c">
                <?php
                   include '../partials/resultPastSearchJobs.php';
                ?>
        </div>
        <div>
            <?php
               
                if (isset($_GET['search'])){
                    include '../partials/jobSearchResult.php';
                    }
            ?>
        </div>
        <div id="middleArea1d">
            <div id="middleArea1d1"><img src="../icons/job.jpg" alt="Icon"> Jobs</div>
            <div id="middleArea1d2"><img src="../icons/companyBuilding.png" alt="Icon">Companies</div>
            <div id="middleArea1d3"><img src="../icons/salary.png" alt="Icon">Salaries</div>
        </div>
</div>
<!--middleArea2 starts from here-->
        <div id="middleArea2">
            <div id="middleArea2a">
                <h1>Your JobSeeker Dashboard</h1>
                <div id="middleArea2a1">
                    <!--this div is for profile of the user-->
                    <h2>About You</h2>
                    <div id="middleArea2a1a">
                        <?php
                            $phoneNumber=$_SESSION['phoneNumber'];
                            //check that profile is completed or not only for user
                            require '../partials/dbmsConnection.php';
                            $sql="SELECT * FROM `userbasicdetails` WHERE phoneNumber='$phoneNumber'";
                            $result=mysqli_query($connect,$sql);
                            $num=mysqli_num_rows($result);
                            //if num not equal to zero means profile is complete
                            $row=mysqli_fetch_assoc($result);
                            if($num!=0)
                            {
                                echo '<img src="../img/userImages/'.$row['userImage'].'" alt="Image Not Loaded">';
                                $checkProfileIsComplete='yes'; //this means profile is complete
                            }
                            else{
                                echo '<img src="../icons/accountLogo.png" alt="Image Not Loaded">';
                                $checkProfileIsComplete='no'; //this means profile is un complete
                            }
                        ?>
                        <!-- <img src="../icons/accountLogo.png" alt="This is image of user"> -->
                        <div id="middleArea2a1a1">
                            <h2><?php 
                            if(isset($_SESSION['Loggedin'])){ 
                            include '../partials/profileDetails.php';
                            if($row['type']!='user')
                            {
                                header('Location:../partials/error504.php');
                                exit;
                            }
                            echo $row['fullName'];
                            }
                            else
                            {
                                header("Location: ../");
                                exit;
                            }
                            ?></h2>
                            <?php
                               if($checkProfileIsComplete=='yes')
                               {
                                //    this gives profile 
                                   echo '<a href="profile.php">Profile</a>';
                               }
                               else{
                                //    this gives complete your profile
                                   echo '<a href="userStep1Finish.php">Complete Your Profile</a>';
                               }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="middleArea2b">
                <h1>Millions Of Jobs.<br>Find the one that’s right for you.</h1>
                <p>Search all the open positions on the web. Get your own personalised salary estimate. Read reviews on over 600,000 companies worldwide. 
                    The right job is out there. Use JobSeeker to find it.</p>
                    <a href="findJob.php">Search Jobs</a>
                 </div>
                 </div>
                 <div id="middleArea3">
        <h3 class="alertClass">NEW!</h3>
        <p>Tools to help you Navigate COVID-19 and find jobs you love</p>
        <a href="cobid-19.php">View Covid-19 Resources</a>
    </div>
   

<div id="middleArea5">
    <div id="middleArea5a">
          <h1>Jobs Recomonded For You</h1>
    </div>

    <div id="middleArea5b">
    <div class="middleArea5b1">
        <img src="https://source.unsplash.com/1600x900/?Mobile,Job" alt="Image not loaded"> 
        <h3>The 12 Best Medical Companies To Work For in 2021</h3>
        <p>Today is World Health Day. From its inception at the First Health Assembly in 1948 and since taking effect in 1950.</p>
        <a href="/">Read More Blog</a>
    </div>

    <div class="middleArea5b1">
        <img src="https://source.unsplash.com/1600x900/?Laptop,Job" alt="Image not loaded">
        <h3>How to Answer Questions From Interviewers About Your Unemployment</h3>
        <p>The U.S. unemployment ratmericans to lose their jobs or quit to care for children.</p>
        <a href="/">Read More Blog</a>
    </div>

    <div class="middleArea5b1">
        <img src="https://source.unsplash.com/1600x900/?Student,Job" alt="Image not loaded">
        <h3>5 Companies Hiring For Remote Roles</h3>
        <p>COVID-19 has ns. Looking for a new remote job? Companies need you more than ever before. Check out all the companies hiring right now. Apply today!</p>
        <a href="/">See the 2020 list</a>
    </div>

    </div>

</div>
<footer>
<?php
 $page='userInterface';
 include '../partials/footer.php';
?>
</footer>
</body>
</html>