<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function oac_home_topics() {
	return array(
		__( 'Self discovery', 'oac-theme' ),
		__( 'Financial planning', 'oac-theme' ),
		__( 'Career guidance', 'oac-theme' ),
		__( 'Love & harmony', 'oac-theme' ),
		__( 'Life events', 'oac-theme' ),
		__( 'Health', 'oac-theme' ),
		__( 'Parenting', 'oac-theme' ),
		__( 'Spiritual healing', 'oac-theme' ),
	);
}

function oac_home_books() {
	return array(
		array( 'title' => __( 'A Nation’s Prophecy', 'oac-theme' ), 'description' => __( 'Explore mundane astrology, the twelve houses, and planetary influences on world events.', 'oac-theme' ), 'image' => '2025/02/WhatsApp-Image-2023-09-18-at-15.18.41-1-1.png', 'url' => 'https://www.amazon.in/Nations-Prophecy-Mundane-Astrology/dp/8192304965' ),
		array( 'title' => __( 'A Nation’s Prophecy (Gujarati)', 'oac-theme' ), 'description' => __( 'A Gujarati edition exploring national charts and the astrological patterns behind global events.', 'oac-theme' ), 'image' => '2025/02/Nations-Propercy-Book-Guj.png', 'url' => 'https://www.amazon.in/Nations-Prophecy-Inclusive-Methodology-Astrology/dp/B0B63SBP1V' ),
		array( 'title' => __( 'Sports Astrology', 'oac-theme' ), 'description' => __( 'A practical look at the connections between astrology, sports, and match outcomes.', 'oac-theme' ), 'image' => '2025/02/WhatsApp-Image-2023-07-17-at-17.29.50.png', 'url' => 'https://www.amazon.in/Sports-Astrology-Inclusive-Methodology-Analysis/dp/8192935809' ),
		array( 'title' => __( 'Sports Astrology (Gujarati)', 'oac-theme' ), 'description' => __( 'Sports astrology and predictive methods presented for Gujarati readers.', 'oac-theme' ), 'image' => '2025/02/book-2-gujarathi.jpg', 'url' => 'https://www.amazon.in/Sports-Astrology-%E0%AA%B5%E0%AA%BF%E0%AA%B6%E0%AB%8D%E0%AA%B2%E0%AB%87%E0%AA%B7%E0%AA%A3%E0%AA%A8%E0%AB%80-Inclusive-Methodology-ebook/dp/B0B8DRPRKJ' ),
		array( 'title' => __( 'Vaastu Shastra for Everyone', 'oac-theme' ), 'description' => __( 'A guide to Vaastu principles, site planning, room placement, and practical case studies.', 'oac-theme' ), 'image' => '2025/02/Vaastu-book-02-1.png', 'url' => 'https://www.amazon.in/Vaastu-Shastra-Everyone-Ravi-Raos/dp/8196245521' ),
	);
}

function oac_home_faqs() {
	return array(
		__( 'What is Online Astrology Classes?', 'oac-theme' ) => __( 'A learning platform for Vedic Astrology and allied sciences, with recorded lessons and guided practice for self-paced learners.', 'oac-theme' ),
		__( 'What courses do you offer?', 'oac-theme' ) => __( 'Study Foundation and Basic Astrology, Advanced Astrology, Panchanga and Muhurtha, Horary, Medical Astrology, Tajika, Marriage Matching, and Numerology.', 'oac-theme' ),
		__( 'Can I take online courses?', 'oac-theme' ) => __( 'Yes. Courses are delivered online, so you can learn from anywhere in the world.', 'oac-theme' ),
		__( 'Do I need prior knowledge?', 'oac-theme' ) => __( 'No prior background is required for the Basic Astrology course. Advanced courses build on the fundamentals.', 'oac-theme' ),
		__( 'Will I receive a certificate?', 'oac-theme' ) => __( 'Certificates are available for eligible courses after completing the required coursework and assessments. Check each course for details.', 'oac-theme' ),
		__( 'Can I pay for courses online?', 'oac-theme' ) => __( 'Yes. Secure online payment options include cards, net banking, UPI, and wallets, depending on your location.', 'oac-theme' ),
		__( 'Do I need special software or tools?', 'oac-theme' ) => __( 'You only need a stable internet connection, a computer or mobile device, and a web browser.', 'oac-theme' ),
		__( 'Will I receive support during the course?', 'oac-theme' ) => __( 'Yes. Students can get ongoing mentor support through the private learning community.', 'oac-theme' ),
	);
}

