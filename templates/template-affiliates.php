<?php
/**
 * Template Name: Affiliates
 * Template Post Type: page
 */

get_header();
?>
<main id="affiliates-page" class="affiliates-page">
	<section class="affiliates-hero" aria-labelledby="affiliates-title">
		<div class="site-width affiliates-hero__inner">
			<div class="affiliates-hero__copy" data-animate="fade-up">
				<p class="eyebrow eyebrow--coral"><?php esc_html_e( 'Learn together, grow together', 'oac-theme' ); ?></p>
				<h1 id="affiliates-title" data-animate="words" data-trigger="load"><?php esc_html_e( 'Share the wisdom. Grow with us.', 'oac-theme' ); ?></h1>
				<p class="affiliates-hero__intro">
					<?php
					esc_html_e(
						'Partner with Online Astrology Classes to share thoughtful, practical astrology education with your community. Approved affiliates earn a 5% commission on every confirmed sale attributed to their unique referral link.',
						'oac-theme'
					);
					?>
				</p>
				<div class="affiliates-hero__actions">
					<a class="button button--coral" href="#affiliate-signup-form"><?php esc_html_e( 'Apply to become an affiliate', 'oac-theme' ); ?></a>
					<a class="button button--outline" href="https://mycourses.onlineastrologyclasses.com/login" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Affiliate dashboard login', 'oac-theme' ); ?></a>
				</div>
				<p class="affiliates-hero__note">
					<?php esc_html_e( 'Applications are reviewed for audience fit, quality, and compliance with our promotional guidelines.', 'oac-theme' ); ?>
				</p>
			</div>
			<div class="affiliates-hero__art" aria-hidden="true" data-animate="fade-left" data-delay="0.15">
				<div class="affiliates-hero__orbit affiliates-hero__orbit--outer"></div>
				<div class="affiliates-hero__orbit affiliates-hero__orbit--inner"></div>
				<div class="affiliates-hero__seal"><span>OAC</span><small><?php esc_html_e( 'Learn · Share · Grow', 'oac-theme' ); ?></small></div>
				<div class="affiliates-hero__commission"><strong>5%</strong><span><?php esc_html_e( 'per confirmed sale', 'oac-theme' ); ?></span></div>
			</div>
		</div>
	</section>

	<section class="affiliates-highlights" aria-label="<?php esc_attr_e( 'Affiliate program highlights', 'oac-theme' ); ?>">
		<div class="site-width affiliates-highlights__grid" data-animate-group="fade-up" data-stagger="0.08">
			<div class="affiliates-highlight" data-animate-item><span class="affiliates-highlight__icon" aria-hidden="true"><i class="fa-solid fa-percent"></i></span><div><span><?php esc_html_e( 'Commission', 'oac-theme' ); ?></span><strong><?php esc_html_e( '5% per confirmed sale', 'oac-theme' ); ?></strong></div></div>
			<div class="affiliates-highlight" data-animate-item><span class="affiliates-highlight__icon" aria-hidden="true"><i class="fa-regular fa-clock"></i></span><div><span><?php esc_html_e( 'Referral cookie', 'oac-theme' ); ?></span><strong><?php esc_html_e( '30 days', 'oac-theme' ); ?></strong></div></div>
			<div class="affiliates-highlight" data-animate-item><span class="affiliates-highlight__icon" aria-hidden="true"><i class="fa-solid fa-wallet"></i></span><div><span><?php esc_html_e( 'Payout timeline', 'oac-theme' ); ?></span><strong><?php esc_html_e( 'Within 30 days of confirmation', 'oac-theme' ); ?></strong></div></div>
			<div class="affiliates-highlight" data-animate-item><span class="affiliates-highlight__icon" aria-hidden="true"><i class="fa-solid fa-link"></i></span><div><span><?php esc_html_e( 'Referral tracking', 'oac-theme' ); ?></span><strong><?php esc_html_e( 'Your unique affiliate link', 'oac-theme' ); ?></strong></div></div>
		</div>
	</section>

	<section class="section affiliates-overview" aria-labelledby="affiliates-overview-title">
		<div class="site-width">
			<div class="section-heading affiliates-section-heading" data-animate="fade-up">
				<p class="eyebrow"><?php esc_html_e( 'A clear path to partnership', 'oac-theme' ); ?></p>
				<h2 id="affiliates-overview-title" data-animate="words"><?php esc_html_e( 'A simple program, built on trust.', 'oac-theme' ); ?></h2>
				<p><?php esc_html_e( 'Apply, get reviewed, and share quality learning with the people who already trust your voice.', 'oac-theme' ); ?></p>
			</div>
			<div class="affiliates-overview__grid" data-animate-group="fade-up" data-stagger="0.12">
				<article class="affiliates-card affiliates-card--steps" data-animate-item>
					<div class="affiliates-card__heading"><span class="eyebrow"><?php esc_html_e( 'The process', 'oac-theme' ); ?></span><h3><?php esc_html_e( 'How it works', 'oac-theme' ); ?></h3></div>
					<ol class="affiliates-steps">
						<li><span>01</span><div><strong><?php esc_html_e( 'Send your application', 'oac-theme' ); ?></strong><p><?php esc_html_e( 'Tell us about your audience and how you plan to share our programs.', 'oac-theme' ); ?></p></div></li>
						<li><span>02</span><div><strong><?php esc_html_e( 'We review your fit', 'oac-theme' ); ?></strong><p><?php esc_html_e( 'Our team considers relevance, quality, and alignment with our guidelines.', 'oac-theme' ); ?></p></div></li>
						<li><span>03</span><div><strong><?php esc_html_e( 'Receive your referral link', 'oac-theme' ); ?></strong><p><?php esc_html_e( 'Once approved, your unique affiliate link is activated.', 'oac-theme' ); ?></p></div></li>
						<li><span>04</span><div><strong><?php esc_html_e( 'Share and track', 'oac-theme' ); ?></strong><p><?php esc_html_e( 'Promote ethically and follow clicks, sales, and commissions in your dashboard.', 'oac-theme' ); ?></p></div></li>
					</ol>
				</article>
				<article class="affiliates-card affiliates-card--audience" data-animate-item>
					<div class="affiliates-card__heading"><span class="eyebrow"><?php esc_html_e( 'Who it is for', 'oac-theme' ); ?></span><h3><?php esc_html_e( 'Your community comes first.', 'oac-theme' ); ?></h3><p><?php esc_html_e( 'We welcome thoughtful partners who help people discover credible astrology education.', 'oac-theme' ); ?></p></div>
					<ul class="affiliates-audience">
						<li><i class="fa-solid fa-check" aria-hidden="true"></i><?php esc_html_e( 'Astrology learners and practitioners', 'oac-theme' ); ?></li>
						<li><i class="fa-solid fa-check" aria-hidden="true"></i><?php esc_html_e( 'YouTube, Instagram, and Facebook creators', 'oac-theme' ); ?></li>
						<li><i class="fa-solid fa-check" aria-hidden="true"></i><?php esc_html_e( 'Bloggers and website owners', 'oac-theme' ); ?></li>
						<li><i class="fa-solid fa-check" aria-hidden="true"></i><?php esc_html_e( 'Community leaders and course promoters', 'oac-theme' ); ?></li>
						<li><i class="fa-solid fa-check" aria-hidden="true"></i><?php esc_html_e( 'Partners committed to ethical education marketing', 'oac-theme' ); ?></li>
					</ul>
					<a class="text-link" href="#affiliate-signup-form"><span><?php esc_html_e( 'Tell us about your audience', 'oac-theme' ); ?></span><span aria-hidden="true">→</span></a>
				</article>
			</div>
		</div>
	</section>

	<section class="section affiliates-policy" aria-labelledby="affiliates-policy-title">
		<div class="site-width">
			<div class="section-heading affiliates-section-heading" data-animate="fade-up">
				<p class="eyebrow eyebrow--coral"><?php esc_html_e( 'Clear terms, fair partnerships', 'oac-theme' ); ?></p>
				<h2 id="affiliates-policy-title" data-animate="words"><?php esc_html_e( 'The details that matter.', 'oac-theme' ); ?></h2>
				<p><?php esc_html_e( 'Please review the commission, attribution, and payout terms before applying.', 'oac-theme' ); ?></p>
			</div>
			<div class="affiliates-policy__grid" data-animate-group="fade-up" data-stagger="0.1">
				<article class="affiliates-policy-card" data-animate-item>
					<span class="affiliates-policy-card__icon" aria-hidden="true"><i class="fa-solid fa-chart-line"></i></span>
					<h3><?php esc_html_e( 'Commission & tracking', 'oac-theme' ); ?></h3>
					<ul>
						<li><strong><?php esc_html_e( 'Rate:', 'oac-theme' ); ?></strong> <?php esc_html_e( '5% per confirmed sale.', 'oac-theme' ); ?></li>
						<li><strong><?php esc_html_e( 'Cookie:', 'oac-theme' ); ?></strong> <?php esc_html_e( '30 days from the initial referral click.', 'oac-theme' ); ?></li>
						<li><strong><?php esc_html_e( 'Attribution:', 'oac-theme' ); ?></strong> <?php esc_html_e( 'Your unique referral link and system analytics.', 'oac-theme' ); ?></li>
						<li><strong><?php esc_html_e( 'Eligibility:', 'oac-theme' ); ?></strong> <?php esc_html_e( 'Successful payments that are not refunded or charged back.', 'oac-theme' ); ?></li>
					</ul>
				</article>
				<article class="affiliates-policy-card" data-animate-item>
					<span class="affiliates-policy-card__icon affiliates-policy-card__icon--coral" aria-hidden="true"><i class="fa-solid fa-coins"></i></span>
					<h3><?php esc_html_e( 'Payouts & disputes', 'oac-theme' ); ?></h3>
					<ul>
						<li><strong><?php esc_html_e( 'Timeline:', 'oac-theme' ); ?></strong> <?php esc_html_e( 'Within 30 days after sale confirmation.', 'oac-theme' ); ?></li>
						<li><strong><?php esc_html_e( 'Method:', 'oac-theme' ); ?></strong> <?php esc_html_e( 'Bank transfer or PayPal, as provided by the affiliate.', 'oac-theme' ); ?></li>
						<li><strong><?php esc_html_e( 'Disputes:', 'oac-theme' ); ?></strong> <?php esc_html_e( 'Raise tracking disputes within a reasonable period; system logs are considered final.', 'oac-theme' ); ?></li>
					</ul>
				</article>
			</div>
			<div class="affiliates-approval" data-animate="fade-up">
				<span class="affiliates-approval__icon" aria-hidden="true"><i class="fa-solid fa-shield-halved"></i></span>
				<div><h3><?php esc_html_e( 'Thoughtful applications make stronger partnerships.', 'oac-theme' ); ?></h3><p><?php esc_html_e( 'Approval is discretionary. We consider your audience, promotional approach, and alignment with educational and ethical marketing practices. We may approve, reject, suspend, or terminate affiliate access when program guidelines are not followed.', 'oac-theme' ); ?></p></div>
			</div>
		</div>
	</section>

	<section class="section affiliates-guidelines" aria-labelledby="affiliates-guidelines-title">
		<div class="site-width affiliates-guidelines__grid">
			<div class="affiliates-guidelines__intro" data-animate="fade-left">
				<p class="eyebrow"><?php esc_html_e( 'Promote with integrity', 'oac-theme' ); ?></p>
				<h2 id="affiliates-guidelines-title" data-animate="words"><?php esc_html_e( 'Trust is part of every referral.', 'oac-theme' ); ?></h2>
				<p><?php esc_html_e( 'Help learners make informed choices with honest, respectful promotion. Keep your recommendations grounded in real experience and approved information.', 'oac-theme' ); ?></p>
			</div>
			<div class="affiliates-guidelines__cards" data-animate-group="fade-up" data-stagger="0.12">
				<article class="affiliates-guideline affiliates-guideline--allowed" data-animate-item>
					<h3><i class="fa-solid fa-circle-check" aria-hidden="true"></i><?php esc_html_e( 'Good ways to share', 'oac-theme' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Educational, experience-based promotion', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Honest course descriptions and outcomes', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Official links, creatives, and approved messaging', 'oac-theme' ); ?></li>
					</ul>
				</article>
				<article class="affiliates-guideline affiliates-guideline--prohibited" data-animate-item>
					<h3><i class="fa-solid fa-circle-exclamation" aria-hidden="true"></i><?php esc_html_e( 'What is not permitted', 'oac-theme' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Misleading claims, guarantees, or unrealistic promises', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Fake scarcity, false pricing, or manipulated offers', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Impersonating Online Astrology Classes or Dr. Ravi Rao', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Spam, deceptive outreach, or unauthorized branded ads', 'oac-theme' ); ?></li>
						<li><?php esc_html_e( 'Promotion on illegal, adult, hateful, or misleading platforms', 'oac-theme' ); ?></li>
					</ul>
				</article>
			</div>
		</div>
	</section>

	<section class="affiliates-dashboard" aria-labelledby="affiliates-dashboard-title">
		<div class="site-width affiliates-dashboard__inner">
			<div data-animate="fade-left"><p class="eyebrow eyebrow--coral"><?php esc_html_e( 'Your progress, in one place', 'oac-theme' ); ?></p><h2 id="affiliates-dashboard-title" data-animate="words"><?php esc_html_e( 'See how your referrals are doing.', 'oac-theme' ); ?></h2><p><?php esc_html_e( 'Approved affiliates can monitor clicks, leads, sales and conversions, commissions, and payout status in the affiliate dashboard. Reports depend on your GoHighLevel affiliate and membership configuration.', 'oac-theme' ); ?></p></div>
			<a class="button button--light" href="https://mycourses.onlineastrologyclasses.com/login" target="_blank" rel="noopener noreferrer" data-animate="fade-right"><?php esc_html_e( 'Login to affiliate dashboard', 'oac-theme' ); ?><span aria-hidden="true">→</span></a>
		</div>
	</section>

	<section class="section affiliates-signup" id="affiliate-signup-form" aria-labelledby="affiliates-signup-title">
		<div class="site-width affiliates-signup__inner">
			<div class="affiliates-signup__intro" data-animate="fade-up">
				<p class="eyebrow"><?php esc_html_e( 'Take the next step', 'oac-theme' ); ?></p>
				<h2 id="affiliates-signup-title" data-animate="words"><?php esc_html_e( 'Let’s grow a more informed astrology community.', 'oac-theme' ); ?></h2>
				<p><?php esc_html_e( 'Complete the application and our team will review your details and contact you about next steps.', 'oac-theme' ); ?></p>
				<div class="affiliates-signup__promise"><i class="fa-solid fa-lock" aria-hidden="true"></i><span><?php esc_html_e( 'Your information is used to review your affiliate application.', 'oac-theme' ); ?></span></div>
			</div>
			<div class="affiliates-form-card" data-animate="fade-up" data-delay="0.12">
				<iframe
					class="affiliates-form"
					height="884"
					src="https://app.onlineastrologyclasses.com/widget/form/pexfpjHFO8LNYU4hWTbR"
					id="inline-pexfpjHFO8LNYU4hWTbR"
					data-layout="{'id':'INLINE'}"
					data-trigger-type="alwaysShow"
					data-trigger-value=""
					data-activation-type="alwaysActivated"
					data-activation-value=""
					data-deactivation-type="neverDeactivate"
					data-deactivation-value=""
					data-form-name="Affiliate Signup for EOT"
					data-height="884"
					data-layout-iframe-id="inline-pexfpjHFO8LNYU4hWTbR"
					data-form-id="pexfpjHFO8LNYU4hWTbR"
					title="<?php esc_attr_e( 'Affiliate signup application form', 'oac-theme' ); ?>"
					loading="lazy">
				</iframe>
				<p class="affiliates-form-card__note"><?php esc_html_e( 'By submitting this form, you agree to follow the Affiliate Program policies stated on this page.', 'oac-theme' ); ?></p>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
