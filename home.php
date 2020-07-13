
<html>
    <head>
        <meta charset="UTF-8">
            <title>CMS1</title>
        <link rel="icon" href="image/logo-preview-1aff644a-4eba-4f31-8e35-036f06cc6fe5.jpg" type="image/png" sizes="20x20">
            <style type="text/css">
                body
                    {
                        background: linear-gradient(105deg, #0288d1 0%, #26c6da 100%);
                    }
                .dropbtn{   background-color: transparent;
                            padding: 16px;font-size: 30px;border: none;
                            cursor: pointer;
                font-family:"biggerlove";}
                .dropdown-content{display: none;
                                position: absolute;

                                background-color: black;
                                min-width: 120px;
                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                z-index: 1;}
                .dropdown {
                                position: relative;
                                display: inline-block;}

                .dropdown-content a {
                                color: cadetblue;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;}
                .dropdown:hover .dropdown-content {
                                display: block;}
                a{text-decoration: none; font-size: 30px; color: white;font-family:"biggerlove";}
                a:hover{ color:burlywood}
                        
                button:hover{color:white}

                .menu{background: transparent; width:100%; height: 3.5em;
                      border-color: transparent;border-bottom-color: beige; 
                      border-style: solid; padding-top: 10px; position: fixed;top: 0;width: 100%;}

                @font-face { font-family: lemonade; src: url('font/lemonade.ttf'); }
                @font-face { font-family: biggerlove; src: url('font/BiggerLove-DEMO.ttf'); }

                .homepg{ color: whitesmoke;font-size: 40px}
      
                * {box-sizing: border-box}


                /* Style the tab */
                .tab {
                    float: left;
                    border: 1px solid #ccc;
                    background-color: #f1f1f1;
                    width: 30%;
                    height: 500px;
                }

                /* Style the buttons inside the tab */
                .tab button {
                    display: block;
                    background-color: inherit;
                    color: black;
                    padding: 22px 16px;
                    width: 100%;
                    border: none;
                    outline: none;
                    text-align: left;
                    cursor: pointer;
                    transition: 0.3s;
                    font-size: 17px;
                }

                /* Change background color of buttons on hover */
                .tab button:hover {
                    background-color: #ddd;
                }

                /* Create an active/current "tab button" class */
                .tab button.active {
                    background-color: #ccc;
                }

                /* Style the tab content */
                .tabcontent {
                    float: left;
                    padding: 0px 12px;
                    border: 1px solid #ccc;
                    width: 70%;
                    border-left: none;
                    height: 500px;
                }
                #eventspace{height:40%;width:20%;padding: 5%;background-color: whitesmoke;margin-left: 39%}
    
            </style>
                
            <script>
                function init() 
                    {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                    }
                function openCity(evt, cityName) 
                    {
                        init();
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }

            </script>
            <script>
                function contact()
                    {
                        alert("Thank you! Query Submitted.");
                        document.getElementById("memname").value="";
                        document.getElementById("mememail").value="";
                        document.getElementById("memphno").value="";
                        document.getElementById("CU_msg").value="";
                    }
            </script>
   
        </head>
    <body>
    
        <div class="menu">
            <a style="padding: 0.7% 2% 0.7% 3%" href="#homepg">Home</a>
                <div class="dropdown">
                    <a href="#academicspg">   <button style="padding: 0.7% 3% 0.7% 3%" class="dropbtn">Academics</button></a>
                        <div class="dropdown-content">
                            <a href="#Courses.html">Course</a>
                            <a href="#Clubs.html">Clubs</a>
                        </div>
                </div>
            
            <a style="padding: 0.7% 3% 0.7% 3%" href="#eventspg">Events</a>
                <div class="dropdown">
                    <a href="#admissionpg"><button style="padding: 0.7% 3% 0.7% 3%" class="dropbtn">Admission</button></a>
                        <div class="dropdown-content">
                            <a href="#Application.html">Application</a>
                            <a href="#Eligibility.html">Eligibility</a>
                            <a href="#FeeStructre.html">Fee Structre</a>
                        </div>
                </div>
            <a style="padding: 0.7% 3% 0.7% 3%" href="#contactpg">Contact</a>
                <div class="dropdown">
                    <a href="#infrastructrepg"><button style="padding: 0.7% 3% 0.7% 3%" class="dropbtn">Infrastructre</button></a>
                        <div class="dropdown-content">
                            <a href="#Parking.html">Parking</a>
                            <a href="#Canteen.html">Canteen</a>
                            <a href="#Lab.html">Lab</a>
                        </div>
                </div>
            
        </div>
            
        
        <div id="homepg"  class="homepg">
            <br><br><br><br>
            <h3 align="center">EDUCATION is the key to unlock</h3>
            <h3 align="center">the golden door of freedom!</h3>
            <button onclick="window.location.href='login.php'" style="margin-left: 45%;
                           font-size: 0.7em;
                           color: background;
                           font-family: lemonade;
                           border-color: slateblue;
                           padding-top: 0.13em;
                           font-weight: bold;">Login</button>
                           <br><br><br>
        </div>
        <div id="academicspg"> 
            <br><br><br><br><br><br>
             <p align="center" style=" font-size: 40px;font-family: biggerlove; color: black; text-decoration: underline">Academics</p>
                    <br><br>
                    <div class="tab">
                      <button class="tablinks" onclick="openCity(event, 'UGcourses')" >UGcourses</button>
                      <button class="tablinks" onclick="openCity(event, 'PGcourses')">PGcourses</button>
                      <button class="tablinks" onclick="openCity(event, 'Clubs')">Clubs</button>
                    </div>

                    <div id="UGcourses" class="tabcontent" style="display: none;">
                      <h3>UG Courses</h3>
                    
                        <ul>
                          <li>Bachelor of Arts (BA)</li>
                          <li>Bachelor of Science (B.Sc)</li>
                          <li>    Bachelor of Commerce (B.Com)</li>
                          <li>    Bachelor of Engineering/Technology (BE/B.Tech)</li>
                          <li>    Bachelor of Law (LLB)</li>
                          <li>    Bachelor of Computer Application (BCA)</li>
                          <li>    Bachelor of Business Administration (BBA)</li>
                          <li>    Bachelor of Pharmacy (B.Pharma)</li>
                          <li>    Bachelor of Architecture (B.Arch)</li>
                          <li>    Bachelor of Dental Surgery (BDS)</li>
                          <li>   Bachelor of Hotel Management (BHM)</li>
                          <li>   Bachelor of Physical Education (B.P.Ed)</li>
                         </ul>                     
                    </div>

                    <div id="PGcourses" class="tabcontent" style="display: none;">
                      <h3>PG courses</h3>
                        <ul>
                            <li>     Master of Arts (MA)</li>
                            <li>  Master of Science (M.Sc)</li>
                            <li>  Master of Commerce (M.Com)</li>
                            <li> Master of Engineering/Technology (ME/M.Tech)</li>
                            <li>  Master of Law (LLM)</li>
                            <li> Master of Computer Application (MCA)</li>
                            <li> Master of Business Administration (MBA)</li>
                            <li> Master of Pharmacy (M.Pharma)</li>
                            <li> Master of Architecture (M.Arch)</li>
                            <li> Master of Dental Surgery (MDS)</li>
                            <li> Master of Homeopathic Medicine & Surgery (MHMS)</li>
                            <li> Master of Ayurvedic Medicine & Surgery (MAMS) </li>
                        </ul>
                    </div>

                    <div id="Clubs" class="tabcontent" style="display: none;">
                      <h3>Clubs</h3>
                      <ul>                    
                          <li> Tek Music</li>	
                          <li>  Tamil Mandram</li>
                          <li>  Dramatics Club</li>
                           <li> Fine Arts Club</li>
                           <li> CAP & Nature Club</li>	        
                           <li> English Literary Society</li>
                           <li> Youth Red Cross Society	</li>
                           <li> Martial Arts Club</li>	
                           <li> Rotaract Club</li>
                           <li> Entrepreneurs Club</li>
                      </ul>
                    </div>
                    <br><br><br><br><br><br><br><br>    
                    <br><br><br><br><br><br><br><br>    
                    <br><br><br><br><br><br><br><br>    
                    <br><br><br><br><br>
        </div>
        
        <div id="eventspg" >
                    <br><br><br><br><br><br><br><br>    
                    <br><br>
                    
                    <p align="center" style=" font-size: 40px;font-family: biggerlove; color: black; text-decoration: underline">Events</p>
                    <br><br><br><br>
                    <div id="eventspace">
                         <marquee direction="up">
                           <p>October 6,7</p><br/><br/><br/>
                           <p>Intrams</p><br/><br/><br/>

                           <p>January 2019</p><br/><br/><br/>
                           <p>Republic day</p><br/><br/><br/>

                           <p>Febrary 2019</p><br/><br/><br/>
                           <p>Kriya</p>

                         </marquee>


                    </div>
        </div>
        
        <div id="admissionpg" >
                <br><br><br><br><br><br>
                
                <p align="center" style=" font-size: 40px;font-family: biggerlove; color: black; text-decoration: underline">Admission</p>
                <br><br><br>
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'Application')" >Application</button>
                  <button class="tablinks" onclick="openCity(event, 'Eligibility')">Eligibility</button>
                  <button class="tablinks" onclick="openCity(event, 'Feestructre')">Feestructre</button>
                </div>

                <div id="Application" class="tabcontent" style="display: none;">
                    <h3>Application</h3>
                  
                    Candidates seeking admission to courses offered by PSG College of Arts and Science can log on to the official university website. The candidates must make sure that the details entered in the application form are relevant and valid. An application fee of Rs.200/- for unaided course and Rs.50/- for an aided course has to be paid online.
                    Candidates can also apply for offline mode of application by contacting the institution and completed forms can be sent to the college address along with the fee and necessary documents.
                    All the fields must be filled by a New User in order to complete the Registration.
                    Candidates should provide their Full Name as mentioned in the Class X/XII/School leaving certificate without any special characters.
                    Candidate should enter the 12th Exam Roll No issued by the Board (as mentioned in the Marksheet)
                    The Email ID provided during the Sign Up will be used during the entire admission process including while logging into the Admission Portal and cannot be changed at a later stage
                    The Mobile Number provided will be used for communication purposes during the Admissions process.
                    Candidates will be required to enter the following details to complete the application form:
                    <ul>
                        <li>Personal Details – Name, Date of Birth, 12th exam roll number, Gender etc.</li> 
                        <li>Course Selection – Select the course you wish to apply and click on “ADD” button</li>
                        <li>Contact Details – Email ID, Mobile Number, Address</li>
                        <li>Special Category/ Quota Details – </li>
                        <li>Details of Qualifying Examination (HSC or Equivalent): Academic (Or) Vocational Stream</li>
                    </ul>
                    Note: An applicant must select the subjects he/she has chosen at HSC/Std XII level at the time of filling the application. He/She can fill in the individual marks and related details later by logging into the portal.
                
                </div>

                <div id="Eligibility" class="tabcontent" style="display: none;">
                  <h3>Eligibility</h3>
                  <ol>
                      <li>  65% admission by Central Allotment Process (CAP) of Government of India through CET MAIN 2016-17.</li>
                      <li>  15%admission by Central Allotment Process (CAP) of Government of India through JEE/CET MAIN 2016-17 for MS/OMS candidate.</li>
                      <li>  20% admission for institute level quota.</li>
                      <li> Candidate should have passed HSC (Std. XII) examination of Indian State Board of Secondary and Higher Secondary Education or its equivalent examination with subjects English, Physics, Mathematics are compulsary and optional subjects are Chemistry / Biology / Biotechnology & Technical Vocational. Choose any one from optional subjectand secured a minimum of 50% marks (45% in case of Backward Class candidates). For Biotechnology course, Biology is essential. For Maharashtra State seats through CAP, a ranking in JEE MAIN as declared by the government is essential. 
                          Institution level quota seats are filled up by due counseling as per merit basis.</li>
                      <li> GOI nominee and J & K migrant have a quota of one seat in each department. They have to apply to Directorate of Technical Education, Indian State for release of seats.</li>
                  </ol>
                </div>

                <div id="Feestructre" class="tabcontent" style="display: none;">
                  <h3>Fee Structre</h3>
                  <table border="1" style="border-color: whitesmoke;background-color: burlywood; border-style:solid;width: 40%;height:50%; ">
                      <tr style="font-weight: bold"><td>Courses</td><td>Fees(.Rs/yr)</td></tr>
                            <tr><td>BA</td><td>56,000</td></tr>
                            <tr><td>B.Sc</td><td>40,000</td></tr>
                            <tr><td>B.Com</td><td>40,000</td></tr>
                            <tr><td>BE/B.tech</td><td>1,50,000</td></tr>
                            <tr><td>LLB</td><td>80,000</td></tr>
                            <tr><td>BCA</td><td>45,000</td></tr>
                            <tr><td>BBA</td><td>36,000</td></tr>
                            <tr><td>B.pharma</td><td>76,000</td></tr>
                            <tr><td>BDS</td><td>1,00,000</td></tr>
                  </table>
                </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
                
        <div id="infrastructrepg" >
                <br><br><br><br><br><br><br><br>
                
                <p align="center" style=" font-size: 40px;font-family: biggerlove; color: black; text-decoration: underline">Infrastructre</p>
                <br><br><br>
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'Parking')">Parking</button>
                  <button class="tablinks" onclick="openCity(event, 'Canteen')">Canteen</button>
                  <button class="tablinks" onclick="openCity(event, 'Lab')">Lab</button>
                </div>

                <div id="Parking" class="tabcontent" style="display: none;">
                  <h3>Parking Facility</h3>
                  <p>
                    The college provides on the premises ample parking for two wheelers 
                    and four wheelers vehicles for students and the staff. 
                    There is separate car parking space for students and teachers. 
                    The parking lot is at some distance from the academic block. 
                    But those who park their vehicles have to abide by certain rules and restrictions.
                    At all time, for instance, speed limit norms need to be followed.
                    Honking horns is strictly prohibited. 
                    All vehicles brought inside the college campus are required to have all the relevant documents as prescribed under the law.
                  </p>
                </div>

                <div id="Canteen" class="tabcontent" style="display: none;">
                  <h3>Canteen</h3>
                  <p>
                      The College Canteen is a popular meeting place for students.
                      It serves a variety of eatables at moderate prices.  
                      Fully air conditioned canteen with elegant tables and 
                      cozy chairs add comfort while enjoying array of savory food. 
                      The College operates one fully air-conditioned canteen having 
                      a seating capacity of fifty people.
                  </p> 
                </div>

                <div id="Lab" class="tabcontent" style="display: none;">
                  <h3>Lab</h3>
                  
                      <b> <u> IT LAB 1&2:</u></b>
                        <ul>
                            <li> Exclusive Laboratory</li>
                            <li>Fully-equipped laboratories with 120 latest configured systems with i3 processor, 360 GB Hard disk and 2 GB RAM.</li>
                            <li> The Department has an array of application software suites from all leading developers (including Microsoft, Oracle, Adobe, Rational etc.)</li>
                            <li>Microsoft agreement is licensed.</li>
                            <li>Server : 512 MB RAM,80 GB harddisk,2.0 GHZ speed.</li>
                        </ul>

                <b><u>PG LAB:</u></b>
                        <ul>
                            <li> Exclusive Laboratory</li>
                            <li> Fully-equipped laboratories with 25 latest-configured systems and a host of software and hardware platforms.</li>
                            <li> All necessary software packages are available for laboratories.</li>
                            <li>Microsoft agreement is licensed.</li>
                        </ul>

                <b><u>INTERNET FACILITIES</u></b><br />
                A Network of all Systems with Internet Connectivity has a blazing 10 Mbps Leased Line Speed.<br />
                <br />
                <b><u>ACCESSORIES</u></b><br />
                Multimedia Projectors, Over Head Projectors(OHP), Laser, Dot Matrix Printers, External & Internal DVD & CD Writers, Head Phones, Pen Drives, Multimedia Speakers, etc.<br />
                  
                </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <br><br><br><br><br>
        <div id="contactpg" >
                    
                    <p align="center" style="font-size: 40px;font-family: biggerlove; color: black; text-decoration: underline">ContactUs</p>
                    <br><br><br>
                    <p align='center' style="font-weight: bolder"> Have any Queries? Don't hesitate to call us!</p>
                    <br><br>
                    
                        <table align='center'>
                            <form>
                            <tr>
                                <td><input type='text' placeholder="Your Name" id="memname"  required="required"></td>
                            </tr>
                            <tr>
                                <td><input type='text' placeholder="Your Email" id="mememail"  required="required"></td>
                            </tr>
                            <tr>
                                <td><input type='text' placeholder="Your Phoneno" id="memphno"  required="required"></td>
                            </tr>
                            <tr>
                                <td><textarea style="color:black;height:100px;" id="CU_msg" placeholder="Message"></textarea></td>
                            </tr>
                            </form>
                            <tr>
                                <td>
                                    <input type="submit" onclick="contact()" value="Send Message"/>
                                </td>
                            </tr>
                        </table>
                    
        </div>
    </body>
</html>
