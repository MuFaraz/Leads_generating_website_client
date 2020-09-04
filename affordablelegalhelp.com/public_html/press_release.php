<?php
// require_once("maintenance.php");
// maintenance(TRUE);
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
$sqq ="SELECT * FROM meta_data WHERE page_name = 'press' ";
                
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
<title><?php echo $title; ?></title>

<link rel="shortcut icon" type="image/x-icon" href="/favicon.png" />


<?php echo "<meta name='description' content='$meta_desc'>"?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--yandex-->
<meta name="yandex-verification" content="0beccc11dc0dc9cb" />
<!--#####################################Libraries file##########################################-->
<?php include "libs.php"; ?>




</head>

<body class="bg-white">
<?php include_once "header.php" ?>

<div class="jumbotron jumbotron-fluid bg1 press_bg border-0">
    <div class="paddings">
        <h1 class="size46 text-white text-center ">PRESS RELEASE</h1>
    </div>
</div>

<div class="container-fluid pt-5 pb-5">
	<p class=" font-weight-bold text-dark size46" style="padding-left:30px;"><em>Press Release</em></p>
    <p class="text-secondary font-weight-normal size16 decor p-4">
    	Although legal assistance solves one problem, it creates another, i.e. the financial issues. Legal assistance has always been one of the most expensive services in America to the extent that many people would rather forego a family matter rather than invest in hiring a good lawyer.<br />

<b class="font-weight-bold">Affordable legal help</b> is one of the most innovative <b class="font-weight-bold">affordable legal services</b> in America who have gained a lot of good name for their financially efficient legal services. The type of legal services that they provide is called <b class="font-weight-bold">bundled legal services</b>.’ Here, the law firm charges the client only for certain services provided by their attorney. Therefore, the client does not have to get all their help from the attorney. They can handle parts such as representing themselves in the court of law.<br />

As a result of the growing number of law firms such as Affordable Legal Help, hiring an affordable attorney has become a possibility. As more and more people go for this option in their legal dealings, bundled legal services are becoming more common, thanks to pioneers like Affordable Legal Help.<br />

There are several types of familial issues that are handled by this company. They are namely, divorce, child support, child custody, grandparent’s right and adoptions.<br />

Especially, when it comes to divorce-related matters, the law firm has shown exceptional efficiency is getting issues resolved at prices that are significantly lower than the general cost of getting such cases solved in courts.<br />

In cases of divorce, the clients have an option to go for low-cost plans where the only thing that the attorney has to do is to do the research work. Other than that, it’s the client who needs to represent his/her case in court. This has panned out very well for numerous clients since 2006.<br />

Related to divorce issues, there are problems such as child support, custody and grandparents rights. Child support is a massive issue in countries such as the USA. Men are not given the custody of their children, while they have to pay for their upkeep to their ex-wives. The firm has done its part in combating this injustice by opening bundled plans for their clients. This way, the clients have been able to represent themselves before the judge, this let them put their case more poignantly.  Also, they have been able to save their money to a greater degree.<br />

The same goes for cases such as child custody as well as grandparent’s rights to visit the child. However, the company has also proven its legal mettle through its impressive acumen in one particular area, child adoption.<br />

Since America takes child adoption seriously, due to various factors such as preventing abuse or neglect, the to-be-parents have to prove that they are legally, socially and financially eligible to provide their adopted kids the right kind of life.<br />

Affordable Legal Help since then has been able to legally assist a number of people to present their cases in a much better way while not compromising their quality even by a notch.<br />
    </p>
</div>


<?php include_once "footer.php" ?>

<?php include "libs2.php"; ?>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142213622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142213622-3');
</script>

</body>
</html>