function oac_about_timeline() {
	return array(
		array(
			'era'     => __( '1990s', 'oac-theme' ),
			'content' => __( 'Dr. Ravi Rao begins his journey as an astrology educator, mentoring students and laying the foundation for a structured approach to predictive astrology and scientific understanding.', 'oac-theme' ),
		),
		array(
			'era'     => __( '2000s', 'oac-theme' ),
			'content' => __( 'He launches online courses under the International Astrological Society and conducts full-day workshops for global participants, often in batches of 50–100 learners, with certification on completion.', 'oac-theme' ),
		),
		array(
			'era'     => __( '2010s', 'oac-theme' ),
			'content' => __( 'Dr. Rao expands his teaching to include scientific aspects of astrology, its links to astronomy, and structured training that integrates traditional and practical applications.', 'oac-theme' ),
		),
		array(
			'era'     => __( '2020s', 'oac-theme' ),
			'content' => __( 'Through Online Astrology Classes, he offers weekly sessions on predictive astrology, scientific foundations, and practical applications. Basic and advanced programs are delivered as six-month courses for serious learners worldwide.', 'oac-theme' ),
		),
	);
}

function oac_about_faqs() {
	return array(
		__( 'What is Online Astrology Classes?', 'oac-theme' ) => __( 'Online Astrology Classes (OAC) is a dedicated learning platform for Vedic Astrology and allied sciences, offering live online sessions, structured modules, and guided practice for serious learners.', 'oac-theme' ),
		__( 'What courses do you offer?', 'oac-theme' ) => __( 'We offer Basic and Advanced Astrology courses and specialized programs such as Panchanga and Muhurtha, Horary Astrology, Medical Astrology, Tajika System, Marriage Matching, and Numerology.', 'oac-theme' ),
		__( 'Can I take online courses?', 'oac-theme' ) => __( 'Yes. All programs are delivered online through our learning portal, and recordings are available afterward.', 'oac-theme' ),
		__( 'Do I need prior knowledge to take your courses?', 'oac-theme' ) => __( 'No prior background is required for our Basic Astrology course. Advanced and specialized courses are ideal once you are comfortable with fundamental concepts.', 'oac-theme' ),
		__( 'Will I receive a certificate after completing a course?', 'oac-theme' ) => __( 'Yes. Students receive a digital certificate after successfully completing the course and required assessments.', 'oac-theme' ),
		__( 'Can I pay for courses online?', 'oac-theme' ) => __( 'Yes. You can pay securely through the online payment gateway using cards, net banking, UPI, or wallets, depending on your location.', 'oac-theme' ),
		__( 'Do I need special software or tools to take your courses?', 'oac-theme' ) => __( 'You need a stable internet connection, a computer or mobile device, and a web browser. Instructors will recommend any optional astrology software or tools.', 'oac-theme' ),
		__( 'Will I receive support and assistance during the course?', 'oac-theme' ) => __( 'Yes. Students receive ongoing mentor support, doubt-clearing opportunities, live Q&A, discussion groups, and email or portal support.', 'oac-theme' ),
	);
}

function oac_contact_methods() {
	return array(
		array(
			'number'  => '01',
			'label'   => __( 'Call us', 'oac-theme' ),
			'value'   => '+91 83203 45627',
			'detail'  => __( 'Speak with our team about courses and learning paths.', 'oac-theme' ),
			'url'     => 'tel:+918320345627',
			'target'  => '',
		),
		array(
			'number'  => '02',
			'label'   => __( 'Email', 'oac-theme' ),
			'value'   => 'support@onlineastrologyclasses.com',
			'detail'  => __( 'Send questions about classes, certificates, or enrolment.', 'oac-theme' ),
			'url'     => 'mailto:support@onlineastrologyclasses.com',
			'target'  => '',
		),
		array(
			'number'  => '03',
			'label'   => __( 'Visit', 'oac-theme' ),
			'value'   => __( 'B-302, Balleshwar Square, Opp. ISKCON Temple, S.G. Highway, Ahmedabad, 380015', 'oac-theme' ),
			'detail'  => __( 'Our office is located in Ahmedabad, Gujarat.', 'oac-theme' ),
			'url'     => 'https://maps.google.com/?q=Dr.+Ravi+Rao+Baleshwar+Square,+B-302,+Sarkhej+-+Gandhinagar+Hwy,+opp.+ISCON+Temple,+Satellite,+Ahmedabad,+Gujarat+380015',
			'target'  => '_blank',
		),
	);
}