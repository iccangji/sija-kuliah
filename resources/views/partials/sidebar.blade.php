<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start bg-gray-800 overflow-hidden" id="sidenav-main">
    {{-- <div class="sidenav-header">
      <h6 class="navbar-brand text-center font-weight-bold">
        @if(auth()->user())
          {{$user}}
        @endif
      </h6>
    </div> --}}
    {{-- <hr> --}}
    <img src="../assets/img/uho.png" class="mx-4 mt-4" alt="" width="80">
    <div class="mx-4 mt-2 text-white px-2 fs-6">Sistem Informasi<br>Jadwal Perkuliahan</div>
    <div class="collapse navbar-collapse w-auto mt-2" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'dasbor') {{'active' }} @endif" href="..">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="24px" height="24px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M 38 8 h -2 V 6 c 0 -1.2 -0.8 -2 -2 -2 s -2 0.8 -2 2 v 2 H 16 V 6 c 0 -1.2 -0.8 -2 -2 -2 s -2 0.8 -2 2 v 2 H 10 C 6.6 8 4 10.6 4 14 v 2 h 40 V 14 c 0 -3.4 -2.6 -6 -6 -6 z M 4 38 c 0 3.4 2.6 6 6 6 h 28 c 3.4 0 6 -2.6 6 -6 v -18 H 4 v 18 z m 30 -14 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m 0 8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m -10 -8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m 0 8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m -10 -8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m 0 8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z"></path>
                        <path class="color-background opacity-6" d="M 38 8 h -2 V 6 c 0 -1.2 -0.8 -2 -2 -2 s -2 0.8 -2 2 v 2 H 16 V 6 c 0 -1.2 -0.8 -2 -2 -2 s -2 0.8 -2 2 v 2 H 10 C 6.6 8 4 10.6 4 14 v 2 h 40 V 14 c 0 -3.4 -2.6 -6 -6 -6 z M 4 38 c 0 3.4 2.6 6 6 6 h 28 c 3.4 0 6 -2.6 6 -6 v -18 H 4 v 18 z m 30 -14 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m 0 8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m -10 -8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m 0 8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m -10 -8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z m 0 8 c 1.2 0 2 0.8 2 2 s -0.8 2 -2 2 s -2 -0.8 -2 -2 s 0.8 -2 2 -2 z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Jadwal</span>
          </a>
        </li>
        @if (!auth()->user())
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'senin') {{'active'}} @endif" href="../jadwal/1">
            <span class="nav-link-text ms-4">Senin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'selasa') {{'active'}} @endif" href="../jadwal/2">
            <span class="nav-link-text ms-4">Selasa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'rabu') {{'active'}} @endif" href="../jadwal/3">
            <span class="nav-link-text ms-4">Rabu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'kamis') {{'active'}} @endif" href="../jadwal/4">
            <span class="nav-link-text ms-4">Kamis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'jumat') {{'active'}} @endif" href="../jadwal/5">
            <span class="nav-link-text ms-4">Jumat</span>
          </a>
        </li>
        @else
        @if (auth()->user()->level!="admin")
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'senin') {{'active'}} @endif" href="../jadwal/1">
            <span class="nav-link-text ms-4">Senin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'selasa') {{'active'}} @endif" href="../jadwal/2">
            <span class="nav-link-text ms-4">Selasa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'rabu') {{'active'}} @endif" href="../jadwal/3">
            <span class="nav-link-text ms-4">Rabu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'kamis') {{'active'}} @endif" href="../jadwal/4">
            <span class="nav-link-text ms-4">Kamis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'jumat') {{'active'}} @endif" href="../jadwal/5">
            <span class="nav-link-text ms-4">Jumat</span>
          </a>
        </li>
        @endif
        @endif
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'mata-kuliah') {{'active'}} @endif" href="../mata-kuliah">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background opacity-6" d="M 9.9533 0 a 5.5296 5.5296 90 1 1 0 11.0592 a 5.5296 5.5296 90 1 1 0 -11.0592 z m 25.4362 0 a 5.5296 5.5296 90 1 1 0 11.0592 a 5.5296 5.5296 90 1 1 0 -11.0592 z M 0 20.6461 C 0 16.575 3.3039 13.271 7.3751 13.271 h 2.9514 c 1.099 0 2.1427 0.2419 3.0828 0.6705 c -0.0899 0.4977 -0.1313 1.0161 -0.1313 1.5414 c 0 2.6404 1.1612 5.0112 2.9929 6.6355 H 1.4723 C 0.6636 22.1184 0 21.4548 0 20.6461 z M 28.0143 22.1184 h -0.0484 c 1.8386 -1.6243 2.9929 -3.9951 2.9929 -6.6355 c 0 -0.5253 -0.0484 -1.0368 -0.1313 -1.5414 c 0.94 -0.4355 1.9837 -0.6705 3.0828 -0.6705 h 2.9514 c 4.0712 0 7.3751 3.3039 7.3751 7.3751 c 0 0.8156 -0.6636 1.4723 -1.4723 1.4723 H 28.0143 z M 15.4829 15.4829 a 6.6355 6.6355 90 1 1 13.271 0 a 6.6355 6.6355 90 1 1 -13.271 0 z m -6.6355 18.0611 c 0 -5.0872 4.1265 -9.2137 9.2137 -9.2137 h 8.1147 c 5.0872 0 9.2137 4.1265 9.2137 9.2137 c 0 1.0161 -0.8225 1.8455 -1.8455 1.8455 H 10.6929 c -1.0161 0 -1.8455 -0.8225 -1.8455 -1.8455 z"></path>
                        <path class="color-background opacity-6" d="M 9.9533 0 a 5.5296 5.5296 90 1 1 0 11.0592 a 5.5296 5.5296 90 1 1 0 -11.0592 z m 25.4362 0 a 5.5296 5.5296 90 1 1 0 11.0592 a 5.5296 5.5296 90 1 1 0 -11.0592 z M 0 20.6461 C 0 16.575 3.3039 13.271 7.3751 13.271 h 2.9514 c 1.099 0 2.1427 0.2419 3.0828 0.6705 c -0.0899 0.4977 -0.1313 1.0161 -0.1313 1.5414 c 0 2.6404 1.1612 5.0112 2.9929 6.6355 H 1.4723 C 0.6636 22.1184 0 21.4548 0 20.6461 z M 28.0143 22.1184 h -0.0484 c 1.8386 -1.6243 2.9929 -3.9951 2.9929 -6.6355 c 0 -0.5253 -0.0484 -1.0368 -0.1313 -1.5414 c 0.94 -0.4355 1.9837 -0.6705 3.0828 -0.6705 h 2.9514 c 4.0712 0 7.3751 3.3039 7.3751 7.3751 c 0 0.8156 -0.6636 1.4723 -1.4723 1.4723 H 28.0143 z M 15.4829 15.4829 a 6.6355 6.6355 90 1 1 13.271 0 a 6.6355 6.6355 90 1 1 -13.271 0 z m -6.6355 18.0611 c 0 -5.0872 4.1265 -9.2137 9.2137 -9.2137 h 8.1147 c 5.0872 0 9.2137 4.1265 9.2137 9.2137 c 0 1.0161 -0.8225 1.8455 -1.8455 1.8455 H 10.6929 c -1.0161 0 -1.8455 -0.8225 -1.8455 -1.8455 z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Mata Kuliah</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-400 @if($sidebar == 'pengajar') {{'active'}} @endif" href="../pengajar">
             <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-6" d="M 24 8 a 8 8 90 0 1 8 8 a 8 8 90 0 1 -8 8 a 8 8 90 0 1 -8 -8 a 8 8 90 0 1 8 -8 m 0 20 c 8.84 0 16 3.58 16 8 v 4 H 8 v -4 c 0 -4.42 7.16 -8 16 -8 Z"></path>
                        <path class="color-background opacity-6" d="M 24 8 a 8 8 90 0 1 8 8 a 8 8 90 0 1 -8 8 a 8 8 90 0 1 -8 -8 a 8 8 90 0 1 8 -8 m 0 20 c 8.84 0 16 3.58 16 8 v 4 H 8 v -4 c 0 -4.42 7.16 -8 16 -8 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Pengajar</span>
          </a>
        </li>
        @if(auth()->user())
        <li class="nav-item">
          <form action="/logout" method="post" class="nav-link text-gray-400d-flex justify-content-start">
            @csrf
            <button type="submit" class="bg-transparent border-0 p-0 me-2 d-flex align-items-center">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center d-flex align-items-center justify-content-center me-2">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-12" d="M 10 42 q -1.65 0 -2.826 -1.176 T 6 38 V 10 q 0 -1.65 1.176 -2.826 T 10 6 h 14 v 4 H 10 v 28 h 14 v 4 H 10 Z m 22 -8 l -2.75 -2.9 l 5.1 -5.1 H 18 v -4 h 16.35 l -5.1 -5.1 L 32 14 l 10 10 l -10 10 Z"></path>
                        <path class="color-background opacity-12" d="M 10 42 q -1.65 0 -2.826 -1.176 T 6 38 V 10 q 0 -1.65 1.176 -2.826 T 10 6 h 14 v 4 H 10 v 28 h 14 v 4 H 10 Z m 22 -8 l -2.75 -2.9 l 5.1 -5.1 H 18 v -4 h 16.35 l -5.1 -5.1 L 32 14 l 10 10 l -10 10 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1" style="color: #67748e">Keluar</span>
          </button>
          </form>
        </li>
        @else
        <li class="nav-item">
          <form action="/login" method="get" class="nav-link text-gray-400d-flex justify-content-start">
            <button type="submit" class="bg-transparent border-0 p-0 me-2 d-flex align-items-center">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center d-flex align-items-center justify-content-center me-2">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(453.000000, 454.000000)">
                        <path class="color-background opacity-12" d="M 10 42 q -1.65 0 -2.826 -1.176 T 6 38 V 10 q 0 -1.65 1.176 -2.826 T 10 6 h 14 v 4 H 10 v 28 h 14 v 4 H 10 Z m 22 -8 l -2.75 -2.9 l 5.1 -5.1 H 18 v -4 h 16.35 l -5.1 -5.1 L 32 14 l 10 10 l -10 10 Z"></path>
                        <path class="color-background opacity-12" d="M 10 42 q -1.65 0 -2.826 -1.176 T 6 38 V 10 q 0 -1.65 1.176 -2.826 T 10 6 h 14 v 4 H 10 v 28 h 14 v 4 H 10 Z m 22 -8 l -2.75 -2.9 l 5.1 -5.1 H 18 v -4 h 16.35 l -5.1 -5.1 L 32 14 l 10 10 l -10 10 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1" style="color: #67748e">Masuk</span>
          </button>
          </form>
        </li>
        @endif
        
      </ul>
    </div>
    <div class="copyright text-center text-xs text-muted mx-4 px-2 mb-2 position-absolute bottom-0">
      Teknik Informatika UHO <script>
        document.write(new Date().getFullYear())
      </script>
    </div>
</aside>