<?php
// require_once("maintenance.php");
// maintenance(TRUE);
?>
<?php 

session_start();
error_reporting(0);
include_once "config/database.php"; 
include_once "object/login.php";
$database=new Database();
$db = $database->getConnection();

$title="as";
$meta_desc="";


// $data = "SELECT * FROM `meta_data` WHERE page_name like 'home'";
// $run = mysqli_query($con,$data);
// while($row=mysqli_fetch_array($run)){
//     $title = $row['title']; 
//     $meta_desc = $row['meta_desc'];
// } 
$sqq ="SELECT * FROM meta_data WHERE page_name = 'home' ";
                
                $quey= $db->prepare($sqq);

                // // posted values
              
                // $query->bindParam(":id", $this->state);
                // $query->bindParam(":Catogory", $this->Catogory);
                $quey->execute();
                $resu=$quey->fetchAll(PDO::FETCH_OBJ);
                $row = $quey->fetch(PDO::FETCH_ASSOC);
                if($quey->rowCount() > 0)
                {
                    foreach($resu as $resul){
                       $title =htmlentities($resul->title);
                       $meta_desc = htmlentities($resul->meta_desc);
                       
                    }
                }
?>

<html lang="en-US">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="msvalidate.01" content="8B265896C88DF7D5ADC560D97D5B8052" />





<title><?php echo $title; ?></title>
<!--<meta name="description" content="<?php //$meta_desc ?>">-->
<?php echo "<meta name='description' content='$meta_desc'>"?>



<!--<title>Affordable Legal Help | Find Affordable Legal Help with us </title>-->
<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
<!--<meta name="description" content="Enjoy Fast Access To Top Family Lawyers Across The US. Connect Now With An Attorney In Your Local Area And Get Your Questions Answered Now.">-->

<!--yandex-->
<meta name="yandex-verification" content="0beccc11dc0dc9cb" />

<?php include "libs.php"; ?>

<style>

ul {
    margin-top: 0px;
    margin-bottom: 1rem;
    background-color: white;
}


li {
    border-bottom: 1px solid rgba(39, 40, 41, 0.2);
    padding: 20px;
}

li:hover {
    background-color:rgba(0,78,103,.2);
}

.pos-abs{
    position: absolute !important; 
    width:100%; 
}

.pos-inh{
    position: inherit !important;
}

.l-h{
    line-height: 0.9;
}

.connect-btn{
    padding: 22px !important;
}
</style>





<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
[ {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Affordable Legal Help",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "FIND The Right Family Lawyer In Your Zip Code",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png",
  "url" : "https://affordablelegalhelp.com/"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Divorce",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Child Support",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Child Adoption",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Child Custody",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Grand Parent's Rights",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Affordable",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp.png"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "image" : "https://affordablelegalhelp.com/Image/legalHelp_footer.png"
} ]
</script>

</head>




<body id="fill" class="fontb">

    
<div class="sticky-top mb-1">
<div class="alert bg-info alert-dismissible  rounded-0 border-0 m-0 p-0">
    <button type="button" class="close text-white mt-0 pt-1" data-dismiss="alert">&times;</button>
    <p class="size14 text-white text-center pt-2 pb-2 pr-5 pl-2 mb-0">COVID-19 UPDATE: Law firms are still available to help. Set up a consultation from home today.</p>
</div>
</div>


<?php include_once "header.php"; ?>


<?php if(isset($_REQUEST['submitbtn']))
{
}?>

