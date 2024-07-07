
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/Website_Quanly_phongtro/public/backend/style.css" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Đăng nhập & Đăng ký</title>
    <!-- Favicon -->
    <link href="/Website_Quanly_phongtro/public/backend/img/icon-deal.png" rel="icon">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" class="sign-in-form" action="{{ route('auth.login') }}" >
            @csrf
            <h2 class="title">ĐĂNG NHẬP</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Nhập tên đăng nhập" value="{{ old('name') }}">
                
            </div>
            @if ($errors->has('name'))
                    <span class="error-message">*{{ $errors->first('name') }}</span>
            @endif

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Nhập mật khẩu " />
            </div>
            @if ($errors->has('password'))
                    <span class="error-message">*{{ $errors->first('password') }}</span>
            @endif
            <a href="../home/index.php"><input type="submit" value="ĐĂNG NHẬP" class="btn solid" /></a>
            <p class="social-text"> Hoặc Đăng nhập bằng</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="POST" class="sign-up-form" action="{{ route('auth.signin') }}" >
            @csrf
            <h2 class="title">ĐĂNG KÝ</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Nhập tên đăng nhập" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Nhập Email" />
             
            </div>
            @if ($errors->has('email'))
                    <span class="error-message">*{{ $errors->first('email') }}</span>
              @endif
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Nhập mật khẩu" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="cpassword" placeholder="Xác nhận mật khẩu" />
            </div>
            <input type="submit" name="submit" class="btn" value="ĐĂNG KÝ" />
            <p class="social-text">Hoặc Đăng ký bằng </p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>BẠN LÀ NGƯỜI DÙNG MỚI ?</h3>
            <p>
              Nếu bạn chưa có tài khoản? Hãy đăng ký tài khoản ngay ở đây...
            </p>
            <button class="btn transparent" id="sign-up-btn">
              ĐĂNG KÝ
            </button>
          </div>
          <img src="/Website_Quanly_phongtro/public/backend/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>BẠN ĐÃ SỬ DỤNG HỆ THỐNG ?</h3>
            <p>
              Nếu bạn đã có tài khoản, bạn có thể đăng nhập ngay ở đây...
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng nhập
            </button>
          </div>
            <img src="/Website_Quanly_phongtro/public/backend/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="/Website_Quanly_phongtro/public/backend/app.js"></script>
  </body>
</html>