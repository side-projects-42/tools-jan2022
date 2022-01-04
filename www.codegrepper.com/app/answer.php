

<!doctype html>
<html>
<head>
<meta name="google-signin-client_id" content="276024493641-c112g6aqcrc4bt62clgm8oasrbkomj8j.apps.googleusercontent.com">
<link rel="icon" href="https://d2441bdvuxbh7t.cloudfront.net/web/images/favicon.ico">
<link rel="stylesheet" href="https://d2441bdvuxbh7t.cloudfront.net/app/css/reset.css">
<link rel="stylesheet" href="/app/semantic/tays_semantic.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="https://d2441bdvuxbh7t.cloudfront.net/app/css/main.css">
<link rel="stylesheet" href="https://d2441bdvuxbh7t.cloudfront.net/app/css/popup.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100" rel="stylesheet">

<!--move stupid jquery and bootstrap up top-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--end stupid 3rd party stuff-->

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#55468c !important;">
  <a class="navbar-brand" href="/app/index.php" style="color: rgba(255,255,255,.7);font-size:26px;font-weight:100;font-family:'Poppins', sans-serif;">
    <img class="grepper_nav_logo" src="https://d2441bdvuxbh7t.cloudfront.net/web/images/logo_white_small.png">
    Grepper 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item mr-2">
        <a class="nav-link" href="/search.php">
        <i class="icon search"></i> Search</a>
      </li>
      <li class="nav-item mr-2">
        <a class="nav-link" href="/app/index.php">
        <i class="icon users"></i> Community</a>
      </li>
      <li class="nav-item  mr-2">
        <a class="nav-link" href="/app/feed.php">
        <i class="icon newspaper"></i> Feed</a>
      </li>

      <li class="nav-item mr-2">
        <a class="nav-link" href="/app/answer.php">
        <i class="icon code"></i>
        Answer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/app/docs.php">
        <i class="icon file alternate"></i>
        Docs</a>
      </li>

    </ul>

    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    -->
  </div>
  <div class="navbar-collapse  w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

<!--
         <li class="nav-item">
            <a class="nav-link" href="twiter"><i class="icon facebook"></i></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="twiter"><i class="icon twitter"></i></a>
         </li>
--> 


     <li class="nav-item">
        <a href="/app/notifications.php" class="nav-link notification_nav_item mr-1" >
              <i class="icon bell" style="margin:0px;padding:0px;"></i>
                      </a>
    </li>

         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"
        href="#" 
        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img id="profile_image_dropdown" src="/profile_images/50_50/81868_hBOjBc9AHwzyImuB0XWpsecdJhx3sGe9iwseArXL5MlZiNfvJv4lo4t.png">
        </a>
        <div class="dropdown-menu dropdown-menu-right grepper_user_account_dropdown" aria-labelledby="navbarDropdown">
          <h5 class="text-center m-2">My Account </h5>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" id="my_profile_link" href="/profile/agreeable-armadillo-r83981x69s29">Profile</a>
          <a class="dropdown-item" href="/app/my_answers.php">Answers</a>
          <a class="dropdown-item" href="/app/stats.php">Stats</a>
          <a class="dropdown-item" href="/app/teams.php">Teams</a>
          <a class="dropdown-item" href="/app/addons.php">Add-Ons</a>
            <!--
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/app/my_grepper_gold.php" style="padding-left:54px;position:relative;">
               <img src="/images/grepper_coin.png" style="width:30px;position:absolute;left:18px;top:1px;">
              My Grepper Gold (0)</a>
              -->

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/app/settings-code-languages.php">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" onclick="grepper_logout()">Log Out</a>
        </div>
      </li>
        <!--
            <li class="nav-item">
                <a class="nav-link" href="#">Right</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            -->
        </ul>
    </div>
</nav>

<script>
//document.getElementById("my_profile_link").href="/app/profile.php?id="+ localStorage.getItem('user_id');
</script>
<script>


</script>

<div id="content" class="container pt-3">


<title >Answer Queries</title>
<style>
.documentation_note{
font-size:16px !important;
line-height:20px !important;
border: 1px solid #00529b;
background: #bde5f8;
padding:10px;
}
.bonus_points{
    background-color:#f2cd5c;
    border:1px solid #d2cd5c;
    border-radius:8px;
	display:inline-block;
	color:#ffffff;
	font-size:11px;
	padding:2px 6px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
    margin-right:5px;
}

.bonus_points.bonus_points_2{
    background-color:#72bf3b;
    border:1px solid #42bf3b;
	
}
.bonus_points.bonus_points_3{
    background-color:#55468c;
    border:1px solid #15468c;
}
</style>
<!-- Load Stripe.js on your website. -->
<!--
<script src="https://js.stripe.com/v3"></script>
-->
<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<!--
<button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
  id="checkout-button-sku_Gu7gmuyFmYVAJF"
  role="link"
>
  Checkout
</button>
-->
<div id="error-message"></div>