<section class="home_bg bg2">
    <div class="container-fluid home_padding"><!--div 0 -->
    	<br />
        <h1 class="text-white  text-center jl_heading  font5">FIND The Right Family Lawyer In Your Zip Code</h1>
        
        <p class=" texts text-white text-center">Rectify you legal issues for as low as 500$ - 1500$, receive a immediate free consultation and payment plans available.</p>
        
        <?php 
        	if (isset($_POST['submitbtn'])){}
        ?>
        
        <br>
        <form class="ser_state888 mt-3 centre" method="post" ><!--form a -->
        
            <div class="col-9 pr-0 pl-0"><!--div a -->
            	
            	<div class="row">
                
                    <div class="col-12 col-lg-8 col-md-8 col-sm-12 pr-0 pl-0">
                        <input type="text" name="country" id="country" class="form-control font-weight-normal texts rounded-0 ser_box mt-2"  placeholder="Enter Your City Or Zipcode" autocomplete="off"/>
                        
                        <div class="pos-abs" >
                        <div id="countryList" class="texts text-dark font-weight-normal text-left bg-transparent l-h" >
                        
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12 pl-0 pr-0 pos-inh">
                        <div  id="btnconnect"><!--div c -->
                            <input type="submit" name="submitbtn" id="btns" value="Connect With Lawyer" class="btn btn-danger btn-block connect-btn rounded-0 mt-2"/>
                        </div><!--div c -->
                    </div>

                    <?php
 if (isset($_POST['submitbtn'])){
    $_SESSION['city']=$_POST['country'];
    $i=$_SESSION['city'];
    
    $_SESSION['from_page']="Family law";
    
    
    
    //$city1=$_POST['city'];
    $city_state = explode(",", $i);
    $query="SELECT * FROM `city` WHERE `City`='$city_state[0]' AND `State`='$city_state[1]' limit 1";
    $qu= $db->prepare($query);
    $qu->execute();
    $resultt=$qu->fetchAll(PDO::FETCH_OBJ);
    $row = $qu->fetch(PDO::FETCH_ASSOC);
    //$result=mysqli_query($conn,$query);
    //$check=mysqli_num_rows($result);
    
    // if($qu->rowCount() > 0){
    echo "<script type='text/javascript'> document.location = 'Complete-your-request'; </script>";	
    // }
    // else{
        
    //     echo "<script type='text/javascript'>$('#country').css({'border':'1px solid red'});</script>";
    //     echo "<span style='font-size:13px; color:#900;' class='error ml-5'>please enter valid US city</span>";
        
    // }
  }
?>
                    
                </div>
                
                
            </div><!--div a -->
                
                
                
                
        </form><!--form a -->
         
    </div><!--div 0 -->
    
</section>





<section class="pr-3 pl-3 text-center  bg-white paddings">

    <!--<p class="fontb text-center font-weight-normal size46 font5 blue1">HOW IT WORKS</p>-->
    <?php 
        $title="";
        $meta_desc="";
        
        
        $data = "SELECT title,meta_desc FROM `meta_data` WHERE page_name='home'";
        $run = mysqli_query($con,$data);
        while($row=mysqli_fetch_array($run)){
            $title = $row['title']; 
            $meta_desc = $row['meta_desc'];
        ?>
        
            <p class="fontb text-center font-weight-normal size46 font5 blue1"><?php echo $title ?></p>

    <?php } ?>

    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-4  col-md-4 col-sm-12 col-12  p-0">
                <div class="card border-0" >
                    <div class="card-body row">
                        <i class="fa fa-check-square-o fa-3x blue1 mt-1 col-2 p-0" aria-hidden="true"></i>
                        <p class="card-title font-weight-bold fontb heading text-dark col-10 p-0" >Complete Your Legal Request</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4  col-md-4 col-sm-12 col-12  p-0">
                <div class="card border-0" >
                    <div class="card-body row">
                        <i class="fa fa-phone fa-3x blue1 mt-1 col-2 p-0" aria-hidden="true"></i>
                        <p class="card-title font-weight-bold fontb heading text-dark col-10 p-0">Immediately Connect With Lawyer In Your Local Area</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4  col-md-4 col-sm-12 col-12  p-0">
                <div class="card border-0" >
                    <div class="card-body row">
                        <i class="fa fa-usd fa-3x mt-1 blue1 col-2 p-0" aria-hidden="true"></i>
                        <p class="card-title font-weight-bold fontb heading text-dark col-10 p-0" >Save Time & Money</p>
                        
                    </div>
                </div>
            </div>

        </div>
    
    </div>

