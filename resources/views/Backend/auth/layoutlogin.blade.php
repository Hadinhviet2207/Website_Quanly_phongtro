
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
          @include('Backend.auth.login')
          @include('Backend.auth.register')
        </div>
      </div>
      @include('Backend.auth.panels')
    </div>
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('sign-up-btn').click();
            });
        </script>
    @endif
    <script src="/Website_Quanly_phongtro/public/backend/app.js"></script>
  </body>
</html>