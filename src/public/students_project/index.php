<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration form</title>
    <link rel="stylesheet" href="css\style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
</head>
<body>
    <div class="fluid-container">
        <div class="header">
            <div class="header-right">
                <h2 class="display-4"><img src="images\nit_logo.jpg" id="heading_image">National Institute Of Technology, Raipur</h2>
            </div>
        </div>

        <div class="row">
            <div class="col_subscribe">
                <div class="card bg-light text dark">
                    <div class="card-header">
                        <h6>Subscribe to our official Newsletter <kbd>Mirror</kbd> for instant notification.</h6>
                        <dl>
                            <dt>Why Mirror</dt>
                            <dd>- Syllabus</dd>
                            <dd>- Calendar/Notices</dd>
                            <dd>- Admission & Fee Structure</dd>
                            <dd>- Academic Information</dd>
                            <dd>- Sports Information</dd>
                            <dd>- Cultural events Information</dd>
                        </dl>    
                    </div>
                    <div class="card-body">
                        <form name="subs_form">
                            <div class="row">
                                <div class="col-md">
                                    Name:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    Email:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <input type="text" placeholder="Enter Your Email" class="form-control" id="email_subscribe">
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-outline-primary btn-block" id="subscribe" type="button">Subscribe</button>
                            </div>
                            <div class="row">
                                <div class="alert alert-success alert-dismissible" id="subscribe_correct">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Thanks</strong> for Subscribe Mirror
                                </div>
                                <div class="alert alert-danger alert-dismissible" id="subscribe_incorrect">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Oops!</strong> This seems Invalid Email
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col_form">
                <div class="card bg-light text dark">
                    <div class="card2_heading">
                        <h4 id="form_heading">Student Registration Form</h4>
                    </div>
                    <div class="form_div">
                        <form name="myForm" id="myForm">
                        <h4>Personal Information:</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name">Name:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="1" id="fname" placeholder="Enter First Name" name="fname">
                                <label class="error" id="fname_error">First Name is required</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="2" id="mname" placeholder="Enter Middle Name" name="mname">
                                <label id="fname_error"></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="3" id="lname" placeholder="Enter Last Name" name="lname">
                                <label class="error" id="lname_error">Last Name is required</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="fatherName">Father's Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="4" id="fatherName" name="fatherName" placeholder="Enter Father's Name">
                                <label class="error" id="fatherName_error">Father Name is required</label>
                            </div>
                            <div class="col-md-2">
                                <label for="motherName">Mother's Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="5" id="motherName" name="motherName" placeholder="Enter Mother's Name">
                                <label class="error" id="motherName_error">Mother Name is required</label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="gender">Gender:</label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" tabindex="6" id="gender" name="gender">
                                    <option value="">--select--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <label class="error" id="gender_error">Gender is required</label>
                            </div>
                            <div class="col-md-2">
                                <label for="adhar">Adhar:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="7" id="adhar" name="adhar" placeholder="Enter Adhar Number" name="lname">
                                <label class="error" id="adhar_error">Invalid Adhar</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="dob">DOB:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control" tabindex="8" id="dob" name="dob">
                                <label class="error" id="dob_error">DOB is required</label>
                            </div>
                            <div class="col-md-5">
                                <label class="error" id="dob_error1">Age should be in between 16-40</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="dob">User Name:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="9" id="user_name" name="user_name" placeholder="Enter User Name">
                                <label class="error" id="user_name_error">User Name is required</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="fatherName">Password:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="10" id="pass" name="pass" placeholder="Enter password">
                                <label class="error" id="pass_error">Password is required</label>
                            </div>
                            <div class="col-md-2">
                                <label for="motherName">Confirm Password:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="password" class="form-control" tabindex="11" id="cnf-pass" name="cnf-pass" placeholder="Enter confirm Password">
                                <label class="error" id="cnf-pass_error">Password is required</label>
                            </div>
                            
                        </div>
                        <h4 class="notice">Contacts:</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="email">Email:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="12" id="email" name="email" placeholder="Enter Email Id">
                                <label class="error" id="email_error">Invalid Email</label>
                            </div>
                            <div class="col-md-2">
                                <label for="phone">Phone:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" tabindex="13" id="mobile" name="mobile" placeholder="Enter Phone Number">
                                <label class="error" id="mobile_error">Invalid Mobile Number</label>
                            </div>
                        </div>
                        <h4 class="notice">Address:</h4>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="country">Country:</label>
                            </div>
                            <div class="col-md-4">
                                <select name="country"  class="form-control" tabindex="14" id="country">
                                    <option value="" >--select--</option>
                                    <option value="India">India</option>
                                    <option value="Australia">Australia</option>
                                    <option value="America">America</option>
                                    </select>
                                    <label class="error" id="country_error">Country is required</label>
                            </div>
                            <div class="col-md-2">
                                <label for="state">State:</label>
                            </div>
                            <div class="col-md-4">
                                <select name="state" class="form-control" tabindex="15" id="state">
                                </select>
                                <label class="error" id="state_error">State is required</label>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="city">City:</label>
                            </div>                               
                            <div class="col-md-4">
                                <select class="form-control" tabindex="16" id="city" name="city">
                                </select>
                                <label class="error" id="city_error">City is required</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <!-- <button class="btn btn-primary" type="button" id="reset">Reset</button> -->
                            </div>
                            <div class="col-md-4">
                                <!-- <button class="btn btn-outline-primary btn-block" tabindex="12" type="button" id="update">Update</button> -->
                            </div>
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-outline-primary btn-block" tabindex="17" type="button" id="register">Register</button>
                            </div>
                        </div>
                        <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>Already Registered ?</h6>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-outline-primary btn-block" type="button" id="login_main_page" data-toggle="modal" data-target="#myModalLogin">Login</button>
                                </div>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
           
            <!-- code for login form using modal starts from here-->
            <div class="modal" id="myModalLogin">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                    <form name="loginForm" id="loginForm">
                <div class="row">
                    <div class="col">
                        <label for="Email">Email:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="email_login" placeholder="Enter Email Or User Name" name="email_login">
                        <label class="error" id="email_login_error">User Name is required</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="Email">Password:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="password" class="form-control" id="pass_login" placeholder="Enter Your Password" name="pass_login">
                        <label class="error" id="pass_login_error">Password is required</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary btn-block" type="button" id="login">Login</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- code for login form using modal ends here-->

            <div class="col_about">
                <div class="card bg-light text dark">
                    <div id="accordion">
                        <div class="card">
                            <img class="card-img-top" src="images\nitrr.jpg"  height="300px" alt="Card image">
                            <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                About Us:
                            </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                The institute is committed to the challenging task of development of technical education by preparing seasoned graduates in highly sophisticated field of engineering and technology. Development of India as an emerging industrial power is a demanding exercise as it involves the combination of cost effectiveness and efficiency along with producing world-class technology at the cutting edge. For about five decades we have been doing it with sincerity and commitment at NIT Raipur. At present the institute offers graduate level courses in twelve disciplines.
                            </div>
                            </div>
                        </div>
        
                        <div class="card" id="department">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Departments:
                            </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                <a href="#" data-toggle="modal" data-target="#myModal1">
                                    Applied Geology
                                </a>
                                <div class="modal" id="myModal1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Mission - To promote Human Resource Development (HRD) in achieving goals of sustainable development and conservation of mineral and natural resources.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal2">
                                    Architecture
                                </a>
                                <div class="modal" id="myModal2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            The standard of architecture is one of the most important indicators of the level of civilization of any society. The Department of Architecture is one of the creative Departments of this Institute that aims at educating the coming generations of the art and science of making buildings. The endeavour of this department is produce architects who would be able to consciously design spaces and built forms that would not only solve the problems of built environments today but also would shape it for the future generations. With growing industrialization and increasing demand for professionals in the field of architecture, the Department has been successfully delivering the need for those professionals. 
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal3">
                                    Bio Medical Engineering
                                </a>
                                <div class="modal" id="myModal3">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            To provide society with world-class competitive professional in Biomedical Engineering by making the Department as the best through its faculty and graduates, which is a driving force in creating engineering knowledge and novel Biomedical Technology that improve the human condition through advancement of health care and Biomedical Sciences, among the top most (top-5) in India.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal4">
                                    Bio Technology
                                </a>
                                <div class="modal" id="myModal4">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Our vision is to promote, support and facilitate the development of Biotechnology. Department of Biotechnology will train and prepare students to become competent Biotechnologists who will be able to apply principles of engineering and life sciences to solve a wide array of problems in a global society and in order to do so will develop new cost effective alternative technologies.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal5">
                                    Chemical Engineering
                                </a>
                                <div class="modal" id="myModal5">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            The Department aims for global recognition in teaching, research and community services and raising the standard of Chemical Engineering education in the latest art of the technology, constantly improving the quality and skills at undergraduate and post graduate levels, emphasizing on novel research and development that leads to a socioeconomically feasible technology.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal6">
                                    Civil Engineering
                                </a>
                                <div class="modal" id="myModal6">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            The Department of Civil Engineering at NIT Raipur (formerly, Government college of Engineering and Technology) is producing high quality technical manpower; required by various industrial establishments, R&D organizations, Govt. & public establishments and academic institutions since 1958. The Department offers B Tech degree in Civil Engineering and M Tech degree in Civil Engineering with specializations in Water Resources Development & Irrigation Engineering and Structural Engineering. The Department has been offering Ph.D. program in various specializations. The Department also encourages its students to engage in extra-curricular and co-curricular activities, essential for development, nurturing of team spirit, and developing organizational skills. The faculty members of the department are involved in research and consultancy activities, and they continue to enjoy academic leader role in the country. Govt. of India has recognized Civil Engineering Department as State Technical Agency for implementation of its ambitious projects of Pradhan Mantri Gram Sadak Yojana (PMGSY) & National Rural Drinking Water Programme (NRDWP).
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal7">
                                    Computer science and Engineering
                                </a>
                                <div class="modal" id="myModal7">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            To promote Research and Development in the frontier areas of Computer Science & Engineering.
                                            To generate Competent Professionals to become part of the industry and Research Organizations at the National and International levels.
                                            To provide necessary strengths to enable the students to Innovate and to become Entrepreneurs.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal8">
                                    Department Of Chemistry
                                </a>
                                <div class="modal" id="myModal8">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            The vision of the Department of Chemistry is to provide a platform of nationally and internationally recognized model of education to the students, so that they can compete in and contribute to the ever-changing, technology-centered world of the 21st century. It is committed by Department of Chemistry to achieve this vision by providing a course of study for undergraduate and postgraduate students in the chemistry which includes curriculum, scholarship and service/engagement opportunities that are high-quality, innovative and intellectually challenging and employ state-of-the-art technologies.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal9">
                                    Department Of Mathematics
                                </a>
                                <div class="modal" id="myModal9">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            To teach and learn physics in a collaborative, performance-based community and to provide the tools and skills to assist the society.
                                            To provide quality Scientific and Technical education, training, innovation and creativity in the areas of Pure and Applied Physics.
                                            To generate new knowledge by engaging in cutting-edge research and to promote academic growth by offering state-of-the-art undergraduate and doctoral programmes.
                                            To develop human potential to its fullest extent so that intellectually capable and good human beings can emerge in a range of professions.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal10">
                                    Department Of Physics
                                </a>
                                <div class="modal" id="myModal10">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            To teach and learn physics in a collaborative, performance-based community and to provide the tools and skills to assist the society.
                                            To provide quality Scientific and Technical education, training, innovation and creativity in the areas of Pure and Applied Physics.
                                            To generate new knowledge by engaging in cutting-edge research and to promote academic growth by offering state-of-the-art undergraduate and doctoral programmes.
                                            To develop human potential to its fullest extent so that intellectually capable and good human beings can emerge in a range of professions.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal11">
                                    Department Of Humanities & social services
                                </a>
                                <div class="modal" id="myModal11">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Modal body..
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal12">
                                    Electrical Engineering
                                </a>
                                <div class="modal" id="myModal12">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Electrical Engineering department aims at imparting the state of the art knowledge and skills to the students. Thus, developing them into the excellent Electrical Engineers, Entrepreneurs, Scientists, and Academicians. 
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal13">
                                    Information Technology
                                </a>
                                <div class="modal" id="myModal13">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Established in the year 2000, Information Technology Department is the study, research and work place of 300 people from 28 states across India. About 15 professors in this department teach mainly in areas like Information Science & Technology, Computer Science & engineering, system-oriented sciences, and mathematics, etc., carry out research in their respective fields. 
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal14">
                                    Master in computer Science
                                </a>
                                <div class="modal" id="myModal14">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Department of Computer Applications (MCA) is established in the year 1986 in the erstwhile Government Engineering College Raipur with an intake of 30 students. Later on in the year 2000 after the formation of state of Chhattisgarh the intake is increased to 60. <br><br>

                                            In the year 2005 on the upgradation of the Institute the Department is now known as Department of Computer Applications National Institute of Technology Raipur. <br><br>
                                            
                                            Induction to MCA Program is through national level entrance examination i.e. NIMCET (National Institutes Master of Computer Applications Entrance Test) conducted by one of the participating NITs. <br><br>
                                            
                                            Presently there are 11 participating NITs in this entrance test. This provides opportunity to all the participants of entire India to join MCA Program. <br><br>
                                            
                                            Later on in the year 2011 the Department started Ph. D research Program in the field of Computer Applications. <br><br>
                                            
                                            The Department is rich in terms of faculty, laboratory/classroom facility and campus placement. 
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal15">
                                    Mechanical Engineering
                                </a>
                                <div class="modal" id="myModal15">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Department offers undergraduate program (B.Tech.) in Mechanical Engineering and Postgraduate program (M.Tech.) in Thermal Engineering. It is one of the largest department of the institute with intake of 90 students for undergraduate course and 17 students for post graduate course. Department also offers Ph.D. program in all relevant discipline of Mechanical Engineering including Design, Production, Thermal and Industrial Management.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal16">
                                    Minning Engineering
                                </a>
                                <div class="modal" id="myModal16">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            The Department of Mining Engg. was established in the Year 1956 with intake capacity of only 15 students. Due to increasing demand of mining engineers from coal and mineral industry, the intake capacity has now been increased to 77. At present, there are 291 undergraduate students in various semesters and 13 PhD scholars registered in the Department. The Department is equipped with state of the art modern instruments and equipments for conducting various laboratory and research work. The Department has undertaken and successfully completed number of testing and consultancy projects.
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <a href="#" data-toggle="modal" data-target="#myModal17">
                                    Metalurgical Engineering
                                </a>
                                <div class="modal" id="myModal17">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            To become a pioneering Department in the country for teaching, research and consultancy in emerging areas of materials science and engineering while consolidating the Departments strength in traditional areas of metallurgical engineering. To provide a high quality education in Metallurgical Engineering with emphasis on student-centered research and scholarity activities, service to community and industry and professional practice in Metallurgical and all conducted in an environment that celebrates discovery and diversity. 
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>

<script src="JQuery\register.js"></script>
</body>
</html>
