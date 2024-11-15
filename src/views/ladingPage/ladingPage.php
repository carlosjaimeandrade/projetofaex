<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scheduler</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/landingPage.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h3 class="m-0">
							Scheduler
                        </h3>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div>
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Agendamento simples e ágil</h1>
	                        <p class="hero-paragraph">Gerencie seus agendamentos de forma prática, em um único lugar.</p>
	                        <div class="hero-cta"><a class="button button-primary" href="/register">Cadastre grátis</a><a class="button" href="#">Falar com suporte</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                    <h3>Veja nossos ultimos agendamentos</h3>
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <?php foreach($schedulers as $key => $value): ?>
                                <div class="feature text-center is-revealing">
                                    <div class="feature-inner">
                                        <h4 class="feature-title mt-24"><?=  $value["date_scheduler"] ?> | <?=  $value["name_scheduler"] ?></h4>
                                        <p class="text-sm mb-0"><?=  $value["obs"] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="btn-actions">
                            <a href="/panel/scheduler/">Ver todos <span class="total-scheduler"></span> agendamentos</a>
                        </div>
                    </div>
                </div>
                
            </section>

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Simplifique Seu Agendamento com Filtros Inteligentes e Acompanhamento Completo</h2>
                            <p class="section-paragraph mb-0">Nosso sistema oferece ferramentas poderosas para facilitar a gestão de seus compromissos. Com a funcionalidade de filtro de agendamento, você pode rapidamente localizar, organizar e visualizar seus compromissos de acordo com critérios específicos, como data, horário, tipo de evento ou status. Isso torna o processo de agendamento mais eficiente, permitindo que você encontre o que precisa com poucos cliques, sem perder tempo.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Segurança e Confiança em Cada Agendamento</h2>
                            <p class="section-paragraph mb-0">A segurança dos seus dados é nossa prioridade. Nosso sistema foi desenvolvido com tecnologias de ponta para garantir a proteção e a integridade das suas informações. Utilizamos criptografia avançada para proteger todos os dados transmitidos e armazenados, assegurando que suas agendas, compromissos e informações sensíveis estejam sempre seguros.</p>
                        </div>
                    </div>
                </div>
            </section>                
			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0">Ainda com dúvidas?</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="#">Falar com atendimento</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; Scheduler</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/public/js/main.min.js"></script>
    <script src="/public/js/totalScheduler.js"></script>
</body>
</html>
