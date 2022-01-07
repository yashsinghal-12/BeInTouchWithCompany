<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<style>
    .container {
  width: 1200px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.sections1-content {
  text-align: center;
  padding-top: 100px;
}

.sections1-content h3 {
  font-size: 50px;

}

.section1 {
  display: inline-block;
  text-align: center;
  height: 200px;
  width: 200px;
  border-radius: 50%;
  margin: 40px;
}

.section1 img {
  border-radius: 50%;
  width: 100%;
  height: 100%;
}

@media (max-width: 580px) {
  .section1 {
    height: 250px;
    width: 250px;
  }
}

.sections2-content {
  text-align: center;
  padding-top: 100px;
}

.sections2-content h3 {
  font-size: 30px;
}

.section2-main-content {
  background-color: lightslategray;
  height: 50vh;
  width: 48.5%;
  float: left;
  text-align: center;
  color: #fff;
  margin-top: 2vh;
  padding-left: 10px;
}

.section2-main-content p {
  text-align: left;
  font-size: 1.2em;
  margin-top: 15px;
}

.section2-article {
  width: 48.5%;
  height: 50vh;
  float: right;
}

.section2-article a {
  text-decoration: none;
}

.section2 {
  display: flex;
  justify-content: center;
  height: 15.3vh;
  margin-top: 2vh;
  background-color: cadetblue;
  font-size: 1.2em;
  font-weight: 700;
  border: 1px solid green;
  overflow: hidden;
}

.section2 p {
  color: #000;
}

.project-1 {
  background-image: url(./Project_1.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.project-2 {
  background-image: url(./Project_2.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.project-3 {
  background-image: url(./Project_3.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

@media (max-width: 700px) {
  .section2-main-content {
    width: 100%;
    height: 300px;
  }
  .section2-article {
    width: 100%;
  }
}

.sections3-content {
  text-align: center;
  clear: both;
  padding-top: 100px;
}

.sections3-content h3 {
  font-size: 25px;
}
.grid {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  width: 100%;
}

.section3 {
  padding: 15px;
  background-color: #fff;
  width: 220px;
  border-radius: 5px;
  box-shadow: 0 5px 5px rgba(5, 5, 0, 0.5);
  margin: 40px;
}

.section3 img {
  width: 100%;
  border-radius: 5px;
}

.section3 a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #fff;
  background-color: rgb(255, 81, 0);
  border-radius: 5px;
}

.section3 p {
  margin-bottom: 10px;
}

.section3 a:hover {
  background-color: dimgrey;
}

@media (max-width: 920px) {
  .section3 {
    width: 250px;
  }
}

@media (max-width: 580px) {
  .section3 {
    width: 300px;
  }
}


</style>
<body style="background-color: lightblue;">
    <h1 style="color: blue; text-align: center; ">FAQ</h1>
    <div class="container">
        <div id="technologies" class="sections3-content">
            <h3>Frequently Ask Questions</h3>
            <div class="grid">
            <div class="section3">
                <img src="google_3.jpg" alt="" />
                <a href="https://one.google.com/faq">FAQ</a>
                <h3>GOOGLE</h3>
               
              </div>
              <div class="section3">
                <img src="microsoft_1.jpg" alt="" />
                <a href="https://www.microsoft.com/en-in/software-download/faq">FAQ</a>
                <h3>MICROSOFT</h3>
                
              </div>
              <div class="section3">
                <img src="Goldman_Sachs.jpg" alt="" />
                <a href="https://www.goldmansachs.com/investor-relations/faqs/">FAQ</a>
                <h3>GOLDMAN SACHS</h3>
               
              </div>
              <div class="section3">
                <img src="ibm.jpg" alt="" />
                <a href="https://www.ibm.com/employment/faq/">FAQ</a>
                <h3>IBM</h3>
             </div>
              <div class="section3">
                <img src="capgemini_6.jpg" alt="" />
                <a href="https://www.capgemini.com/faqs/#large-corporate-faqs">FAQ</a>
                <h3>CAPGEMINI</h3>
               
              </div>
              <div class="section3">
                <img src="cognizant_5.jpg" alt="" />
                <a href="https://careers.cognizant.com/na/en/faq">FAQ</a>
                <h3>COGNIZANT</h3>
                
              </div>
              <div class="section3">
                <img src="wipro_2.jpg" alt="" />
                <a href="https://www.wipro.com/investors/faqs/">FAQ</a>
                <h3>WIPRO</h3>
               
              </div>
              <div class="section3">
                <img src="infosys_4.jpg" alt="" />
                <a href="https://www.infosys.com/investors/shareholder-services/faqs.html">FAQ</a>
                <h3>INFOSYS</h3>
                
               
              </div>
              <div class="section3">
                <img src="adobe.jpg" alt="" />
                <a href="https://helpx.adobe.com/creative-cloud/faq.html">FAQ</a>
                <h3>ADOBE</h3>
               
              </div>
              <div class="section3">
                <img src="paytm.jpg" alt="" />
                <a href="https://www.paytmbank.com/faqs">FAQ</a>
                <h3>PAYTM</h3>
                
              </div>
              <div class="section3">
                <img src="walmart.jpg" alt="" />
                <a href="https://corporate.walmart.com/frequently-asked-questions">FAQ</a>
                <h3>WALMART</h3>
               
              </div>
              <div class="section3">
                <img src="cisco_corporate.jpg" alt="" />
                <a href="https://www.cisco.com/c/en/us/support/docs/smb/wireless/CB-Wireless-Mesh/1769-tz-Frequently-Asked-Questions-for-a-Cisco-Business-Mesh-Network.html">FAQ</a>
                <h3>CISCO</h3>
             </div>
             <div class="section3">
                <img src="codnation.jpg" alt="" />
                <a href="https://www.glassdoor.co.in/FAQ/CodeNation-Questions-E861781.htm">FAQ</a>
                <h3>CODENATION</h3>
               
              </div>
              <div class="section3">
                <img src="HCL_Technologies-Logo.wine.jpg" alt="" />
                <a href="https://www.hcltechbee.com/faqs/">FAQ</a>
                <h3>HCl</h3>
                
              </div>
              <div class="section3">
                <img src="dell.jpg" alt="" />
                <a href="https://www.dell.com/learn/us/en/22/consumer-faq">FAQ</a>
                <h3>DELL</h3>
               
              </div>
              <div class="section3">
                <img src="cisco_corporate.jpg" alt="" />
                <a href="https://www.cisco.com/c/en/us/support/docs/smb/wireless/CB-Wireless-Mesh/1769-tz-Frequently-Asked-Questions-for-a-Cisco-Business-Mesh-Network.html">FAQ</a>
                <h3>CISCO</h3>
             </div>

    </div>
    
</body>
</html>