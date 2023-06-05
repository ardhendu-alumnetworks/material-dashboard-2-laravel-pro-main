@props(['textColor'])
<footer class="footer position-absolute bottom-2 py-2 w-100">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-12 col-md-6 my-auto">
          <div class="{{ $textColor}} copyright text-center text-sm text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart" aria-hidden="true"></i> by
            <a href="https://www.creative-tim.com" class="{{ $textColor}} font-weight-bold" target="_blank">Creative Tim</a> & <a href="https://www.updivision.com" class="{{ $textColor}} font-weight-bold" target="_blank">UPDIVISION</a>
            for a better web.
          </div>
        </div>
        <div class="col-12 col-md-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link {{ $textColor}}" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.updivision.com" class="nav-link {{ $textColor}}" target="_blank">UPDIVISION</a>
            </li>
            
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link {{ $textColor}}" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link {{ $textColor}}" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 {{ $textColor}}" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>