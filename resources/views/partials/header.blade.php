<nav class="navbar navbar-main d-xl-none navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" navbar-scroll="true">
    <div class="d-flex align-items-center bd-highlight mb-3 w-100 py-1 px-3">
      <div class="me-auto p-2 bd-highlight">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item d-xl-none fw-bold fs-5">Sistem Informasi Jadwal Kuliah</li>
        </ol>
      </div>
      <div class="p-2 bd-highlight d-xl-none ps-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </a>
      </div>
    </div>
      </ul>
    </div>
  </div>
  </nav>
<div class="p-4 
  @if(auth()->user())
    @if(auth()->user()->level=='admin') 
      {{"bg-header-admin"}}
    @else {{"bg-header"}} 
    @endif 
  @else {{"bg-header"}} 
  @endif" id="navbarBlur">
  <div class="mt-n22 px-4 container-fluid">
    <div class="row">
      <div class="d-flex justify-content-between align-items-center">
        <div class="mb-2 mb-lg-0 row w-100">
          <h5 class="col mb-0 text-white text-md flex-shrink-1">
            {{$header}} 
          </h5>
          @if (auth()->user())
            <h6 class="col mb-0 text-white text-md text-end fs-6">
              {{auth()->user()->name}} 
            </h6>
          @endif
        </div>
      </div>
    </div>
    {{-- <div class="mt-4 col-xl-3 col-lg-6 col-md-12 col-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="mb-0">
              Projects
            </h6>
            <p class="mb-0"><span classname="text-dark me-2">2</span> Completed</p>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</div>