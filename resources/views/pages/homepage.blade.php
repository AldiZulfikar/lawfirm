<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>ABP Lawfirm</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="Free HTML Templates" name="keywords" />
		<meta content="Free HTML Templates" name="description" />

		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon" />

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
			rel="stylesheet"
		/>

		<!-- Icon Font Stylesheet -->
		<link
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
			rel="stylesheet"
		/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
			rel="stylesheet"
		/>

		<!-- Libraries Stylesheet -->
		<link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('lib/animate/animate.min.css" rel="stylesheet')}}" />

		<!-- Customized Bootstrap Stylesheet -->
		<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Template Stylesheet -->
		<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
	</head>

	<body class="bg-body">
		<!-- Spinner Start -->
		<div
			id="spinner"
			class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
		>
			<div class="spinner"></div>
		</div>
		<!-- Spinner End -->

		<!-- Topbar Start -->
		<div class="container-fluid bg-dark px-5 d-none d-lg-block">
			<div class="row gx-0">
				<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(0254) 7926733</small>
						<small class="text-light"><i class="fa fa-envelope-open me-2"></i>abplawfirm2020@gmail.com</small>
					</div>
				</div>
				<div class="col-lg-4 text-center text-lg-end">
					<div class="d-inline-flex align-items-center" style="height: 45px;">
						<small class="me-3 text-light"><i class="fas fa-clock me-2"></i></i>Monday - Friday : 9.00 - 18.00</small>
					</div>
				</div>
			</div>
		</div>
		<!-- Topbar End -->

		<!-- Navbar & Carousel Start -->
		<div class="container-fluid position-relative p-0">
			<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
				<a href="" class="navbar-brand p-0">
					{{-- <h3 class="m-0 text-primary"><i class="fa fa-user-tie me-2"></i>ABP Lawfirm</h3> --}}
					<img class="logo" src="{{asset('/img/logo.png')}}" alt="">
				</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarCollapse"
				>
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto py-0">
						<a href="" class="nav-item nav-link">Home</a>
						<a href="#about" class="nav-item nav-link">About</a>
						<a href="#service" class="nav-item nav-link">Services</a>
						<a href="#team" class="nav-item nav-link">Our Team</a>
						<a href="#testimoni" class="nav-item nav-link">Testimonial</a>
						<a href="#blog" class="nav-item nav-link">Blog</a>
						<a href="#contact" class="nav-item nav-link">Contact</a>
					</div>
				</div>
			</nav>

			<div
				id="header-carousel"
				class="carousel slide carousel-fade"
				data-bs-ride="carousel"
			>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="w-100" src="{{asset('img/hero.jpg')}}" alt="Image" />
						<div
							class="carousel-caption d-flex flex-column align-items-center justify-content-center"
						>
							<div class="p-3" style="max-width: 900px">
								<h5 class="text-white text-uppercase mb-3 animated slideInDown">
									ABP Lawfirm
								</h5>
								<h1 class="display-1 text-white mb-md-4 animated zoomIn">
									Solving Problems For Builders And Businesses
								</h1>
								<a
									href="#contact"
									class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
									>Contact Us</a
								>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="w-100" src="{{asset('img/hero2.jpeg')}}" alt="Image" />
						<div
							class="carousel-caption d-flex flex-column align-items-center justify-content-center"
						>
							<div class="p-3" style="max-width: 900px">
								<h5 class="text-white text-uppercase mb-3 animated slideInDown">
									ABP Lawfirm
								</h5>
								<h1 class="display-1 text-white mb-md-4 animated zoomIn">
									Memecahkan Masalah Untuk Pembangun Dan Bisnis
								</h1>
								<a
									href="#contact"
									class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
									>Hubungi Kami</a
								>
							</div>
						</div>
					</div>
				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#header-carousel"
					data-bs-slide="prev"
				>
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#header-carousel"
					data-bs-slide="next"
				>
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!-- Navbar & Carousel End -->

		<!-- Full Screen Search Start -->
		<div class="modal fade" id="searchModal" tabindex="-1">
			<div class="modal-dialog modal-fullscreen">
				<div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
					<div class="modal-header border-0">
						<button
							type="button"
							class="btn bg-white btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div
						class="modal-body d-flex align-items-center justify-content-center"
					>
						<div class="input-group" style="max-width: 600px">
							<input
								type="text"
								class="form-control bg-transparent border-primary p-3"
								placeholder="Type search keyword"
							/>
							<button class="btn btn-primary px-4">
								<i class="bi bi-search"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Full Screen Search End -->

		<!-- About Start -->
		<div id="about" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div class="row g-5">
					<div class="col-lg-7">
						<div class="section-title position-relative pb-3 mb-5">
							<h5 class="fw-bold text-primary text-uppercase">About Us</h5>
							<h1 class="mb-0">Kantor Hukum Perseorangan</h1>
						</div>
						<p class="mb-4 fw-bold">ABP Lawfirm has been providing personalized and timely advice to people in Serang Banten since 2000. I know how complicated and overwhelming the legal process is. This is why my goal is to help you understand your rights and the issues affecting your case.</p>
						<p class="mb-4">
							ABP Lawfirm telah memberikan nasihat yang dipersonalisasi dan
							tepat waktu kepada orang-orang di Serang Banten sejak tahun 2000.
							Saya tahu betapa rumit dan luar biasa proses hukumnya. Inilah
							mengapa tujuan saya adalah membantu Anda memahami hak-hak Anda dan
							masalah-masalah yang memengaruhi kasus Anda.
						</p>
						<div
							class="d-flex align-items-center mb-4 wow fadeIn"
							data-wow-delay="0.6s"
						>
							<div
								class="bg-primary d-flex align-items-center justify-content-center rounded"
								style="width: 60px; height: 60px"
							>
								<i class="fa fa-phone-alt text-dark"></i>
							</div>
							<div class="ps-4">
								<h5 class="mb-2">Call to ask any question</h5>
								<h4 class="text-primary mb-0">(0254) 7926733</h4>
							</div>
						</div>
						<a
							href="#service"
							class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
							data-wow-delay="0.9s"
							>Readmore!</a
						>
					</div>
					<div class="col-lg-5" style="min-height: 500px">
						<div class="position-relative h-100">
							<img
								class="position-absolute w-100 h-100 rounded wow zoomIn"
								data-wow-delay="0.9s"
								src="img/about.jpg"
								style="object-fit: cover"
							/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- About End -->

		<!-- Service Start -->
		<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div
					class="section-title text-center position-relative pb-3 mb-5 mx-auto"
					style="max-width: 600px"
				>
					<h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
					<h1 class="mb-0">We are Ready to be the Leading and Trusted Law Firm</h1>
				</div>
				<div class="row g-5">
					<div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
						<div
							class="service-item bg-dark rounded d-flex flex-column align-items-center text-center"
						>
							<div class="service-icon">
								<i class="fa fa-shield-alt text-dark"></i>
							</div>
							<h4 class="mb-3">Litigation and Non Litigation<br>(Litigasi dan Non Litigasi)</h4>
							<p class="mb-3 fw-bold">
								ABP Lawfirm can resolve cases in the field of litigation and non-litigation effectively and efficiently by using the relationships owned by ABP lawfirm.
							</p>
							<p class="mb-3">
								ABP Lawfirm dapat menyelesaikan perkara di bidang litigasi dan non litigasi secara efektif dan efisien dengan menggunakan relasi yang dimiliki oleh ABP lawfirm.
							</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.6s">
						<div
							class="service-item bg-dark rounded d-flex flex-column align-items-center text-center"
						>
							<div class="service-icon">
								<i class="fa fa-chart-pie text-dark"></i>
							</div>
							<h4 class="mb-3">Human Resources<br>(Sumber Daya Manusia)</h4>
							<p class="mb-3 fw-bold">
								ABP Lawfirm has human resources who have experience in resolving legal cases such as in the fields of Civil, Criminal, State Administration, and Family Law.
							</p>
							<p class="mb-3">
								ABP Lawfirm memiliki sumber daya manusia yang telah berpengalaman dalam menyelesaikan perkara-perkara hukum seperti di bidang Perdata, Pidana, Tata Usaha Negara, dan Hukum Keluarga.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service End -->

		<!-- Features Start -->
		<div id="service" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div
					class="section-title text-center position-relative pb-3 mb-5 mx-auto"
					style="max-width: 600px"
				>
					<h5 class="fw-bold text-primary text-uppercase">My Expertise is at Your Service</h5>
					<h1 class="mb-0">What We Can do for You</h1>
				</div>
				<div class="row g-5">
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.2s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/employment.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Licenses (Perizinan)</h4>
								<p class="mb-0 text-primary">
									Licenses operating a business requires you to manage licenses according to your business sector. Licensing handling services allow you to manage your company's legal administration.
								</p><hr size="5px" style="color: #ffbf00; width:50%">
								<p class="mb-0">
									Mengoperasikan bisnis mengharuskan anda untuk mengelola perizinan sesuai dengan sektor bisnis anda. Layanan penanganan perizinan memungkinkan anda mengelola administrasi hukum perusahaan anda.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/gavel.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Litigation in Court (Perkara di Persidangan)</h4>
								<p class="mb-0 text-primary">
									Litigation in Court legal services in handling and assisting clients for various problems through the Court at all levels of examination to the Court.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Layanan hukum dalam menangani dan mendampingi klien untuk berbagai masalah melalui jalur Pengadilan di seluruh tingkatan pemeriksaan hingga ke Pengadilan. 
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.2s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/factory.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Industrial Relation & Labor Law (Hubungan Industrial & Hukum Ketenagakerjaan)</h4>
								<p class="mb-0 text-primary">
									Industrial Relations & Labor Law services in the field of immigration and employment law, trade union relations and employment contracts, negotiations and labor disputes, including representing clients in disputes at the Industrial Relations District Court if needed.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Layanan di bidang hukum imigrasi dan ketenagakerjaan, hubungan dengan serikat pekerja dan kontrak kerja, negosiasi dan perselisihan ketenagakerjaan, termasuk mewakili klien dalam perselisihan di Pengadilan Negeri Hubungan Industrial jika dibutuhkan. 
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/discussion.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Corporate Legal Consultant (Konsultan Hukum Perusahaan)</h4>
								<p class="mb-0 text-primary">
									Corporate Legal Consultant provides legal services for local and multi-national companies, including managing various aspects required for the establishment and operation of companies in Indonesia.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Menyediakan jasa hukum untuk perusahaan lokal dan multi-nasional, termasuk pengurusan berbagai aspek yang dibutuhkan dalam pendirian dan pengoperasian perusahaan di Indonesia. 
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/bankrupt.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Bankruptcy (Kepailitan)</h4>
								<p class="mb-0 text-primary">
									Bankruptcy handles various issues related to bankruptcy and other procedures regarding the payment of debt obligations.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Menangani berbagai masalah yang berkaitan dengan kepailitan dan prosedur lain mengenai pembayaran kewajiban hutang.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/stamp.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Legal Drafting (Rancangan Naskah Hukum)</h4>
								<p class="mb-0 text-primary">
									Legal services provided in the form of preparation of certain documents required by the client.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Jasa hukum yang diberikan berupa penyusunan dokumen-dokumen tertentu yang dibutuhkan oleh klien.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/government.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Government Legal Consultant (Konsultan Hukum Pemerintahan)</h4>
								<p class="mb-0 text-primary">
									Government Legal Consultant provides legal consulting services to the Government as a result of a lawsuit/lawsuit from a certain party against the Government in which the nature of the work and/or the defense cannot be postponed, while still prioritizing aspects of quality, efficiency, and punctuality.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Menyediakan jasa layanan konsultasi hukum untuk Pemerintah sebagai akibat dari adanya Gugatan/Tuntutan Hukum dari pihak tertentu kepada Pemerintah hal mana sifat pekerjaan dan/atau pembelaannya tidak dapat ditunda, dengan tetap mengutamakan aspek kualitas, efisiensi, dan ketepatan waktu.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/bank.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Our Banking & Finance (Perbankan & Keuangan)</h4>
								<p class="mb-0 text-primary">
									Our Banking & Finance provides advice to financial institutions and large corporations regarding commercial loans, syndicated loans, letters of credit, construction loans, project finance, asset-based instruments, and leasing and security arrangements.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Kami memberikan saran kepada lembaga keuangan dan perusahaan besar mengenai pinjaman komersial, pinjaman sindikasi, letter of credit, pinjaman konstruksi, pembiayaan proyek, instrumen berbasis aset, dan pengaturan leasing dan keamanan.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/engineer.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Construction Law & Procurement (Hukum Konstruksi & Pengadaan Barang dan Jasa)</h4>
								<p class="mb-0 text-primary">
									Construction Law & Procurement of Goods and Services We provide legal views to clients regarding all legal requirements regarding their construction, from preparation of tenders and project documentation to settlement of disputes arising from projects.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
								    Kami memberikan pandangan hukum kepada klien mengenai semua persyaratan hukum mengenai konstruksi mereka, mulai dari persiapan tender dan dokumentasi proyek hingga penyelesaian perselisihan yang timbul dari proyek.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/town.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Property Law (Hukum Properti)</h4>
								<p class="mb-0 text-primary">
									Property Law We understand that many legal issues can arise in connection with property projects. Our goal is to provide clients with clear information, practical advice and optimal solutions to achieve their goals in property projects in a cost effective legal arrangement.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Kami memahami bahwa banyak masalah hukum dapat muncul sehubungan dengan proyek properti. Tujuan kami adalah memberikan informasi yang jelas, saran praktis dan solusi optimal kepada klien untuk mencapai tujuan mereka dalam proyek properti dalam pengaturan hukum yang hemat biaya.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/ship.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Port & Shipping Law provides (Undang-undang Pelabuhan & Pelayaran)</h4>
								<p class="mb-0 text-primary">
									Our Port & Shipping Law provides advice on all types of corporate and regulatory risks related to the operation of ports and the carriage of goods and passengers at sea, along with environmental advice on new emission regulations and possible carbon taxes. We also provide advice on anti-bribery, corruption and sanctions affecting the port industry.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Kami memberikan saran tentang semua jenis risiko perusahaan dan peraturan yang terkait dengan pengoperasian pelabuhan dan pengangkutan barang dan penumpang di laut, bersama dengan saran lingkungan tentang peraturan emisi baru dan kemungkinan pajak karbon. Kami juga memberikan saran tentang antisuap, korupsi dan sanksi yang mempengaruhi industri pelabuhan.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row g-5">
							<div class="col-12 wow zoomIn" data-wow-delay="0.4s">
								<div
									class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
									style="width: 60px; height: 60px"
								>
								<img
								class="img-fluid rounded"
								src="img/salary.png"
								style="width: 40px; height: 40px"
							/>
								</div>
								<h4>Investment (Investasi)</h4>
								<p class="mb-0 text-primary">
									Investment consulting related to the legal aspects of investment in Indonesia, assisting in the management of every investment permit required by laws and regulations.
								</p><hr size="5px" style="color: #ffbf00; width:50%;">
								<p class="mb-0">
									Konsultasi Investasi (Investasi) terkait dengan aspek hukum penanaman modal di Indonesia, membantu pengurusan setiap izin penanaman modal yang dipersyaratkan oleh peraturan perundang-undangan.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Features Start -->

		<!-- Team Start -->
		<div id="team" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div
					class="section-title text-center position-relative pb-3 mb-5 mx-auto"
					style="max-width: 600px"
				>
					<h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
					<h1 class="mb-0">Our Teams</h1>
				</div>
				<div class="row g-5">
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
						<div class="team-item bg-light rounded overflow-hidden">
							<div class="team-img position-relative overflow-hidden">
								<img class="img-fluid w-100" src="{{asset('/img/team-3.png')}}" alt="" />
								<div class="team-social">
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-twitter fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-instagram fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
								</div>
							</div>
							<div class="text-center py-4">
								<h4 class="text-dark">Asep Abdullah Busro, SH., MH., CLA</h4>
								<p class="text-dark text-uppercase m-0">Managing partner</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
						<div class="team-item bg-light rounded overflow-hidden">
							<div class="team-img position-relative overflow-hidden">
								<img class="img-fluid w-100" src="{{asset('/img/team-3.png')}}" alt="" />
								<div class="team-social">
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-twitter fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-instagram fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
								</div>
							</div>
							<div class="text-center py-4">
								<h4 class="text-dark">Ade Suguri, SH</h4>
								<p class="text-dark text-uppercase m-0">Partners</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
						<div class="team-item bg-light rounded overflow-hidden">
							<div class="team-img position-relative overflow-hidden">
								<img class="img-fluid w-100" src="{{asset('/img/team-3.png')}}" alt="" />
								<div class="team-social">
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-twitter fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-instagram fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
								</div>
							</div>
							<div class="text-center py-4">
								<h4 class="text-dark">Taufiqrrahman, SH</h4>
								<p class="text-dark text-uppercase m-0">Partners</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
						<div class="team-item bg-light rounded overflow-hidden">
							<div class="team-img position-relative overflow-hidden">
								<img class="img-fluid w-100" src="{{asset('/img/team-3.png')}}" alt="" />
								<div class="team-social">
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-twitter fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-instagram fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
								</div>
							</div>
							<div class="text-center py-4">
								<h4 class="text-dark">Irvan Aziz Abdillah, SH</h4>
								<p class="text-dark text-uppercase m-0">Partners</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
						<div class="team-item bg-light rounded overflow-hidden">
							<div class="team-img position-relative overflow-hidden">
								<img class="img-fluid w-100" src="{{asset('/img/team-3.png')}}" alt="" />
								<div class="team-social">
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-twitter fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-instagram fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
								</div>
							</div>
							<div class="text-center py-4">
								<h4 class="text-dark">Solikin, SH</h4>
								<p class="text-dark text-uppercase m-0">Partners</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
						<div class="team-item bg-light rounded overflow-hidden">
							<div class="team-img position-relative overflow-hidden">
								<img class="img-fluid w-100" src="{{asset('/img/team-3.png')}}" alt="" />
								<div class="team-social">
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-twitter fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-instagram fw-normal"></i
									></a>
									<a
										class="btn btn-lg btn-primary btn-lg-square rounded"
										href=""
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
								</div>
							</div>
							<div class="text-center py-4">
								<h4 class="text-dark">Dian Samudra, SH., MH</h4>
								<p class="text-dark text-uppercase m-0">Partners</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Team End -->

		<!-- Testimonial Start -->
		<div id="testimoni" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div
					class="section-title text-center position-relative pb-3 mb-4 mx-auto"
					style="max-width: 600px"
				>
					<h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
					<h1 class="mb-0">Serving the People of San Francisco</h1>
				</div>
				<div
					class="owl-carousel testimonial-carousel wow fadeInUp"
					data-wow-delay="0.6s"
				>
					<div class="testimonial-item bg-dark my-4">
						<div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
							<img
								class="img-fluid rounded"
								src="{{asset('/img/user-foto.jpg')}}"
								style="width: 60px; height: 60px"
							/>
							<div class="ps-4">
								<h4 class="text-primary mb-1">VOLVE</h4>
								<small class="text-uppercase">Another Satisfied Client</small>
							</div>
						</div>
						<div class="text-light pt-4 pb-5 px-5">
							Professional. Efficient. Personable.
						</div>
					</div>
					<div class="testimonial-item bg-dark my-4">
						<div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
							<img
								class="img-fluid rounded"
								src="{{asset('/img/user-foto.jpg')}}"
								style="width: 60px; height: 60px"
							/>
							<div class="ps-4">
								<h4 class="text-primary mb-1">SOVIX</h4>
								<small class="text-uppercase">Another Satisfied Client</small>
							</div>
						</div>
						<div class="text-light pt-4 pb-5 px-5">
							Everyone at ABP Law Firm is professional.
						</div>
					</div>
					<div class="testimonial-item bg-dark my-4">
						<div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
							<img
								class="img-fluid rounded"
								src="{{asset('/img/user-foto.jpg')}}"
								style="width: 60px; height: 60px"
							/>
							<div class="ps-4">
								<h4 class="text-primary mb-1">POLAR</h4>
								<small class="text-uppercase">Another Satisfied Client</small>
							</div>
						</div>
						<div class="text-light pt-4 pb-5 px-5">
							Great service and fast!
						</div>
					</div>
					<div class="testimonial-item bg-dark my-4">
						<div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
							<img
								class="img-fluid rounded"
								src="{{asset('/img/user-foto.jpg')}}"
								style="width: 60px; height: 60px"
							/>
							<div class="ps-4">
								<h4 class="text-primary mb-1">ITAKA</h4>
								<small class="text-uppercase">Another Satisfied Client</small>
							</div>
						</div>
						<div class="text-light pt-4 pb-5 px-5">
							You are in good hands with ABP Law Firm!
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial End -->

		<!-- Blog Start -->
		<div id="blog" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div
					class="section-title text-center position-relative pb-3 mb-5 mx-auto"
					style="max-width: 600px"
				>
					<h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
					<h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
				</div>
				<div class="row g-5">
					@foreach ($berita as $data)
					<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
						<div class="blog-item bg-dark rounded overflow-hidden">
							<div class="blog-img position-relative overflow-hidden">
								<img class="img-fluid" src="{{$data->gambar_berita ? asset('upload/' .$data->gambar_berita) : asset('/img/berita.png')}}" alt="" />
							</div>
							<div class="p-4">
								<div class="d-flex mb-3">
									<small class="me-3"
										><i class="far fa-user text-primary me-2"></i>{{ $data->users->name }}</small
									>
									<small
										><i class="far fa-calendar-alt text-primary me-2"></i>{{\Carbon\Carbon::parse($data->created_at)->format('d F Y')}}</small
									>
								</div>
								<h4 class="mb-3">{{$data->judul}}</h4>
								<p>
									{{Str::limit($data->konten, 90)}}
								</p>
								<a class="text-uppercase" href="/baca-berita/{{$data->slug}}"
									>Read More <i class="bi bi-arrow-right"></i
								></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Blog Start -->

		<!-- Contact Start -->
		<div id="contact" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container py-5">
				<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
					<h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
					<h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
				</div>
				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
							<div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
								<i class="fa fa-phone-alt text-white"></i>
							</div>
							<div class="ps-4">
								<h5 class="mb-2">Call to ask any question</h5>
								<h4 class="text-primary mb-0">(0254) 7926733</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
							<div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
								<i class="fa fa-envelope-open text-white"></i>
							</div>
							<div class="ps-4">
								<h5 class="mb-2">Email to get free quote</h5>
								<h4 class="text-primary mb-0">abplawfirm2020@gmail.com</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
							<div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
								<i class="fa fa-map-marker-alt text-white"></i>
							</div>
							<div class="ps-4">
								<h5 class="mb-2">Visit our office</h5>
								<h4 class="text-primary mb-0">Jl. Raya Pandeglang</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row g-5">
					<div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
						<form action="{{ route('send.email') }}" method="post">
							@csrf
							<div class="row g-3">
								<div class="col-md-6">
									<input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
									@error('name')
									<span class="input-control"><hr> {{ $message }} </span>
									@enderror
								</div>
								<div class="col-md-6">
									<input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
									@error('email')
                                	<span class="input-control"><hr> {{ $message }} </span>
                                	@enderror
								</div>
								<div class="col-12">
									<input type="text" name="subject" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
									@error('subject')
									<span class="input-control"><hr> {{ $message }} </span>
									@enderror
								</div>
								<div class="col-12">
									<textarea name="content" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
									@error('content')
									<span class="input-control"><hr> {{ $message }} </span>
									@enderror
								</div>
								<div class="col-12">
									<button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
						<iframe class="position-relative rounded w-100 h-100"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10809.378117557533!2d106.16283903372573!3d-6.155569645632776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42231e2cbd4cc7%3A0x2bcf6d08dc6a9652!2sJl.%20Raya%20Pandeglang%2C%20Karundang%2C%20Kec.%20Cipocok%20Jaya%2C%20Kota%20Serang%2C%20Banten!5e0!3m2!1sid!2sid!4v1657631138198!5m2!1sid!2sid"
							frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
							tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact End -->

		<!-- Footer Start -->
		<div
			class="container-fluid bg-dark text-light mt-5 wow fadeInUp"
			data-wow-delay="0.1s"
		>
			<div class="container">
				<div class="row gx-5">
					<div class="col-lg-12 col-md-6">
						<div class="row gx-5">
							<div class="col-lg-3 col-md-12 pt-5 mb-5">
								<div
									class="section-title section-title-sm position-relative pb-3 mb-4"
								>
									<h3 class="text-light mb-0">Get In Touch</h3>
								</div>
								<div class="d-flex mb-2">
									<i class="bi bi-geo-alt text-primary me-2"></i>
									<p class="mb-0">Jl. Raya Pandeglang, Karundang, Kec. Cipocok Jaya, Kota Serang, Banten 42126, Indonesia
                                        
                                        </p>
								</div>
								<div class="d-flex mb-2">
									<i class="bi bi-envelope-open text-primary me-2"></i>
									<p class="mb-0">abplawfirm2020@gmail.com</p>
								</div>
								<div class="d-flex mb-2">
									<i class="bi bi-telephone text-primary me-2"></i>
									<p class="mb-0">(0254) 7926733</p>
								</div>
								<div class="d-flex mt-4">
									<a class="btn btn-primary btn-square me-2" href="#"
										><i class="fab fa-linkedin-in fw-normal"></i
									></a>
									<a class="btn btn-primary btn-square" href="https://www.instagram.com/abp_lawfirm/"
										><i class="fab fa-instagram fw-normal"></i
									></a>
								</div>
							</div>
					
							<div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
								<div
									class="section-title section-title-sm position-relative pb-3 mb-4"
								>
									<h3 class="text-light mb-0">Popular Links</h3>
								</div>
								<div
									class="link-animated d-flex flex-column justify-content-start"
								>
									<a class="text-light mb-2" href=""
										><i class="bi bi-arrow-right text-primary me-2"></i>Home</a
									>
									<a class="text-light mb-2" href="#about"
										><i class="bi bi-arrow-right text-primary me-2"></i>About
										Us</a
									>
									<a class="text-light mb-2" href="#service"
										><i class="bi bi-arrow-right text-primary me-2"></i>Our
										Services</a
									>
									<a class="text-light" href="#contact"
										><i class="bi bi-arrow-right text-primary me-2"></i>Contact
										Us</a
									>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 pt-0 pt-lg-5 mb-5" wow slideInUp" data-wow-delay="0.6s">
								<div
									class="section-title section-title-sm position-relative pb-3 mb-4"
								>
									<h3 class="text-light mb-0">Visit Our Office</h3>
								</div>
								<iframe
									class="position-relative rounded w-100"
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10809.378117557533!2d106.16283903372573!3d-6.155569645632776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42231e2cbd4cc7%3A0x2bcf6d08dc6a9652!2sJl.%20Raya%20Pandeglang%2C%20Karundang%2C%20Kec.%20Cipocok%20Jaya%2C%20Kota%20Serang%2C%20Banten!5e0!3m2!1sid!2sid!4v1657631138198!5m2!1sid!2sid"
									frameborder="0"
									style="min-height: 250px; border: 0"
									allowfullscreen=""
									aria-hidden="false"
									tabindex="0"
								></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid text-white" style="background: #180A0A">
			<div class="container text-center">
				<div class="row justify-content-end">
					<div class="col-lg-12 col-md-12">
						<div
							class="d-flex align-items-center justify-content-center"
							style="height: 75px"
						>
							<p class="mb-0">
								&copy;
								<a class="text-white border-bottom" href="#">ABP Lawfirm</a>.
								All Rights Reserved
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"
			><i class="bi bi-arrow-up"></i
		></a>

		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="{{ asset('lib/wow/wow.min.js')}}"></script>
		<script src="{{ asset('lib/easing/easing.min.js')}}"></script>
		<script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
		<script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
		<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
		@include('sweetalert::alert')
		<!-- style switcher js -->
		<script src="{{ asset('js') }}/style-switcher.js"></script>

		<!-- Template Javascript -->
		<script src="{{ asset('js/main.js')}}"></script>
	</body>
</html>
