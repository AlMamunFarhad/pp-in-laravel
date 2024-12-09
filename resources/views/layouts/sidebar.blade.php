
    <aside>
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" role="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="navbarNav"
            aria-controls="navbarNav">
            <i class="bi bi-list"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">

            <div class="nav-img d-flex justify-content-center">
              <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/farhad.png') }}" class="img-fluid rounded-pill" alt="">
              </a>
            </div>
            <div class="author-name">
              <h3><a href="{{ route('home') }}">Farhad</a></h3>
            </div>
            <div class="social-link">
              <div class="nav-icon">
                <ul class="list-unstyled d-flex mb-0">
                  <li><a href="https://github.com/AlMamunFarhad" target="_blank" class="icon-hover"><i
                        class="bi bi-github"></i></a></li>
                  <li><a
                      href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"
                      target="_blank" class="icon-hover"><i class="bi bi-linkedin"></i></a></li>
                  <li><a href="https://www.facebook.com/profile.php?id=100009626361921" target="_blank"
                      class="icon-hover"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/almamunfarhad/" target="_blank" class="icon-hover"><i
                        class="bi bi-instagram"></i></a></li>
                  <li><a href="https://twitter.com/FarhadAlMamun11" target="_blank" class="icon-hover"><i
                        class="bi bi-twitter"></i></a></li>
                </ul>
                <hr class="lh-0">
              </div>

            </div>
            <ul class="navbar-nav flex-column nav-links text-break text-center">
              <li class="nav-item">
                <a class="nav-link menu-active" href="{{ route('home') }}"><i class="fa-solid fa-user"></i> ABOUT US</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('resume') }}"><i class="fa-solid fa-code"> </i>RESUME</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio') }}"><i class="fa-solid fa-diagram-project"></i>
                  PORTFOLIO</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}"><i class="fa-solid fa-comment"></i> CONTACT</a>
              </li>
              <hr>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-comment"></i> LOGIN</a>
              </li>
              <hr>
            </ul>
            <div class="nav-bottom w-100 d-flex justify-content-between align-items-end">
              <div class="dark-mode">
                <i class="bi bi-brightness-high mt-4 pt-1 ms-2" id="icon" onclick="toggleMode()"></i>
              </div>

              <div class="dropdown dropup">
                <button class="rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                  data-dismiss="modal">
                  <i class="bi bi-gear-wide nav-icon"></i>
                </button>
                <div class="theme-color">
                  <div class="dropdown-menu border-0">
                    <div class="customize-theme py-2">
                      <div class="color">
                        <h4>Theme Colors</h4>
                        <div class="choose-color">
                          <p class="color-1 active"></p>
                          <p class="color-2"></p>
                          <p class="color-3"></p>
                          <p class="color-4"></p>
                          <p class="color-5"></p>
                          <p class="color-6"></p>
                          <a class="btn rounded-pill fs-6 reset-btn d-flex" id="resetBtn">Clear</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </aside>
  