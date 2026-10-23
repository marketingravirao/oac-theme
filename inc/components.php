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