 <!-- Header Section Start -->

 <header class="horizontal-menu">
     <!-- Navbar one -->
     <nav class="navbar navbar-expand-lg shadow-sm custom_nav-one">
         <div class="container-fluid">
             <!-- kiri -->
             <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                 <li class="nav-item">
                     <a href="/">
                         <img class="img-fluid" src="assets/images/userpremium/logo/logo_putih.png" alt="PLN Icon Plus"
                             width="100" />
                     </a>

                 </li>
             </ul>

             <!-- kanan -->
             <ul class="navbar-nav navbar-nav-right mb-2 mb-lg-0 me-2">
                 <li class="nav-item nav-profile dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                         @auth
                             <span spanclass="nav-profile-name">{{ auth()->user()->name }} </span>
                         @endauth

                         <span>
                             <i class="bi bi-caret-down-fill"></i>
                         </span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end navbar-dropdown custom-dropdown"
                         aria-labelledby="profileDropdown">
                         <form action="logout" method="post">
                             @csrf
                             <button type="submit" class="dropdown-item btn btn-secondary"><i
                                     class="bi bi-box-arrow-left pe-2"></i>Log Out</button>
                         </form>
                     </div>
                 </li>
             </ul>
         </div>
     </nav>

     <!-- Navbar Two -->
     <nav class="navbar navbar-expand-lg custom_nav-menu">
         <div class="container-fluid">
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav m-auto mb-2 mb-lg-0 justify-content-end">
                     <li class="nav-item mx-4">
                         <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" aria-current="page"
                             href="home">Home</a>
                     </li>
                     <li class="nav-item mx-4">
                         <a class="nav-link {{ request()->is('internships') ? 'active' : '' }}" aria-current="page"
                             href="internships">Program PKL</a>
                     </li>
                     <li class="nav-item dropdown mx-4">
                         <a class="nav-link dropdown-toggle  {{ request()->is('guestTeacher') || request()->is('ukkExaminer') ? 'active' : '' }}"
                             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Guru & Penguji
                         </a>
                         <ul class="dropdown-menu">
                             <li>
                                 <a class="dropdown-item " href="guestTeacher">Guru Tamu</a>
                             </li>
                             <li>
                                 <hr class="dropdown-divider" />
                             </li>
                             <li>
                                 <a class="dropdown-item" href="ukkExaminer">Penguji UKK</a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item dropdown mx-4">
                         <a class="nav-link dropdown-toggle {{ request()->is('jobVacancy') || request()->is('internVacancy') ? 'active' : '' }}"
                             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Pengumuman
                         </a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="jobVacancy">Lowongan Kerja</a></li>
                             <li>
                                 <hr class="dropdown-divider" />
                             </li>
                             <li><a class="dropdown-item" href="internVacancy">Magang Di Bayar</a></li>
                         </ul>
                     </li>
                     {{-- pendaftaran --}}
                     <li class="nav-item dropdown mx-4">
                         <a class="nav-link dropdown-toggle {{ request()->is('pkl', 'pkl2', 'guruTamu', 'guruMagang', 'pengujiUKK') ? 'active' : '' }}"
                             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Pendaftaran
                         </a>
                         <ul class="dropdown-menu">
                             <li>
                                 <a class="dropdown-item " href="pkl">PKL</a>
                             </li>
                             <li>
                                 <hr class="dropdown-divider" />
                             </li>
                             <li>
                                 <a class="dropdown-item" href="guruMagang">Guru Magang</a>
                             </li>
                             <li>
                                 <hr class="dropdown-divider" />
                             </li>
                             <li>
                                 <a class="dropdown-item" href="guruTamu">Guru Tamu</a>
                             </li>
                             <li>
                                 <hr class="dropdown-divider" />
                             </li>
                             <li>
                                 <a class="dropdown-item" href="pengujiUKK">Penguji UKK</a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item mx-4">
                         <a class="nav-link {{ request()->is('eduTrip') ? 'active' : '' }} " href="eduTrip">Kunjungan
                             Industri</a>
                     </li>
                     <li class="nav-item mx-4">
                         <a class="nav-link {{ request()->is('additionalServices') ? 'active' : '' }}"
                             href="additionalServices">Layanan Penunjang</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
 </header>

 <!-- Header Section Start -->
