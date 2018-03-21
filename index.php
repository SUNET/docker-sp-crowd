<html>
  <head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script>
$(document).ready(function () {

$('.nav-tabs > li > a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

});
    </script>
    <style>
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
    </style>
  </head>
  <body>
     <div class="container">
        <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="http://www.swamid.se/om-swamid.html">Om SWAMID</a></li>
            <li role="presentation"><a href="http://www.swamid.se/funktionssidor/kontakt.html">Kontakt</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">SWAMID Test-SP</h3>
      </div>
      <div>
        <div role="tabpanel">
           <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#swamid" aria-controls="home" role="tab" data-toggle="tab">SWAMID</a></li>
              <li role="presentation"><a href="#other" aria-controls="profile" role="tab" data-toggle="tab">Alternativ</a></li>
           </ul>
           <br/>
           <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="swamid">
                 <a href="/Shibboleth.sso/DS/nordu.net?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/" class="btn btn-lg btn-success">Logga in via SWAMID</a> 
              </div>
              <div role="tabpanel" class="tab-pane" id="other">
                 <div class="alert alert-warning">
                    Dessa inloggningsalternativ är bara avsedda för tester och riktar sig till expertanvändare.
                 </div>
                 <ul class="list-unstyled">
                    <li><a href="/Shibboleth.sso/DS/nordu.net?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">SWAMID</a></li>
                    <li><a href="/Shibboleth.sso/DS/swamid-test?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">SWAMID Testing</a></li>
                    <li><a href="/Shibboleth.sso/DS/skolfederation?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">Skolfederation</a></li>
                    <li><a href="/Shibboleth.sso/DS/kalmar2?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">Kalmar2</a></li>
                    <li><a href="/Shibboleth.sso/Login/socialproxy?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">SocialProxy</a></li>
                    <li><a href="/Shibboleth.sso/Login/box-idp.sunet.se?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">SUNET Box gw</a></li>
                    <li><a href="/Shibboleth.sso/Login/box-idp.nordu.net?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">NORDUnet Box gw</a></li>
                    <li><a href="/Shibboleth.sso/Login/openidp?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">FEIDE openidp</a></li>
                    <li><a href="/Shibboleth.sso/DS/loopback?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">Loopback DS (testing)</a></li>
                    <li><a href="/Shibboleth.sso/DS/nightly.pyff.io?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">pyFF nightly DS</a></li>
                    <li><a href="/Shibboleth.sso/Login/eduid-dev?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">eduID (dev)</a></li>
                    <li><a href="/Shibboleth.sso/Login/eduid?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">eduID</a></li>
                    <li><a href="/Shibboleth.sso/Login/unitedid?target=https://<?php echo $_SERVER['SERVER_NAME']?>/secure/">UnitedID</a></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
  </body>
</html>