<script>
/*
(function() {
  var stripe = Stripe('pk_test_auuIr3gxpQijSFnZzrFkvGKG00u0BsZbHj');

  var checkoutButton = document.getElementById('checkout-button-sku_Gu7gmuyFmYVAJF');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{sku: 'sku_Gu7gmuyFmYVAJF', quantity: 1}],

      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://your-website.com/success',
      cancelUrl: 'https://your-website.com/canceled',
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();
*/
</script>
     <div id="left_column_small">
        <div class="box1"> 
        <h1> Filter  Queries </h1>
        <hr/>
        <div id="languages_select_mine"> </div>
        </div>

    </div>
    <div id="right_column_large">


        <div class="box1">
        <h1>Technical Problem Queries Desperate for Answers</h1>
    <div class="documentation_note" style="display:block;">
Can you solve any of these queries? If so, please contribute to the dev community by taking a moment to provide solutions. Correct and helpful answers will also earn you points toward your next Grepper Belt. Certain tricky problems are worth <span class="bonus_points bonus_points_1">2x</span>, <span class="bonus_points bonus_points_2">3x</span>, <span class="bonus_points bonus_points_3">5x</span> 
points toward your belt score.   
    </div>

    <!--
            <li> 
            <span class="searches_mo">20 spm</span>
            <span class="experience_points">+5 ex</span>
            <span class="ambition_points">+1 amb</span>
                map function javascript
            </li>
     --> 
        <ul id="querries">
        </ul>
        </div>
    </div>
</div>

<!--
<div class="userContent"></div>
-->

<!--
<div id="gSignIn">sign in</div>
-->


<br/> <br/> <br/>
<br/> <br/> <br/>
</body>
<div id="feedback_trigger_holder" >
    <div onclick="hideFeedbackButton()" class="tays_popup2_close_button_feedback">&#8722;</div>
    <h1>We Need Feedback </h1>
    <a class="btn btn-primary" id="send_feedback_start">Send Feedback</a>
    <div style="width:100%;height:5px;"></div>
</div>

<div id="feedback_trigger_plus" style="display:none;">
    <div onclick="showFeedbackButton()" class="tays_popup2_close_button_feedback">+</div>
</div>
<div class="tays_popup2" id="send_feedback_popup">
    <div class="tays_popup2_inner">
        <div class="tays_popup2_close_button">X</div>
            <div class="tays_popup2_content">

                <div class="tays_popup2_header1">
                 Send Feedback 
                </div>
                <div class="tays_popup2_content_inner">
                <div class="ui form">
                      <div class="field">
                        <label>Send Feedback <span class="tays_label_desc">(Leave product feedback, report a bug, share your ideas)</span> </label>
                        <textarea type="text" id="feedback_input" placeholder="Tell us your feedback..."></textarea>
                      </div>

                      <button id="send_feedback" class="button1">Send</button>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="https://d2441bdvuxbh7t.cloudfront.net/app/js/popup.js"></script>

</html>

<!--<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>-->
<script src="https://d2441bdvuxbh7t.cloudfront.net/app/js/utils.js"></script>
<script>
function grepper_logout(){
    makeRequest('GET',"/api/logout.php").then(function(d){
        //sign out of google if we need to 
        //note if plugin is insatlled these all get reset right away
    localStorage.setItem('user_id', ""); 
    localStorage.setItem('access_token',"");
    localStorage.setItem('email',"");
    localStorage.setItem('chrome_id',"");

    var gScript = document.createElement('script');
        gScript.src = "https://apis.google.com/js/client:platform.js?onload=completeLogout";
        document.head.appendChild(gScript);
    });
}
function completeLogout(){
    gapi.auth2.init({ client_id: '276024493641-c112g6aqcrc4bt62clgm8oasrbkomj8j.apps.googleusercontent.com'}).then(function(auth2){
        if(auth2.isSignedIn.get()){
            auth2.signOut().then(function () {
                window.location="/index.php";
            });
            auth2.disconnect();
        }else{
            window.location="/index.php";
        }
    });
  }
</script>




<script>

document.getElementById('send_feedback_start').addEventListener('click', function(){
    document.getElementById('send_feedback_popup').style.display="block";
});

document.getElementById('send_feedback').addEventListener('click', function(){
        var d={}
        d.feedback=document.getElementById("feedback_input").value;
        makeRequest('POST', prod_api+"/send_feedback.php",JSON.stringify(d)).then(function(){
            document.getElementById('send_feedback_popup').style.display="none";
            alert("Thanks so much! Your feedback has been submitted and will be reviewed by our dev team.");
            //location.reload();
        })

});

function showFeedbackButton(){
    document.getElementById("feedback_trigger_holder").style.display="block";
    document.getElementById("feedback_trigger_plus").style.display="none";
    makeRequest('GET',"/api/hide_feedback.php?hide_feedback=0").then(function(){ });
}

function hideFeedbackButton(){
    document.getElementById("feedback_trigger_holder").style.display="none";
    document.getElementById("feedback_trigger_plus").style.display="block";
    makeRequest('GET',"/api/hide_feedback.php?hide_feedback=1").then(function(){ });
}

</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142853949-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-142853949-1');
</script>


<script src="js/utils.js"></script>
<script src="js/index.js"></script>