</section>






<hr class="m-0"  />





<section class="container-fluid paddings pb-0 bg_color centre">
    <h3 class="text-center fontb font-weight-normal font5 size46  blue1" >Watch Our Two Minute Video</h3>

    <div class="iframe-container">
        <iframe width="750" height="450" src="https://www.youtube.com/embed/L0B8f7WRW88" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
    </div>
</section>




<hr class="m-0" />




<section class="home_field_bg bg3 centre">
<div class=" text-center paddings">
    <h2 class="mb-5 fontb text-light font-weight-normal font5 size46  blue1">FIELDS OF EXPERTISE</h2>

    <div class="container">
        <div class="row card-group">
            <!--to maintain the same height of all cards we use d-flex and flex-fill-->
            <div class="col-xl-4 col-lg-4  col-md-6 col-sm-12 col-12  p-3 d-flex">
                <div class="card test11 border-0 flex-fill rounded-0" >
                    <i class="fas fa-heart-broken fa-4x blue1 mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-white size20">Divorce</h5>
                        <p class="card-text text-white size15">Going through formal proceedings of filing divorce is extremely frustrating. Highly skilled unbundled lawyers under Affordable legal Help will ensure that your goals and demands are met without breaking your bank.</p>
                        <input type="button" value="Read More" class="btn btn-lg btn-outline-danger rounded-0"  onclick="window.location.href='divorce'"  />
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4  col-md-6 col-sm-12 col-12 p-3 d-flex">
                <div class="card test11 border-0 flex-fill rounded-0" >
                    <i class="fas fa-user-shield fa-4x blue1 mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-white size20">Child Support</h5>
                        <p class="card-text text-white size15">Paying and getting paid child support can be difficult and tiring. Our lawyers are committed to solving any child support issues as quickly as possible so that the financial future of your family is secured.</p>
                        <input type="button" value="Read More" class="btn btn-lg btn-outline-danger rounded-0" onclick="window.location.href='child-support'"  />
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4  col-md-6 col-sm-12 col-12 p-3 d-flex">
                <div class="card test11  border-0 flex-fill rounded-0" >
                    <i class="fas fa-child fa-4x blue1 mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-white size20" >Child Adoption</h5>
                        <p class="card-text text-white size15">Taking legal and parental rights over a child is an exciting but stressful process. The attorneys we partner with ensure that the specific legal details are taken care of so you can enjoy becoming a parent.</p>
                        <input type="button" value="Read More" class="btn btn-lg btn-outline-danger rounded-0" onclick="window.location.href='child-addoption'"  />
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-0 col-sm-0 col-12 p-0 d-flex"></div>

            <div class="col-xl-4 col-lg-4  col-md-6 col-sm-12 col-12 p-3 d-flex">
                <div class="card test11  border-0 flex-fill rounded-0" >
                    <i class="fas fa-users fa-4x blue1 mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-white size20" >Child Custody</h5>
                        <p class="card-text text-white size15">Although children can choose for themselves, but the custody matter is usually decided in the courtroom. Our lawyers will help you inform the judge about the situation and determine the option that is best for your child.</p>
                        <input type="button" value="Read More" class="btn btn-lg btn-outline-danger rounded-0" onclick="window.location.href='child-custody'"  />
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4  col-md-6 col-sm-12 col-12 p-3 d-flex">
                <div class="card test11  border-0 flex-fill rounded-0" >
                    <i class="fas fa-fist-raised fa-4x blue1 mt-4"></i>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold text-white size20" >Grand Parent's Rights</h5>
                        <p class="card-text text-white size15">As grandparents, you have certain rights that should not be taken away from you. With our attorneys, you can be sure that you won't lose these rights and that you will live a secure life.</p>
                        <input type="button" value="Read More" class="btn btn-lg btn-outline-danger rounded-0" onclick="window.location.href='grand-parent-rights'"  />
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-0 col-sm-0 col-12 p-0 d-flex"></div>
            
    </div>
</div>
</section>




