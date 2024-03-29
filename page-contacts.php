<?php
/*
 * Template Name: contacts
 */
?>

<?php get_header(); ?>
<main class="main">
		<section class="contacts">
			<div class="container contacts__container">
				<h1 class="visually-hidden">Контакти</h1>
				<div class="contacts__left">
					<h2 class="contacts__title blog-title">Контактна інформація</h2>
					<a href="tel:+798788787" class="phone phone--contacts">+380976471611</a>
					<address class="address">г. смт. Середнє, вул. Лікарняна 13</address>
					<ul class="social list-reset">
						<li class="social__item"><a href="#" class="social__link social__link--fb" aria-label="Наш фейсбук"></a></li>
						<li class="social__item"><a href="#" class="social__link social__link--insta" aria-label="Наш інстаграм"></a>
						</li>
						<li class="social__item"><a href="#" class="social__link social__link--tw" aria-label="Наш твіттер"></a></li>
					</ul>
				</div>
				<div class="contacts__right">
					<div class="contacts-form-wrapper">
						<h2 class="contacts__title blog-title">Напишіть нам</h2>
						<form action="#" class="callback-form">
							<input type="text" class="form-input callback-form__input" placeholder="Ваше ім'я">
							<input type="tel" class="form-input callback-form__input" placeholder="Ваш телефон">
							<textarea class="form-input callback-form__textarea" placeholder="Повідомлення..."></textarea>
							<button class="callback-form__btn form-btn btn-reset">
								<span>Відправити</span>
								<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path
											d="M19.5857 9.85046L1.01474 1.27924C0.719033 1.14496 0.366184 1.22496 0.160475 1.47924C-0.046663 1.73352 -0.0538057 2.09494 0.143332 2.35636L6.25033 10.499L0.143332 18.6417C-0.0538057 18.9031 -0.046663 19.2659 0.159046 19.5188C0.297614 19.6917 0.504752 19.7845 0.714747 19.7845C0.816173 19.7845 0.917599 19.7631 1.01331 19.7188L19.5843 11.1476C19.8386 11.0304 20 10.7776 20 10.499C20 10.2205 19.8386 9.9676 19.5857 9.85046Z"
											fill="white" />
									</g>
									<defs>
										<clipPath id="clip0">
											<rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
										</clipPath>
									</defs>
								</svg>
							</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
 <?php get_footer(); ?>