<form method="POST" class="sign-in-form" action="{{ route('auth.login') }}" >
            @csrf
            <h2 class="title">ĐĂNG NHẬP</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="numberphone" placeholder="Nhập số điện thoại" value="{{ old('numberphone') }}">
                
            </div>
            @if ($errors->has('numberphone'))
                    <span class="error-message">*{{ $errors->first('numberphone') }}</span>
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