<hr class="m-0" />



<section class="container-fluid text-center paddings bg_color centre" >

    <h2 class=" fontb font-weight-normal font5 size46 blue1">Why Choose Our Lawyers?</h2>
    <hr class="line_decor  m-3  col-3 col-lg-1 col-md-2 col-sm-2 mb-5"></hr>

	
    <div class="row  p-4">
    
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-4 bg-transparent">
            <table>
                <tr>
                    <td valign="top" >
                        <i class="fas fa-user-tie fa-3x text-dark pr-2 mt-1 " aria-hidden="true"></i>
                    </td>
                    <td class="d-flex">
                        <div class="card border-0 bg-transparent flex-fill">
                            <div class="card-body  pt-0 pl-3">
                                <p class="card-title font-weight-bold text-dark text-left mb-1 texts" >Experienced</p>
                                <p class="card-text  text-black-50 text-justify text-left size15">Each of the attorneys and firms in our proven network has decades of experience serving other individuals in your area. They can serve a variety of needs and even address the most unique cases.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-4">
            <table>
                <tr>
                    <td valign="top" >
                        <i class="fas fa-user-friends fa-3x text-dark pr-2 mt-1 " aria-hidden="true"></i>
                    </td>
                    <td class="d-flex">
                        <div class="card border-0 bg-transparent flex-fill">
                            <div class="card-body pt-0 pl-0">
                                <p class="card-title font-weight-bold text-dark text-left mb-1 texts">Friendly</p>
                                <p class="card-text text-black-50 text-justify text-left size15">The lawyers in our network really care about getting you the help that you need while treating you with dignity, respect, and communication every step of the way. If you want an attorney that you’ll like to work with, choose one in our network.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-4">
            <table>
                <tr>
                    <td valign="top" >
                        <i class="fa fa-user-plus fa-3x text-dark pr-2 mt-1 " aria-hidden="true"></i>
                    </td>
                    <td class="d-flex">
                        <div class="card border-0 bg-transparent flex-fill">
                            <div class="card-body pt-0 pl-0">
                                <h5 class="card-title font-weight-bold text-dark text-left mb-1 texts">Affordable</h5>
                                <p class="card-text text-black-50 text-justify text-left size15">The attorneys in the Affordable Legal Help network live up to their title and are happy to provide legal assistance that can be used by anyone--including those on a tight budget.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-4">
            <table>
                <tr>
                    <td valign="top" >
                        <i class="fas fa-street-view fa-3x text-dark pr-2 mt-1 " aria-hidden="true"></i>
                    </td>
                    <td class="d-flex">
                        <div class="card border-0 bg-transparent flex-fill">
                            <div class="card-body pt-0 pl-2">
                                <h5 class="card-title font-weight-bold text-dark text-left mb-1 texts" >Local</h5>
                                <p class="card-text text-black-50 text-justify text-left size15">Our network features thousands of attorneys and firms, and you’ll be able to easily connect with one in your area to make communication much easier and faster. </p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-4">
            <table>
                <tr>
                    <td valign="top" >
                        <i class="fas fa-phone-alt fa-3x text-dark pr-2 mt-1 " aria-hidden="true"></i>

                    </td>
                    <td class="d-flex">
                        <div class="card border-0 bg-transparent flex-fill">
                            <div class="card-body pt-0 pl-3">
                                <h5 class="card-title font-weight-bold text-dark text-left mb-1 texts" >Accessible</h5>
                                <p class="card-text text-black-50 text-justify text-left size15" >You’ll always be able to get in touch with our attorneys. Our lawyers don’t believe in leaving clients in the dark and they’ll be there to answer your questions and address your concerns whenever the need arises.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-4">
            <table>
                <tr>
                    <td valign="top" >
                        <i class="fas fa-users-cog fa-3x text-dark pr-2 mt-1 " aria-hidden="true"></i>
                    </td>
                    <td class="d-flex">
                        <div class="card border-0 bg-transparent flex-fill">
                            <div class="card-body pt-0 pl-0">
                                <h5 class="card-title font-weight-bold text-dark text-left mb-1 texts" >Hard-Working</h5>
                                <p class="card-text text-black-50 text-justify text-left size15" >Our in-network attorneys care about results more than anything. They will fight hard to achieve your desired result and won’t rest until every avenue of legal recourse has been exhausted.</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        
	</div>
       
