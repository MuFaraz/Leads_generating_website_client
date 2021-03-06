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
$title="";
$meta_desc="";


// $data = "SELECT * FROM `meta_data` WHERE page_name like 'home'";
// $run = mysqli_query($con,$data);
// while($row=mysqli_fetch_array($run)){
//     $title = $row['title']; 
//     $meta_desc = $row['meta_desc'];
// } 
$sqq ="SELECT * FROM meta_data WHERE page_name = 'childsupport' ";
                
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="msvalidate.01" content="8B265896C88DF7D5ADC560D97D5B8052" />
    <!--yandex-->
    <meta name="yandex-verification" content="0beccc11dc0dc9cb" />
<title><?php echo $title;?></title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />
<?php echo "<meta name='description' content='$meta_desc'>"?>

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
    background-color:white;
}

.paddings{
    padding-top:90px; 
    padding-bottom:90px;
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

.height11{
    height:300px;
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

<section class="support_bg bg2">
    <div class="container-fluid home_padding"><!--div 0 -->
    	<br />
        <h1 class="text-white  text-center jl_heading  font5">Find the Right Child Support Lawyer In Your Zip Code</h1>
        
        <p class=" texts text-white text-center">Rectify Your child support issues for as low as  500$-850$,Receive a free consultation! and payments plans are also availaible.</p>
        
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
    
    $_SESSION['from_page']="Child support";
    
    
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
    echo "<script type='text/javascript'> document.location = '/Complete-your-request'; </script>";	
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







<section class="container mt-5 pb-5">

    <h1 class="text-dark pt-4 font-weight-normal mb-3 size46" >Child Support</h1>
    <p class=" text-secondary  decor size15" >
        Divorce rates continue to go up year after year; it is almost alarming. One sad thing about divorce 
        is, the children involved get caught up in all the heat and tension. Also, there are parents who 
        struggle to meet the financial needs of their children after getting custody. For an affected 
        parent and their child, this can be such a difficult position to be in. Any parent deemed fit 
        to have custody, in this position deserves child support. As a reputable family legal service, 
        this is where  Affordable legal Help comes in. 
    </p>

    <img src="/Image/Child-support-1-800x667.png" class="bg3 img-fluid mt-4 mb-4" alt="divorce image">
    
    <p class=" text-secondary  decor size15" >
        As a family legal service that is passionate about providing clients with the needed child support 
        settlements, we offer a number of unbundled legal services to fulfill this purpose. Our unbundled 
        legal services afford you the opportunity to make a case for yourself in the family court. For this, 
        we have a set of unbundled legal services, where you are allowed to represent yourself in the family 
        court and state the case for yourself. All the legal aspects of your child custody case will be 
        handled by our team of experienced family law attorneys. We will work tirelessly to ensure you get 
        the settlement or justice that you deserve! <br><br>
        The issue of child support isn’t one that any parent should handle with levity. It’s one that usually 
        involves a long list of technicalities and back and forth legal battles. You don’t need to fret. 
        Affordable legal Help will take you through the entire process and ensure that you get the last laugh. 
    </p>
    
    <h4 class="text-dark pt-2 font-weight-normal mb-3 size25">Income Disputes in Child Support Cases</h4>
    <p class=" text-secondary  decor size15">In many cases, the amount of income someone earns can cause major complications in child support cases. This is mostly true for parents in the following categories:  </p>
    
    <p class="text-secondary decor size15">	Self-employed people</p>

    <p class="text-secondary decor size15"> 	People paid by commission</p>

    <p class="text-secondary decor size15"> 	People with a substantial amount of investment income</p>

    <p class="text-secondary decor size15"> 	People whose income fluctuates</p>

    <p class="text-secondary decor size15"> 	People who are paid in cash</p>

    <p class="text-secondary decor size15"> 	People paid in non-conventional ways such as through stock option</p>


    <p class=" text-secondary  decor size15"> <br>The amount of income that a parent earns is such a big deal because it plays an important role in deciding how much should be paid in child support. The attorneys at Affordable Legal Help will professionally handle all these details in court while guiding you through the entire process. </p>

    



    <h3 class="text-dark font-weight-normal mt-5 mb-4 size31" >Why choose our lawyers</h3>
    
    <p class="text-secondary decor size15">
        <span><i class="fa fa-check fa-1x pr-2 pt-1 text-dark " aria-hidden="true"></i></span>
        Our lawyers provide Comprehensive explanation of child support rules to prevent your spouse from taking advantage of loopholes in the legal system.
    </p>

    <p class="text-secondary decor size15">
        <span><i class="fa fa-check fa-1x pr-2 pt-1 text-dark " aria-hidden="true"></i></span>
        Accurate filing of the necessary paperwork.
    </p>

    <p class="text-secondary decor size15">
        <span><i class="fa fa-check fa-1x pr-2 pt-1 text-dark " aria-hidden="true"></i></span>
        Prompt updates on proceedings.
    </p>

    <p class="text-secondary decor size15">
        <span><i class="fa fa-check fa-1x pr-2 pt-1 text-dark " aria-hidden="true"></i></span>
        Affordable and result-oriented.
    </p>

    <p class="text-secondary decor size15">
        <span><i class="fa fa-check fa-1x pr-2 pt-1 text-dark " aria-hidden="true"></i></span>
        Prioritizes the best interests of both you and your child. 
    </p>

</section>


<section class="container-fluid bg-light paddings centre mt-5">

    <h2 class=" fontb text-center font-weight-bold size31 blue1" >Customers feedback</h2>
    <p  class="text-dark text-center texts font-weight-normal size14 mb-5 col-lg-8">
    Unbundling or A-La-Carte Services is gaining popularity among both attorneys and the public.
    </p>

    <div class="row container text-center mt-3">

        <div class="col-xl-4 col-lg-4 p-4 col-md-6 col-sm-12 col-12 p-3 d-flex">
            <div class="card  rounded-0 pt-4 flex-fill story-hov">

                <div class="pl-lg-3 pr-lg-3 pl-md-4 pr-md-4 pl-sm-5 pr-sm-5 img_section2">
                    <img src="/Image/Testimonial-Client-120x120.png" class="img-fluid border-0 rounded-circle"  alt="Responsive image">
                </div>

                <div class="card-body">
                    <p class="card-title font-weight-normal blue1 texts">Joshua Fuller,California</p>
                    <hr>
                    <p class="card-text text-black-50 size15">"I am so happy I can give my child the life she deserves now. Thanks to Affordable legal Help."</p>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 p-4 col-md-6 col-sm-12 col-12 p-3 d-flex">
            <div class="card  rounded-0 pt-4 flex-fill story-hov">
                <div class="pl-lg-3 pr-lg-3 pl-md-4 pr-md-4 pl-sm-5 pr-sm-5 img_section2">
                    <img src="/Image/Clinet-Testimonial-120x120.png" class="img-fluid border-0 rounded-circle"  alt="Responsive image">
                </div>
                <div class="card-body">
                    <p class="card-title font-weight-normal blue1 texts">Jennifer Slate,Pennsylvania</p>
                    <hr>
                    <p class="card-text text-black-50 size15" >"If you are looking for the best attorneys to handle your child support case, this is the firm to work with. What this firm has helped me achieve is unbelievable. Words cannot do justice to how I feel. Thanks for your services. "</p>

                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 p-4 col-md-6 col-sm-12 col-12 p-3 d-flex">
            <div class="card  rounded-0  pt-4  flex-fill story-hov">
                <div class="pl-lg-3 pr-lg-3 pl-md-4 pr-md-4 pl-sm-5 pr-sm-5 img_section2">
                    <img src="/Image/Success-Stories-120x120.png" class="img-fluid border-0 rounded-circle"  alt="Responsive image">
                </div>
                <div class="card-body">
                    <p class="card-title font-weight-normal blue1 texts">Jared Rawley,North Dakota</p>
                    <hr>
                    <p class="card-text text-black-50 size15" >"This company rocks. Before them I was quoted over $3000.00 to take my case. “Affordable Legal Help” offered me a couple different programs where I ended up saving about $1000. Thank you for your help in my divorce"</p>
                </div>
            </div>
        </div>

    </div>

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


<script async src="/client_validate.js?v=11"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php include "libs2.php"; ?>


</body>
</html>



