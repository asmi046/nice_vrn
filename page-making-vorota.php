<?php 
/*
* Template Name: Шаблон страницы по Изготовлению Откатных ворот
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );   
			}
			?>
		</div>  

		<section class="about-product"> 
			<div class="container">
				<div class="about-product__img" style="background: url(<?php bloginfo('template_url');?>/img/about-product-bg.jpg); background-position: top center; background-size: cover;">
					<h1>
						Изготовление <br>
						откатных ворот <br>
						в Воронеже 
					</h1>
				</div>

				<div class="making-calc">
					<h2>
						РАСЧИТАЙ СТОИМОСТЬ ИЗГОТОВЛЕНИЯ <br>
						ОТКАТНЫХ ВОРОТ
					</h2>
					<div class="making-calc__column d-flex">
						<form action="#">
							<input type="text" id="width" placeholder="Ширина (мм)" value="" class="making-calc__input">
							<input type="text" id="height" placeholder="Высота (мм)" value="" class="making-calc__input">
							<div class="making-calc__disp">
								<h3>Цена: <span id="stoimost">57 000 руб.</span></h3>
								<button type="submit" class="button work-modal making-calc__btn">Заказать ворота</button>
								<p>
									* Расчетная цена не явлеяется публичной офертой и при <br>
									расчете на месте может отличаться
								</p>
							</div>
						</form>
						<div class="making-calc__img">
							<img src="<?php echo get_template_directory_uri();?>/img/making-calc-img.jpg" alt="">
						</div>
					</div>
				</div>

				<div class="about-making">
					<h2>О НАШЕМ ПРОИЗВОДСТВЕ</h2>
					<p>
						ООО "Н-Автоматик" оказывает услуги по изготовлению откатных ворот под заказ, по Вашим размерам. У нас Вы сможете заказать откатные ворота под ключ: от
						выезда на обьект для замера до постгарантийного обслуживания. Для Вас мы можем предложить большой выбор материалов полотна и элементов декора на
						любой вкус.
					</p>
					<p>
						Все работы на нашем производстве осуществляются на профессиональном оборудовании с соблюдением технологических норм. Мы осуществляем частичную
						покраску в труднодоступных местах перед стыковкой элементов. Мы производим герметизацию всех стыков чтобы избежать коррозии. Для окраски ворот мы
						применяем краски стойкие к воздействию внешней среды и гарантируем минимальную толщину покрытия 150мкм. По Вашему желанию возможно дополнительное
						покрытие изделий трехслойным лаком что обеспечит дополнительную защиту от воздействия ультрафиолета.
					</p>
					<p>
						Все изготовленные нами Откатные ворота перед отправкой на обьект, проходят контроль качества. Проверку горизонтальной и вертикальной геометрии. Измерение
						толщины лакокрасочного покрытия. Перед отправкой на обьект все изделия упаковываются в защитный материал. Мы можем изготовить и установить откатные
						ворота любой сложности на любой проем.
					</p>
					<p>
						<span>Гарантийный срок на все изделия и работы от 12 месяцев.</span>
					</p>
					<p>
						Откатные ворота это Практично, Удобно, Стильно.
					</p>
				</div>

				<div class="production-img">

					<div class="production-img__row d-flex">
						<div class="production-img__item">
							<img src="<?php echo get_template_directory_uri();?>/img/production-img-1.jpg" alt="">
						</div>
						<div class="production-img__item">
							<img src="<?php echo get_template_directory_uri();?>/img/production-img-2.jpg" alt="">
						</div>
					</div>

					<div class="production-img__row d-flex">
						<div class="production-img__item">
							<img src="<?php echo get_template_directory_uri();?>/img/production-img-4.jpg" alt="">
						</div>
						<div class="production-img__item">
							<img src="<?php echo get_template_directory_uri();?>/img/production-img-3.jpg" alt="">
						</div>
					</div>

				</div>

			</div>
		</section>

		<section class="advantages">
			<div class="container">
				<h2>НАШИ ПРЕИМУЩЕСТВА</h2>
				<div class="advantages__column d-flex">

					<div class="advantages__item welding-icon">
						<h3>СОБСТВЕННОЕ ПРОИЗВОДСТВО</h3>
						<p>
							Собственный цех оснащенный всем
							необходимым оборудованием и
							квалифицированным персоналом
						</p>
					</div>
					<div class="advantages__item contract-icon">
						<h3>ОФОРМЛЕНИЕ ДОГОВОРА</h3>
						<p>
							Все Ваши права как потребителя
							защищены официальным 
							договором с юридическим лицом
						</p>
					</div>

					<div class="advantages__item timing-icon">
						<h3>ТОЧНО В СРОК</h3>
						<p>
							Мы не нарушаем установленные
							договором сроки. Ваш проект будет
							Закончен вовремя
						</p>
					</div>

					<div class="advantages__item warrant-icon">
						<h3>ГАРАНТИЯ НА ВОРОТА</h3>
						<p>
							Мы даем гарантию не только на
							изготовленные ворота но и на
							выполненные работы
						</p>
					</div>

				</div>
			</div>
		</section>

		<section class="stages">
			<div class="container">
				<h2>
					ПОРЯДОК РАБОТ ПО ИЗГОТОВЛЕНИЮ И <br>
					МОНТАЖУ ОТКАТНЫХ ВОРОТ
				</h2>
				<div class="stages__column d-flex">
					<div class="stages__img">
						<img src="<?php echo get_template_directory_uri();?>/img/stages-img.jpg" alt="">
					</div>
					<div class="stages__text">
						<ul>

							<li>
								1. Выезд специалиста на замер
								<p>
									Производится замер проема, обсуждение технической реализации проекта.
									Выбор цвета изделия и материалов.
								</p>
							</li>

							<li>
								2. Подписание Договора, запуск изделия в производство.
							</li>

							<li>
								3. Подготовка обьекта под установку Откатных ворот.
								<p>
									Подготовка проема, прокладка кабельных трасс. Установка и бетонирование
									Силовой рамы.
								</p>
							</li>

							<li>
								4. Установка Откатных ворот.
								<p>
									Зашивка ворот защитным/декоративным материалом. Установка и настройка
									автоматики.
								</p>
							</li>

							<li>
								5. Клининг и уборка после выполнения монтажных работ.
								<p>
									После нас всегда чисто.
								</p>
							</li>

							<li>
								6. Сдача обьекта Заказчику.
								<p>
									Обучение пользованию оборудованием. Подписание документов.
								</p>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="work">
			<div class="container">
				<h2>
					ВЫПОЛНЕННЫЕ РАБОТЫ ПО ИЗГОТОВЛЕНИЮ <br>
					И УСТАНОВКЕ ОТКАТНЫХ ВОРОТ
				</h2>

				<div class="work__post d-flex">

					<div class="news-item work__news-item">
						<a href="<?php echo get_permalink(2895);?>" class="news-item__img news-item__img-work" style="background-image: url(<?php echo get_the_post_thumbnail_url( 2895, 'large' );?>)"></a>
						<div class="news-item__title"><?php echo get_the_title(2895);?></div>
						<div class="news-item__text"><?php echo the_excerpt();?></div>
						<div class="btn-wrap">
							<a href="<?php echo get_permalink(2895);?>" class="button">Подробнее</a>
							<a href="#" class="button work-modal" data-title="<?php the_title();?>">Узнать цену</a>
						</div>
					</div>

					<div class="news-item work__news-item">
						<a href="<?php echo get_permalink(2883);?>" class="news-item__img news-item__img-work" style="background-image: url(<?php echo get_the_post_thumbnail_url( 2883, 'large' );?>)"></a>
						<div class="news-item__title"><?php echo get_the_title(2883);?></div>
						<div class="news-item__text"><?php echo the_excerpt();?></div>
						<div class="btn-wrap">
							<a href="<?php echo get_permalink(2883);?>" class="button">Подробнее</a>
							<a href="#" class="button work-modal" data-title="<?php the_title();?>">Узнать цену</a>
						</div>
					</div>

				</div>

				<div class="work__post d-flex">

					<div class="news-item work__news-item">
						<a href="<?php echo get_permalink(2875);?>" class="news-item__img news-item__img-work" style="background-image: url(<?php echo get_the_post_thumbnail_url( 2875, 'large' );?>)"></a>
						<div class="news-item__title"><?php echo get_the_title(2875);?></div>
						<div class="news-item__text"><?php echo the_excerpt();?></div>
						<div class="btn-wrap">
							<a href="<?php echo get_permalink(2875);?>" class="button">Подробнее</a>
							<a href="#" class="button work-modal" data-title="<?php the_title();?>">Узнать цену</a>
						</div>
					</div>

					<div class="news-item work__news-item">
						<a href="<?php echo get_permalink(2090);?>" class="news-item__img news-item__img-work" style="background-image: url(<?php echo get_the_post_thumbnail_url( 2090, 'large' );?>)"></a>
						<div class="news-item__title"><?php echo get_the_title(2090);?></div>
						<div class="news-item__text"><?php echo the_excerpt();?></div>
						<div class="btn-wrap">
							<a href="<?php echo get_permalink(2090);?>" class="button">Подробнее</a>
							<a href="#" class="button work-modal" data-title="<?php the_title();?>">Узнать цену</a>
						</div>
					</div>

				</div>

			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();