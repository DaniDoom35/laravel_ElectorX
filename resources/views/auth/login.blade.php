<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    </head>

    <body>
        <section class="background-radial-gradient overflow-hidden">
            <style>
              .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                    hsl(218, 41%, 35%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%),
                  radial-gradient(1250px circle at 100% 100%,
                    hsl(218, 41%, 45%) 15%,
                    hsl(218, 41%, 30%) 35%,
                    hsl(218, 41%, 20%) 75%,
                    hsl(218, 41%, 19%) 80%,
                    transparent 100%);
              }

              #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
              }

              #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
              }

              .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
              }
            </style>

            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
              <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                  <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    The best offer <br />
                    <span style="color: hsl(218, 81%, 75%)">for your business</span>
                  </h1>
                  <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Temporibus, expedita iusto veniam atque, magni tempora mollitia
                    dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                    ab ipsum nisi dolorem modi. Quos?
                  </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                  <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                  <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                  <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">

                      <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="mb-4">
                          <h2 class="text-center">Login</h2>

                          <p class="text-center">Ingresa tus datos</p>

                        <!-- CURP input -->
                        <div class="mb-4">
                          <div class="form-outline">
                            <input type="text" name="curp" id="curp" class="form-control"
                            placeholder="Ingresa tu CURP"/>
                            <label class="form-label" for="curp">CURP</label>
                          </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="password" class="form-control"
                          placeholder="Ingresa tu contraseña" />
                          <label class="form-label" for="password">Contraseña</label>
                        </div>

                        <!-- Entrar button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                              Entrar
                            </button>
                          </div>

                        <!-- Olvidar Password -->

                       <!-- Forgot password link -->
                <div class="d-flex justify-content-center mb-3">
                    <a href="{{ route('password.request') }}" class="text-primary">Forgot password?</a>
                </div>

                <!-- Registro button -->
                <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2"> No estas registrado?</p>
                    <a href="{{route('register')}}" class="btn btn-secondary btn-block">
                        Registrarse
                    </a>
                </div>

                            </a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>
