<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignXHub - Professional Exterior Design Solutions</title>
    <meta name="description" content="Transform your outdoor spaces with DesignXHub's expert exterior design services. From modern facades to beautiful landscaping, we create stunning outdoor environments. Click here to continue exploring our comprehensive design solutions.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        .nav-container-x7k9 {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }
        
        .logo-brand-q8w5 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .nav-menu-r3t7 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-link-b9n1 {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .nav-link-b9n1:hover {
            color: #3498db;
        }
        
        .hero-section-z5v8 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }
        
        .hero-content-l2k6 {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .hero-title-d4f9 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .hero-subtitle-j7h3 {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .cta-button-w8x2 {
            background: #e74c3c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }
        
        .cta-button-w8x2:hover {
            background: #c0392b;
        }
        
        .services-grid-p6y1 {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .container-main-s3u4 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .section-title-a9m7 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }
        
        .grid-layout-k1v5 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .service-card-n8q2 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .card-icon-t4r6 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }
        
        .about-section-h7g3 {
            padding: 80px 0;
            background: white;
        }
        
        .about-grid-f2j8 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .about-text-c5x9 {
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .history-timeline-v6k4 {
            padding: 80px 0;
            background: #ecf0f1;
        }
        
        .timeline-item-u9p7 {
            background: white;
            margin: 2rem 0;
            padding: 2rem;
            border-left: 4px solid #3498db;
            border-radius: 5px;
        }
        
        .year-badge-i3w8 {
            background: #3498db;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .reviews-section-o4t1 {
            padding: 80px 0;
            background: #34495e;
            color: white;
        }
        
        .review-card-e7y5 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            margin: 1rem 0;
        }
        
        .reviewer-name-q2m6 {
            font-weight: bold;
            margin-top: 1rem;
            color: #3498db;
        }
        
        .footer-main-x1z9 {
            background: #2c3e50;
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer-grid-b8n4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .footer-section-l5r3 h3 {
            margin-bottom: 1rem;
            color: #3498db;
        }
        
        .contact-link-d9k7 {
            color: #3498db;
            text-decoration: none;
        }
        
        .modal-overlay-g6h2 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }
        
        .modal-content-j4p8 {
            background: white;
            margin: 5% auto;
            padding: 2rem;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            max-height: 80vh;
            overflow-y: auto;
        }
        
        .close-modal-s7v1 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }
        
        .expertise-showcase-m3q5 {
            padding: 80px 0;
            background: linear-gradient(45deg, #f39c12, #e67e22);
            color: white;
        }
        
        .showcase-grid-r8t2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .expertise-item-w4y7 {
            text-align: center;
            padding: 1.5rem;
        }
        
        .number-stat-k9l6 {
            font-size: 3rem;
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .nav-menu-r3t7 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-d4f9 {
                font-size: 2rem;
            }
            
            .about-grid-f2j8 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <div class="logo-brand-q8w5">DesignXHub</div>
            <ul class="nav-menu-r3t7">
                <li><a href="#services-anchor-z3x8" class="nav-link-b9n1">Services</a></li>
                <li><a href="#about-anchor-p7k4" class="nav-link-b9n1">About</a></li>
                <li><a href="#history-anchor-m2v9" class="nav-link-b9n1">History</a></li>
                <li><a href="#expertise-anchor-l6w3" class="nav-link-b9n1">Expertise</a></li>
                <li><a href="#reviews-anchor-q1t5" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#contact-anchor-h8r2" class="nav-link-b9n1">Contact</a></li>
                <li><a href="#" onclick="openModal('privacy-modal-f4j7')" class="nav-link-b9n1">Privacy</a></li>
                <li><a href="#" onclick="openModal('terms-modal-c9n6')" class="nav-link-b9n1">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-section-z5v8">
        <div class="hero-content-l2k6">
            <h1 class="hero-title-d4f9">Transform Your Outdoor Spaces</h1>
            <p class="hero-subtitle-j7h3">Professional exterior design solutions that bring your vision to life with innovative approaches and sustainable practices</p>
            <a href="#services-anchor-z3x8" class="cta-button-w8x2">Click Here to Continue</a>
        </div>
    </section>

    <section id="services-anchor-z3x8" class="services-grid-p6y1">
        <div class="container-main-s3u4">
            <h2 class="section-title-a9m7">Our Design Services</h2>
            <div class="grid-layout-k1v5">
                <div class="service-card-n8q2">
                    <div class="card-icon-t4r6">🏡</div>
                    <h3>Facade Renovation</h3>
                    <p>Complete exterior makeovers that enhance curb appeal and property value through modern design principles and quality materials.</p>
                    <a href="#contact-anchor-h8r2" class="cta-button-w8x2">Click Here to Continue</a>
                </div>
                <div class="service-card-n8q2">
                    <div class="card-icon-t4r6">🌿</div>
                    <h3>Landscape Architecture</h3>
                    <p>Comprehensive outdoor space planning including gardens, pathways, and recreational areas that complement your property's architecture.</p>
                </div>
                <div class="service-card-n8q2">
                    <div class="card-icon-t4r6">🏗️</div>
                    <h3>Structural Design</h3>
                    <p>Expert structural modifications and additions that seamlessly integrate with existing architecture while meeting all safety standards.</p>
                </div>
                <div class="service-card-n8q2">
                    <div class="card-icon-t4r6">💡</div>
                    <h3>Outdoor Lighting</h3>
                    <p>Strategic lighting solutions that highlight architectural features and create inviting atmospheres for evening enjoyment.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about-anchor-p7k4" class="about-section-h7g3">
        <div class="container-main-s3u4">
            <div class="about-grid-f2j8">
                <div>
                    <h2 class="section-title-a9m7">About DesignXHub</h2>
                    <div class="about-text-c5x9">
                        <p>DesignXHub specializes in creating exceptional exterior environments that reflect individual style and functional needs. Our team combines architectural expertise with creative vision to deliver outstanding results.</p>
                        <p>We believe every outdoor space has potential for transformation. Through careful planning and attention to detail, we create designs that enhance both aesthetic appeal and practical functionality.</p>
                        <p>Our collaborative approach ensures each project reflects the client's unique requirements while incorporating sustainable design practices and innovative solutions.</p>
                    </div>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg" alt="Modern exterior design" style="width: 100%; border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

    <section id="history-anchor-m2v9" class="history-timeline-v6k4">
        <div class="container-main-s3u4">
            <h2 class="section-title-a9m7">Our Journey</h2>
            <div class="timeline-item-u9p7">
                <span class="year-badge-i3w8">2018</span>
                <h3>Foundation Year</h3>
                <p>DesignXHub was established with a vision to revolutionize exterior design through innovative approaches and sustainable practices. Started with a small team of passionate architects and designers.</p>
            </div>
            <div class="timeline-item-u9p7">
                <span class="year-badge-i3w8">2020</span>
                <h3>Expansion Phase</h3>
                <p>Expanded our services to include comprehensive landscape architecture and structural modifications. Completed over 150 successful projects across residential and commercial sectors.</p>
            </div>
            <div class="timeline-item-u9p7">
                <span class="year-badge-i3w8">2022</span>
                <h3>Innovation Focus</h3>
                <p>Introduced cutting-edge design technologies and sustainable material solutions. Established partnerships with leading manufacturers and environmental consultants.</p>
            </div>
            <div class="timeline-item-u9p7">
                <span class="year-badge-i3w8">2024</span>
                <h3>Current Excellence</h3>
                <p>Today, DesignXHub stands as a trusted name in exterior design, having transformed hundreds of properties while maintaining our commitment to quality and innovation.</p>
                <a href="#contact-anchor-h8r2" class="cta-button-w8x2">Click Here to Continue</a>
            </div>
        </div>
    </section>

    <section id="expertise-anchor-l6w3" class="expertise-showcase-m3q5">
        <div class="container-main-s3u4">
            <h2 class="section-title-a9m7">Our Expertise</h2>
            <div class="showcase-grid-r8t2">
                <div class="expertise-item-w4y7">
                    <span class="number-stat-k9l6">500+</span>
                    <h3>Projects Completed</h3>
                    <p>Successfully delivered exterior design solutions across various property types</p>
                </div>
                <div class="expertise-item-w4y7">
                    <span class="number-stat-k9l6">6</span>
                    <h3>Years Experience</h3>
                    <p>Dedicated years of professional exterior design and architectural services</p>
                </div>
                <div class="expertise-item-w4y7">
                    <span class="number-stat-k9l6">98%</span>
                    <h3>Client Satisfaction</h3>
                    <p>Exceptional satisfaction rate based on completed project feedback</p>
                </div>
                <div class="expertise-item-w4y7">
                    <span class="number-stat-k9l6">24/7</span>
                    <h3>Support Available</h3>
                    <p>Round-the-clock consultation and project support services</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews-anchor-q1t5" class="reviews-section-o4t1">
        <div class="container-main-s3u4">
            <h2 class="section-title-a9m7">Client Reviews</h2>
            <div class="grid-layout-k1v5">
                <div class="review-card-e7y5">
                    <p>"DesignXHub transformed our backyard into an amazing outdoor living space. The attention to detail and creative solutions exceeded our expectations completely."</p>
                    <div class="reviewer-name-q2m6">- Sarah Mitchell, Homeowner</div>
                </div>
                <div class="review-card-e7y5">
                    <p>"Professional team with excellent communication throughout the project. They delivered exactly what we envisioned for our commercial property facade."</p>
                    <div class="reviewer-name-q2m6">- Robert Chen, Business Owner</div>
                </div>
                <div class="review-card-e7y5">
                    <p>"Outstanding landscape design that perfectly complements our home's architecture. The project was completed on time and within budget."</p>
                    <div class="reviewer-name-q2m6">- Maria Rodriguez, Property Manager</div>
                </div>
                <div class="review-card-e7y5">
                    <p>"Innovative design solutions and sustainable materials made our exterior renovation both beautiful and environmentally responsible."</p>
                    <div class="reviewer-name-q2m6">- James Thompson, Architect</div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#contact-anchor-h8r2" class="cta-button-w8x2">Click Here to Continue</a>
            </div>
        </div>
    </section>

    <footer id="contact-anchor-h8r2" class="footer-main-x1z9">
        <div class="container-main-s3u4">
            <div class="footer-grid-b8n4">
                <div class="footer-section-l5r3">
                    <h3>Contact Information</h3>
                    <p>📍 2847 Oak Street, Denver, CO 80205</p>
                    <p>📧 <a href="mailto:info@designxhub.com" class="contact-link-d9k7">info@designxhub.com</a></p>
                    <p>📞 <a href="tel:+13035551247" class="contact-link-d9k7">(303) 555-1247</a></p>
                </div>
                <div class="footer-section-l5r3">
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 4:00 PM</p>
                    <p>Sunday: By Appointment</p>
                </div>
                <div class="footer-section-l5r3">
                    <h3>Service Areas</h3>
                    <p>Denver Metropolitan Area</p>
                    <p>Boulder County</p>
                    <p>Jefferson County</p>
                    <p>Adams County</p>
                </div>
                <div class="footer-section-l5r3">
                    <h3>Quick Links</h3>
                    <p><a href="#" onclick="openModal('privacy-modal-f4j7')" class="contact-link-d9k7">Privacy Policy</a></p>
                    <p><a href="#" onclick="openModal('terms-modal-c9n6')" class="contact-link-d9k7">Terms of Service</a></p>
                    <p><a href="#services-anchor-z3x8" class="contact-link-d9k7">Our Services</a></p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #34495e;">
                <p>© 2024 DesignXHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal-f4j7" class="modal-overlay-g6h2">
        <div class="modal-content-j4p8">
            <span class="close-modal-s7v1" onclick="closeModal('privacy-modal-f4j7')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you contact us for design consultations, request quotes, or communicate with our team.</p>
            <h3>How We Use Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our exterior design services, communicate with clients, and respond to inquiries.</p>
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy.</p>
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@designxhub.com or (303) 555-1247.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal-c9n6" class="modal-overlay-g6h2">
        <div class="modal-content-j4p8">
            <span class="close-modal-s7v1" onclick="closeModal('terms-modal-c9n6')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            <h3>Service Agreement</h3>
            <p>By engaging DesignXHub for exterior design services, you agree to these terms and conditions. Our services include consultation, design development, and project management.</p>
            <h3>Project Scope</h3>
            <p>All projects begin with a detailed consultation to establish scope, timeline, and deliverables. Changes to project scope may affect timeline and require written approval.</p>
            <h3>Payment Terms</h3>
            <p>Payment schedules are established per project agreement. We accept various payment methods and require deposits for project initiation.</p>
            <h3>Intellectual Property</h3>
            <p>Design concepts and plans created by DesignXHub remain our intellectual property until full payment is received and project completion is confirmed.</p>
            <h3>Limitation of Liability</h3>
            <p>DesignXHub's liability is limited to the value of services provided. We are not responsible for construction defects or contractor performance.</p>
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@designxhub.com or (303) 555-1247.</p>
        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
        
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-g6h2')) {
                event.target.style.display = 'none';
            }
        }
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
