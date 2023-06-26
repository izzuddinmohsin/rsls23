<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="assets/image/logo.png" type="image/x-icon">


    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>


    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;

        }

        .card-title {
            text-align: center;
            font-size: 50px;
            font-weight: bolder;
        }

        .card-text {
            text-align: center;
            font-size: 20px;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-img-overlay {
            background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5));
            color: #fff;
        }

        .conference-content {
            display: flex;
            padding: 30px;
            padding-left: 90px;
        }

        .conference-text {
            padding-left: 200px;
            padding-right: 50px;
            font-size: 20px;
        }

        .objective-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 30px;
            margin-left: 70px;
            margin-right: 70px;

        }

        li:not(:last-child) {
            margin-bottom: -10px;
        }

        .registration-text {
            display: flex;
            justify-content: space-evenly;
            font-size: 20px;
        }

        .registration-caption {
            font-size: 20px;
        }

        #register-card {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .contact-content {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        .document-content {
            padding: 30px;
            margin-left: 70px;
            margin-right: 70px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .document {
            align-items: center;
            display: flex;
            flex-direction: column;
        }
    </style>

</head>

<body>
    <?php include("template/header.php"); ?>

    <section>
        <div class="card text-bg-dark" style="--bs-border-radius: none;">

            <img src="assets/image/cover-photo.jpeg" class="card-img" alt="..."
                style="background-blend-mode: overlay; border-radius:none">
            <div class="card-img-overlay">
                <div class="centered">
                    <p class="card-text">2nd Regional Student Leadership Summit 2023</p>
                    <h5 class="card-title" style="font-size: 50px; font-weight:bolder">RSLS '23</h5>
                    <p class="card-text"> <small>21 -25 September 2023.</small> </p>
                    <p class="card-text"> <small>Universitas Negeri Padang, Indonesia</small></p>
                </div>
            </div>
        </div>
    </section>
    <section id="home">
        <div class="container text-center" style="margin-top: 30px; margin-bottom:30px">
            <div class="row">
                <div class="col">
                    <svg width="60" height="60" viewBox="0 0 20 20">
                        <path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z">
                        </path>
                        <rect width="1" height="3" x="6" y="2"></rect>
                        <rect width="1" height="3" x="13" y="2"></rect>
                    </svg>
                    <h2> 7 July 2023</h2>
                    <P>Abstract Submission</P>
                </div>
                <div class="col">
                    <svg width="60" height="60" viewBox="0 0 20 20">
                        <path d="M 2,3 2,17 18,17 18,3 2,3 Z M 17,16 3,16 3,8 17,8 17,16 Z M 17,7 3,7 3,4 17,4 17,7 Z">
                        </path>
                        <rect width="1" height="3" x="6" y="2"></rect>
                        <rect width="1" height="3" x="13" y="2"></rect>
                    </svg>
                    <h2> 7 July 2023</h2>
                    <p>Full Paper Submission</p>
                </div>
            </div>
        </div>
    </section>
    <section id="conference">
        <div class="container-fluid" style="padding-top: 30px; background-color: #f6f8fb;">
            <div class="conference-content">
                <div class="conference-title">
                    <h4 style="white-space: nowrap;">About Conference</h4>
                    <hr>
                </div>
                <div class="conference-text" style="text-align: justify;">
                    <p>2nd Regional Student Leadership Summit 2023 is a conference organized by the Ministry of Higher
                        Education Malaysia together with MAKLUM in collaboration with MAKMUM, MASKUM, UNP, IMT-GT, and
                        AUN. This
                        conference is the second conference organized and this time it is themed “Resilience and
                        Reinvention”.
                        Held at Universitas Negeri Padang, Indonesia on 21-25 September 2023. Participation is open to
                        all ASEAN
                        students. The scope of the conference includes 5 main topics which are social enterprise,
                        community
                        service, entrepreneurship, leadership, and volunteering. The objective of this conference is to
                        provide
                        the participants with an opportunity to exchange opinions among ASEAN students, to provide
                        experience on
                        the presentation ASEAN level, and to learn the culture and life of the local community through
                        community
                        service.</p>

                </div>
            </div>
        </div>
        <div class="content-fluid" style="padding-top: 30px;">
            <div class="objective-content">
                <div class="objective-title">
                    <h4 style="white-space: nowrap;">Objective Conference</h4>
                    <hr>
                </div>
                <div class="objective-text" style="font-size: 20px; padding-top:10px">
                    <ul>
                        <li>
                            <p>Participants can share their views on approaches, strategies, and techniques for carrying
                                out off-campus activities, especially the Real Work Lectures that have been conducted in
                                Indonesia.</p>
                        </li>
                        <li>
                            <p>Give participants the opportunity to prepare an appropriate action plan to sustain
                                student development programs in the future</p>
                        </li>
                        <li>
                            <p>Strengthen regional relations in adapting good practices from ASEAN countries that can be
                                carried out in Malaysia.</p>
                        </li>
                        <li>
                            <p>Giving exposure to IPTA students managing conferences at an international level.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-fluid" style="padding-top: 30px; background-color: #f6f8fb;">
            <div class="objective-content">
                <div class="objective-title">
                    <h4 style="white-space: nowrap;">Scope Conference</h4>
                    <hr>
                </div>
                <div class="objective-text" style="font-size: 20px; padding-top:10px">
                    <ul>
                        <li>
                            <p>Social Enterprise</p>
                        </li>
                        <li>
                            <p>Volunteer</p>
                        </li>
                        <li>
                            <p>Leadership</p>
                        </li>
                        <li>
                            <p>Community Services</p>
                        </li>
                        <li>
                            <p>Enterpreneurship</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="registration">
        <div class="content-fluid" style="padding-top: 30px; text-align:center">
            <div class="registration-content">
                <div class="registration-title">
                    <h4>Registration Fees</h4><br>
                </div>
                <div class="registration-caption">
                    <p>Early Bird (Until 15 June 2023)</p>
                </div>
                <div class="registration-text">
                    <div class="text-content-1">
                        <strong>Malaysia</strong>
                        <p>Presenter – RM450 </p>
                        <p>Participant – RM 200 </p>
                    </div>
                    <div class="text-content-2">
                        <strong>Indonesia and ASEAN</strong>
                        <p>Presenter – USD 110 </p>
                        <p>Participant – USD 50</p>
                    </div>

                </div>
                <div class="registration-caption">
                    <p>Normal (Until 15 August 2023)</p>
                </div>
                <div class="registration-text">
                    <div class="text-content-1">
                        <strong>Malaysia</strong>
                        <p>Presenter – RM500 </p>
                        <p>Participant – RM 250 </p>
                    </div>
                    <div class="text-content-2">
                        <strong>Indonesia and ASEAN</strong>
                        <p>Presenter – USD 120 </p>
                        <p>Participant – USD 60</p>
                    </div>

                </div><br>
                <p style="font-size:17px">*Fees inclusive Meals, Farewell Dinner, Certificates & Conferences Kits.</p>
            </div>

            <div id="register-card">
                <div class="card mb-3" style="max-width: 1012px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/image/logo2.png" class="img-fluid rounded-start" alt="..."
                                style="width: fit-content;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" style="text-align: justify; padding:80px">
                                <p style="font-size:20px">Register Form</p>
                                <p class="text">To register as the presenter or participant for this conference,
                                    please click the button below.</p>
                                <a href="registration.php" type="button" class="btn btn-secondary">Register now</a>
                                <a type="button" data-bs-toggle="modal" data-bs-target="#myModal4"
                                    class="btn btn-secondary">qr code</a>

                                <!-- The Modal -->
                                <div class="modal" id="myModal4">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">QR Code</h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body" style=" display: flex; justify-content: center;">
                                                <div id="qrcode4"></div>

                                                <script>
                                                    // Generate QR code
                                                    var qrCode = new QRCode(document.getElementById("qrcode4"), {
                                                        width: 200,
                                                        height: 200
                                                    });

                                                    var link =
                                                        "http://192.168.0.115/RSLS23/registration.php"; // Replace with your link

                                                    // Set the value of the QR code
                                                    qrCode.makeCode(link);
                                                </script>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="assets/image/schedule.png" alt="" style="padding-top:30px; padding-bottom:30px; width:50%">
            </div>
        </div>
    </section>
    <section id="document">
        <div class="content-fluid" style="padding-top: 30px;padding-bottom: 30px; background-color: #f6f8fb;">
            <div class="objective-content">
                <div class="objective-title">
                    <h4>Document Format Required For The Conference.</h4>
                </div>
                <div class="objective-text" style=" padding-top:10px">
                    <p>All documents sent must follow the prescribed format and the following are document templates for
                        use by presenters.</p>
                </div>
            </div>
        </div>
        <div class="content-fluid" style="padding-top: 30px;padding-bottom: 30px;">
            <div class="document-content">
                <div class="document">
                    <div class="document-title">
                        <h4>RSLS '23 Abstract Paper Template.</h4>
                    </div>
                    <div class="document-file" style=" padding-top:10px">
                        <a href="https://docs.google.com/document/d/1-apYwvkdnygDvGGmRM_p5IMFG3-w3Duc/edit"
                            target="_blank" type="button" class="btn btn-secondary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-download" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> Download</a>

                        <!-- QR CODE -->
                        <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal2">QR
                            Code</a>

                        <!-- The Modal -->
                        <div class="modal" id="myModal2">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">QR Code</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style=" display: flex; justify-content: center;">
                                        <div id="qrcode2"></div>

                                        <script>
                                            // Generate QR code
                                            var qrCode = new QRCode(document.getElementById("qrcode2"), {
                                                width: 200,
                                                height: 200
                                            });

                                            var link =
                                                "https://docs.google.com/document/d/1-apYwvkdnygDvGGmRM_p5IMFG3-w3Duc/edit"; // Replace with your link

                                            // Set the value of the QR code
                                            qrCode.makeCode(link);
                                        </script>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="document">
                    <div class="document-title">
                        <h4>RSLS '23 Full Paper Template</h4>
                    </div>
                    <div class="document-file" style=" padding-top:10px">
                        <a href="https://docs.google.com/document/d/19KPYhmqbKZXPu8fhWzy8hN2DZegtoBqf/edit"
                            target="_blank" type="button" class="btn btn-secondary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-download" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> Download</a>

                        <!-- QR CODE -->
                        <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal">QR
                            Code</a>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">QR Code</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style=" display: flex; justify-content: center;">
                                        <div id="qrcode"></div>

                                        <script>
                                            // Generate QR code
                                            var qrCode = new QRCode(document.getElementById("qrcode"), {
                                                width: 200,
                                                height: 200
                                            });

                                            var link =
                                                "https://docs.google.com/document/d/19KPYhmqbKZXPu8fhWzy8hN2DZegtoBqf/edit"; // Replace with your link

                                            // Set the value of the QR code
                                            qrCode.makeCode(link);
                                        </script>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="document">
                    <div class="document-title">
                        <h4>RSLS '23 Powerpoint Presentation Template</h4>
                    </div>
                    <div class="document-file" style=" padding-top:10px">
                        <a href="https://docs.google.com/presentation/d/1XOOZ2z0wtRxoFVALxvXp9d-CBfwbXRqe/edit#slide=id.p1"
                            target="_blank" type="button" class="btn btn-secondary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-download" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg> Download</a>

                        <!-- QR CODE -->
                        <a type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal3">QR
                            Code</a>

                        <!-- The Modal -->
                        <div class="modal" id="myModal3">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">QR Code</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body" style=" display: flex; justify-content: center;">
                                        <div id="qrcode3"></div>

                                        <script>
                                            // Generate QR code
                                            var qrCode = new QRCode(document.getElementById("qrcode3"), {
                                                width: 200,
                                                height: 200
                                            });

                                            var link =
                                                "https://docs.google.com/presentation/d/1XOOZ2z0wtRxoFVALxvXp9d-CBfwbXRqe/edit#slide=id.p1"; // Replace with your link

                                            // Set the value of the QR code
                                            qrCode.makeCode(link);
                                        </script>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="content-fluid" style="padding-top: 30px; padding-bottom: 30px; background-color: #f6f8fb;">
            <div class="objective-content" style="text-align: center; align-items: center;">
                <div class="objective-title">
                    <h4>Document Submission.</h4>
                    <hr>
                </div>
                <div class="objective-text" style=" padding-top:10px">
                    <p>Submission of Abstract, Full Paper, and Presentation should be sent via the following email.</p>
                    <p><a href="isukhasjurnalpersonaliapelajar@ukm.edu.my"
                            style="text-decoration: none;">isukhasjurnalpersonaliapelajar@ukm.edu.my</a> </p>
                    <p>Any questions can contact us at +6010-383 7013 or on our Instagram rsls23</p>
                </div>
            </div>
        </div>
        <div class="content-fluid" style="padding-top: 30px;">
            <div class="objective-content" style="flex-direction: row;justify-content: space-around;margin-left:-100px">
                <div class="objective-title">
                    <h4 style="white-space: nowrap;">Organized by</h4>
                    <hr>
                </div>
                <div class="objective-text" style="font-size: 20px; padding-top:10px;display:flex">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;margin-right: 15px;">
                        <img src="assets/image/kpm.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem;margin-left: 15px;">
                        <img src="assets/image/makmum.png" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="content-fluid" style="padding-top: 30px;padding-bottom:30px; background-color: #282768; color:#fff">
            <div class="contact-title" style="text-align: center;padding-bottom:30px">
                <h4 style="font-size:30px">Contact Us</h4>
            </div>
            <div class="contact-content">
                <div class="contact-text-1">
                    <strong style="font-size:25px">Get In Touch</strong>
                    <hr>
                    <p style="font-size:20px; color: #ffffffcc;">Call Us at </p>
                    <p style="font-size:20px;color: #ffffffcc;">+6010-383 7013</p>
                    <p style="font-size:20px;color: #ffffffcc;">Email Us at </p>
                    <p><a href="rsls23.summit@gmail.com"
                            style="font-size:20px;text-decoration: none; color:#f6f8fb">rsls23.summit@gmail.com</a> </p>

                </div>
                <div class="contact-text-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.861174060294!2d103.07969809839479!3d1.857260600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d05eaa459d0ab9%3A0x495f817bef16f0a1!2sUniversiti%20Tun%20Hussein%20Onn%20Malaysia%20(UTHM)!5e0!3m2!1sen!2smy!4v1686120121187!5m2!1sen!2smy"
                        width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include("template/footer.php"); ?>


</body>

</html>