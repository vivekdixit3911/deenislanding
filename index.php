<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css"/>
    <title>Deenis Law Chamber</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">Deenis<span>law</span>chamber</a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <span><i class="ri-menu-line"></i></span>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#registration">Registration</a></li>
        <li><a href="#consultant">Online Consultant</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      
    </nav>
    <section id="home" class="home-section">
    <header class="header__container">
      <div class="header__image">
        <div class="header__image__card header__image__card-1">
          <span><i class="ri-key-line"></i></span>
          Court Marriage
        </div>
        <div class="header__image__card header__image__card-2">
          <span><i class="ri-passport-line"></i></span>
          Company Compliance 
        </div>
        <div class="header__image__card header__image__card-3">
          <span><i class="ri-map-2-line"></i></span>
           Company Corporation
        </div>
        <div class="header__image__card header__image__card-4">
          <span><i class="ri-guide-line"></i></span>
          Trademarks
        </div>
        <img src="https://png.pngtree.com/png-clipart/20230330/original/pngtree-scales-of-justice-png-image_9010916.png" alt="header" />
      </div>
      <div class="header__content">
        <h1>WE'RE HERE TO HELP!<br />YOUR <span>LEGAL PARTNER</span> IN EVERY STEP</h1>
        <p>Your Trusted Partner for Legal Solutions – Providing Expert Advice and Personalized Assistance for All Your Legal Needs.</p>

        <form action="send.php" method="POST" onsubmit="return handleFormSubmit(event)">
            <h3>Get in Touch</h3>
            <div class="input__row">
              <div class="input__group">
                <h5>Full Name</h5>
                <input type="text" name="full_name" placeholder="Enter your full name" required />
              </div>
              <div class="input__group">
                <h5>Email Address</h5>
                <input type="email" name="email" placeholder="Enter your email" required />
              </div>
            </div>
            <div class="input__row">
              <div class="input__group">
                <h5>Phone Number</h5>
                <input type="tel" name="phone_number" placeholder="Enter your phone number" required />
              </div>
              <div class="input__group">
                <h5>Inquiry Type</h5>
                <select name="inquiry_type" required>
                  <option value="">Select Inquiry Type</option>
                  <option value="court-marriage">Court Marriage</option>
                  <option value="company-compliance">Company Compliance</option>
                  <option value="company-corporation">Company Corporation</option>
                  <option value="trademark">Trademark Registration</option>
                </select>
              </div>
            </div>
            <div class="input__group">
              <h5>Your Message</h5>
              <textarea name="message" placeholder="Briefly describe your legal issue" rows="4" required></textarea>
            </div>
            <button type="submit">Submit Inquiry</button>
        </form>
        <div id="form-response"></div>

        <script>
        function handleFormSubmit(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('form-response').innerHTML = data;
            })
            .catch(error => {
                document.getElementById('form-response').innerHTML = 'An error occurred: ' + error.message;
            });

            return false;
        }
        </script>

        <!-- Trademark Registration Section -->
       
    </header>
  </section>
    
  
    
    <!-- Trademark Registration Section -->
    <section id="trademark-registration">
      <h2>Trademark Registration</h2>
      <p>
        Protect your brand and intellectual property with our comprehensive Trademark Registration services. We provide end-to-end support, from filing applications to completing all necessary legal procedures. Secure your identity in the marketplace with ease, ensuring that your brand is legally protected and recognized.
      </p>
      <p>
        Whether you are a startup, a small business, or an established enterprise, our team is here to assist you in securing exclusive rights to your brand name, logo, or slogan. We handle the entire process with precision and expertise, guiding you through every step from initial search to final registration.
      </p>
      <h3>Why Choose Us?</h3>
      <ul>
        <li>Expert Legal Advice from Trademark Attorneys</li>
        <li>Comprehensive Trademark Search to Avoid Conflicts</li>
        <li>Efficient and Accurate Application Filing</li>
        <li>Guidance on Responding to Examiner's Objections</li>
        <li>Seamless Trademark Renewal Process</li>
        <li>Global Trademark Registration Assistance</li>
        <li>Protection Against Trademark Infringement</li>
        <li>Custom Solutions for Each Client's Unique Needs</li>
      </ul>
      <p>
        With our Trademark Registration services, you can rest assured that your intellectual property will be safeguarded. Our experienced professionals work diligently to ensure your brand remains secure and that you have the legal backing you need to operate confidently in your industry.
      </p>
      <h3>Trademark Registration Process:</h3>
      <div class="service-grid">
        <div class="service-box">
          <h3>Our Trademark Registration Services Include:</h3>
          <ol>
            <li><strong>Trademark Search:</strong> We conduct a thorough search to ensure your trademark is unique and does not infringe on any existing trademarks.</li>
            <li><strong>Application Filing:</strong> Our team will file the trademark application with the relevant authorities, ensuring all necessary documents are correctly submitted.</li>
          </ol>
        </div>
        <div class="service-box">
          <ol>
            <li><strong>Objection Response:</strong> If the examiner raises any objections, we will respond promptly with well-prepared arguments to overcome any hurdles.</li>
            <li><strong>Registration and Certificate:</strong> Once approved, we will secure your trademark registration and provide you with a certificate of trademark ownership.</li>
            <li><strong>Renewal:</strong> We will remind you of upcoming renewal deadlines to ensure continued protection of your trademark.</li>
          </ol>
        </div>
      </div>
      
      <p>
        Don’t leave your intellectual property vulnerable—get in touch with us today to begin the process of trademark registration and safeguard your brand for years to come.
      </p>
    </section>
    <div class="container2">
      <!-- Trademark Search Service -->
      <div class="service-box1">
          <h3>Trademark Search</h3>
          <p>Find out if your trademark is available for registration and avoid any legal conflicts.</p>
          <a href="#home" class="apply-btn">Apply</a> <!-- Link to external page -->
      </div>
  
      <!-- Trademark Registration Service -->
      <div class="service-box1">
          <h3>Trademark Registration</h3>
          <p>Register your trademark to protect your brand and exclusive rights to the name or logo.</p>
          <a href="#home" class="apply-btn">Apply</a> <!-- Link to external page -->
      </div>
  
      <!-- Patent Registration Service -->
      <div class="service-box1">
          <h3>Patent Registration</h3>
          <p>Protect your unique inventions and technologies by securing a patent for them.</p>
          <a href="#home" class="apply-btn">Apply</a> <!-- Link to external page -->
      </div>
  
      <!-- Copyright Registration Service -->
      <div class="service-box1">
          <h3>Copyright Registration</h3>
          <p>Safeguard your creative works like art, music, and literature with copyright protection.</p>
          <a href="#home" class="apply-btn">Apply</a> <!-- Link to external page -->
      </div>
  </div>
  

    <!-- Court Marriage Section -->
    <section id="court-marriage">
      <h2>Court Marriage Services</h2>
      <p>
        Simplify your wedding process with our Court Marriage services. We guide you through the legal formalities, documentation, and registration to make your union legally binding and hassle-free. Our professional team ensures that you comply with all necessary laws, providing a smooth and efficient process from start to finish.
      </p>
      <p>
        Court marriages offer a quick and straightforward way to legally marry without the need for traditional ceremonies. Whether you're looking for privacy, legal certainty, or simply wish to avoid complex customs, our team is here to assist you every step of the way.
      </p>
      <h3>Why Choose Us?</h3>
      <ul>
        <li>Expert Legal Advice on Court Marriage Process</li>
        <li>Comprehensive Guidance for Both Partners</li>
        <li>Confidentiality Guaranteed Throughout the Process</li>
        <li>Assistance with All Legal Paperwork and Documentation</li>
        <li>Support with Securing the Marriage Certificate</li>
        <li>Fast and Stress-Free Process</li>
        <li>Tailored Solutions for Different Marital Needs</li>
        <li>Cost-Effective and Transparent Pricing</li>
      </ul>
      <h3>How Our Court Marriage Services Work:</h3>
      <div class="service-grid">
        <div class="service-box">
          <h4>Eligibility Criteria Assessment</h4>
          <p>We will evaluate the eligibility of both individuals according to the marriage laws, including age, consent, and relationship criteria.</p>
        </div>
        <div class="service-box">
          <h4>Required Documents Assistance</h4>
          <p>Our team will assist you in gathering all the necessary documents, such as proof of identity, address, and photographs, ensuring everything is in order for the court process.</p>
        </div>
        <div class="service-box">
          <h4>Scheduling the Court Appointment</h4>
          <p>We help you schedule a court appointment at a convenient time, making sure the date works for both parties and the required officials.</p>
        </div>
        
        <div class="service-box">
          <h4>Marriage Certificate Issuance</h4>
          <p>Once your marriage is legally registered, we assist in obtaining the marriage certificate, which can be used for future legal purposes.</p>
        </div>
      </div>
      <p>
        A Court Marriage is a valid legal contract, and having professional assistance ensures that your marriage is conducted smoothly, legally, and with minimal hassle. We handle all the details so you can focus on starting your new life together.
      </p>
      <h3>Additional Services We Provide:</h3>
      <ul>
        <li>Marriage Registration for Interfaith and Intercaste Marriages</li>
        <li>Legal Guidance for Different Jurisdictions</li>
        <li>Assistance in Name Change Post-Marriage</li>
        <li>Post-Marriage Document Services (e.g., joint bank accounts, passport changes)</li>
      </ul>
      <p>
        Whether you're looking for a simple marriage registration or comprehensive legal assistance, we are here to ensure your marriage process is seamless and legally sound. Get in touch with us today to start your journey!
      </p>
    </section>
    

    <!-- Company Compliance Section -->
    <section id="company-compliance">
      <h2>Company Compliance</h2>
      <p>
        Stay compliant with government regulations and ensure your business operates within the legal framework with our comprehensive Company Compliance services. We help your business adhere to the law, covering everything from filings and advisory to regulatory requirements, reducing legal risks and improving operational efficiency.
      </p>
      <p>
        As your business grows, so does the complexity of its compliance requirements. Our team of experts helps businesses navigate through the ever-changing landscape of corporate law, ensuring that your company is up-to-date with all necessary regulations and filings.
      </p>
      <h3>Why Choose Our Company Compliance Services?</h3>
      <ul>
        <li>Expert Guidance on Navigating Complex Regulatory Requirements</li>
        <li>Comprehensive Services Tailored to Your Business Needs</li>
        <li>Proactive Support to Avoid Penalties and Legal Risks</li>
        <li>Timely Filing and Submission of Compliance Documents</li>
        <li>Affordable and Transparent Pricing for All Services</li>
        <li>Customized Solutions for Small, Medium, and Large Enterprises</li>
      </ul>
      <h3>Our Company Compliance Services Include:</h3>
      <div class="service-grid">
        <div class="service-box">
          <h4>Annual Filing of Returns</h4>
          <p>We handle the annual filing of returns with the appropriate authorities, ensuring your business remains in good standing with the tax department and other regulatory bodies.</p>
        </div>
        <div class="service-box">
          <h4>Tax Compliance Services</h4>
          <p>Our team ensures that your business complies with all tax-related regulations, including GST, income tax, and other applicable taxes. We help with tax returns, audits, and filing deadlines to avoid any issues.</p>
        </div>
       
        <div class="service-box">
          <h4>Audit Support</h4>
          <p>Our experts offer assistance during internal and external audits, providing the necessary documentation and ensuring compliance with corporate governance standards.</p>
        </div>
        <div class="service-box">
          <h4>Legal Advisory on Corporate Policies</h4>
          <p>We provide legal advisory services to help your business draft and implement effective corporate policies, including employment contracts, anti-corruption practices, and corporate social responsibility (CSR) guidelines.</p>
        </div>
      </div>
      <p>
        With our company compliance services, you can rest assured that your business is not only following all legal requirements but also positioning itself for sustainable growth. Our legal experts are here to make sure you can focus on running your business while we handle the complex compliance landscape.
      </p>
      <h3>Additional Services We Provide:</h3>
      <ul>
        <li>Company Incorporation and Registration</li>
        <li>Secretarial Support and Corporate Governance</li>
        <li>Director and Shareholder Compliance</li>
        <li>Regulatory Filings for Mergers, Acquisitions, and Changes in Business Structure</li>
        <li>Employee Benefit Compliance (PF, ESI, and Gratuity)</li>
        <li>Compliance for Foreign Direct Investment (FDI) and International Regulations</li>
      </ul>
      <p>
        Our compliance services are designed to give you peace of mind, knowing that your business is fully compliant with the latest regulations. Get in touch with us today to discuss how we can help streamline your compliance processes and keep your company on track with all legal requirements.
      </p>
    </section>
    

    <!-- Company Corporation Section -->
    <section id="company-corporation">
      <h2>Company Corporation</h2>
      <p>
        Launch your business seamlessly with our comprehensive Company Corporation services. From company registration to obtaining essential licenses, we provide full support to help you establish a solid foundation for your business. Our services ensure that your company complies with all legal requirements, enabling you to focus on growth and success.
      </p>
      <p>
        Whether you're starting a small business or scaling a large enterprise, we guide you through every step of the corporation process, ensuring you have all the legal documents and compliance measures in place. Let us help you set up your company the right way, with a firm legal base for smooth operations.
      </p>
      <h3>Why Choose Our Company Corporation Services?</h3>
      <ul>
        <li>Expert Advice from Experienced Legal Professionals</li>
        <li>Comprehensive End-to-End Support for Your Business Incorporation</li>
        <li>Fast and Efficient Registration Process</li>
        <li>Assistance in Securing Necessary Business Permits and Licenses</li>
        <li>Cost-Effective Solutions Tailored to Your Needs</li>
        <li>Transparent Pricing with No Hidden Costs</li>
      </ul>
      <h3>Our Company Corporation Services Include:</h3>
      <div class="service-grid">
        <div class="service-box">
          <h4>Company Registration</h4>
          <p>We help you register your company with the relevant authorities, ensuring all the paperwork is filed correctly and on time. Whether you’re registering as a private limited company, partnership, or any other business structure, we have you covered.</p>
        </div>
        <div class="service-box">
          <h4>Obtaining Business Licenses</h4>
          <p>We assist in obtaining the necessary licenses and permits required for your business operations, ensuring full compliance with local, state, and federal regulations.</p>
        </div>
        <div class="service-box">
          <h4>Drafting and Reviewing Legal Agreements</h4>
          <p>Our team will help draft and review essential legal documents such as partnership agreements, shareholder agreements, non-disclosure agreements (NDAs), and other important contracts to protect your business interests.</p>
        </div>
        <div class="service-box">
          <h4>Memorandum of Association (MoA) and Articles of Association (AoA)</h4>
          <p>We assist in preparing the MoA and AoA, two key documents for company formation, outlining the objectives, governance, and rules for your company’s operations.</p>
        </div>
       
      </div>
      <p>
        With our Company Corporation services, you can be confident that your business is starting off on the right foot. We make the incorporation process easy and hassle-free, ensuring that your business is legally sound and ready to succeed.
      </p>
      <h3>Additional Services We Offer:</h3>
      <ul>
        <li>Post-Incorporation Compliance Services</li>
        <li>Assistance with Foreign Investments and Joint Ventures</li>
        <li>Trademark Registration for Your Company</li>
        <li>Opening Business Bank Accounts</li>
        <li>Employee Registration and Labor Law Compliance</li>
        <li>Providing a Registered Office Address</li>
        <li>Advisory on Exit Strategies and Company Liquidation</li>
      </ul>
      <p>
        Setting up your company is just the beginning. We’re here to provide ongoing support for all your business needs. From tax filing to corporate restructuring, our team will guide you through each stage of your company’s lifecycle. Get in touch today and take the first step toward building a successful, legally compliant business!
      </p>
    </section>
    

    <footer class="footer">
    <div class="footer-column">
        <h3>Contact Us</h3>
        <p>Phone: <a href="tel:+91926558488">+91 926558488</a></p>
        <p>Email: <a href="mailto:Deenis.group2000@gmail.com">Deenis.group2000@gmail.com</a></p>
        <p>Address: FA1, 332, Sector 6 Rd, near Shake Karo,<br>
            Pocket 1, Sector 6A, Rohini,<br>
            Delhi, 110085</p>
    </div>
    <div class="footer-column">
        <h3>Online Legal Consultation</h3>
        <a href="#">Divorce</a><br>
        <a href="#">Property Dispute</a><br>
        <a href="#">Employment Matters</a><br>
        <a href="#">Recovery of Money</a><br>
       
    </div>
    <div class="footer-column">
        <h3>Other Featured Services</h3>
        <a href="#">Court Marriage</a><br>
        <a href="#">Birth Certificate</a><br>
        <a href="#">Succession Certificate</a><br>
        
    </div>
    <div class="footer-column">
        <h3>Court Marriage Service Cities</h3>
        <a href="#">Delhi</a><br>
        <a href="#">Gurugram</a><br>
        <a href="#">Haryana</a><br>
        <a href="#">Lucknow</a><br>
      
    </div>
    <div>
      <p>Copyright © 2021-2024 Deenis Law Chamber | All Rights Reserved </p>
</footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>


<?php

    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $inquiry_type = $_POST['inquiry_type'];
    $message = $_POST['message'];


//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                      
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'deenis@deenislawchamberandservices.com';                     //SMTP username
    $mail->Password   = 'Deenis@2024';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
    //Recipients
    $mail->setFrom('priyamajhwar@gmail.com', 'contact form');
    $mail->addAddress('Deenis.group2000@gmail.com', 'Deenislawchamber');     //Add a recipient
   
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test Contact form';
    $mail->Body    = " Sender Name -$name <br> Sender Email - $email <br> $msg";
   

    $mail->send();
    echo "<div class='Success'>Message has been sent</div>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>