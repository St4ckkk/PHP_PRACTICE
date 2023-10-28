  <html lang="en" data-bs-theme="light">
    <head>
      <script src="/docs/5.3/assets/js/color-modes.js"></script>

      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="generator" content="Hugo 0.118.2" />
      <title>Login</title>

      <link
        rel="canonical"
        href="https://getbootstrap.com/docs/5.3.2/examples/sign-in/"
      />

      <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
      />

      <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      />
      <meta name="theme-color" content="#712cf9" />

      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          width: 100%;
          height: 3rem;
          background-color: rgba(0, 0, 0, 0.1);
          border: solid rgba(0, 0, 0, 0.15);
          border-width: 1px 0;
          box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
            inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -0.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      main.form-signin {
        max-width: 400px;
        padding: 15px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
    </style>
  </head>
  <body
    class="d-flex justify-content-center h-100vh align-items-center py-4 bg-body-tertiary"
>
    <main class="form-signin w-100 m-auto">
      <form method="POST" action="./includes/_handleLogin.php">
        <h1 class="h3 mb-3 fw-bold text-center">Please sign in</h1>

        <div class="form-floating mb-2">
          <label for="floatingPassword">Email or Username</label>
          <input
            type="email"
            class="form-control"
            id="floatingInput"
            name="email"
            placeholder="name@example.com"
          />
          
        </div>
        <div class="form-floating">
          <label for="floatingPassword">Password</label>
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            name="pass"
            placeholder="Password"
          />
          
        </div>

        <div class="form-check text-start my-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="remember-me"
            id="flexCheckDefault"
          />
          <label class="form-check-label" for="flexCheckDefault">
            Remember me
          </label>
        </div>
        <button class="btn btn-primary w-100 py-2 mb-2" type="submit">
          Sign in
        </button>
        <p class="text-center">Don't have an <a href="registration.php" style="text-decoration: none;">Account?</a></p>
      </form>
    </main>
    <script
      src="/assets/5.3/dist/js/bootstrap.bundle.min.js"
      
    ></script>
  </body>
</html>