</section>




<hr class="m-0" />


<section class="container-fluid paddings centre">

    <h2 class="pt-4 fontb text-center font-weight-normal font5 size46 blue1" >What people are saying</h2>
    <hr class="line_decor  m-3  col-3 col-lg-1 col-md-2 col-sm-2 mb-5"></hr>

    <div class="row container text-center mt-3">

        <div class="col-xl-4 col-lg-4 p-4 col-md-6 col-sm-12 col-12 p-3 d-flex">
            <div class="card  rounded-0 pt-4 flex-fill story-hov">

                <div class="pl-lg-3 pr-lg-3 pl-md-4 pr-md-4 pl-sm-5 pr-sm-5 img_section2">
                    <img src="Image/nicole-rodriguez-119x119.jpg" class="img-fluid border-0 rounded-circle"  alt="Responsive image">
                </div>

                <div class="card-body">
                    <p class="card-title font-weight-normal blue1 texts">Carla Houston, Georgia</p>
                    <hr>
                    <p class="card-text text-black-50 size15" >"This company rocks. Before them I was quoted over $3000.00 to take my case. "Affordable Legal Help" offered me a couple different programs where I ended up saving about $1000. Thank you for your help in finalizing my divorce."</p>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 p-4 col-md-6 col-sm-12 col-12 p-3 d-flex">
            <div class="card  rounded-0 pt-4 flex-fill story-hov">
                <div class="pl-lg-3 pr-lg-3 pl-md-4 pr-md-4 pl-sm-5 pr-sm-5 img_section2">
                    <img src="Image/D18_345_100_0004_600-119x119.jpg" class="img-fluid border-0 rounded-circle"  alt="Responsive image">
                </div>
                <div class="card-body">
                    <p class="card-title font-weight-normal blue1 texts">Jack Martin,Texas</p>
                    <hr>
                    <p class="card-text text-black-50 size15">"This experience with Affordable Legal Help Experts was great. They truly care about your needs. They know how to get you the proper help you need. They really helped put me at ease. Thank you so much for everything!!!!"</p>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 p-4 col-md-6 col-sm-12 col-12 p-3 d-flex">
            <div class="card  rounded-0  pt-4  flex-fill story-hov">
                <div class="pl-lg-3 pr-lg-3 pl-md-4 pr-md-4 pl-sm-5 pr-sm-5 img_section2">
                    <img src="Image/testimonial-woman-119x119.jpg" class="img-fluid border-0 rounded-circle"  alt="Responsive image">
                </div>
                <div class="card-body">
                    <p class="card-title font-weight-normal blue1 texts">Jennifer Slate, North Dakota</p>
                    <hr>
                    <p class="card-text text-black-50 size15" >"I have been a client of Affordable legal Help for some time. I found this Family law firm to be most professional and efficient. I would highly recommend them to my family, friends or anyone seeking legal services."</p>
                </div>
            </div>
        </div>

    </div>

    <input type="button" value="Read All Stories" class="btn btn-lg btn-outline-danger rounded-0 mt-3" onclick="window.location.href='success-stories'" />

</section>


<hr class="m-0" />



<section class="container-fluid pr-3 pl-3 paddings bg_color centre bg21" >
	<p class="  font-weight-normal mb-1 font5 size46 text-white">Press Release</p>
    <hr class="blue1 line_decor  mt-0 col-2 col-lg-1 col-md-2 col-sm-2 mb-2"></hr>
    <p class="font-weight-normal text-center text-white col-lg-9 mt-5 mb-5 font-3 texts decor" >Although legal assistance solves one problem, it creates another, i.e. the financial issues. Legal assistance has always been one of the most expensive services in America to the extent that many people would rather forego a family matter rather than invest in hiring a good lawyer.</p>
    <input type="button" value="Read More" class="btn btn-lg btn-danger rounded-lg mt-4" onclick="window.location.href='press-release'" />

