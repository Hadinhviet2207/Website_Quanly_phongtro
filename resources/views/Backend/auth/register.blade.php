<form method="POST" class="sign-up-form" action="{{ route('auth.register') }}" >
            @csrf
            <h2 class="title">ĐĂNG KÝ</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Nhập Họ và Tên " />
            </div>
            @if ($errors->has('name'))
                <span class="error-message">*{{ $errors->first('name') }}</span>
            @endif
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" name="numberphone" placeholder="Nhập số điện thoại" />
          </div>
            @if ($errors->has('numberphone'))
                <span class="error-message">*{{ $errors->first('numberphone') }}</span>
            @endif
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Nhập mật khẩu" />
            </div>
            @if ($errors->has('password'))
                <span class="error-message">*{{ $errors->first('password') }}</span>
            @endif
            <div class="input-field">
              <i class="fas fa-check-circle"></i>
              <input type="password" name="cfpassword" placeholder="Xác nhận mật khẩu" />
          </div>
            @if ($errors->has('cfpassword'))
                <span class="error-message">*{{ $errors->first('cfpassword') }}</span>
            @endif

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