</section>






<hr class="m-0" />




<section class=" paddings bg-white " >
<div class="container centre">

    <h2 class="fontb font-weight-normal font5 size46 blue1">Our Blog</h2>

    <p  class="text-dark text-center texts font-weight-normal texts mb-5 col-lg-8">
    Unbundling or A-La-Carte Services is gaining popularity among both attorneys and the public.
    </p>

    <div class="container">

        <div class="row">
            <?php 
            include("config/connect.php");
            $select_posts = "select * from posts order by post_id desc";
            $run_posts = mysqli_query($con,$select_posts);
            while($row=mysqli_fetch_array($run_posts)){
                $post_id = $row['post_id']; 
                $post_title = $row['post_title'];
                $post_date = $row['post_date'];
                $post_author = $row['post_author'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                $post_content = substr($post_content,0,400);
                
                if($post_id == 30 || $post_id == 38 || $post_id == 40 ){
            ?>

            
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 d-flex">
                <div class="card  shadow-sm bg-white flex-fill mt-4">

                    <div class="card-body p-3">

                        <div class="card-title">

                            <a href="view-blog/<?php echo $post_id; ?>" class="nav-link text-dark pl-0 ml-0">
                                <p class="font-weight-normal size20  mb-0 hov" >
                                    <?php echo $post_title; ?>
                                </p>
                            </a>

                        </div>

                        <div class="card-text">

                            <?php  
                                if ($post_id == 30 ) {
                                    echo "<p class='card-text text-black-50 size14 decor' >Going through a divorce is a challenging, painful, transforming, and expensive experience.  It is not something that anyone wants to go through but there are times when it becomes necessary in order to end a failed, sometimes even abusive, marriage and move on.  Depending on factors like the money and property involved, disputes over custody of children, and the attitude of the parties, it can be a long, messy process...</p>"; 
                                } elseif ($post_id == 38) {
                                    echo "<p class='card-text text-black-50 size14 decor' >The guidelines are set forth in child support calculator Texas to be used in courts when calculating the amount of child support owed. The guidelines are a reasonable set of laws and their aim is in the best interest of the child. As biological parentage is obvious, mothers of children are granted parental rights automatically. But for fathers the rules are different. If a child is born out of...</p>"; 
                                } elseif ($post_id == 40) {
                                    echo "<p class='card-text text-black-50 size14 decor'>There is an old adage which states that good help is hard to find.  As we go about our daily business that can certainly seem to be the case.  It is inevitable that, in the daily grind of activities like doing business, travel, entertainment, dining out, shopping, maintaining a home, and dealing with serious legal and medical issues, we require a lot of help.  Most often that help is given to us by people who work hard to...</p>"; 
                                }
                            ?>

                        </div>

                        <p>
                            <a href="view-blog/<?php echo $post_id; ?>" class="size14 font-weight-bold">read more</a>
                        </p>
                        
                    </div>
                </div>
            </div>

            <?php }} ?>
        </div>

    </div>


    <input type="button" value="Read More" class="btn btn-lg btn-outline-danger rounded-0 mt-5" onclick="window.location.href='our-blog'" />

</div>
</section>






<hr class="m-0" />





<section class="container-fluid text-center paddings centre bg21">
	<h4 class="text-white font-weight-bold size25 pb-3">To Connect With An Affordable Attorney in Your Local Area</h4>
    <input type="button" value="Complete your request now" class="btn btn-md p-3 font-weight-bold  btn-danger rounded-0" onclick="document.getElementById('fill').scrollIntoView({behavior: 'smooth'})"  />

</section>


<?php include_once"footer.php"; ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142213622-3"></script>
<script >
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142213622-3');
</script>


<script async src="client_validate.js?v=10"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php include "libs2.php"; ?>


</body>
</html>


